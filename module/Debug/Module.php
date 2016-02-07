<?php
/**
 * Created by PhpStorm.
 * User: Mid
 * Date: 07/02/2016
 * Time: 15:57
 */

namespace Debug;


class Module
{
    /**
     *
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     *
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            )
        );
    }

}