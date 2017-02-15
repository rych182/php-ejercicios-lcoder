<?php

//	function suma($numero1, $numero2)
//	{
//		# code...
//		$resultado = $numero1 + $numero2;
//		return $resultado;
//	}
//		$resultado = suma(25,50);

//Las funciones solo deberían manejar información sin mostrarse en pantalla 
function saludo($nombre) //Esta la manera correcta de trabajar con una función
{ 
	# code...
	return "saludo, " . $nombre;
}

echo saludo("cesar") ."<br/>";
echo saludo("alejandro") ."<br/>";
echo saludo("manuel") ."<br/>";
?>

