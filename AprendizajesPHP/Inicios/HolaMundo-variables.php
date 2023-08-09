<?php

echo '<p>Hola Mundo</p>';

$integer=1;
$float=1.5;
$isTrue=false;
$arrayColores= array('azul','morado');
$string="hola";

echo $integer;
echo $float;
if($isTrue){
echo $arrayColores[0];
echo $string;
echo "verdadero";
}

//Var globales y locales. las globales se pueden asignar en cuañquier parte del codigo
function variablesGlobales(){
    $local="soy la variable local";
    echo $GLOBALS["global"];
    echo $local;
}

$global="soy la variable global";
variablesGlobales();

//variables superglobals

?>