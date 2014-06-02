<?php
class Kwf_Extensible_TestController extends Kwf_Controller_Action
{
    public function indexAction()
    {
        $view = new Kwf_View();
        $view->dep = new Kwf_Assets_Package(new Kwf_Extensible_Assets_TestProviderList(), 'Kwf.Extensible.Assets.Basic');
        $this->getResponse()->setBody($view->render(dirname(__FILE__).'/Basic.tpl'));
        $this->_helper->viewRenderer->setNoRender(true);
    }
}
