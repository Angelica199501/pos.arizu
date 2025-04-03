<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=pos",
			            "pos",
			            "teeo4X[WM[7GKnzF");

		$link->exec("set names utf8");

		return $link;

	}

}