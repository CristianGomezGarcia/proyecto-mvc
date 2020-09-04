<?php
require_once("Controller/ErrorController.php");
class App
{
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $SimpleNameUrl = $url[0];

        //Cuando se ingresa sin definir un controlador
        if (empty($url[0])) {
            $archivoController = 'Controller/MainController.php';
            require_once($archivoController);
            $controller = new MainController();
            $controller->loadModel('Main');
            $controller->render();
            return false;
        } else {
            $url[0] .= 'Controller';
        }
        $archivoController = 'Controller/' . $url[0] . '.php';
        if (file_exists($archivoController)) {
            require_once($archivoController);
            //Inicializar el controlador
            $controller = new $url[0];
            //Cargar el modelo
            $controller->loadModel($SimpleNameUrl);
            //Número de elementos del arreglo
            $nparams = sizeof($url);
            if ($nparams > 1) {
                if ($nparams > 2) {
                    $params = [];
                    for ($i = 2; $i < $nparams; $i++) {
                        array_push($params, $url[$i]);
                    }
                    $controller->{$url[1]}($params);
                } else {
                    $controller->{$url[1]}();
                }
            } else {
                $controller->render();
            }
        } else {
            $controller = new ErrorController();
        }
    }
}
