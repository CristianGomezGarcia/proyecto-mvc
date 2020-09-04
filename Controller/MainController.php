<?php
class MainController extends Controller
{
    function __construct()
    {
        parent::__construct();
        //echo "<p>Nuevo controlador Main</p>";
    }
    
    function render()
    {
        $this->view->render('Main/index');
    }

    function Saludo()
    {
        echo "<h1>Este es un saludo en h1</h1>";
    }
}
