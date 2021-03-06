<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 8/02/2018
 * Time: 12:56
 */

namespace ORG\BirdBundle\Controller;


use ORG\BirdBundle\Form\UserType;
use ORG\BirdBundle\Model\Menu\MenuDisabledTwig;
use ORG\BirdBundle\Entity\Security\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ContainerInterface;

class SecurityController extends \FOS\UserBundle\Controller\SecurityController
{
    protected $login;

    public function setContainer(ContainerInterface $container = null)
    {
        parent::setContainer($container);
        $user = $this->getUser();
        if($user !== null) {
            $this->login = array('loginAs' => $user->getLastname() . ", " . $user->getFirstname(), 'attributes' => $user->getAttributes(),);
        }
    }

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

    /**
     * @param Request $request
     * @return JsonResponse
     */
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

    /**
     * Permet d'afficher le profil de l'utilisateur
     * @return mixed
     */
    public function showProfileAction()
    {
        //gestion des accès au menu
        $menuDisabledTwig = new MenuDisabledTwig();
        $menuDisabledTwig->setDisabled(array(
            'menu_author_add',
            'menu_author_edit',
            'menu_author_delete',
            'menu_cycle_add',
            'menu_cycle_edit',
            'menu_cycle_delete',
            'menu_book_add',
            'menu_book_edit',
            'menu_book_delete'
        ));
        //utilisateur
        $user = $this->getUser();

        return $this->render('ORGBirdBundle:Security:user_profile.html.twig', array(
            'menudisabled' => $menuDisabledTwig,
            'user' => $user,
            'loginas' => $this->login['loginAs'],
            'title' => 'security.profile.title.show'
        ));
    }

    /**
     * Permet d'éditer un profil
     * @param Request $request
     * @return mixed
     */
    public  function editProfileAction(Request $request)
    {
        //gestion des accès au menu
        $menuDisabledTwig = new MenuDisabledTwig();
        $menuDisabledTwig->setDisabled(array(
            'menu_author_add',
            'menu_author_edit',
            'menu_author_delete',
            'menu_cycle_add',
            'menu_cycle_edit',
            'menu_cycle_delete',
            'menu_book_add',
            'menu_book_edit',
            'menu_book_delete'
        ));
        //recupere les valeurs des choices
        $attributes_choices = $this->getParameter('attributes');

        //utilisateur
        $user = $this->getUser();
        //form
        $form = $this->get('form.factory')->create(UserType::class,$user, array('attributes_choices' => $attributes_choices));
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isValid()){
                $trans = $this->get('translator');
                //var_dump($user->getAttributes());exit;
                $userManager = $this->get('fos_user.user_manager');
                $userManager->updateUser($user);
                $request->getSession()->getFlashBag()->add('success',$trans->trans('security.profile.edit.success'));
                //Défini la variable de session avec la nouvelle valeur de la langue
                $request->getSession()->set('language',$user->getAttributes()['language']);
                return $this->redirectToRoute('bird_homepage');
            }
        }
        return $this->render('ORGBirdBundle:Security:edit_user_profile.html.twig', array(
            'form' => $form->createView(),
            'menudisabled' => $menuDisabledTwig,
            'title' => 'security.profile.title.edit',
            'loginas' => $this->login['loginAs'],
            ));
    }


    public function newProfileAction(Request $request)
    {
        //gestion des accès au menu
        $menuDisabledTwig = new MenuDisabledTwig();
        $menuDisabledTwig->setDisabled(array(
            'menu_author_add',
            'menu_author_edit',
            'menu_author_delete',
            'menu_cycle_add',
            'menu_cycle_edit',
            'menu_cycle_delete',
            'menu_book_add',
            'menu_book_edit',
            'menu_book_delete'
        ));
        $attributes_default = $this->getParameter('attributes_default');
        $attributes_choices = $this->getParameter('attributes');
        //Nouvel utilisateur
        $user = new User();
        $user->setAttributes($attributes_default);
        $user->setEnabled(true);

        $form = $this->get('form.factory')->create(UserType::class,$user,array(
            'attributes_choices' => $attributes_choices,
            'admin' => true,
            'roles_list' => $this->retrieveRoles(),
        ));

        if($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $trans = $this->get('translator');
                $userManager = $this->get('fos_user.user_manager');
                $userManager->updateUser($user);
                $request->getSession()->getFlashBag()->add('success',$trans->trans('security.profile.new.success'));           }
        }
        return $this->render('ORGBirdBundle:Security:edit_user_profile.html.twig', array(
            'form' => $form->createView(),
            'menudisabled' => $menuDisabledTwig,
            'title' => 'security.profile.title.new',
            'loginas' => $this->login['loginAs'],
            'admin' => true,
        ));
    }

    /**
     * Retourne sans hiérarchie la liste de tous les roles disponibles au niveau du firewall
     * @return array
     */
    private function retrieveRoles()
    {
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        foreach ($hierarchy as $key => $value) {
            if(!array_key_exists($key, $roles)){
                $roles[$key] = $key;
            }
            array_walk_recursive($value, function ($role) use (&$roles) {
                if(!array_key_exists($role, $roles)) {
                    $roles[$role] = $role;
                }
            });
        }
        return $roles;
    }


}