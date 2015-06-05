<?php

class dimeHola{

	var $atributo;
	function dimeHola($hola){

		$this->atributo= $hola;
		echo $this->atributo;
	}
}

$decir= new dimeHola("hola");

?>