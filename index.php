<?php
/*
	echo "Meu primeiro codigo php, Olá Mundo 123 !";
	echo "Bom dia!!!";
	echo "Como você está?";
	echo "Mais uma mensgem";

	echo "Testando mensagem!";

	echo "Olá HCode!"
*/
	/*Variaveis php */

	$nome = "HCode";

	//echo $nome;
	

		
	echo $nomeCompleto = "Fabio Lazari Costa";


	echo "<br>";

	unset($nomeCompleto);

	if (isset ($nomeCompleto)) {
		echo $nomeCompleto;
	}

	echo "<br>";
	echo "<br>";


	$nome = "Fabio";
	$sobreNome = "Lazari";

	$nomeCompleto = $nome . " " . $sobreNome;

	echo $nomeCompleto;

	echo "<br>";
	echo "<br>";
	echo "<br>";

	//Tipos de dados
	$nome 	 = "Hcode";
	$site 	 = 'www.hcode.com.br';
	$ano  	 = 1990;
	$salario = 5500.00;
	$bloqueado = false;

	//*********************************************
	$frutas = array("Abacaxi","Laranja","Manga");
	$numero = array(1, 2, 3, 4, 5, 6);

	echo $frutas[2];

	echo "<br>";
	echo "<br>";
	echo "<br>";

	$nascimento = new DateTime();

	var_dump($nascimento);

	echo "<br>";
	echo "<br>";
	echo "<br>";

	$arquivo = fopen("exemplo-3.php", "r");


	var_dump($arquivo);



	$nulo = null;
	$vazio = "";

	echo $nulo;
	echo $vazio;

	echo "<br>";
	echo "<br>";
	echo "<br>";


	$nome = (int)$_GET["a"];
	$outro = $_GET["b"];

	var_dump($nome);
	echo "<br>";
	var_dump($outro);


	echo "<br>";
	echo "<br>";
	echo "<br>";


	$ip = $_SERVER["REMOTE_ADDR"];
	$script = $_SERVER["SCRIPT_NAME"];



	echo $ip;
	echo $script;


	echo "<br>";
	echo "<br>";


	$nome = "Teste";
	teste();
	
	echo "<br>";
	echo "<br>";

	teste2();

	function teste () {
		//$nome = "Ummmmm";
		global $nome;
		echo $nome;

	}

	function teste2 () {
		$nome = "Fabio";
		echo $nome." ...Agora no teste 2!";

		
	}

	echo "<br>";
	echo "<br>";



	function setMessage() {
 
 		global $message;

    	$message = 'Hello World';
 
	}
 
	setMessage();

	echo $message;

?>
