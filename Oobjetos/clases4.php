<?php

class saludar{

	function salude(){echo "Buenos dias";}
	function adios(){echo "Hasta luego";}

}
class subsaluda extends saludar{

	var $atributo;
	function holados(){}
}
$instancia = new saludar();
$ins = $instancia->adios();

?>