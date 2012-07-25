<?php

//Testando classe para Sublime captar
/**
* Testando Sublime
*/
class Sublime_Class 
{
	
	function __construct($strHello)
	{
		echo "Do construtor ";
		echo $strHello;
		echo ' encerrando';
	}
	public function imprime()
	{
		echo "Imprimindo sou a Sublime Class";
	}

	public static function openMsg()
	{
		echo "Imprimindo n'importe quoi!";
	}

}
