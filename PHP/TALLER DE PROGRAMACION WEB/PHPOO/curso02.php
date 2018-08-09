<?php

class calculadora


{

	var $op1;
	var $op2;
	var $res;

function sumar($valor1,$valor2)

	{
       $this->op1 = $valor1 + $valor2;
	}


     function multiplicar($valor1,$valor2)
     {
       $this->op2 = $valor1 * $valor2;

     }

       function resultado()
     {
       $this->res = $this->op1 + $this->op2;
       echo $this->res;
     }

}

class texto extends calculadora
{

var $var1;
function mostrar($par1)
{
	

  $this->var1 = $par1;
	echo $this->var1;
  
  }

}


$clase = new texto;
$clase->sumar(2,2);
$clase->multiplicar(3,3);
$clase->resultado();
$clase->mostrar("Hola esto es un metodo de la sub-clase");

?>