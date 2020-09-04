<?php
class NewController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
        //echo "<p>Nuevo controlador Main</p>";
    }

    function render()
    {
        $this->view->render('New/index');
    }

    function RegistrarAlumno()
    {
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        if ($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre,  'apellido' => $apellido])) {
            $mensaje = "Se ha registrado correctamente";
        } else {
            $mensaje = "La matrícula ya existe en la base de datos";
        }
        $this->view->mensaje = $mensaje;
        $this->render();
    }
}
