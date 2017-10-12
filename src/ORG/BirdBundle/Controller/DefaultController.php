<?php

namespace ORG\BirdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ORGBirdBundle:Default:index.html.twig');
    }
}
