<?php

namespace Services\User;

abstract class User_Abstract
{
    public function __construct()
    {

        $this->init();
    }

    public function init(){}

}