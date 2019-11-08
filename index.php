<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$persona=[
    "nombre" => "jon",
    "apellido" => "snow",
    "edad" => 27,
    "hobbies" => ["Netflix","Futbol","Programar"]
];
$persona["edad"]=25;
$perona ["direccion"]="winterfell";
$persona ["hobbies"] = "cuarto";
var_dump ($persona);
echo "<br>";
//Paso1//
$num1 = 15;
$num2 = 35;
if ($num1>$num2){
    echo $num1 ."es mayor";
}else{
    echo $num2 ."es mayor";
}
echo "<br>";
//Paso2//Paso3//
$random = rand(1,5); //variable rand(x,y) da un resultado RANDOM entre X e Y//
if ($random==3||$random==5)
{
    echo $random;}else{
        echo "el numero no es 3 o 5";
        
    }
    
echo "<br>";
//Paso4//
$paso4 = rand(1,100);
if($paso4>50){
    echo"El numero es mayor a 50";
}
elseif ($paso4 == 50){
echo "El numero es 50";
}else{
    echo "El numero es menor que 50";
}
//Paso5//
echo "<br>";
$nombreDeUsuario = "admin";
$ContrasniaDeUsuario = "1234";
if ($nombreDeUsuario == "admin" && $ContrasniaDeUsuario == "1234"){
echo "Bienvenido";
}elseif($nombreDeUsuario == "" || $ContrasniaDeUsuario == ""){
    echo "Hay campos vacios";
}
elseif($nombreDeUsuario!="admin"){
    echo "Error En usuario";
}elseif($ContrasniaDeUsuario!="1234"){
    echo "Error en contrasenia";
}
//Paso6//
echo "<br>";
$edad = 15;
$casado = false;
$sexo = "";
if($edad>18 && $casado==false || $sexo == "Otro"){
    echo "Bienvenido";
}
//Paso7//
echo "<br>";
$cantidadDeAlumnos = 100; //-100, -1, 0, 1 y 100//
if ($cantidadDeAlumnos){
    echo "true";
}
else {
    echo "false";
}
//Paso8//
echo "<br>";
/*$numero =7 ;
if($numero%2==0){
    echo "Par";
}
else {
    echo "No es Par";
}*/
$numero = 7;
$resultado =  $numero % 2 == 0 ? "true" : "false";
echo $resultado;
//Paso9//
echo "<br>";
$nota = rand(0,10);
switch ($nota){
    case $nota<4:
    echo "desaprobado";
    break;
    case $nota == 4 || 5:
    echo "zafeti";
    break;
    case $nota == 6 || 7 || 8:
    echo "bien";
    break;
    case $nota == 9:
    echo "MUY bien!!";
    break;
    case $nota == 10:
    echo "Excelente!!!!!";
    break;
}
?>   
</body>
</html>