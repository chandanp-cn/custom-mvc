<?php
require_once(dirname(__DIR__).'/vendor/autoload.php');

use Symfony\Component\Dotenv\Dotenv;

class Setup{
    
    function __construct(){
        
        $this->loadENV();
        
        $this->processRequest();
    }


    function loadENV(){
        $dotenv = new Dotenv();
        $dotenv->load(dirname(__DIR__).'/.env');
    }

    function processRequest(){
        
        require_once($_ENV['SYS_DIR'].'/base.controller.php');
        require_once($_ENV['SYS_DIR'].'/base.model.php');
        $controllerName = isset($_REQUEST['controller'])?$_REQUEST['controller']:$_ENV['DEFAULT_CONTROLLER'];
        $actionName = isset($_REQUEST['action'])?$_REQUEST['action']:$_ENV['DEFAULT_ACTION'];

        $controllerFile = $_ENV['APP_DIR'].'/controllers/'.$controllerName.'.controller.php';

        if(file_exists($controllerFile)){
            require_once($controllerFile);
            $controllerClass = ucfirst($controllerName).'Controller';
            if(class_exists($controllerClass)){
                if(method_exists($controllerClass,$actionName)){
                    call_user_func(array($controllerClass,$actionName));
                }else{
                    die("method $actionName not found");
                }

            }else{
                die('controller class not found');
            }
        }else{
            die('controller file not found');
        }

    //var_dump($_REQUEST);
    }
}

