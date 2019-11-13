<?php
//Paso1//
echo "paso1"."<br>";
$numero = 10;
$resultado = 2;
$total= 0 ;
for($i=0;$i<$numero;$i++){
    $total = $resultado * $i;
    echo "2x".$i . "=" .$total. "<br>";
}
echo"<br>";
//Paso2//
echo "paso2"."<br>";
$cuenta = [100,99,98,97,96,95,94,93,92,91,90,89,88,87,86,85];
$aux = 0;
while ($aux<count($cuenta)){
    echo $cuenta[$aux]."<br>";
    $aux++;
}
//Paso3//
echo "paso3"."<br>";
$contador = [1,2,3,4,5];
$resultado = 0;
$aux = 0;
while($aux<count($contador)){
    $resultado = $contador[$aux] *2;
echo $resultado. "<br>";
$aux++;}
//Paso4//
echo "paso4"."<br>";

//Paso5//
$paso = 5;
//a//
echo $paso ."a". "<br>";
$array = ["Marta","Ramon","Luis","Helena","Mariana"];
for($i=0;$i<count($array);$i++){
    var_dump($array[$i]);
    echo"<br>";
}

//b//
echo $paso ."b". "<br>";
$array = ["Marta","Ramon","Luis","Helena","Mariana"];
$aux =0;
while ($aux<count($array)){
    echo $array[$aux];
    $aux++;
    echo"<br>";
}
//c//
echo $paso ."c". "<br>";
$array = ["Marta","Ramon","Luis","Helena","Mariana"];
$aux=0;
do{
    echo $array [$aux] . "<br>";
    $aux++;
}
while ($aux<count($array));
//d//
echo $paso ."D". "<br>";
$array = ["Marta","Ramon","Luis","Helena","Mariana"];
foreach($array as $arrayNuevo){
    echo $arrayNuevo . "<br>";
}
//Paso6 Definir un array con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir todos los números. La ejecución debe terminarse si alguno de los números encontrados es un 5 (Se debe imprimir “Se encontró un 5!”)//
echo "paso 6"."<br>";

//Paso7 Definir un array con 10 números aleatorios entre 0 y 100. Recorrer este array contando cuantos números son pares.//
echo "paso 7"."<br>";
$varP7[]=rand(0,100);
$auxP7 =0;
while($auxP7=10){

    $auxP7++;
}
//Paso8//
echo "paso 8"."<br>";
//Paso9//
echo "paso 9"."<br>";
$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;
//Paso10//
echo "paso 10"."<br>";
//Paso11//
//Paso12//
//Paso13//
//Paso14//
//Paso15//
echo "paso 15"."<br>";
?>