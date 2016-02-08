<?php
/**
 * Created by PhpStorm.
 * User: Mid
 * Date: 08/02/2016
 * Time: 02:00
 */

namespace Users\Service\Initializer;


use Zend\Db\Adapter\AdapterAwareInterface;
use Zend\ServiceManager\InitializerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Db implements InitializerInterface
{
    /**
     * Initialize
     *
     * @param $instance
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function initialize($instance, ServiceLocatorInterface $serviceLocator)
    {
        if($instance instanceof AdapterAwareInterface){
            $instance->setDbAdapter($serviceLocator->get('database'));
        }
    }


}