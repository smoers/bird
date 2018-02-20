<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 9/02/2018
 * Time: 12:22
 */

namespace ORG\BirdBundle\Controller;


use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

class ChangePasswordController extends \FOS\UserBundle\Controller\ChangePasswordController
{

    public function changeAction(Request $request)
    {
        var_dump($request->get('parameters'));
        $bag = new ParameterBag();
        exit;
        //var_dump($return->getContent());
        $formFactory = $this->get('fos_user.change_password.form.factory');

        $form = $formFactory->createForm();
        //$form->setData($user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            var_dump($request);
            exit;
        }
        $return = $this->changePasswordAction($request);
        return $return;
    }


}