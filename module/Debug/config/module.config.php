<?php
/**
 * Created by PhpStorm.
 * User: Mid
 * Date: 07/02/2016
 * Time: 15:58
 */


return array(
    'router' => array(
        'routes' => array(
            'debug' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/debug',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Debug\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Debug\Controller\Index' => Debug\Controller\IndexController::class,
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'service_manager' => array(
        'initializers' => array(
            'Users\Service\Initializer\Db',
        ),
        'factories' => array(
            'timer' => 'Debug\Service\Factory\Timer',
            'timer_non_float' => 'Debug\Service\Factory\Timer',
            'crypto' => 'Crypto\Service\Factory',
        ),
        'shared' => array(
            'crypto' => false,
        ),
        'abstract_factories' => array(
            // add here list of resolvable class names
            'Debug\Service\Factory\TimerAbstractFactory',
        ),
        'aliases' => array(
            'Debug\Timer' => 'timer',
        ),
    ),
    'timer' => array(
        'times_as_float' => true,
    ),
    'timer_non_float' => array(
        'times_as_float' => false,
    ),
);