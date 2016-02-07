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

);