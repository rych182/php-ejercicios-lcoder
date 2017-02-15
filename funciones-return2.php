<?php

	function calcular_area_triangulo($base, $altura)
	{
		# code...
		$resultado = ($base * $altura) /2;
		return $resultado;
	}

	echo calcular_area_triangulo(10, 10);
?>