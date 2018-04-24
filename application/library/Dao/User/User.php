<?php

namespace Dao\User;

class User{

    protected $table = 'user';


    public function login($username, $password, $type = 1){

        $userMap = [];

        switch ($type){
            case 1:
                $userMap['username'] = $username;
                break;
            default:
                return 0;
        }

        $user = $

    }

}