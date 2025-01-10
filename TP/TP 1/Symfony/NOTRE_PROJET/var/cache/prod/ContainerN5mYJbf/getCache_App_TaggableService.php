<?php

namespace ContainerN5mYJbf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_App_TaggableService extends App_KernelProdContainer
{
    /*
     * Gets the private 'cache.app.taggable' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TagAwareAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['cache.app.taggable'] = new \Symfony\Component\Cache\Adapter\TagAwareAdapter(($container->services['cache.app'] ?? $container->load('getCache_AppService')));
    }
}
