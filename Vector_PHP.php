<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ejemplo ARREGLOS PHP</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		echo "<h1>========= ARREGLOS ASOCIATIVOS =========</H1>";

		$calificacionesSemestrales = array("Jose"=> $calificaciones=array(70, 81, 80, 100, 87, 90),
											"Freddy"=> $calificaciones=array(100, 80, 100, 90, 100, 100),
											"Leo"=> $calificaciones=array(85, 80, 90, 70, 80, 85),
											"Manuel"=> $calificaciones=array(95, 70, 98, 77, 82, 85),
											"Bryan"=> $calificaciones=array(80, 70, 96, 79, 83, 95),
											"Octa"=> $calificaciones=array(87, 85, 70, 78, 84, 86),
											"Lupita"=> $calificaciones=array(85, 70, 70, 78, 88, 95),
											"Sara"=> $calificaciones=array(95, 100, 93, 78, 90, 95),
											"Dulce"=> $calificaciones=array(85, 80, 90, 70, 80, 85),
											"Liz"=> $calificaciones=array(85, 90, 90, 90, 80, 85), );
		echo"<br>";

		var_dump($calificacionesSemestrales);
		echo "<h3>========= Promedio general =========</h3>";
		promedio($calificacionesSemestrales);
		echo "<h3>========= Promedio por alumno =========</h3>";
		promedioAlumno($calificacionesSemestrales);
		echo "<h3>========= Promedio por materia =========</h3>";
		promedioMateria($calificacionesSemestrales);
		echo "<h3>========= Mejor promedio =========</h3>";
		mejorPromedio($calificacionesSemestrales);
		echo "<h3>========= Alumnos con promedio mayor al promedio general =========</h3>";
		promedioMayor($calificacionesSemestrales);
		echo"<br>";

		function promedio($vector){
			$res = 0;
			$c = 0;
			foreach ($vector as $califica) {
				for ($i=0; $i < sizeof($califica); $i++) { 
					$c++;
					$res += $califica[$i];
				}	
			}
			echo "<br> Promedio general del grupo: " .$promedio = $res/$c;
		}

		function promedioAlumno($vector){
			$cont = 0;
			$promAlumno = array();
			$suma = 0;
			foreach($vector as $producto => $detalles){
				echo "<br><br> $producto: ";
				foreach($detalles as $indice => $valor){
					echo " $valor ";
					$cont++;
					$suma += $valor;
				}
				$suma = $suma/$cont;
				$promAlumno[$producto] = $suma; 
				echo " Promedio: $suma";
				$suma = 0;
				$cont = 0;
 			}
    		return $promAlumno;
		}

		function promedioMateria($vector){
			$cont = 0;
			$promMateria = 0;
			$promMateria1 = 0;
			$promMateria2 = 0;
			$promMateria3 = 0;
			$promMateria4 = 0;
			$promMateria5 = 0;
			$suma = 0;
			$suma1 = 0;
			$suma2 = 0;
			$suma3 = 0;
			$suma4 = 0;
			$suma5 = 0;
			foreach ($vector as $key => $calificaciones) {
				foreach ($calificaciones as $key => $valor) {
				 	if ($key == 0) {
				 		$suma += $valor;
				 		$promMateria = $suma / 10;	
				 	}
				 	elseif ($key == 1) {
				 		$suma1 += $valor;
				 		$promMateria1 = $suma1 / 10;	
				 	}
				 	elseif ($key == 2) {
				 		$suma2 += $valor;
				 		$promMateria2 = $suma2 / 10;	
				 	}
				 	elseif ($key == 3) {
				 		$suma3 += $valor;
				 		$promMateria3 = $suma3 / 10;	
				 	}
				 	elseif ($key == 4) {
				 		$suma4 += $valor;
				 		$promMateria4 = $suma4 / 10;	
				 	}
				 	elseif ($key == 5) {
				 		$suma5 += $valor;
				 		$promMateria5 = $suma5 / 10;	
				 	}
				} 
			}
			echo " <br><br>Promedio materia 1: $promMateria";
			echo " <br><br>Promedio materia 2: $promMateria1";
			echo " <br><br>Promedio materia 3: $promMateria2";
			echo " <br><br>Promedio materia 4: $promMateria3";
			echo " <br><br>Promedio materia 5: $promMateria4";
			echo " <br><br>Promedio materia 6: $promMateria5";
    	}

    	function mejorPromedio($vector){
			$cont = 0;
			$promAlumno = array();
			$suma = 0;
			$x = 0;
			foreach($vector as $producto => $detalles){
				//echo "<br><br> $producto: ";
				foreach($detalles as $indice => $valor){
					//echo " $valor ";
					$cont++;
					$suma += $valor;
				}
				$suma = $suma/$cont;
				$promAlumno[$producto] = $suma; 
				if ($x < $suma) {
					$nombre = $producto;
					$x = $suma;
				}
				$suma = 0;
				$cont = 0;
 			}
    		sort($promAlumno);
    		echo "<br> El mejor promedio es $nombre $promAlumno[9]";
		}

		function promedioMayor($vector){
			$res = 0;
			$c = 0;
			$promedio = 0;
			foreach ($vector as $califica) {
				for ($i=0; $i < sizeof($califica); $i++) { 
					$c++;
					$res += $califica[$i];
				}	
			}
			$promedio = $res/$c;
			$cont = 0;
			$promAlumno = array();
			$suma = 0;
			$co = 0;
			foreach($vector as $producto => $detalles){
				echo "";
				foreach($detalles as $indice => $valor){
					//echo " $valor ";
					$cont++;
					$suma += $valor;
				}
				$suma = $suma/$cont;
				$promAlumno[$producto] = $suma;
				if ($suma > $promedio) {
					$co ++;
					echo "$producto promedio: $suma <br><br>";
				} 
				
				$suma = 0;
				$cont = 0;
 			}
    		echo "Numero de alumnos con promedio mayor: $co<br><br>";
		}
	?>
</body>
</html>