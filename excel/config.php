<?php



		$mysqli = new mysqli('localhost', 'root', 'RPJsh8E4a9#C9v', 'inventalogame');
		if ($mysqli->connect_errno) {
			echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}


		
?>