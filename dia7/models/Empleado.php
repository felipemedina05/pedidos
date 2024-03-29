<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/DB.php");

class Empleado
{
    /**
     * Regresa el registro de todos los empleados
     * 
     * @return array Arreglo con los datos de todos los empleados.
     * 
     */
    public static function all()
    {
        $queryString = "select e.id, e.nombre, e.sueldo, a.id as area_id, a.nombre as area_nombre from empleados e inner join areas a on e.area_id = a.id";

        $res = DB::query($queryString);
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    /**
     * Crea un registro nuevo
     * 
     * @return boolean Indica si se creó un registro.
     * 
     */
    public static function create($data)
    {
        extract($data);
        $queryString = "insert into empleados(nombre, sueldo, area_id) values ('$nombre', '$sueldo', '$area_id')";

        $res = DB::query($queryString);

        if ($res) {
            return true;
        }
    }

    /**
     * Elimina un registro
     * 
     * @return boolean Indica si se eliminó un registro.
     * 
     */
    public static function delete($id)
    {
        $res = DB::query("delete from empleados where id = $id");

        if ($res) {
            return true;
        }
    }

    /**
     * Trae los datos de un empleado por su id. Esto sería igual al método que antes creamos con el nombre de "getById".
     *
     * @param int $id ID del empleado del cual se quieren los datos.
     * @return array Arreglo con los datos del empleado.
     */
    public static function find($id)
    {
        $res = DB::query("select e.id, e.nombre, e.sueldo, e.area_id, a.nombre as area_nombre from empleados e inner join areas a on e.area_id = a.id where e.id = $id;");
        $data = $res->fetch(PDO::FETCH_ASSOC);

        return $data;
    }

    /**
     * Actualiza un registro
     *
     * @param int $data Data del empleado del cual se actualizar los datos.
     * @return boolean Indica si se actualizó el registro.
     */
    public static function update($data)
    {
        $id = $data["id"];
        $nombre = $data["nombre"];
        $sueldo = $data["sueldo"];
        $areaId = $data["area_id"];

        $res = DB::query("update empleados set nombre = '$nombre', sueldo = $sueldo, area_id = $areaId where id = $id");

        if ($res) {
            return true;
        }
    }
}
