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

        }

        // liip_theme_switch
        if (0 === strpos($pathinfo, '/theme') && preg_match('#^/theme/(?P<theme>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_liip_theme_switch;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_theme_switch')), array (  '_controller' => 'liip_theme.theme_controller:switchAction',));
        }
        not_liip_theme_switch:

        // sulu_media.website.image.proxy
        if (0 === strpos($pathinfo, '/uploads/media') && preg_match('#^/uploads/media/(?P<slug>.*)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_media.website.image.proxy')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaStreamController::getImageAction',  '_requestAnalyzer' => false,));
        }

        // sulu_media.website.media.download
        if (0 === strpos($pathinfo, '/media') && preg_match('#^/media/(?P<id>[^/]++)/download/(?P<slug>.*)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_media.website.media.download')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaStreamController::downloadAction',  '_requestAnalyzer' => false,));
        }

        $host = $this->context->getHost();

        if (preg_match('#^(?P<host>.+)$#si', $host, $hostMatches)) {
            // website_search
            if (preg_match('#^(?P<prefix>.*)/search$#s', $pathinfo, $matches) && ($request->get("_sulu")->getAttribute("portalInformation")->getType() === 1)) {
                return $this->mergeDefaults(array_replace($hostMatches, $matches, array('_route' => 'website_search')), array (  '_controller' => 'Client\\Bundle\\WebsiteBundle\\Controller\\SearchController::queryAction',));
            }

        }

        // sulu_website.sitemap.xml
        if ($pathinfo === '/sitemap.xml') {
            return array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\SitemapController::indexAction',  '_route' => 'sulu_website.sitemap.xml',);
        }

        if (preg_match('#^(?P<host>.+)$#si', $host, $hostMatches)) {
            // _twig_error_test
            if (preg_match('#^(?P<prefix>.*)/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches) && ($request->get("_sulu")->getAttribute("portalInformation")->getType() === 1)) {
                return $this->mergeDefaults(array_replace($hostMatches, $matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
