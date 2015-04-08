<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // admin_admin_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_homepage')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/admin/admin')) {
                if (0 === strpos($pathinfo, '/admin/admin/admin/produit')) {
                    // admin_admin_admin_produit_list
                    if ($pathinfo === '/admin/admin/admin/produit/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.produit',  '_sonata_name' => 'admin_admin_admin_produit_list',  '_route' => 'admin_admin_admin_produit_list',);
                    }

                    // admin_admin_admin_produit_create
                    if ($pathinfo === '/admin/admin/admin/produit/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.produit',  '_sonata_name' => 'admin_admin_admin_produit_create',  '_route' => 'admin_admin_admin_produit_create',);
                    }

                    // admin_admin_admin_produit_batch
                    if ($pathinfo === '/admin/admin/admin/produit/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.produit',  '_sonata_name' => 'admin_admin_admin_produit_batch',  '_route' => 'admin_admin_admin_produit_batch',);
                    }

                    // admin_admin_admin_produit_edit
                    if (preg_match('#^/admin/admin/admin/produit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_produit_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.produit',  '_sonata_name' => 'admin_admin_admin_produit_edit',));
                    }

                    // admin_admin_admin_produit_delete
                    if (preg_match('#^/admin/admin/admin/produit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_produit_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.produit',  '_sonata_name' => 'admin_admin_admin_produit_delete',));
                    }

                    // admin_admin_admin_produit_show
                    if (preg_match('#^/admin/admin/admin/produit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_produit_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.produit',  '_sonata_name' => 'admin_admin_admin_produit_show',));
                    }

                    // admin_admin_admin_produit_export
                    if ($pathinfo === '/admin/admin/admin/produit/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.produit',  '_sonata_name' => 'admin_admin_admin_produit_export',  '_route' => 'admin_admin_admin_produit_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/admin/admin/commande')) {
                    // admin_admin_admin_commande_list
                    if ($pathinfo === '/admin/admin/admin/commande/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.commande',  '_sonata_name' => 'admin_admin_admin_commande_list',  '_route' => 'admin_admin_admin_commande_list',);
                    }

                    // admin_admin_admin_commande_create
                    if ($pathinfo === '/admin/admin/admin/commande/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.commande',  '_sonata_name' => 'admin_admin_admin_commande_create',  '_route' => 'admin_admin_admin_commande_create',);
                    }

                    // admin_admin_admin_commande_batch
                    if ($pathinfo === '/admin/admin/admin/commande/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.commande',  '_sonata_name' => 'admin_admin_admin_commande_batch',  '_route' => 'admin_admin_admin_commande_batch',);
                    }

                    // admin_admin_admin_commande_edit
                    if (preg_match('#^/admin/admin/admin/commande/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_commande_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.commande',  '_sonata_name' => 'admin_admin_admin_commande_edit',));
                    }

                    // admin_admin_admin_commande_delete
                    if (preg_match('#^/admin/admin/admin/commande/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_commande_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.commande',  '_sonata_name' => 'admin_admin_admin_commande_delete',));
                    }

                    // admin_admin_admin_commande_show
                    if (preg_match('#^/admin/admin/admin/commande/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_commande_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.commande',  '_sonata_name' => 'admin_admin_admin_commande_show',));
                    }

                    // admin_admin_admin_commande_export
                    if ($pathinfo === '/admin/admin/admin/commande/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.commande',  '_sonata_name' => 'admin_admin_admin_commande_export',  '_route' => 'admin_admin_admin_commande_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata')) {
                if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/admin/sonata/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/admin/sonata/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/admin/sonata/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/admin/sonata/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/admin/sonata/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/admin/sonata/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/admin/sonata/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/admin/sonata/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/page')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/page/page')) {
                        // admin_sonata_page_page_list
                        if ($pathinfo === '/admin/sonata/page/page/list') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_list',  '_route' => 'admin_sonata_page_page_list',);
                        }

                        // admin_sonata_page_page_create
                        if ($pathinfo === '/admin/sonata/page/page/create') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_create',  '_route' => 'admin_sonata_page_page_create',);
                        }

                        // admin_sonata_page_page_batch
                        if ($pathinfo === '/admin/sonata/page/page/batch') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_batch',  '_route' => 'admin_sonata_page_page_batch',);
                        }

                        // admin_sonata_page_page_edit
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_edit',));
                        }

                        // admin_sonata_page_page_delete
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_delete',));
                        }

                        // admin_sonata_page_page_show
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_show',));
                        }

                        // admin_sonata_page_page_export
                        if ($pathinfo === '/admin/sonata/page/page/export') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_export',  '_route' => 'admin_sonata_page_page_export',);
                        }

                        // admin_sonata_page_page_block_list
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/list$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_list')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_list',));
                        }

                        // admin_sonata_page_page_block_create
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/create$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_create')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_create',));
                        }

                        // admin_sonata_page_page_block_batch
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/batch$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_batch')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_batch',));
                        }

                        // admin_sonata_page_page_block_edit
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_edit',));
                        }

                        // admin_sonata_page_page_block_delete
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_delete',));
                        }

                        // admin_sonata_page_page_block_show
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_show',));
                        }

                        // admin_sonata_page_page_block_export
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/export$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_export')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_export',));
                        }

                        // admin_sonata_page_page_block_view
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_view')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::viewAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_view',));
                        }

                        // admin_sonata_page_page_block_savePosition
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/save\\-position$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_savePosition')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::savePositionAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_savePosition',));
                        }

                        // admin_sonata_page_page_block_switchParent
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/switch\\-parent$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_switchParent')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::switchParentAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_switchParent',));
                        }

                        // admin_sonata_page_page_block_composePreview
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<block_id>[^/]++)/compose_preview$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_composePreview')), array (  'block_id' => NULL,  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::composePreviewAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_composePreview',));
                        }

                        // admin_sonata_page_page_snapshot_list
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/list$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_list')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_list',));
                        }

                        // admin_sonata_page_page_snapshot_create
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/create$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_create')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_create',));
                        }

                        // admin_sonata_page_page_snapshot_batch
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/batch$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_batch')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_batch',));
                        }

                        // admin_sonata_page_page_snapshot_edit
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_edit',));
                        }

                        // admin_sonata_page_page_snapshot_delete
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_delete',));
                        }

                        // admin_sonata_page_page_snapshot_show
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_show',));
                        }

                        // admin_sonata_page_page_snapshot_export
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/export$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_export')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_export',));
                        }

                        // admin_sonata_page_page_compose
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/compose$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_compose')), array (  'id' => NULL,  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::composeAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_compose',));
                        }

                        // admin_sonata_page_page_compose_container_show
                        if (0 === strpos($pathinfo, '/admin/sonata/page/page/compose/container') && preg_match('#^/admin/sonata/page/page/compose/container(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_compose_container_show')), array (  'id' => NULL,  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::composeContainerShowAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_compose_container_show',));
                        }

                        // admin_sonata_page_page_tree
                        if ($pathinfo === '/admin/sonata/page/page/tree') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::treeAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_tree',  '_route' => 'admin_sonata_page_page_tree',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/page/block')) {
                        // admin_sonata_page_block_list
                        if ($pathinfo === '/admin/sonata/page/block/list') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_list',  '_route' => 'admin_sonata_page_block_list',);
                        }

                        // admin_sonata_page_block_create
                        if ($pathinfo === '/admin/sonata/page/block/create') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_create',  '_route' => 'admin_sonata_page_block_create',);
                        }

                        // admin_sonata_page_block_batch
                        if ($pathinfo === '/admin/sonata/page/block/batch') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_batch',  '_route' => 'admin_sonata_page_block_batch',);
                        }

                        // admin_sonata_page_block_edit
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_edit',));
                        }

                        // admin_sonata_page_block_delete
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_delete',));
                        }

                        // admin_sonata_page_block_show
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_show',));
                        }

                        // admin_sonata_page_block_export
                        if ($pathinfo === '/admin/sonata/page/block/export') {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_export',  '_route' => 'admin_sonata_page_block_export',);
                        }

                        // admin_sonata_page_block_view
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_view')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::viewAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_view',));
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/page/block/s')) {
                            // admin_sonata_page_block_savePosition
                            if ($pathinfo === '/admin/sonata/page/block/save-position') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::savePositionAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_savePosition',  '_route' => 'admin_sonata_page_block_savePosition',);
                            }

                            // admin_sonata_page_block_switchParent
                            if ($pathinfo === '/admin/sonata/page/block/switch-parent') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::switchParentAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_switchParent',  '_route' => 'admin_sonata_page_block_switchParent',);
                            }

                        }

                        // admin_sonata_page_block_composePreview
                        if (preg_match('#^/admin/sonata/page/block/(?P<block_id>[^/]++)/compose_preview$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_composePreview')), array (  'block_id' => NULL,  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::composePreviewAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_composePreview',));
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/page/block/shared')) {
                            // admin_sonata_page_block/shared_list
                            if ($pathinfo === '/admin/sonata/page/block/shared/list') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_list',  '_route' => 'admin_sonata_page_block/shared_list',);
                            }

                            // admin_sonata_page_block/shared_create
                            if ($pathinfo === '/admin/sonata/page/block/shared/create') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_create',  '_route' => 'admin_sonata_page_block/shared_create',);
                            }

                            // admin_sonata_page_block/shared_batch
                            if ($pathinfo === '/admin/sonata/page/block/shared/batch') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_batch',  '_route' => 'admin_sonata_page_block/shared_batch',);
                            }

                            // admin_sonata_page_block/shared_edit
                            if (preg_match('#^/admin/sonata/page/block/shared/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block/shared_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_edit',));
                            }

                            // admin_sonata_page_block/shared_delete
                            if (preg_match('#^/admin/sonata/page/block/shared/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block/shared_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_delete',));
                            }

                            // admin_sonata_page_block/shared_show
                            if (preg_match('#^/admin/sonata/page/block/shared/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block/shared_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_show',));
                            }

                            // admin_sonata_page_block/shared_export
                            if ($pathinfo === '/admin/sonata/page/block/shared/export') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_export',  '_route' => 'admin_sonata_page_block/shared_export',);
                            }

                            // admin_sonata_page_block/shared_view
                            if (preg_match('#^/admin/sonata/page/block/shared/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block/shared_view')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::viewAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_view',));
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/page/s')) {
                        if (0 === strpos($pathinfo, '/admin/sonata/page/snapshot')) {
                            // admin_sonata_page_snapshot_list
                            if ($pathinfo === '/admin/sonata/page/snapshot/list') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_list',  '_route' => 'admin_sonata_page_snapshot_list',);
                            }

                            // admin_sonata_page_snapshot_create
                            if ($pathinfo === '/admin/sonata/page/snapshot/create') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_create',  '_route' => 'admin_sonata_page_snapshot_create',);
                            }

                            // admin_sonata_page_snapshot_batch
                            if ($pathinfo === '/admin/sonata/page/snapshot/batch') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_batch',  '_route' => 'admin_sonata_page_snapshot_batch',);
                            }

                            // admin_sonata_page_snapshot_edit
                            if (preg_match('#^/admin/sonata/page/snapshot/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_snapshot_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_edit',));
                            }

                            // admin_sonata_page_snapshot_delete
                            if (preg_match('#^/admin/sonata/page/snapshot/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_snapshot_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_delete',));
                            }

                            // admin_sonata_page_snapshot_show
                            if (preg_match('#^/admin/sonata/page/snapshot/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_snapshot_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_show',));
                            }

                            // admin_sonata_page_snapshot_export
                            if ($pathinfo === '/admin/sonata/page/snapshot/export') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_export',  '_route' => 'admin_sonata_page_snapshot_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/page/site')) {
                            // admin_sonata_page_site_list
                            if ($pathinfo === '/admin/sonata/page/site/list') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_list',  '_route' => 'admin_sonata_page_site_list',);
                            }

                            // admin_sonata_page_site_create
                            if ($pathinfo === '/admin/sonata/page/site/create') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_create',  '_route' => 'admin_sonata_page_site_create',);
                            }

                            // admin_sonata_page_site_batch
                            if ($pathinfo === '/admin/sonata/page/site/batch') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_batch',  '_route' => 'admin_sonata_page_site_batch',);
                            }

                            // admin_sonata_page_site_edit
                            if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_edit',));
                            }

                            // admin_sonata_page_site_delete
                            if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_delete',));
                            }

                            // admin_sonata_page_site_show
                            if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_show',));
                            }

                            // admin_sonata_page_site_export
                            if ($pathinfo === '/admin/sonata/page/site/export') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_export',  '_route' => 'admin_sonata_page_site_export',);
                            }

                            // admin_sonata_page_site_snapshots
                            if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/snapshots$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_snapshots')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::snapshotsAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_snapshots',));
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/notification/message')) {
                    // admin_sonata_notification_message_list
                    if ($pathinfo === '/admin/sonata/notification/message/list') {
                        return array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::listAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_list',  '_route' => 'admin_sonata_notification_message_list',);
                    }

                    // admin_sonata_notification_message_batch
                    if ($pathinfo === '/admin/sonata/notification/message/batch') {
                        return array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::batchAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_batch',  '_route' => 'admin_sonata_notification_message_batch',);
                    }

                    // admin_sonata_notification_message_delete
                    if (preg_match('#^/admin/sonata/notification/message/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_notification_message_delete')), array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::deleteAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_delete',));
                    }

                    // admin_sonata_notification_message_show
                    if (preg_match('#^/admin/sonata/notification/message/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_notification_message_show')), array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::showAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_show',));
                    }

                    // admin_sonata_notification_message_export
                    if ($pathinfo === '/admin/sonata/notification/message/export') {
                        return array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::exportAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_export',  '_route' => 'admin_sonata_notification_message_export',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // sonata_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'sonata_user_security_login',);
                }

                // sonata_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sonata_user_security_check;
                    }

                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'sonata_user_security_check',);
                }
                not_sonata_user_security_check:

            }

            // sonata_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'sonata_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            if (0 === strpos($pathinfo, '/resetting/re')) {
                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
                }
                not_fos_user_resetting_reset:

                // sonata_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'sonata_user_resetting_request',);
                }
                not_sonata_user_resetting_request:

            }

            // sonata_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sonata_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'sonata_user_resetting_send_email',);
            }
            not_sonata_user_resetting_send_email:

            // sonata_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_resetting_check_email',);
            }
            not_sonata_user_resetting_check_email:

            // sonata_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
            }
            not_sonata_user_resetting_reset:

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

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // sonata_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'sonata_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // sonata_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_registration_check_email',);
                }
                not_sonata_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // sonata_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_sonata_user_registration_confirm:

                    // sonata_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'sonata_user_registration_confirmed',);
                    }
                    not_sonata_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/profile/change-password')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // sonata_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'sonata_user_change_password',);
            }
            not_sonata_user_change_password:

        }

        if (0 === strpos($pathinfo, '/admin/log')) {
            if (0 === strpos($pathinfo, '/admin/login')) {
                // sonata_user_admin_security_login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                }

                // sonata_user_admin_security_check
                if ($pathinfo === '/admin/login_check') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                }

            }

            // sonata_user_admin_security_logout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/sonata/cache')) {
            // sonata_cache_esi
            if (0 === strpos($pathinfo, '/sonata/cache/esi') && preg_match('#^/sonata/cache/esi/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_esi')), array (  '_controller' => 'sonata.cache.esi:cacheAction',));
            }

            // sonata_cache_ssi
            if (0 === strpos($pathinfo, '/sonata/cache/ssi') && preg_match('#^/sonata/cache/ssi/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_ssi')), array (  '_controller' => 'sonata.cache.ssi:cacheAction',));
            }

            if (0 === strpos($pathinfo, '/sonata/cache/js-')) {
                // sonata_cache_js_async
                if ($pathinfo === '/sonata/cache/js-async') {
                    return array (  '_controller' => 'sonata.cache.js_async:cacheAction',  '_route' => 'sonata_cache_js_async',);
                }

                // sonata_cache_js_sync
                if ($pathinfo === '/sonata/cache/js-sync') {
                    return array (  '_controller' => 'sonata.cache.js_sync:cacheAction',  '_route' => 'sonata_cache_js_sync',);
                }

            }

            // sonata_cache_apc
            if (0 === strpos($pathinfo, '/sonata/cache/apc') && preg_match('#^/sonata/cache/apc/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_apc')), array (  '_controller' => 'sonata.cache.apc:cacheAction',));
            }

            // sonata_cache_symfony
            if (0 === strpos($pathinfo, '/sonata/cache/symfony') && preg_match('#^/sonata/cache/symfony/(?P<token>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_symfony')), array (  '_controller' => 'sonata.cache.symfony:cacheAction',));
            }

        }

        if (0 === strpos($pathinfo, '/exceptions')) {
            // sonata_page_exceptions_list
            if ($pathinfo === '/exceptions/list') {
                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageController::exceptionsListAction',  '_route' => 'sonata_page_exceptions_list',);
            }

            // sonata_page_exceptions_edit
            if (0 === strpos($pathinfo, '/exceptions/edit') && preg_match('#^/exceptions/edit/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_page_exceptions_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageController::exceptionEditAction',));
            }

        }

        if (0 === strpos($pathinfo, '/sonata/page/cache')) {
            // sonata_page_cache_esi
            if (0 === strpos($pathinfo, '/sonata/page/cache/esi') && preg_match('#^/sonata/page/cache/esi/(?P<_token>[^/]++)/(?P<manager>[^/]++)/(?P<page_id>[^/]++)/(?P<block_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_page_cache_esi')), array (  '_controller' => 'sonata.page.cache.esi:cacheAction',));
            }

            // sonata_page_cache_ssi
            if (0 === strpos($pathinfo, '/sonata/page/cache/ssi') && preg_match('#^/sonata/page/cache/ssi/(?P<_token>[^/]++)/(?P<manager>[^/]++)/(?P<page_id>[^/]++)/(?P<block_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_page_cache_ssi')), array (  '_controller' => 'sonata.page.cache.ssi:cacheAction',));
            }

            if (0 === strpos($pathinfo, '/sonata/page/cache/js-')) {
                // sonata_page_js_async_cache
                if ($pathinfo === '/sonata/page/cache/js-async') {
                    return array (  '_controller' => 'sonata.page.cache.js_async:cacheAction',  '_route' => 'sonata_page_js_async_cache',);
                }

                // sonata_page_js_sync_cache
                if ($pathinfo === '/sonata/page/cache/js-sync') {
                    return array (  '_controller' => 'sonata.page.cache.js_sync:cacheAction',  '_route' => 'sonata_page_js_sync_cache',);
                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
