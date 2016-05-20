<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<title>Licznik</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="jumbotron">
					<h>Licznik odwiedzin :<br>

						<?php
										session_start();
										$counter_name = "counter.txt";
										if (!file_exists($counter_name)) {
										  $f = fopen($counter_name, "w");
										  fwrite($f,"0");
										  fclose($f);
										}
										$f = fopen($counter_name,"r");
										$counterVal = fread($f, filesize($counter_name));
										fclose($f);
										if(!isset($_SESSION['hasVisited'])){
										  $_SESSION['hasVisited']="yes";
										  $counterVal++;
										  $f = fopen($counter_name, "w");
										  fwrite($f, $counterVal);
										  fclose($f);
										}
										echo '<span style="font-size: 26px;">'.'Jesteś odwiedzającym nr '.$counterVal .'</span>';
									?>

					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
