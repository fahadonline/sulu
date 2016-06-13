<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/8a3b4b7')) {
            // _assetic_8a3b4b7
            if ($pathinfo === '/css/8a3b4b7.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8a3b4b7',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8a3b4b7',);
            }

            if (0 === strpos($pathinfo, '/css/8a3b4b7_')) {
                // _assetic_8a3b4b7_0
                if ($pathinfo === '/css/8a3b4b7_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8a3b4b7',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8a3b4b7_0',);
                }

                // _assetic_8a3b4b7_1
                if ($pathinfo === '/css/8a3b4b7_justified-nav_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8a3b4b7',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_8a3b4b7_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/a9d7da2')) {
            // _assetic_a9d7da2
            if ($pathinfo === '/js/a9d7da2.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a9d7da2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a9d7da2',);
            }

            if (0 === strpos($pathinfo, '/js/a9d7da2_')) {
                // _assetic_a9d7da2_0
                if ($pathinfo === '/js/a9d7da2_jquery-1.11.0.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a9d7da2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a9d7da2_0',);
                }

                // _assetic_a9d7da2_1
                if ($pathinfo === '/js/a9d7da2_bootstrap_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a9d7da2',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a9d7da2_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/_')) {
                // _wdt
                if (0 === strpos($pathinfo, '/admin/_wdt') && preg_match('#^/admin/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
                }

                if (0 === strpos($pathinfo, '/admin/_profiler')) {
                    // _profiler_home
                    if (rtrim($pathinfo, '/') === '/admin/_profiler') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', '_profiler_home');
                        }

                        return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    }

                    if (0 === strpos($pathinfo, '/admin/_profiler/search')) {
                        // _profiler_search
                        if ($pathinfo === '/admin/_profiler/search') {
                            return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                        }

                        // _profiler_search_bar
                        if ($pathinfo === '/admin/_profiler/search_bar') {
                            return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                        }

                    }

                    // _profiler_purge
                    if ($pathinfo === '/admin/_profiler/purge') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                    }

                    // _profiler_info
                    if (0 === strpos($pathinfo, '/admin/_profiler/info') && preg_match('#^/admin/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_phpinfo
                    if ($pathinfo === '/admin/_profiler/phpinfo') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                    }

                    // _profiler_search_results
                    if (preg_match('#^/admin/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                    }

                    // _profiler
                    if (preg_match('#^/admin/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                    }

                    // _profiler_router
                    if (preg_match('#^/admin/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                    }

                    // _profiler_exception
                    if (preg_match('#^/admin/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                    }

                    // _profiler_exception_css
                    if (preg_match('#^/admin/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                    }

                }

                // _twig_error_test
                if (0 === strpos($pathinfo, '/admin/_error') && preg_match('#^/admin/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
                }

            }

            // tag_list
            if ($pathinfo === '/admin/tag/template/tag/list.html') {
                return array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TemplateController::tagListAction',  '_route' => 'tag_list',);
            }

            if (0 === strpos($pathinfo, '/admin/api/tags')) {
                if (0 === strpos($pathinfo, '/admin/api/tags/fields')) {
                    // get_tag_fields
                    if (preg_match('#^/admin/api/tags/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_tag_fields;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_tag_fields')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::getFieldsAction',  '_format' => 'json',));
                    }
                    not_get_tag_fields:

                    // put_tag_fields
                    if (preg_match('#^/admin/api/tags/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_tag_fields;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_tag_fields')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::putFieldsAction',  '_format' => 'json',));
                    }
                    not_put_tag_fields:

                }

                // get_tag
                if (preg_match('#^/admin/api/tags/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_tag;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_tag')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::getAction',  '_format' => 'json',));
                }
                not_get_tag:

                // get_tags
                if (preg_match('#^/admin/api/tags(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_tags;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_tags')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::cgetAction',  '_format' => 'json',));
                }
                not_get_tags:

                // post_tag
                if (preg_match('#^/admin/api/tags(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_tag;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_tag')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::postAction',  '_format' => 'json',));
                }
                not_post_tag:

                // put_tag
                if (preg_match('#^/admin/api/tags/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_put_tag;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_tag')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::putAction',  '_format' => 'json',));
                }
                not_put_tag:

                // delete_tag
                if (preg_match('#^/admin/api/tags/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_delete_tag;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_tag')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::deleteAction',  '_format' => 'json',));
                }
                not_delete_tag:

                // post_tag_merge
                if (0 === strpos($pathinfo, '/admin/api/tags/merge') && preg_match('#^/admin/api/tags/merge(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_tag_merge;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_tag_merge')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::postMergeAction',  '_format' => 'json',));
                }
                not_post_tag_merge:

                // patch_tagtags
                if (preg_match('#^/admin/api/tags(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_patch_tagtags;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_tagtags')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::patchAction',  '_format' => 'json',));
                }
                not_patch_tagtags:

            }

            // sulu_admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sulu_admin');
                }

                return array (  '_controller' => 'sulu_admin.admin_controller:indexAction',  '_route' => 'sulu_admin',);
            }

            // sulu_admin.widget_group
            if (0 === strpos($pathinfo, '/admin/widget-groups') && preg_match('#^/admin/widget\\-groups/(?P<groupAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_admin.widget_group')), array (  '_controller' => 'Sulu\\Bundle\\AdminBundle\\Controller\\WidgetGroupsController::groupAction',));
            }

            // get_navigation
            if (0 === strpos($pathinfo, '/admin/navigation') && preg_match('#^/admin/navigation(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_navigation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_navigation')), array (  '_controller' => 'Sulu\\Bundle\\AdminBundle\\Controller\\NavigationsController::getNavigationAction',  '_format' => 'json',));
            }
            not_get_navigation:

            // get_content-navigations
            if (0 === strpos($pathinfo, '/admin/content-navigations') && preg_match('#^/admin/content\\-navigations(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_contentnavigations;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_content-navigations')), array (  '_controller' => 'sulu_admin.content_navigation_controller:cgetAction',  '_format' => 'json',));
            }
            not_get_contentnavigations:

            // sulu_admin.routes
            if ($pathinfo === '/admin/bundles') {
                return array (  '_controller' => 'sulu_admin.admin_controller:bundlesAction',  '_route' => 'sulu_admin.routes',);
            }

            if (0 === strpos($pathinfo, '/admin/con')) {
                // sulu_admin.config
                if ($pathinfo === '/admin/config') {
                    return array (  '_controller' => 'sulu_admin.admin_controller:configAction',  '_route' => 'sulu_admin.config',);
                }

                // sulu_admin.contexts
                if ($pathinfo === '/admin/contexts') {
                    return array (  '_controller' => 'sulu_admin.admin_controller:contextsAction',  '_route' => 'sulu_admin.contexts',);
                }

            }

            // sulu_admin.login
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'Sulu\\Bundle\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'sulu_admin.login',);
            }

            // sulu_admin.reset
            if (0 === strpos($pathinfo, '/admin/reset') && preg_match('#^/admin/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_admin.reset')), array (  '_controller' => 'Sulu\\Bundle\\AdminBundle\\Controller\\SecurityController::resetAction',));
            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                // sulu_admin.login_check
                if ($pathinfo === '/admin/login_check') {
                    return array('_route' => 'sulu_admin.login_check');
                }

                // logout
                if ($pathinfo === '/admin/logout') {
                    return array('_route' => 'logout');
                }

            }

            if (0 === strpos($pathinfo, '/admin/contact/template')) {
                // contact_form
                if ($pathinfo === '/admin/contact/template/contact/form.html') {
                    return array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\TemplateController::contactFormAction',  '_route' => 'contact_form',);
                }

                if (0 === strpos($pathinfo, '/admin/contact/template/account/form')) {
                    // account_form
                    if ($pathinfo === '/admin/contact/template/account/form.html') {
                        return array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\TemplateController::accountFormAction',  '_route' => 'account_form',);
                    }

                    // account_form_contact_list
                    if ($pathinfo === '/admin/contact/template/account/form/contact.html') {
                        return array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\TemplateController::accountFormContactListAction',  '_route' => 'account_form_contact_list',);
                    }

                }

                // contact_list
                if ($pathinfo === '/admin/contact/template/contact/list.html') {
                    return array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\TemplateController::contactListAction',  '_route' => 'contact_list',);
                }

                // account_list
                if ($pathinfo === '/admin/contact/template/account/list.html') {
                    return array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\TemplateController::accountListAction',  '_route' => 'account_list',);
                }

                // basic_documents
                if ($pathinfo === '/admin/contact/template/basic/documents.html') {
                    return array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\TemplateController::basicDocumentsAction',  '_route' => 'basic_documents',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/api')) {
                if (0 === strpos($pathinfo, '/admin/api/c')) {
                    // get_customers
                    if (0 === strpos($pathinfo, '/admin/api/customers') && preg_match('#^/admin/api/customers(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_customers;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_customers')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\CustomerController::cgetAction',  '_format' => 'json',));
                    }
                    not_get_customers:

                    if (0 === strpos($pathinfo, '/admin/api/co')) {
                        if (0 === strpos($pathinfo, '/admin/api/contacts')) {
                            // fields_contact
                            if (0 === strpos($pathinfo, '/admin/api/contacts/fields') && preg_match('#^/admin/api/contacts/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_fields_contact;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fields_contact')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactController::fieldsAction',  '_format' => 'json',));
                            }
                            not_fields_contact:

                            // get_contacts
                            if (preg_match('#^/admin/api/contacts(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_get_contacts;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_contacts')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactController::cgetAction',  '_format' => 'json',));
                            }
                            not_get_contacts:

                            // delete_contact
                            if (preg_match('#^/admin/api/contacts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'DELETE') {
                                    $allow[] = 'DELETE';
                                    goto not_delete_contact;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_contact')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactController::deleteAction',  '_format' => 'json',));
                            }
                            not_delete_contact:

                            // get_contact
                            if (preg_match('#^/admin/api/contacts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_get_contact;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_contact')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactController::getAction',  '_format' => 'json',));
                            }
                            not_get_contact:

                            // post_contact
                            if (preg_match('#^/admin/api/contacts(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_post_contact;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_contact')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactController::postAction',  '_format' => 'json',));
                            }
                            not_post_contact:

                            // put_contact
                            if (preg_match('#^/admin/api/contacts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_put_contact;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_contact')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactController::putAction',  '_format' => 'json',));
                            }
                            not_put_contact:

                        }

                        if (0 === strpos($pathinfo, '/admin/api/countries')) {
                            // get_country
                            if (preg_match('#^/admin/api/countries/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_get_country;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_country')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\CountryController::getAction',  '_format' => 'json',));
                            }
                            not_get_country:

                            // get_countries
                            if (preg_match('#^/admin/api/countries(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_get_countries;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_countries')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\CountryController::cgetAction',  '_format' => 'json',));
                            }
                            not_get_countries:

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/api/accounts')) {
                    // fields_account
                    if (0 === strpos($pathinfo, '/admin/api/accounts/fields') && preg_match('#^/admin/api/accounts/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fields_account;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fields_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::fieldsAction',  '_format' => 'json',));
                    }
                    not_fields_account:

                    // multipledeleteinfo_account
                    if (0 === strpos($pathinfo, '/admin/api/accounts/multipledeleteinfo') && preg_match('#^/admin/api/accounts/multipledeleteinfo(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_multipledeleteinfo_account;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'multipledeleteinfo_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::multipledeleteinfoAction',  '_format' => 'json',));
                    }
                    not_multipledeleteinfo_account:

                    // get_account
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_account;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::getAction',  '_format' => 'json',));
                    }
                    not_get_account:

                    // get_account_contacts
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/contacts(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_account_contacts;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_account_contacts')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::getContactsAction',  '_format' => 'json',));
                    }
                    not_get_account_contacts:

                    // get_account_addresses
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/addresses(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_account_addresses;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_account_addresses')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::getAddressesAction',  '_format' => 'json',));
                    }
                    not_get_account_addresses:

                    // put_account_contacts
                    if (preg_match('#^/admin/api/accounts/(?P<accountId>[^/]++)/contacts/(?P<contactId>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_account_contacts;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_account_contacts')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::putContactsAction',  '_format' => 'json',));
                    }
                    not_put_account_contacts:

                    // delete_account_contacts
                    if (preg_match('#^/admin/api/accounts/(?P<accountId>[^/]++)/contacts/(?P<contactId>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_account_contacts;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_account_contacts')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::deleteContactsAction',  '_format' => 'json',));
                    }
                    not_delete_account_contacts:

                    // get_accounts
                    if (preg_match('#^/admin/api/accounts(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_accounts;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_accounts')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::cgetAction',  '_format' => 'json',));
                    }
                    not_get_accounts:

                    // post_account
                    if (preg_match('#^/admin/api/accounts(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_account;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::postAction',  '_format' => 'json',));
                    }
                    not_post_account:

                    // put_account
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_account;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::putAction',  '_format' => 'json',));
                    }
                    not_put_account:

                    // patch_account
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_patch_account;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::patchAction',  '_format' => 'json',));
                    }
                    not_patch_account:

                    // delete_account
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_account;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::deleteAction',  '_format' => 'json',));
                    }
                    not_delete_account:

                    // get_account_deleteinfo
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/deleteinfo(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_account_deleteinfo;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_account_deleteinfo')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::getDeleteinfoAction',  '_format' => 'json',));
                    }
                    not_get_account_deleteinfo:

                }

                if (0 === strpos($pathinfo, '/admin/api/contact')) {
                    if (0 === strpos($pathinfo, '/admin/api/contact/titles')) {
                        // get_contact_title
                        if (preg_match('#^/admin/api/contact/titles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_contact_title;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_contact_title')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactTitleController::getAction',  '_format' => 'json',));
                        }
                        not_get_contact_title:

                        // get_contact_titles
                        if (preg_match('#^/admin/api/contact/titles(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_contact_titles;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_contact_titles')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactTitleController::cgetAction',  '_format' => 'json',));
                        }
                        not_get_contact_titles:

                        // post_contact_title
                        if (preg_match('#^/admin/api/contact/titles(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_contact_title;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_contact_title')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactTitleController::postAction',  '_format' => 'json',));
                        }
                        not_post_contact_title:

                    }

                    // put_contact_title
                    if (0 === strpos($pathinfo, '/admin/api/contacts') && preg_match('#^/admin/api/contacts/(?P<id>[^/]++)/title(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_contact_title;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_contact_title')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactTitleController::putAction',  '_format' => 'json',));
                    }
                    not_put_contact_title:

                    if (0 === strpos($pathinfo, '/admin/api/contact/titles')) {
                        // delete_contact_title
                        if (preg_match('#^/admin/api/contact/titles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_delete_contact_title;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_contact_title')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactTitleController::deleteAction',  '_format' => 'json',));
                        }
                        not_delete_contact_title:

                        // patch_contact_title
                        if (preg_match('#^/admin/api/contact/titles(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_patch_contact_title;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_contact_title')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactTitleController::patchAction',  '_format' => 'json',));
                        }
                        not_patch_contact_title:

                    }

                    if (0 === strpos($pathinfo, '/admin/api/contact/positions')) {
                        // get_position
                        if (preg_match('#^/admin/api/contact/positions/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_position;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_position')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\PositionController::getAction',  '_format' => 'json',));
                        }
                        not_get_position:

                        // get_positions
                        if (preg_match('#^/admin/api/contact/positions(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_positions;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_positions')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\PositionController::cgetAction',  '_format' => 'json',));
                        }
                        not_get_positions:

                        // post_position
                        if (preg_match('#^/admin/api/contact/positions(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_position;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_position')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\PositionController::postAction',  '_format' => 'json',));
                        }
                        not_post_position:

                    }

                }

                // put_position
                if (0 === strpos($pathinfo, '/admin/api/positions') && preg_match('#^/admin/api/positions/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_put_position;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_position')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\PositionController::putAction',  '_format' => 'json',));
                }
                not_put_position:

                if (0 === strpos($pathinfo, '/admin/api/contact/positions')) {
                    // delete_position
                    if (preg_match('#^/admin/api/contact/positions/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_position;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_position')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\PositionController::deleteAction',  '_format' => 'json',));
                    }
                    not_delete_position:

                    // patch_position
                    if (preg_match('#^/admin/api/contact/positions(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_patch_position;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_position')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\PositionController::patchAction',  '_format' => 'json',));
                    }
                    not_patch_position:

                }

                if (0 === strpos($pathinfo, '/admin/api/accounts')) {
                    // cget_account_medias
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/medias(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_cget_account_medias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cget_account_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountMediaController::cgetAction',  '_format' => 'json',));
                    }
                    not_cget_account_medias:

                    // fields_account_medias
                    if (0 === strpos($pathinfo, '/admin/api/accounts/medias/fields') && preg_match('#^/admin/api/accounts/medias/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fields_account_medias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fields_account_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountMediaController::fieldsAction',  '_format' => 'json',));
                    }
                    not_fields_account_medias:

                    // delete_account_medias
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/medias/(?P<slug>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_account_medias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_account_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountMediaController::deleteAction',  '_format' => 'json',));
                    }
                    not_delete_account_medias:

                    // post_account_medias
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/medias(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_account_medias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_account_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountMediaController::postAction',  '_format' => 'json',));
                    }
                    not_post_account_medias:

                    // get_account_medias
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/medias(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_account_medias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_account_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountMediaController::cgetAction',  '_format' => 'json',));
                    }
                    not_get_account_medias:

                }

                if (0 === strpos($pathinfo, '/admin/api/contacts')) {
                    // cget_contact_medias
                    if (preg_match('#^/admin/api/contacts/(?P<id>[^/]++)/medias(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_cget_contact_medias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cget_contact_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactMediaController::cgetAction',  '_format' => 'json',));
                    }
                    not_cget_contact_medias:

                    // fields_contact_medias
                    if (0 === strpos($pathinfo, '/admin/api/contacts/medias/fields') && preg_match('#^/admin/api/contacts/medias/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fields_contact_medias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fields_contact_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactMediaController::fieldsAction',  '_format' => 'json',));
                    }
                    not_fields_contact_medias:

                    // delete_contact_medias
                    if (preg_match('#^/admin/api/contacts/(?P<id>[^/]++)/medias/(?P<slug>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_contact_medias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_contact_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactMediaController::deleteAction',  '_format' => 'json',));
                    }
                    not_delete_contact_medias:

                    // post_contact_medias
                    if (preg_match('#^/admin/api/contacts/(?P<id>[^/]++)/medias(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_contact_medias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_contact_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactMediaController::postAction',  '_format' => 'json',));
                    }
                    not_post_contact_medias:

                    // get_contact_medias
                    if (preg_match('#^/admin/api/contacts/(?P<id>[^/]++)/medias(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_contact_medias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_contact_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactMediaController::cgetAction',  '_format' => 'json',));
                    }
                    not_get_contact_medias:

                }

            }

            if (0 === strpos($pathinfo, '/admin/security')) {
                if (0 === strpos($pathinfo, '/admin/security/template')) {
                    // sulu_security.template.role.form
                    if ($pathinfo === '/admin/security/template/role/form.html') {
                        return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\TemplateController::roleFormAction',  '_route' => 'sulu_security.template.role.form',);
                    }

                    // sulu_security.template.permission.form
                    if ($pathinfo === '/admin/security/template/permission/form.html') {
                        return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\TemplateController::permissionformAction',  '_route' => 'sulu_security.template.permission.form',);
                    }

                    // sulu_security.template.role.list
                    if ($pathinfo === '/admin/security/template/role/list.html') {
                        return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\TemplateController::roleListAction',  '_route' => 'sulu_security.template.role.list',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/security/reset')) {
                    if (0 === strpos($pathinfo, '/admin/security/reset/email')) {
                        // sulu_security.reset_password.email
                        if ($pathinfo === '/admin/security/reset/email') {
                            return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'sulu_security.reset_password.email',);
                        }

                        // sulu_security.reset_password.email.resend
                        if ($pathinfo === '/admin/security/reset/email/resend') {
                            return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\ResettingController::sendEmailAction',  'generateNewKey' => 'false',  '_route' => 'sulu_security.reset_password.email.resend',);
                        }

                    }

                    // sulu_security.reset_password.reset
                    if ($pathinfo === '/admin/security/reset') {
                        return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\ResettingController::resetAction',  '_route' => 'sulu_security.reset_password.reset',);
                    }

                }

                // sulu_security.permission_tab.form
                if ($pathinfo === '/admin/security/template/permission-tab/form.html') {
                    return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\TemplateController::permissionTabFormAction',  '_route' => 'sulu_security.permission_tab.form',);
                }

                if (0 === strpos($pathinfo, '/admin/security/profile')) {
                    // put_profile_language
                    if (0 === strpos($pathinfo, '/admin/security/profile/language') && preg_match('#^/admin/security/profile/language(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_profile_language;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_profile_language')), array (  '_controller' => 'sulu_security.profile_controller:putLanguageAction',  '_format' => 'json',));
                    }
                    not_put_profile_language:

                    if (0 === strpos($pathinfo, '/admin/security/profile/settings')) {
                        // put_profile_settings
                        if (preg_match('#^/admin/security/profile/settings(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_put_profile_settings;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_profile_settings')), array (  '_controller' => 'sulu_security.profile_controller:putSettingsAction',  '_format' => 'json',));
                        }
                        not_put_profile_settings:

                        // delete_profile_settings
                        if (preg_match('#^/admin/security/profile/settings(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_delete_profile_settings;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_profile_settings')), array (  '_controller' => 'sulu_security.profile_controller:deleteSettingsAction',  '_format' => 'json',));
                        }
                        not_delete_profile_settings:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/api')) {
                if (0 === strpos($pathinfo, '/admin/api/roles')) {
                    if (0 === strpos($pathinfo, '/admin/api/roles/fields')) {
                        // get_role_fields
                        if (preg_match('#^/admin/api/roles/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_role_fields;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_role_fields')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::getFieldsAction',  '_format' => 'json',));
                        }
                        not_get_role_fields:

                        // put_role_fields
                        if (preg_match('#^/admin/api/roles/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_put_role_fields;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_role_fields')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::putFieldsAction',  '_format' => 'json',));
                        }
                        not_put_role_fields:

                    }

                    // get_roles
                    if (preg_match('#^/admin/api/roles(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_roles;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_roles')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::cgetAction',  '_format' => 'json',));
                    }
                    not_get_roles:

                    // get_role
                    if (preg_match('#^/admin/api/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_role;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_role')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::getAction',  '_format' => 'json',));
                    }
                    not_get_role:

                    // post_role
                    if (preg_match('#^/admin/api/roles(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_role;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_role')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::postAction',  '_format' => 'json',));
                    }
                    not_post_role:

                    // put_role
                    if (preg_match('#^/admin/api/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_role;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_role')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::putAction',  '_format' => 'json',));
                    }
                    not_put_role:

                    // delete_role
                    if (preg_match('#^/admin/api/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_role;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_role')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::deleteAction',  '_format' => 'json',));
                    }
                    not_delete_role:

                }

                if (0 === strpos($pathinfo, '/admin/api/groups')) {
                    // get_groups
                    if (preg_match('#^/admin/api/groups(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_groups;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_groups')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::cgetAction',  '_format' => 'json',));
                    }
                    not_get_groups:

                    // get_group
                    if (preg_match('#^/admin/api/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_group;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_group')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::getAction',  '_format' => 'json',));
                    }
                    not_get_group:

                    // post_group
                    if (preg_match('#^/admin/api/groups(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_group;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_group')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::postAction',  '_format' => 'json',));
                    }
                    not_post_group:

                    // put_group
                    if (preg_match('#^/admin/api/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_group;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_group')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::putAction',  '_format' => 'json',));
                    }
                    not_put_group:

                    // delete_group
                    if (preg_match('#^/admin/api/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_group;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_group')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::deleteAction',  '_format' => 'json',));
                    }
                    not_delete_group:

                }

                if (0 === strpos($pathinfo, '/admin/api/users')) {
                    // get_user
                    if (preg_match('#^/admin/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::getAction',  '_format' => 'json',));
                    }
                    not_get_user:

                    // post_user
                    if (preg_match('#^/admin/api/users(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_user')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::postAction',  '_format' => 'json',));
                    }
                    not_post_user:

                    // post_user_enable_user
                    if (preg_match('#^/admin/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_user_enable_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_user_enable_user')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::postEnableUserAction',  '_format' => 'json',));
                    }
                    not_post_user_enable_user:

                    // put_user
                    if (preg_match('#^/admin/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_user')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::putAction',  '_format' => 'json',));
                    }
                    not_put_user:

                    // patch_user
                    if (preg_match('#^/admin/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_patch_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_user')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::patchAction',  '_format' => 'json',));
                    }
                    not_patch_user:

                    // delete_user
                    if (preg_match('#^/admin/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_user')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::deleteAction',  '_format' => 'json',));
                    }
                    not_delete_user:

                    // get_users
                    if (preg_match('#^/admin/api/users(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_users;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_users')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::cgetAction',  '_format' => 'json',));
                    }
                    not_get_users:

                }

                if (0 === strpos($pathinfo, '/admin/api/permissions')) {
                    // get_permissions
                    if (preg_match('#^/admin/api/permissions(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_permissions;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_permissions')), array (  '_controller' => 'sulu_security.permission_controller:cgetAction',  '_format' => 'json',));
                    }
                    not_get_permissions:

                    // post_permission
                    if (preg_match('#^/admin/api/permissions(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_permission;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_permission')), array (  '_controller' => 'sulu_security.permission_controller:postAction',  '_format' => 'json',));
                    }
                    not_post_permission:

                }

            }

            if (0 === strpos($pathinfo, '/admin/content')) {
                if (0 === strpos($pathinfo, '/admin/content/template')) {
                    if (0 === strpos($pathinfo, '/admin/content/template/form')) {
                        // sulu_content.content_form
                        if (preg_match('#^/admin/content/template/form/(?P<key>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_content.content_form')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::contentAction',));
                        }

                        // sulu_content.content_form.default
                        if ($pathinfo === '/admin/content/template/form.html') {
                            return array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::contentAction',  '_route' => 'sulu_content.content_form.default',);
                        }

                    }

                    // sulu_content.template.get
                    if ($pathinfo === '/admin/content/template') {
                        return array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::getAction',  '_route' => 'sulu_content.template.get',);
                    }

                }

                // sulu_content.languages.get
                if ($pathinfo === '/admin/content/languages') {
                    return array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::getLanguagesAction',  '_route' => 'sulu_content.languages.get',);
                }

                // sulu_content.content_navigation
                if ($pathinfo === '/admin/content/navigation/content') {
                    return array (  '_controller' => 'SuluContentBundle:Navigation:content',  '_route' => 'sulu_content.content_navigation',);
                }

                if (0 === strpos($pathinfo, '/admin/content/template/content')) {
                    // sulu_content.content_list
                    if ($pathinfo === '/admin/content/template/content/list.html') {
                        return array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::listAction',  '_route' => 'sulu_content.content_list',);
                    }

                    // sulu_content.content_column
                    if (0 === strpos($pathinfo, '/admin/content/template/content/column') && preg_match('#^/admin/content/template/content/column/(?P<webspaceKey>[^/]++)/(?P<languageCode>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_content.content_column')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::columnAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/content/template/content/se')) {
                        // sulu_content.seo
                        if ($pathinfo === '/admin/content/template/content/seo.html') {
                            return array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::seoAction',  '_route' => 'sulu_content.seo',);
                        }

                        // sulu_content.template.settings
                        if ($pathinfo === '/admin/content/template/content/settings.html') {
                            return array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::settingsAction',  '_route' => 'sulu_content.template.settings',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/content/preview')) {
                    // sulu_content.preview.render
                    if (preg_match('#^/admin/content/preview/(?P<contentUuid>[^/]++)/render$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sulu_contentpreviewrender;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_content.preview.render')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\PreviewController::renderAction',));
                    }
                    not_sulu_contentpreviewrender:

                    // sulu_content.preview.update
                    if (preg_match('#^/admin/content/preview/(?P<contentUuid>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_sulu_contentpreviewupdate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_content.preview.update')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\PreviewController::updateAction',));
                    }
                    not_sulu_contentpreviewupdate:

                    // sulu_content.preview.changes
                    if (preg_match('#^/admin/content/preview/(?P<contentUuid>[^/]++)/changes$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sulu_contentpreviewchanges;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_content.preview.changes')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\PreviewController::changesAction',));
                    }
                    not_sulu_contentpreviewchanges:

                }

            }

            if (0 === strpos($pathinfo, '/admin/api')) {
                if (0 === strpos($pathinfo, '/admin/api/node')) {
                    if (0 === strpos($pathinfo, '/admin/api/nodes')) {
                        // post_node_resourcelocator_generate
                        if (0 === strpos($pathinfo, '/admin/api/nodes/resourcelocators/generates') && preg_match('#^/admin/api/nodes/resourcelocators/generates(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_node_resourcelocator_generate;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_node_resourcelocator_generate')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeResourcelocatorController::postGenerateAction',  '_format' => 'json',));
                        }
                        not_post_node_resourcelocator_generate:

                        // get_node_resourcelocators
                        if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/]++)/resourcelocators(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_node_resourcelocators;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_node_resourcelocators')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeResourcelocatorController::cgetAction',  '_format' => 'json',));
                        }
                        not_get_node_resourcelocators:

                    }

                    if (0 === strpos($pathinfo, '/admin/api/node/resourcelocator')) {
                        // delete_node_resourcelocator
                        if (preg_match('#^/admin/api/node/resourcelocator(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_delete_node_resourcelocator;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_node_resourcelocator')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeResourcelocatorController::deleteAction',  '_format' => 'json',));
                        }
                        not_delete_node_resourcelocator:

                        // put_node_resourcelocator_restore
                        if (0 === strpos($pathinfo, '/admin/api/node/resourcelocator/restore') && preg_match('#^/admin/api/node/resourcelocator/restore(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_put_node_resourcelocator_restore;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_node_resourcelocator_restore')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeResourcelocatorController::putRestoreAction',  '_format' => 'json',));
                        }
                        not_put_node_resourcelocator_restore:

                    }

                    if (0 === strpos($pathinfo, '/admin/api/nodes')) {
                        // entry_node
                        if (0 === strpos($pathinfo, '/admin/api/nodes/entry') && preg_match('#^/admin/api/nodes/entry(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_entry_node;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'entry_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::entryAction',  '_format' => 'json',));
                        }
                        not_entry_node:

                        // index_node
                        if (0 === strpos($pathinfo, '/admin/api/nodes/index') && preg_match('#^/admin/api/nodes/index(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_index_node;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'index_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::indexAction',  '_format' => 'json',));
                        }
                        not_index_node:

                        // filter_node
                        if (0 === strpos($pathinfo, '/admin/api/nodes/filter') && preg_match('#^/admin/api/nodes/filter(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_filter_node;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'filter_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::filterAction',  '_format' => 'json',));
                        }
                        not_filter_node:

                        // get_node
                        if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_node;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::getAction',  '_format' => 'json',));
                        }
                        not_get_node:

                        // get_nodes
                        if (preg_match('#^/admin/api/nodes(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_nodes;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_nodes')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::cgetAction',  '_format' => 'json',));
                        }
                        not_get_nodes:

                        // put_node
                        if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_put_node;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::putAction',  '_format' => 'json',));
                        }
                        not_put_node:

                        // post_node
                        if (preg_match('#^/admin/api/nodes(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_node;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::postAction',  '_format' => 'json',));
                        }
                        not_post_node:

                        // delete_node
                        if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_delete_node;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::deleteAction',  '_format' => 'json',));
                        }
                        not_delete_node:

                        // post_node_trigger
                        if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_node_trigger;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_node_trigger')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::postTriggerAction',  '_format' => 'json',));
                        }
                        not_post_node_trigger:

                        // get_node_seo
                        if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/]++)/seo(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_node_seo;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_node_seo')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\SeoController::getAction',  '_format' => 'json',));
                        }
                        not_get_node_seo:

                        // post_node_seo
                        if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/]++)/seos(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_node_seo;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_node_seo')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\SeoController::postAction',  '_format' => 'json',));
                        }
                        not_post_node_seo:

                    }

                }

                // get_webspace_localizations
                if (0 === strpos($pathinfo, '/admin/api/webspace/localizations') && preg_match('#^/admin/api/webspace/localizations(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_webspace_localizations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_webspace_localizations')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\WebspaceLocalizationController::cgetAction',  '_format' => 'json',));
                }
                not_get_webspace_localizations:

                // get_items
                if (0 === strpos($pathinfo, '/admin/api/items') && preg_match('#^/admin/api/items(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_items;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_items')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\SmartContentItemController::getItemsAction',  '_format' => 'json',));
                }
                not_get_items:

                // get_webspace
                if (0 === strpos($pathinfo, '/admin/api/webspaces') && preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_webspace;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_webspace')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\WebspaceController::getAction',  '_format' => 'json',));
                }
                not_get_webspace:

            }

            if (0 === strpos($pathinfo, '/admin/media/template')) {
                // sulu_media.template.collection
                if ($pathinfo === '/admin/media/template/media/collection.html') {
                    return array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\TemplateController::collectionAction',  '_route' => 'sulu_media.template.collection',);
                }

                if (0 === strpos($pathinfo, '/admin/media/template/collection')) {
                    // sulu_media.template.collection.files
                    if ($pathinfo === '/admin/media/template/collection/files.html') {
                        return array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\TemplateController::collectionFilesAction',  '_route' => 'sulu_media.template.collection.files',);
                    }

                    // sulu_media.template.collection.settings
                    if ($pathinfo === '/admin/media/template/collection/settings.html') {
                        return array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\TemplateController::collectionSettingsAction',  '_route' => 'sulu_media.template.collection.settings',);
                    }

                    // sulu_media.template.collection.new
                    if ($pathinfo === '/admin/media/template/collection/new.html') {
                        return array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\TemplateController::collectionNewAction',  '_route' => 'sulu_media.template.collection.new',);
                    }

                }

                // sulu_media.template.media.multiple_edit
                if ($pathinfo === '/admin/media/template/media/multiple-edit.html') {
                    return array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\TemplateController::multipleEditAction',  '_route' => 'sulu_media.template.media.multiple_edit',);
                }

            }

        }

        // sulu_media.website.image.proxy
        if (0 === strpos($pathinfo, '/uploads/media') && preg_match('#^/uploads/media/(?P<slug>.*)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_media.website.image.proxy')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaStreamController::getImageAction',  '_requestAnalyzer' => false,));
        }

        // sulu_media.website.media.download
        if (0 === strpos($pathinfo, '/media') && preg_match('#^/media/(?P<id>[^/]++)/download/(?P<slug>.*)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_media.website.media.download')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaStreamController::downloadAction',  '_requestAnalyzer' => false,));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/api')) {
                if (0 === strpos($pathinfo, '/admin/api/collection')) {
                    if (0 === strpos($pathinfo, '/admin/api/collection/fields')) {
                        // get_collection_fields
                        if (preg_match('#^/admin/api/collection/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_collection_fields;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_collection_fields')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::getFieldsAction',  '_format' => 'json',));
                        }
                        not_get_collection_fields:

                        // put_collection_fields
                        if (preg_match('#^/admin/api/collection/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_put_collection_fields;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_collection_fields')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::putFieldsAction',  '_format' => 'json',));
                        }
                        not_put_collection_fields:

                    }

                    if (0 === strpos($pathinfo, '/admin/api/collections')) {
                        // get_collection
                        if (preg_match('#^/admin/api/collections/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_collection;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_collection')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::getAction',  '_format' => 'json',));
                        }
                        not_get_collection:

                        // get_collections
                        if (preg_match('#^/admin/api/collections(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_collections;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_collections')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::cgetAction',  '_format' => 'json',));
                        }
                        not_get_collections:

                        // post_collection
                        if (preg_match('#^/admin/api/collections(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_collection;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_collection')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::postAction',  '_format' => 'json',));
                        }
                        not_post_collection:

                        // put_collection
                        if (preg_match('#^/admin/api/collections/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_put_collection;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_collection')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::putAction',  '_format' => 'json',));
                        }
                        not_put_collection:

                        // delete_collection
                        if (preg_match('#^/admin/api/collections/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_delete_collection;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_collection')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::deleteAction',  '_format' => 'json',));
                        }
                        not_delete_collection:

                        // post_collection_trigger
                        if (preg_match('#^/admin/api/collections/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_collection_trigger;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_collection_trigger')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::postTriggerAction',  '_format' => 'json',));
                        }
                        not_post_collection_trigger:

                    }

                }

                if (0 === strpos($pathinfo, '/admin/api/media')) {
                    // cget_media
                    if (preg_match('#^/admin/api/media(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_cget_media;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cget_media')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::cgetAction',  '_format' => 'json',));
                    }
                    not_cget_media:

                    // get_media_fields
                    if (0 === strpos($pathinfo, '/admin/api/media/fields') && preg_match('#^/admin/api/media/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_media_fields;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_media_fields')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::getFieldsAction',  '_format' => 'json',));
                    }
                    not_get_media_fields:

                    // get_media
                    if (preg_match('#^/admin/api/media/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_media;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_media')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::getAction',  '_format' => 'json',));
                    }
                    not_get_media:

                    // post_media
                    if (preg_match('#^/admin/api/media(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_media;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_media')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::postAction',  '_format' => 'json',));
                    }
                    not_post_media:

                    // put_media
                    if (preg_match('#^/admin/api/media/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_media;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_media')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::putAction',  '_format' => 'json',));
                    }
                    not_put_media:

                    // delete_media
                    if (preg_match('#^/admin/api/media/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_media;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_media')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::deleteAction',  '_format' => 'json',));
                    }
                    not_delete_media:

                    // post_media_trigger
                    if (preg_match('#^/admin/api/media/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_media_trigger;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_media_trigger')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::postTriggerAction',  '_format' => 'json',));
                    }
                    not_post_media_trigger:

                    // post_media_preview
                    if (preg_match('#^/admin/api/media/(?P<id>[^/]++)/preview(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_media_preview;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_media_preview')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaPreviewController::postAction',  '_format' => 'json',));
                    }
                    not_post_media_preview:

                    // delete_media_preview
                    if (preg_match('#^/admin/api/media/(?P<id>[^/]++)/preview(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_media_preview;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_media_preview')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaPreviewController::deleteAction',  '_format' => 'json',));
                    }
                    not_delete_media_preview:

                }

            }

            // sulu_category.template.category.list
            if ($pathinfo === '/admin/category/template/category/list.html') {
                return array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\TemplateController::categoriesListAction',  '_route' => 'sulu_category.template.category.list',);
            }

            if (0 === strpos($pathinfo, '/admin/api')) {
                if (0 === strpos($pathinfo, '/admin/api/categories')) {
                    // get_category_fields
                    if (0 === strpos($pathinfo, '/admin/api/categories/fields') && preg_match('#^/admin/api/categories/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_category_fields;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_category_fields')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::getFieldsAction',  '_format' => 'json',));
                    }
                    not_get_category_fields:

                    // get_category
                    if (preg_match('#^/admin/api/categories/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_category;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_category')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::getAction',  '_format' => 'json',));
                    }
                    not_get_category:

                    // get_category_children
                    if (preg_match('#^/admin/api/categories/(?P<key>[^/]++)/children(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_category_children;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_category_children')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::getChildrenAction',  '_format' => 'json',));
                    }
                    not_get_category_children:

                    // get_categories
                    if (preg_match('#^/admin/api/categories(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_categories;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_categories')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::cgetAction',  '_format' => 'json',));
                    }
                    not_get_categories:

                    // post_category
                    if (preg_match('#^/admin/api/categories(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_category;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_category')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::postAction',  '_format' => 'json',));
                    }
                    not_post_category:

                    // put_category
                    if (preg_match('#^/admin/api/categories/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_category;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_category')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::putAction',  '_format' => 'json',));
                    }
                    not_put_category:

                    // patch_category
                    if (preg_match('#^/admin/api/categories/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_patch_category;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_category')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::patchAction',  '_format' => 'json',));
                    }
                    not_patch_category:

                    // delete_category
                    if (preg_match('#^/admin/api/categories/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_category;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_category')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::deleteAction',  '_format' => 'json',));
                    }
                    not_delete_category:

                    // fields_category_keyword
                    if (preg_match('#^/admin/api/categories/(?P<categoryId>[^/]++)/keywords/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fields_category_keyword;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fields_category_keyword')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\KeywordController::fieldsAction',  '_format' => 'json',));
                    }
                    not_fields_category_keyword:

                    // get_category_keywords
                    if (preg_match('#^/admin/api/categories/(?P<categoryId>[^/]++)/keywords(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_category_keywords;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_category_keywords')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\KeywordController::cgetAction',  '_format' => 'json',));
                    }
                    not_get_category_keywords:

                    // post_category_keyword
                    if (preg_match('#^/admin/api/categories/(?P<categoryId>[^/]++)/keywords(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_category_keyword;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_category_keyword')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\KeywordController::postAction',  '_format' => 'json',));
                    }
                    not_post_category_keyword:

                    // put_category_keyword
                    if (preg_match('#^/admin/api/categories/(?P<categoryId>[^/]++)/keywords/(?P<keywordId>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_category_keyword;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_category_keyword')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\KeywordController::putAction',  '_format' => 'json',));
                    }
                    not_put_category_keyword:

                    // delete_category_keyword
                    if (preg_match('#^/admin/api/categories/(?P<categoryId>[^/]++)/keywords/(?P<keywordId>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_category_keyword;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_category_keyword')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\KeywordController::deleteAction',  '_format' => 'json',));
                    }
                    not_delete_category_keyword:

                    // delete_category_keywords
                    if (preg_match('#^/admin/api/categories/(?P<categoryId>[^/]++)/keywords(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_category_keywords;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_category_keywords')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\KeywordController::cdeleteAction',  '_format' => 'json',));
                    }
                    not_delete_category_keywords:

                }

                if (0 === strpos($pathinfo, '/admin/api/snippet')) {
                    if (0 === strpos($pathinfo, '/admin/api/snippets')) {
                        // get_snippets
                        if (preg_match('#^/admin/api/snippets(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_snippets;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_snippets')), array (  '_controller' => 'sulu_snippet.controller.snippet:cgetAction',  '_format' => 'json',));
                        }
                        not_get_snippets:

                        // get_snippet
                        if (preg_match('#^/admin/api/snippets(?:/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?)?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_snippet;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_snippet')), array (  '_controller' => 'sulu_snippet.controller.snippet:getAction',  'uuid' => '',  '_format' => 'json',));
                        }
                        not_get_snippet:

                        // post_snippet
                        if (preg_match('#^/admin/api/snippets(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_snippet;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_snippet')), array (  '_controller' => 'sulu_snippet.controller.snippet:postAction',  '_format' => 'json',));
                        }
                        not_post_snippet:

                        // put_snippet
                        if (preg_match('#^/admin/api/snippets/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_put_snippet;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_snippet')), array (  '_controller' => 'sulu_snippet.controller.snippet:putAction',  '_format' => 'json',));
                        }
                        not_put_snippet:

                        // delete_snippet
                        if (preg_match('#^/admin/api/snippets/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_delete_snippet;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_snippet')), array (  '_controller' => 'sulu_snippet.controller.snippet:deleteAction',  '_format' => 'json',));
                        }
                        not_delete_snippet:

                        // post_snippet_trigger
                        if (preg_match('#^/admin/api/snippets/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_snippet_trigger;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_snippet_trigger')), array (  '_controller' => 'sulu_snippet.controller.snippet:postTriggerAction',  '_format' => 'json',));
                        }
                        not_post_snippet_trigger:

                    }

                    // get_snippet_fields
                    if (0 === strpos($pathinfo, '/admin/api/snippet/fields') && preg_match('#^/admin/api/snippet/fields(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_snippet_fields;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_snippet_fields')), array (  '_controller' => 'sulu_snippet.controller.snippet:getFieldsAction',  '_format' => 'json',));
                    }
                    not_get_snippet_fields:

                    if (0 === strpos($pathinfo, '/admin/api/snippet-types')) {
                        // cget_snippet-types
                        if (preg_match('#^/admin/api/snippet\\-types(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_cget_snippettypes;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cget_snippet-types')), array (  '_controller' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\SnippetTypesController::cgetAction',  '_format' => 'json',));
                        }
                        not_cget_snippettypes:

                        // get_snippet-types
                        if (preg_match('#^/admin/api/snippet\\-types(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_snippettypes;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_snippet-types')), array (  '_controller' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\SnippetTypesController::cgetAction',  '_format' => 'json',));
                        }
                        not_get_snippettypes:

                        // put_snippet-types_default
                        if (preg_match('#^/admin/api/snippet\\-types/(?P<key>[^/]++)/default(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_put_snippettypes_default;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_snippet-types_default')), array (  '_controller' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\SnippetTypesController::putDefaultAction',  '_format' => 'json',));
                        }
                        not_put_snippettypes_default:

                        // delete_snippet-types_default
                        if (preg_match('#^/admin/api/snippet\\-types/(?P<key>[^/]++)/default(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_delete_snippettypes_default;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_snippet-types_default')), array (  '_controller' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\SnippetTypesController::deleteDefaultAction',  '_format' => 'json',));
                        }
                        not_delete_snippettypes_default:

                    }

                }

                // get_languages
                if (0 === strpos($pathinfo, '/admin/api/languages') && preg_match('#^/admin/api/languages(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_languages;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_languages')), array (  '_controller' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\LanguageController::cgetAction',  '_format' => 'json',));
                }
                not_get_languages:

            }

            // sulu_location_geolocator_query
            if ($pathinfo === '/admin/location/admin/sulu_location/geolocator') {
                return array (  '_controller' => 'Sulu\\Bundle\\LocationBundle\\Controller\\GeolocatorController::queryAction',  '_route' => 'sulu_location_geolocator_query',);
            }

            // sulu_website.cache.remove
            if ($pathinfo === '/admin/website/cache') {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_sulu_websitecacheremove;
                }

                return array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\CacheController::clearAction',  '_route' => 'sulu_website.cache.remove',);
            }
            not_sulu_websitecacheremove:

            if (0 === strpos($pathinfo, '/admin/api/webspaces')) {
                // cget_webspace_analytics
                if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/analytics(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cget_webspace_analytics;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cget_webspace_analytics')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\AnalyticsController::cgetAction',  '_format' => 'json',));
                }
                not_cget_webspace_analytics:

                // cdelete_webspace_analytics
                if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/analytics(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_cdelete_webspace_analytics;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cdelete_webspace_analytics')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\AnalyticsController::cdeleteAction',  '_format' => 'json',));
                }
                not_cdelete_webspace_analytics:

                // get_webspace_analytics
                if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/analytics/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_webspace_analytics;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_webspace_analytics')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\AnalyticsController::getAction',  '_format' => 'json',));
                }
                not_get_webspace_analytics:

                // post_webspace_analytics
                if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/analytics(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_webspace_analytics;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_webspace_analytics')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\AnalyticsController::postAction',  '_format' => 'json',));
                }
                not_post_webspace_analytics:

                // put_webspace_analytics
                if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/analytics/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_put_webspace_analytics;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_webspace_analytics')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\AnalyticsController::putAction',  '_format' => 'json',));
                }
                not_put_webspace_analytics:

                // delete_webspace_analytics
                if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/analytics/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_delete_webspace_analytics;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_webspace_analytics')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\AnalyticsController::deleteAction',  '_format' => 'json',));
                }
                not_delete_webspace_analytics:

            }

            // sulu_websocket.fallback
            if (0 === strpos($pathinfo, '/admin/websocket') && preg_match('#^/admin/websocket/(?P<appName>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sulu_websocketfallback;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_websocket.fallback')), array (  '_controller' => 'sulu_websocket.fallback_controller:send',  '_format' => 'json',));
            }
            not_sulu_websocketfallback:

            if (0 === strpos($pathinfo, '/admin/api')) {
                // get_localizations
                if (0 === strpos($pathinfo, '/admin/api/localizations') && preg_match('#^/admin/api/localizations(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_localizations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_localizations')), array (  '_controller' => 'Sulu\\Bundle\\CoreBundle\\Controller\\LocalizationController::cgetAction',  '_format' => 'json',));
                }
                not_get_localizations:

                if (0 === strpos($pathinfo, '/admin/api/webspaces')) {
                    // cget_webspace_custom-urls
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_cget_webspace_customurls;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cget_webspace_custom-urls')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::cgetAction',  '_format' => 'json',));
                    }
                    not_cget_webspace_customurls:

                    // cdelete_webspace_custom-urls
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_cdelete_webspace_customurls;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cdelete_webspace_custom-urls')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::cdeleteAction',  '_format' => 'json',));
                    }
                    not_cdelete_webspace_customurls:

                    // cdelete_webspace_custom-urls_routes
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls/(?P<customUrlUuid>[^/]++)/routes(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_cdelete_webspace_customurls_routes;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cdelete_webspace_custom-urls_routes')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::cdeleteRoutesAction',  '_format' => 'json',));
                    }
                    not_cdelete_webspace_customurls_routes:

                    // get_webspace_custom-urls
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_webspace_customurls;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_webspace_custom-urls')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::getAction',  '_format' => 'json',));
                    }
                    not_get_webspace_customurls:

                    // post_webspace_custom-urls
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_webspace_customurls;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_webspace_custom-urls')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::postAction',  '_format' => 'json',));
                    }
                    not_post_webspace_customurls:

                    // put_webspace_custom-urls
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_webspace_customurls;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_webspace_custom-urls')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::putAction',  '_format' => 'json',));
                    }
                    not_put_webspace_customurls:

                    // delete_webspace_custom-urls
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_webspace_customurls;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_webspace_custom-urls')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::deleteAction',  '_format' => 'json',));
                    }
                    not_delete_webspace_customurls:

                    // delete_webspace_custom-urls_routes
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls/(?P<customUrlUuid>[^/]++)/routes(?:\\.(?P<_format>json|csv|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_webspace_customurls_routes;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_webspace_custom-urls_routes')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::cdeleteRoutesAction',  '_format' => 'json',));
                    }
                    not_delete_webspace_customurls_routes:

                }

            }

        }

        $host = $this->context->getHost();

        if (preg_match('#^(?P<host>.+)$#si', $host, $hostMatches)) {
            // website_search
            if (preg_match('#^(?P<prefix>.*)/search$#s', $pathinfo, $matches) && ($request->get("_sulu")->getAttribute("portalInformation")->getType() === 1)) {
                return $this->mergeDefaults(array_replace($hostMatches, $matches, array('_route' => 'website_search')), array (  '_controller' => 'Client\\Bundle\\WebsiteBundle\\Controller\\SearchController::queryAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/search')) {
            // sulu_search_categories
            if ($pathinfo === '/admin/search/indexes') {
                return array (  '_controller' => 'sulu_search.controller.search:indexesAction',  '_format' => 'json',  '_route' => 'sulu_search_categories',);
            }

            // sulu_search_search
            if ($pathinfo === '/admin/search/query') {
                return array (  '_controller' => 'sulu_search.controller.search:searchAction',  '_format' => 'json',  '_route' => 'sulu_search_search',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
