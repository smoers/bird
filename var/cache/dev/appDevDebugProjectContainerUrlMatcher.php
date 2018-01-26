<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/js')) {
            // _assetic_8c58077
            if ('/js/8c58077.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8c58077',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8c58077',);
            }

            // _assetic_8c58077_0
            if ('/js/8c58077_mainmenu_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8c58077',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8c58077_0',);
            }

            // _assetic_0219d5b
            if ('/js/0219d5b.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0219d5b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0219d5b',);
            }

            // _assetic_0219d5b_0
            if ('/js/0219d5b_main_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0219d5b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0219d5b_0',);
            }

            // _assetic_b6fbdad
            if ('/js/b6fbdad.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b6fbdad',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b6fbdad',);
            }

            // _assetic_b6fbdad_0
            if ('/js/b6fbdad_bookForm_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b6fbdad',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b6fbdad_0',);
            }

            // _assetic_27ce736
            if ('/js/27ce736.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '27ce736',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_27ce736',);
            }

            // _assetic_27ce736_0
            if ('/js/27ce736_authorForm_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '27ce736',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_27ce736_0',);
            }

            // _assetic_9b5c281
            if ('/js/9b5c281.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9b5c281',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9b5c281',);
            }

            // _assetic_9b5c281_0
            if ('/js/9b5c281_Modal.class_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9b5c281',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9b5c281_0',);
            }

        }

        elseif (0 === strpos($pathinfo, '/images')) {
            if (0 === strpos($pathinfo, '/images/c')) {
                // _assetic_c73a5ab
                if ('/images/c73a5ab.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c73a5ab',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_c73a5ab',);
                }

                // _assetic_c73a5ab_0
                if ('/images/c73a5ab_logo_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c73a5ab',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_c73a5ab_0',);
                }

                // _assetic_c39ed1e
                if ('/images/c39ed1e.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c39ed1e',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_c39ed1e',);
                }

                // _assetic_c39ed1e_0
                if ('/images/c39ed1e_logo-cloud-blue_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c39ed1e',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_c39ed1e_0',);
                }

                // _assetic_cd31cf2
                if ('/images/cd31cf2.jpg' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cd31cf2',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_cd31cf2',);
                }

                // _assetic_cd31cf2_0
                if ('/images/cd31cf2_blue-sky_1.jpg' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cd31cf2',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_cd31cf2_0',);
                }

            }

            // _assetic_f1158d4
            if ('/images/f1158d4.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f1158d4',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_f1158d4',);
            }

            // _assetic_f1158d4_0
            if ('/images/f1158d4_default-book_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f1158d4',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_f1158d4_0',);
            }

            // _assetic_3462ab5
            if ('/images/3462ab5.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3462ab5',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_3462ab5',);
            }

            // _assetic_3462ab5_0
            if ('/images/3462ab5_default-author_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3462ab5',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_3462ab5_0',);
            }

        }

        // _assetic_602a79f
        if ('/css/602a79f.css' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '602a79f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_602a79f',);
        }

        // _assetic_602a79f_0
        if ('/css/602a79f_bird_1.css' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '602a79f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_602a79f_0',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // bird_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ORG\\BirdBundle\\Controller\\MainController::indexAction',  '_route' => 'bird_homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'bird_homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/a')) {
            // bird_ajax
            if ('/ajax' === $pathinfo) {
                return array (  '_controller' => 'ORG\\BirdBundle\\Controller\\AjaxController::ajaxAction',  '_route' => 'bird_ajax',);
            }

            if (0 === strpos($pathinfo, '/ajax/grid')) {
                // bird_dashboard_ajax_authors
                if ('/ajax/grid/authors' === $pathinfo) {
                    return array (  '_controller' => 'ORG\\BirdBundle\\Controller\\MainController::gridAuthorsAction',  '_route' => 'bird_dashboard_ajax_authors',);
                }

                // bird_dashboard_ajax_cycles
                if ('/ajax/grid/cycles' === $pathinfo) {
                    return array (  '_controller' => 'ORG\\BirdBundle\\Controller\\MainController::gridCyclesAction',  '_route' => 'bird_dashboard_ajax_cycles',);
                }

                // bird_dashboard_ajax_books
                if ('/ajax/grid/books' === $pathinfo) {
                    return array (  '_controller' => 'ORG\\BirdBundle\\Controller\\MainController::gridBooksAction',  '_route' => 'bird_dashboard_ajax_books',);
                }

            }

            elseif (0 === strpos($pathinfo, '/author')) {
                // bird_author_add
                if ('/author/add' === $pathinfo) {
                    return array (  '_controller' => 'ORG\\BirdBundle\\Controller\\AuthorController::addAction',  '_route' => 'bird_author_add',);
                }

                // bird_author_ajax
                if ('/author/ajax' === $pathinfo) {
                    return array (  '_controller' => 'ORG\\BirdBundle\\Controller\\AuthorController::ajaxAction',  '_route' => 'bird_author_ajax',);
                }

                // bird_author_edit
                if (0 === strpos($pathinfo, '/author/edit') && preg_match('#^/author/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bird_author_edit')), array (  '_controller' => 'ORG\\BirdBundle\\Controller\\AuthorController::editAction',));
                }

            }

        }

        // bird_book_add
        if (0 === strpos($pathinfo, '/book/add') && preg_match('#^/book/add/(?P<idAuthor>[^/]++)(?:/(?P<isCycle>\\w+)(?:/(?P<isNew>\\w+))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bird_book_add')), array (  '_controller' => 'ORG\\BirdBundle\\Controller\\BookController::addBookAction',  'isCycle' => false,  'isNew' => true,));
        }

        // bird_book_edit
        if (0 === strpos($pathinfo, '/book/edit') && preg_match('#^/book/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bird_book_edit')), array (  '_controller' => 'ORG\\BirdBundle\\Controller\\BookController::editbookAction',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'fos_user_profile_show'));
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'fos_user_registration_register'));
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ('/group/list' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_group_list;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ('/group/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_group_new;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }
            not_fos_user_group_new:

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupName>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_group_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',));
            }
            not_fos_user_group_edit:

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupName>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
