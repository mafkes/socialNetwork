<?php
/**
 * Created by PhpStorm.
 * User: Mid
 * Date: 07/02/2016
 * Time: 15:59
 */

namespace Debug\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    /**
     *
     */
    public function indexAction()
    {
        return new ViewModel(array(

        ));
    }

}