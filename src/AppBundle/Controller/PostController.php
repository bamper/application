<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\PostType;

class PostController extends Controller
{

    public function showAction()
    {
        return $this->render('AppBundle:Post:show.html.twig');
    }

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


}