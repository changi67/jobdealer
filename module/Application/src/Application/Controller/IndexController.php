<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use SmartyModule\View\Renderer\SmartyRenderer;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        #$this->getServiceLocator()
        #     ->get('viewhelpermanager')
        #     ->get('HeadScript')
        #     ->appendFile('/js/');
        return new ViewModel();
    }
    public function aboutAction()
    {

        $view = new ViewModel();
        $view->zendversion = \Zend\Version\Version::VERSION;
        return $view;
    }
}
