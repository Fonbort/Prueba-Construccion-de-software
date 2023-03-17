<?php

class Service {
    
    private $servicio;
    private $db;

    public function __construct() {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=bicicletas', "root", "");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getServicios() {

        self::setNames();
        $sql = "SELECT id, marca, modelo ,precio, tipo FROM bicicletas";
        foreach ($this->db->query($sql) as $res) {
            $this->servicio[] = $res;
        }
        return $this->servicio;
    }

    public function setServicio($id, $marca, $modelo, $precio, $tipo) {

        self::setNames();
        $sql = "INSERT INTO bicicletas(id, marca, modelo, precio, tipo) VALUES ('" . $id. "', '" . $marca. "' , '".$modelo."' ,'".$precio."' , '".$tipo."')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteServicio($id){
        self::setNames();
        $sql = "DELETE FROM bicicletas where id='".$id."'";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }

    }
    public function updateservicios($id){
        self::setNames();
        $sql = "UPDATE  bicicletas where id='".$id."'";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }

    }
}
?>