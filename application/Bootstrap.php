<?php
use Framework\Base\Router;
use Yaf\Application;
use Yaf\Bootstrap_Abstract;
use Yaf\Dispatcher;
use Illuminate\Database\Capsule\Manager as Capsule;

class Bootstrap extends Bootstrap_Abstract
{

    public $_config;

	public function _initConfig()
	{
	    $this->_config = Application::app()->getConfig();

	    $modules = Application::app()->getModules();


	}

	public function _initRoute($request)
    {

        $dispatcher = Dispatcher::getInstance();


        $router = $dispatcher->getRouter();
        $router->addRoute('router', new Router());

    }

	public function _initCheckBrowser()
    {
//        print_r($_SERVER['HTTP_USER_AGENT']);


    }

    public function _initCauple(){

	    /* @var $capsule \Illuminate\Database\Capsule\Manager*/
	    $capsule = new Capsule();

	    $capsule->addConnection($this->_config);

    }

}
