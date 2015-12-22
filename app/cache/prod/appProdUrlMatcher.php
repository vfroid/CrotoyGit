<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/blog')) {
            // vf_blog_accueil
            if ($pathinfo === '/blog/accueil') {
                return array (  '_controller' => 'VF\\BlogBundle\\Controller\\BlogController::accueilAction',  '_route' => 'vf_blog_accueil',);
            }

            // vf_blog_menu
            if ($pathinfo === '/blog/menu') {
                return array (  '_controller' => 'VF\\BlogBundle\\Controller\\BlogController::menuAction',  '_route' => 'vf_blog_menu',);
            }

            // vf_blog_listearticles
            if ($pathinfo === '/blog/listearticles') {
                return array (  '_controller' => 'VF\\BlogBundle\\Controller\\BlogController::listearticlesAction',  '_route' => 'vf_blog_listearticles',);
            }

            // vf_blog_derniers
            if ($pathinfo === '/blog/derniers') {
                return array (  '_controller' => 'VF\\BlogBundle\\Controller\\BlogController::derniersAction',  '_route' => 'vf_blog_derniers',);
            }

            // vf_blog_tag
            if ($pathinfo === '/blog/tag') {
                return array (  '_controller' => 'VF\\BlogBundle\\Controller\\BlogController::tagAction',  '_route' => 'vf_blog_tag',);
            }

            // vf_blog_etat
            if ($pathinfo === '/blog/etat') {
                return array (  '_controller' => 'VF\\BlogBundle\\Controller\\BlogController::etatAction',  '_route' => 'vf_blog_etat',);
            }

            // vf_blog_statuer
            if ($pathinfo === '/blog/statuer') {
                return array (  '_controller' => 'VF\\BlogBundle\\Controller\\BlogController::statuerAction',  '_route' => 'vf_blog_statuer',);
            }

        }

        if (0 === strpos($pathinfo, '/article')) {
            // vf_article_voir
            if (0 === strpos($pathinfo, '/article/voir') && preg_match('#^/article/voir/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_article_voir')), array (  '_controller' => 'VF\\BlogBundle\\Controller\\ArticleController::voirAction',));
            }

            // vf_article_add
            if ($pathinfo === '/article/add') {
                return array (  '_controller' => 'VF\\BlogBundle\\Controller\\ArticleController::addAction',  '_route' => 'vf_article_add',);
            }

            // vf_article_edit
            if (0 === strpos($pathinfo, '/article/edit') && preg_match('#^/article/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_article_edit')), array (  '_controller' => 'VF\\BlogBundle\\Controller\\ArticleController::editAction',));
            }

            // vf_article_delete
            if (0 === strpos($pathinfo, '/article/delete') && preg_match('#^/article/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_article_delete')), array (  '_controller' => 'VF\\BlogBundle\\Controller\\ArticleController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/commentaire')) {
            // vf_commentaire_voir
            if (0 === strpos($pathinfo, '/commentaire/voir') && preg_match('#^/commentaire/voir/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_commentaire_voir')), array (  '_controller' => 'VF\\BlogBundle\\Controller\\CommentaireController::voirAction',));
            }

            // vf_commentaire_add
            if (0 === strpos($pathinfo, '/commentaire/add') && preg_match('#^/commentaire/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_commentaire_add')), array (  '_controller' => 'VF\\BlogBundle\\Controller\\CommentaireController::addAction',));
            }

            // vf_commentaire_edit
            if (0 === strpos($pathinfo, '/commentaire/edit') && preg_match('#^/commentaire/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_commentaire_edit')), array (  '_controller' => 'VF\\BlogBundle\\Controller\\CommentaireController::editAction',));
            }

            // vf_commentaire_delete
            if (0 === strpos($pathinfo, '/commentaire/delete') && preg_match('#^/commentaire/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_commentaire_delete')), array (  '_controller' => 'VF\\BlogBundle\\Controller\\CommentaireController::deleteAction',));
            }

            // vf_commentaire_lire
            if (0 === strpos($pathinfo, '/commentaire/lire') && preg_match('#^/commentaire/lire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_commentaire_lire')), array (  '_controller' => 'VF\\BlogBundle\\Controller\\CommentaireController::lireAction',));
            }

        }

        if (0 === strpos($pathinfo, '/booking')) {
            // vf_booking_book
            if ($pathinfo === '/booking/book') {
                return array (  '_controller' => 'VF\\BookingBundle\\Controller\\BookingController::bookAction',  '_route' => 'vf_booking_book',);
            }

            if (0 === strpos($pathinfo, '/booking/ca')) {
                // vf_booking_calendrier
                if ($pathinfo === '/booking/calendrier') {
                    return array (  '_controller' => 'VF\\BookingBundle\\Controller\\BookingController::calendrierAction',  '_route' => 'vf_booking_calendrier',);
                }

                // vf_booking_capter
                if ($pathinfo === '/booking/capter') {
                    return array (  '_controller' => 'VF\\BookingBundle\\Controller\\BookingController::capterAction',  '_route' => 'vf_booking_capter',);
                }

            }

        }

        // vf_core_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vf_core_homepage');
            }

            return array (  '_controller' => 'VF\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'vf_core_homepage',);
        }

        // vf_user_menu
        if ($pathinfo === '/user/menu') {
            return array (  '_controller' => 'VF\\UserBundle\\Controller\\UserController::menuAction',  '_route' => 'vf_user_menu',);
        }

        // vf_crotoy_accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\CrotoyController::accueilAction',  '_route' => 'vf_crotoy_accueil',);
        }

        // vf_crotoy_menu
        if ($pathinfo === '/menu') {
            return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\CrotoyController::menuAction',  '_route' => 'vf_crotoy_menu',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // vf_crotoy_photos
            if ($pathinfo === '/photos') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\CrotoyController::photosAction',  '_route' => 'vf_crotoy_photos',);
            }

            if (0 === strpos($pathinfo, '/personne')) {
                // vf_personne_locataires
                if ($pathinfo === '/personne/locataires') {
                    return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\PersonneController::locatairesAction',  '_route' => 'vf_personne_locataires',);
                }

                // vf_personne_recherche
                if ($pathinfo === '/personne/recherche') {
                    return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\PersonneController::rechercheAction',  '_route' => 'vf_personne_recherche',);
                }

                // vf_personne_voir
                if (0 === strpos($pathinfo, '/personne/voir') && preg_match('#^/personne/voir/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_personne_voir')), array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\PersonneController::voirAction',));
                }

                // vf_personne_add
                if ($pathinfo === '/personne/add') {
                    return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\PersonneController::addAction',  '_route' => 'vf_personne_add',);
                }

                // vf_personne_edit
                if (0 === strpos($pathinfo, '/personne/edit') && preg_match('#^/personne/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_personne_edit')), array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\PersonneController::editAction',));
                }

                // vf_personne_delete
                if (0 === strpos($pathinfo, '/personne/delete') && preg_match('#^/personne/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_personne_delete')), array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\PersonneController::deleteAction',));
                }

                // vf_personne_menu
                if ($pathinfo === '/personne/menu') {
                    return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\PersonneController::menuAction',  '_route' => 'vf_personne_menu',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/reservation')) {
            // vf_reservation_edit
            if (0 === strpos($pathinfo, '/reservation/edit') && preg_match('#^/reservation/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_reservation_edit')), array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\ReservationController::editAction',));
            }

            // vf_reservation_add
            if ($pathinfo === '/reservation/add') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\ReservationController::addAction',  '_route' => 'vf_reservation_add',);
            }

            // vf_reservation_delete
            if (0 === strpos($pathinfo, '/reservation/delete') && preg_match('#^/reservation/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_reservation_delete')), array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\ReservationController::deleteAction',));
            }

            // vf_reservation_toutes
            if ($pathinfo === '/reservation/toutes') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\ReservationController::toutesAction',  '_route' => 'vf_reservation_toutes',);
            }

            // vf_reservation_recherche
            if ($pathinfo === '/reservation/recherche') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\ReservationController::rechercheAction',  '_route' => 'vf_reservation_recherche',);
            }

            // vf_reservation_addinvite
            if (0 === strpos($pathinfo, '/reservation/addinvite') && preg_match('#^/reservation/addinvite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_reservation_addinvite')), array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\ReservationController::addinviteAction',));
            }

            // vf_reservation_menu
            if ($pathinfo === '/reservation/menu') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\ReservationController::menuAction',  '_route' => 'vf_reservation_menu',);
            }

        }

        if (0 === strpos($pathinfo, '/proprietaire')) {
            // vf_proprietaire_creesejourpourinvite
            if (0 === strpos($pathinfo, '/proprietaire/creesejourpourinvite') && preg_match('#^/proprietaire/creesejourpourinvite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vf_proprietaire_creesejourpourinvite')), array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\ProprietaireController::creesejourpourinviteAction',));
            }

            // vf_proprietaire_recherche
            if ($pathinfo === '/proprietaire/recherche') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\ProprietaireController::rechercheAction',  '_route' => 'vf_proprietaire_recherche',);
            }

            // vf_proprietaire_accueil
            if ($pathinfo === '/proprietaire/accueil') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\ProprietaireController::accueilAction',  '_route' => 'vf_proprietaire_accueil',);
            }

            // vf_proprietaire_menu
            if ($pathinfo === '/proprietaire/menu') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\ProprietaireController::menuAction',  '_route' => 'vf_proprietaire_menu',);
            }

        }

        if (0 === strpos($pathinfo, '/voyager')) {
            // vf_voyager_menu
            if ($pathinfo === '/voyager/menu') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\VoyagerController::menuAction',  '_route' => 'vf_voyager_menu',);
            }

            // vf_voyager_transports
            if ($pathinfo === '/voyager/transports') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\VoyagerController::transportsAction',  '_route' => 'vf_voyager_transports',);
            }

            // vf_voyager_visiter
            if ($pathinfo === '/voyager/visiter') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\VoyagerController::visiterAction',  '_route' => 'vf_voyager_visiter',);
            }

        }

        if (0 === strpos($pathinfo, '/habiter')) {
            // vf_habiter_accueil
            if ($pathinfo === '/habiter/accueil') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\HabiterController::accueilAction',  '_route' => 'vf_habiter_accueil',);
            }

            // vf_habiter_gerer
            if ($pathinfo === '/habiter/gerer') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\HabiterController::gererAction',  '_route' => 'vf_habiter_gerer',);
            }

            // vf_habiter_internet
            if ($pathinfo === '/habiter/internet') {
                return array (  '_controller' => 'VF\\CrotoyBundle\\Controller\\HabiterController::internetAction',  '_route' => 'vf_habiter_internet',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
