<?php
/**
 * Created by PhpStorm.
 * User: Mid
 * Date: 08/02/2016
 * Time: 00:57
 */

namespace Debug\Service\Factory;


use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Timer implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('config');
        $timer = new TimerService($config['timer']['time_as_float']);
        return $timer;
    }


}