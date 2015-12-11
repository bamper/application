<?php

namespace AppBundle\Controller;

use AppBundle\Form\Model\Players;
use AppBundle\Form\Type\PlayersType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class PlayersController extends Controller
{

    public function showAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw $this->createAccessDeniedException();
        }

        $form = $this->createForm(new PlayersType(), new Players());
        $form->handleRequest($request);

        if($form->isValid())
        {
            $data = $form->getData();
            $minimumRank = $data->getMinimumRank();
            $maximumRank = $data->getMaximumRank();
            $type = $data->getGameType();
            $playersToView = array();

            $qb = $em->createQueryBuilder();
            $qb->select('u')
                ->from('AppBundle:User', 'u')
                // spell out your join condition
                ->join('u.profile', 'p')
                ->join('u.post', 'a')
                ->where($qb->expr()->between(
                    'p.rank',
                    ':min',
                    ':max'
                ))
                ->andWhere('type == :type')
                ->andWhere('u.id != :id')
                ->setParameters(array('min' => $minimumRank, 'max' => $maximumRank, 'type' => $type,'id' => $user->getId()));

            $query = $qb->getQuery();
            $players = $query->getResult();

            foreach ($players as $player) {
                $player->getProfile()->getProfileData();
                $playersToView [] = $player;
            }

            if ($request->isXmlHttpRequest()) {
                if (!empty($playersToView)) {
                    $array = array('status' => 200, 'players' => $playersToView);
                } else {
                    $array = array('status' => 200, 'messages' => '0');
                }

                $response = new JsonResponse($array);

                return $response;
            }
        }

        return $this->render('AppBundle:Players:show.html.twig', array(
            'form' => $form->createView()
        ));
    }
}