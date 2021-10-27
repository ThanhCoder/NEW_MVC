<?php

class LoginModel extends BaseModel
{
    const TABLE = 'login';

    public function loginPage($username, $password){
        return $this->Login(self::TABLE,$username,$password);
    }
}