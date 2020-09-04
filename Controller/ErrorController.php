<?php
class ErrorController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->errorMessage = "Error no especificado";
        $this->view->render('Error/index');
        //echo "<p>Página no encontrada</p>";
    }
}
