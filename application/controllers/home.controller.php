<?php

class HomeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $users = parent::loadModel('users');
        $d['users'] = $users->getAll();

        parent::loadView('home', 'newyear', $d);
    }
}
