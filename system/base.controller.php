<?php

class BaseController
{
    public function __construct()
    {
    }

    public function loadView($viewName, $layout = null, $data = array())
    {
        $viewFile = $_ENV['VIEW_DIR'].'/'.$viewName.'.view.php';
        if (file_exists($viewFile)) {
            if ($layout != null) {
                require_once $_ENV['VIEW_DIR'].'/layout/'.$layout.'/header.php';
            }

            require_once $viewFile;

            if ($layout != null) {
                require_once $_ENV['VIEW_DIR'].'/layout/'.$layout.'/footer.php';
            }
        } else {
            die('View File Not Found.');
        }
    }

    public function loadModel($modelName)
    {
        $modelFile = $_ENV['MODEL_DIR'].'/'.$modelName.'.model.php';
        if (file_exists($modelFile)) {
            require_once $modelFile;
            $modelClass = ucfirst($modelName).'Model';
            if (class_exists($modelClass)) {
                return new $modelClass();
            }
        } else {
            die('Model File Not Found.');
        }
    }
}
