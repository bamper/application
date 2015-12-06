<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\PostType;

class PostController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction()
    {
        return $this->render('AppBundle:Post:show.html.twig');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request)
    {
        $user = $this->getUser();

        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new PostType());
        $form->handleRequest($request);

        if ($form->isValid())
        {
            $data = $form->getData();
            $post = new Post();
            $post->setNote($data->getNote());

            $em->persist($post);
            $user->setPost($post);
            $em->flush();

            return $this->render('AppBundle:Post:show.html.twig');
        }

        return $this->render('AppBundle:Post:create.html.twig', array(
            'form' => $form->createView()
        ));
    }

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
            $gameType = $data->getGameType();

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