<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\PostType;
use Symfony\Component\HttpFoundation\JsonResponse;

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

        /**
         * If user already created a post redirect to edit page
         */
        if ($user->getPost() == null)
        {
            $em = $this->getDoctrine()->getManager();

            $form = $this->createForm(new PostType());
            $form->handleRequest($request);

            if ($form->isValid())
            {
                $data = $form->getData();
                $post = new Post();
                $post->setNote($data->getNote());
                $post->setType($data->getType());

                $em->persist($post);
                $user->setPost($post);
                $em->flush();

                if ($request->isXmlHttpRequest()) {
                    $array = array('status' => 200, 'message' => 'Added');
                    $response = new JsonResponse($array);

                    return $response;
                }
            } else {
                if ($request->isXmlHttpRequest())
                {
                    $errors = $this->get('form.errorMessages')->getErrorMessages($form);
                    $array = array('status' => 400, 'errors' => $errors);
                    $response = new JsonResponse($array);

                    return $response;
                }
            }
            return $this->render('AppBundle:Post:create.html.twig', array(
                'form' => $form->createView()
            ));
        } else {
            return $this->redirectToRoute("dashboard_post_edit");
        }
    }

    public function editAction(Request $request)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw $this->createAccessDeniedException();
        }

        $user = $this->getUser();
        $post = $user->getPost();

        $form = $this->createForm(new PostType(), $post);
        $form->handleRequest($request);

        if($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $data = $form->getData();
            $post->setNote($data->getNote());
            $post->setType($data->getType());

            $em->flush();

            if ($request->isXmlHttpRequest()) {
                $array = array('status' => 200, 'message' => 'Edited');
                $response = new JsonResponse($array);

                return $response;
            }
        }

        return $this->render('AppBundle:Post:show.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteAction($id)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Post');

        $post = $repository->find($id);

        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute('dashboard');
    }
}