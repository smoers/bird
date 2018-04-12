<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 5/04/2018
 * Time: 12:25
 */

namespace ORG\BirdBundle\Controller;


use ORG\BirdBundle\Model\InternetParser\ParserGoogleApis;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

class InternetParserController extends Controller
{
    protected $login;

    public function setContainer(ContainerInterface $container = null)
    {
        parent::setContainer($container);
        $user = $this->getUser();
        $this->login = array(
            'loginAs' => $user->getLastname().", ".$user->getFirstname(),
            'attributes' => $user->getAttributes(),
        );
    }

    public function isbnSearchAction(Request $request, $isbn)
    {
        $google = new ParserGoogleApis($this->getParameter('parser_config_google_apis'));
        $google->parse($isbn);
    }

}