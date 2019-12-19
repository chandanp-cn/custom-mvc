<?php

class UserController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    }

    public function getUsers()
    {
        $users = parent::loadModel('users');
        $d['users'] = $users->getAll();

        parent::loadView('api', null, $d);
    }

    public function authenticate()
    {
        $users = parent::loadModel('users');
        $usern = isset($_POST['username']) ? $_POST['username'] : '';
        $pasword = isset($_POST['password']) ? $_POST['password'] : '';
        var_dump($_REQUEST);
        die();
        $d['pass'] = $pasword;
        if ($usern && $pasword) {
            $d['auth'] = $users->checkUser($usern, $pasword);
        }

        parent::loadView('api', null, $d);
    }
}
