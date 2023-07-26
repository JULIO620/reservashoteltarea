<?php

clas Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=reservas-hotel",
						"root",
						"");

		$link->exec("set name utf8");

		return $link;
	}
}