<?php
include_once("VO/Alumnos.php");

class QueryModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get(): array
    {
        $items = [];

        try {
            $query = $this->db->OpenConnection()->query("SELECT matricula, nombre, apellido FROM tblAlumnos");
            while ($row = $query->fetch()) {
                $alumno = new Alumno();
                $alumno->matricula = $row['matricula'];
                $alumno->nombre    = $row['nombre'];
                $alumno->apellido  = $row['apellido'];
                array_push($items, $alumno);
            }
            return $items;
        } catch (PDOException $ex) {
            return [];
        }
    }

    function getById($id): Alumno
    {
        $item = new Alumno();
        $query = $this->db->OpenConnection()->prepare("SELECT * FROM tblAlumnos WHERE matricula = :matricula");
        try {
            $query->execute(['matricula' => $id]);
            while ($row = $query->fetch()) {
                $item->matricula = $row['matricula'];
                $item->nombre    = $row['nombre'];
                $item->apellido  = $row['apellido'];
            }
            return $item;
        } catch (PDOException $ex) {
            return null;
        }
    }

    public function update($item): bool
    {
        $query = $this->db->OpenConnection()->prepare("UPDATE tblAlumnos SET nombre = :nombre, apellido = :apellido WHERE matricula = :matricula");
        try {
            $query->execute([
                'matricula' => $item['matricula'],
                'nombre' => $item['nombre'],
                'apellido' => $item['apellido']
            ]);
            return true;
        } catch (PDOException $ex) {
            return false;
        }
    }

    public function delete($id): bool
    {
        $query = $this->db->OpenConnection()->prepare("DELETE FROM tblAlumnos WHERE matricula = :matricula");
        try {
            $query->execute([
                'matricula' => $id
            ]);
            return true;
        } catch (PDOException $ex) {
            return false;
        }
    }
}
