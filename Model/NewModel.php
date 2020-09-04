<?php
class NewModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos): bool
    {
        //Insertar datos en la base de datos
        try {
            $query = $this->db->OpenConnection()->prepare('INSERT INTO tblAlumnos(matricula,nombre,apellido) VALUES(:matricula, :nombre, :apellido)');
            $query->execute(['matricula' => $datos['matricula'], 'nombre' => $datos['nombre'], 'apellido' => $datos['apellido']]);
            return true;
        } catch (PDOException $ex) {
            //echo "La matrícula ya existe en la base de datos";
            return false;
        }
    }
}
