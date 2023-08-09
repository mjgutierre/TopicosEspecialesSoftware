<?php
$variables;

//CONST
const CONSTANTE='Soy constante';//MAYUSCULAS PARA IFERENCIAL DE VAR
const NUMEROS=1; //a las constantes les paso cualquier tipo de dato
const COLORES=array('azul','amarillo');

echo COLORES[0];
echo NUMEROS;
echo CONSTANTE;

//define 
define('CONSTANTE2',"Hola Mundo");
echo CONSTANTE2;

define('COLORES2',array('morado','verde'));
echo COLORES2[1];

//CONSTANTES PREDEFINIDAS
echo PHP_INT_MIN;//MENOR VALOR QUE ACEPTA PHP 
?>