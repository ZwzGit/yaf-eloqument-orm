<?php

namespace Framework\Base;

use Yaf\Application;
use Yaf\Request_Abstract;
use Yaf\Route_Static;

class Router extends Route_Static
{

    public function assemble(array $info, array $query = null)
    {
        return parent::assemble($info, $query);
    }

    /**
     * @param Request_Abstract $request;
     * @return bool
     */
    public function route($request)
    {
        $modules = Application::app()->getModules() ? Application::app()->getModules() : [];

        $uri = $request->getRequestUri();

        $path = explode('/', substr($uri, 1));

        $pathInfo = [
            'modules' => 'Index',
            'controller' => 'Index',
            'action'    => 'index'
        ];

        $module = ucfirst(array_shift($path));

        if(in_array($module, $modules)){
            $pathInfo['modules'] = $module;
            $pathInfo['controller'] = count($path) && $path[0] ? ucfirst(array_shift($path)) : 'Index';
            $pathInfo['action']     = count($path) && $path[0] ? ucfirst(array_shift($path)) : 'Index';
        }

        $request->setModuleName($pathInfo['modules']);
        $request->setControllerName($pathInfo['controller']);
        $request->setActionName($pathInfo['action']);
        $request->setRouted();

        return true;
    }

}