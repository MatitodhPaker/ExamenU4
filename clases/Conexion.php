<?php 
    class Conexion{
      public function conectar(){
        $server="localhost";
        $usuario="root";
        $password="";
        $bd="bdequipos";
        $conexion=mysqli_connect($server, $usuario, $password, $bd);
        return $conexion;
      }
    }
?>