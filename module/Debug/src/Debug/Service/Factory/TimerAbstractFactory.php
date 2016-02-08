<?php
/**
 * Created by PhpStorm.
 * User: Mid
 * Date: 08/02/2016
 * Time: 01:20
 */

namespace Debug\Service\Factory;


use Debug\Service\Timer;
use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TimerAbstractFactory implements AbstractFactoryInterface
{
    /**
     * configuration key holding timer configuration
     * @var string
     */
    protected $configKey = 'timers';





    /**
     * Determine if we can create a service with name
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @param $name
     * @param $requestedName
     * @return bool
     */
    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $config = $serviceLocator->get('config');

        if(empty($config)){
            return false;
        }

        return isset($config[$this->configKey][$requestedName]);

    }

    /**
     * Create service with name
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @param $name
     * @param $requestedName
     * @return mixed
     */
    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $config = $serviceLocator->get('config');
        $timer = new Timer($config[$this->configKey][$requestedName]['times_as_float']);

        return $timer;
    }


}