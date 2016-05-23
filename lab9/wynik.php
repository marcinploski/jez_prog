<?php include 'partials/header.php'; ?>

<!-- content -->
<div class="page-header">
  <h1>Laboratorium 9 <small>zadanie 1</small></h1>
</div>

<a class="btn btn-default" href="lab9_zad1.php">Wróć</a>

<div class="row">
  <div class="col-xs-12">
    <div class="well">
      <?php

      	$arg1 = $_POST["arg1"];
      	$op = $_POST["op"];
      	$arg2 = $_POST["arg2"];

      	if(isset($arg1) AND isset($op) AND isset($arg2))
      	{
      		if ($op == "+"){
      			$wyliczenie = $arg1 + $arg2;
      			echo "<p>$arg1 + $arg2 = $wyliczenie</p>";
      		}

      		elseif ($op == "-"){
      			$wyliczenie = $arg1 - $arg2;
      			echo "<p>$arg1 - $arg2 = $wyliczenie</p>";
      		}

      		elseif($op == "*"){
      			$wyliczenie = $arg1 * $arg2;
      			echo "<p>$arg1 * $arg2 = $wyliczenie</p>";
      		}

      		elseif($op == "/"){
      			$wyliczenie = $arg1 / $arg2;
      			echo "<p>$arg1 / $arg2 = $wyliczenie</p>";
      		}
      	}

      	else
      		echo "Jakaś zmienna nie została użyta! Spróbój ponownie!"
      ?>
    </div>
  </div>
</div>

<?php include 'partials/menu.php'; ?>

<?php include 'partials/footer.php'; ?>
