<?php
	/****************************************************************************************
	* // Said Alarcon Sosa																	*
	* // T.S.U. en Tecnologias de la Informacion y Comunicacion, Area Sistemas Informaticos	*
	* // saidconsa@gmail.com																*
	* // Fecha: 05/05/2015 02:21:16															*
	****************************************************************************************/

	$conficencial = "Wow such private very confidencial ! ! !";
	$lenguaje = "PHP";
	
// 	Delcarando una funcion
	function view($lenguaje)
	{
		require "view.php";
	}
	
// 	Llamando a una funcion
	view($lenguaje);
?>