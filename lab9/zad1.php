<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>zad 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<body>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="jumbotron">
				<p>Kalkulator</p>
				<form action="wynik.php" method="post">
					<table>
						<tr>
						<td>
							<input type="number" name="arg1"/>
						</td>
						<td>
							<input type="radio" name="op" value="+"> <b>+</b><br>
							<input type="radio" name="op" value="-"> <b>&minus;</b><br>
							<input type="radio" name="op" value="*"> <b>&middot;</b><br>
							<input type="radio" name="op" value="/"> <b>/</b><br>
						</td>
						<td>
							<input type="number" name="arg2" />
						</td>
						<td>
							<input type="submit" value="==">
						<td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
