<?php

namespace AppBundle\Controller;

use AppBundle\Form\Model\Players;
use AppBundle\Form\Type\PlayersType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PlayersController extends Controller
{

    public function searchAction(Request $request)
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
            $type = $data->getType();
            $id = $user->getID();
            $playersToView = array();

            //TODO create query
            /*$qb = $em->createQueryBuilder();
            $qb->select('user')
                ->from('AppBundle:User', 'user')
                ->join('user.profile', 'profile')
                ->join('user.post', 'post')
                ->where($qb->expr()->between(
                    'profile.rank',
                    ':min',
                    ':max'
                ))
                ->andWhere('post.type = :type')
                ->andWhere('user.id != :id')
                ->setParameters(array('min' => $minimumRank, 'max' => $maximumRank, 'type' => $type,'id' => $user->getId()));
            $query = $qb->getQuery();
            $players = $query->getResult();*/

            $players = $this->getDoctrine()->getRepository('AppBundle:Player')->findPlayers($minimumRank, $maximumRank, $type, $id);

            foreach ($players as $player) {
                $username = $player->getUsername();
                $profileurl = $player->getProfile()->getSteamProfileurl();
                $rank = $player->getProfile()->getRank();
                $avatar = $player->getProfile()->getSteamAvatar();
                $views = $player->getPost()->getViews();
                $numberOfAnswers = $player->getPost()->getNumberOfAnswers();
                $note = $player->getPost()->getNote();

                $playersToView [] = array(
                    'username' => $username,
                    'profile_url' => $profileurl,
                    'rank' => $rank,
                    'avatar' => $avatar,
                    'views' => $views,
                    'numberOfAnswers' => $numberOfAnswers,
                    'note' => $note
                );
            }

            $playersToView = json_encode($playersToView);

            if ($request->isXmlHttpRequest()) {
                if (!empty($playersToView)) {
                    $array = array('status' => 200, 'message' => 'Getting players', 'players' => $playersToView);
                } else {
                    $array = array('status' => 404, 'message' => 'No players to show');
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