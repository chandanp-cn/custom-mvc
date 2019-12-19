<?php
class UsersModel extends BaseModel{

    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $sql_select_users = "SELECT username,email FROM users WHERE 1";
        parent::executeQuery($sql_select_users);
        return parent::getResults();
    }
}