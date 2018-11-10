<?php

	function segitigaAsli($width)
	{

		if ($width > 10) {
			echo "Panjang Tidak Boleh Melebihi 10";
		} else {

			for ($row = 1; $row <= $width; $row++) {
				for ($col = 1; $col <= $row; $col++) { 
					echo $col.", ";
				}
				echo "<br>";
			}
		}
	}


	segitigaAsli(6);