<?php
use Framework\Api\BaseAbstract;

class ConsoleController extends BaseAbstract
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }


    public function indexAction()
    {
        echo('i am console');
		exit;
    }
}
