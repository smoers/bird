<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 8/02/2018
 * Time: 12:56
 */

namespace ORG\BirdBundle\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends \FOS\UserBundle\Controller\SecurityController
{

    /**
     * Renders the login template with the given parameters. Overwrite this function in
     * an extended controller to provide additional data for the login template.
     *
     * @param array $data
     *
     * @return Response
     */
    protected function renderLogin(array $data)
    {
        return $this->render('ORGBirdBundle:Security:login.html.twig', $data);
    }

    public function changePasswordAction(Request $request)
    {
        if($request->isXmlHttpRequest() && $request->isMethod('POST')){
            $user = $this->getUser();
            $currentPassword = $request->get('old');
            $newPassword = $request->get('new');
            $password = $currentPassword.'{'.$user->getSalt().'}';
            if($password === $user->getPassword()){
                $user->setPlainPassword($newPassword);
                $userManager = $this->get('fos_user.user_manager');
                $userManager->updateUser($user);
                return new JsonResponse(array('return' => true));
            }
            return new JsonResponse(array('return' => false));
        }
    }

}