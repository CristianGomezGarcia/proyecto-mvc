<?php
class Controller
{
    var $view;

    function __construct()
    {
        //echo "<h1>Controlador base</h1>";
        $this->view = new View();
    }

    function loadModel($model)
    {
        $url = 'Model/' . $model . 'Model.php';
        if (file_exists($url)) {
            require($url);
            $modelName = $model . 'Model';
            $this->model = new $modelName;
        }
    }
}
