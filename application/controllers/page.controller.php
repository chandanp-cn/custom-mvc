<?php

class PageController extends BaseController{

    function __construct(){
        parent::__construct();
    }

    public function index(){
       
    
        parent::loadView('page','default',$d);
       
    }
   
}