<?php

use Framework\Api\BaseAbstract;

/**
 * Class UserController
 */
class UserController extends BaseAbstract
{

    /**
     * 初始化
     */
    public function init()
    {
        parent::init();
    }

    /**
     * 用户注册验证
     */
    public function regester(){

        $this->_sentResponse(['title' => 'regiest success', 'time' => time()]);

    }

    /**
     * 用户登录验证
     */
    public function loginAction(){

        $this->_sentResponse(['title' => 'login success', 'time' => time()],'login success');
    }

    public function getUserInfoAction(){

        $data = [];

        $this->_sentResponse($data,'return success');

    }


}