<?php
function conectar(){
    $host="localhost";
    $user="u646610080_amayaernesto";
    $pass="Utd_2021";

    $bd="u646610080_amayaernesto";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
