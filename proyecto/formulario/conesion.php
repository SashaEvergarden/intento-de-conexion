<?php
    //conectamos Con el servidor
    $conectar=@mysql_connect('localhost','root','');
    //verificamos la conexion
    if(!$conectar){
        echo"No Se Pudo Conectar Con El Servidor";
    }else{

        $base=mysql_select_db('pedidos');
        if(!$base){
            echo"No Se Encontro La Base De Datos";          
        }
    }
    //recuperar las variables
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    //hacemos la sentencia de sql
    $consulta ="INSERT INTO datos(nombre, email, telefono, direccion) VALUES ('$nombre','$email','$telefono','$dire');
    
    $ejecutar=mysql_query($sql);
    //verificamos la ejecucion
    if(!$ejecutar){
        echo"Hubo Algun Error";
    }else{
        echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
    }
?>