<?php
class QueryController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->alumnos = [];
        //echo "<p>Nuevo controlador Main</p>";
    }

    function render()
    {
        $alumnos = $this->model->get();
        $this->view->alumnos = $alumnos;
        $this->view->render('Query/index');
    }

    function VerAlumno($params = null)
    {
        $idAlumno = $params[0];
        $alumno = $this->model->getById($idAlumno);
        session_start();
        $_SESSION['id_VerAlumno']   = $alumno->matricula;
        $this->view->alumno         = $alumno;
        $this->view->mensaje        = "";
        $this->view->render('Query/detalle');
    }

    function ActualizarAlumno()
    {
        session_start();
        $matricula  = $_SESSION['id_VerAlumno'];
        $nombre     = $_POST['nombre'];
        $apellido   = $_POST['apellido'];

        unset($_SESSION['id_VerAlumno']);
        if ($this->model->update(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])) {
            //Actulizar los datos del almuno - éxito
            $alumno = new Alumno();
            $alumno->matricula  = $matricula;
            $alumno->nombre     = $nombre;
            $alumno->apellido   = $apellido;

            $this->view->alumno = $alumno;
            $this->view->mensaje = "La información del alumno se actualizó correctamente";
        } else {
            $this->view->mensaje = "La información del alumno no se pudo actualizar";
        }
        $this->view->render('Query/detalle');
    }

    function EliminarAlumno($param = null)
    {
        $matricula = $param[0];
        if ($this->model->delete($matricula)) {
            //$this->view->mensaje = "El alumno ha sido eliminado correctamente";
            $mensaje = "El alumno ha sido eliminado correctamente";
        } else {
            //$this->view->mensaje = "No se pudo eliminar al alumno";
            $mensaje = "No se pudo eliminar al alumno";
        }
        //$this->render();
        echo $mensaje;
    }
}
