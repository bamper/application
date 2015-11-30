<?php

namespace AppBundle\Controller;

use AppBundle\Form\Model\Players;
use AppBundle\Form\Type\PlayersType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
            $gameType = $data->getGameType();

            $playersToView = array();

           $qb = $em->createQueryBuilder();
            $qb->select('u')
                ->from('AppBundle:User', 'u')
                // spell out your join condition
                ->join('u.profile', 'p')
                ->join('u.announcement', 'a')
                ->where($qb->expr()->between(
                    'p.rank',
                    ':min',
                    ':max'
                ))
                ->andWhere('u.id != :id')
                ->setParameters(array('min' => $minimumRank, 'max' => $maximumRank, 'id' => $user->getId()));

            $query = $qb->getQuery();
            $players = $query->getResult();

            foreach ($players as $player) {
                $player->getProfile()->getProfileData();
                $playersToView [] = $player;
            }

            if (!empty($playersToView)) {
                return $this->render(
                    'AppBundle:Players:show.html.twig', array(
                        'players' => $playersToView,
                        'form' => $form->createView()
                    )
                );
            } else {
                return $this->render('AppBundle:Players:show.html.twig', array(
                    'form' => $form->createView()
                ));
            }
        }

        return $this->render('AppBundle:Players:show.html.twig', array(
            'form' => $form->createView()
        ));
    }

}