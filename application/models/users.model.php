<?php

class UsersModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $sql_select_users = 'SELECT username,email FROM users WHERE 1';
        parent::executeQuery($sql_select_users);

        return parent::getResults();
    }

    public function checkUser($username = '', $password = '')
    {
        $sql_select_users = 'SELECT username,email FROM users WHERE username="'.$username.'" AND password="'.$password.'"';
        parent::executeQuery($sql_select_users);

        return parent::getResults();
    }
}
