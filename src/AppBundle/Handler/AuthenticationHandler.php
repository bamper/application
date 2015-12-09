<?php

namespace AppBundle\Handler;

use Carbon\Carbon;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;

class AuthenticationHandler extends ContainerAware implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface
{
    private $router;
    private $session;

    public function __construct(RouterInterface $router, Session $session)
    {
        $this->router = $router;
        $this->session = $session;
    }


    /**
     * @param Request $request
     * @param TokenInterface $token
     * @return JsonResponse|RedirectResponse
     */
    public function onAuthenticationSuccess( Request $request, TokenInterface $token )
    {
        /**
         * Sets last User login time
         */
        $token->getUser()->setLastLogin(Carbon::now());
        if ( $request->isXmlHttpRequest() ) {
            $array = array( 'success' => true );
            $response = new JsonResponse(  $array  );
            /*$response->headers->set( 'Content-Type', 'application/json' );*/

            return $response;

        } else {

            if ( $this->session->get('_security.main.target_path' ) ) {

                $url = $this->session->get( '_security.main.target_path' );

            } else {

                $url = $this->router->generate( 'pages_index' );

            } // end if

            return new RedirectResponse( $url );

        }
    }

    /**
     * @param Request $request
     * @param AuthenticationException $exception
     * @return JsonResponse|RedirectResponse
     */
    public function onAuthenticationFailure( Request $request, AuthenticationException $exception )
    {
        // if AJAX login
        if ( $request->isXmlHttpRequest() ) {

            $array = array( 'success' => false, 'message' => $exception->getMessage() ); // data to return via JSON
            $response = new JsonResponse( $array  );
            $response->headers->set( 'Content-Type', 'application/json' );

            return $response;

            // if form login
        } else {

            // set authentication exception to session
            $request->getSession()->set(SecurityContextInterface::AUTHENTICATION_ERROR, $exception);

            return new RedirectResponse( $this->router->generate( 'login_route' ) );
        }
    }
}