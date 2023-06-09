<?php

//json_decode  ->  Takes a JSON encoded string and converts it into a PHP value.
//json_encode  ->  Returns the JSON representation of a value

//PDO_MYSQL 
//is a driver that implements the PHP Data Objects (PDO) interface to enable 
//access from PHP to MySQL databases.


//MySQLi
//PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases


$productos= [
  [
    "id" => "1",
      "nombre" => "Ladrillos",
      "descripcion" => "Ladrillos de arcilla cocida para construcción",
      "precio" => 10.50,
      
  ],
  [
    "id" => "2",
      "nombre" => "Cemento",
      "descripcion" => "Bolsa de cemento Portland para mezclas de concreto",
      "precio" => 25.75,
     
  ],
  [
    "id" => "2",
      "nombre" => "Arena",
      "descripcion" => "Arena fina para mezclas de construcción",
      "precio" => 8.25,
     
  ],
  [
    "id" => "3",
      "nombre" => "Varillas de acero",
      "descripcion" => "Varillas de acero corrugado para refuerzo estructural",
      "precio" => 35.00,
     
  ],
  [
    "id" => "4",
      "nombre" => "Bloques de concreto",
      "descripcion" => "Bloques de concreto para muros y divisiones",
      "precio" => 12.80,
    
  ]
];



$datosproductos = json_decode($producto, true);


$server = "localhost";
$user = "root";
$pass = "";
$bd = "alquiArtemis";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");


foreach ($datosproductos as $productos) {
    
    mysqli_query($conexion,"INSERT INTO productos (id,descripcion,nombre,precio) 
    VALUES ('".$productos['id']."','".$productos['descripcion']."','".$productos['nombre']."','".$productos['precio']."')");	
        
}	


mysqli_close($conexion);

?>

?>