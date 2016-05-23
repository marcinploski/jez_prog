<?php include 'partials/header.php'; ?>
<?php header("Pragma: no-cache"); ?>

<!-- content -->
<div class="page-header">
  <h1>Laboratorium 9 <small>zadanie 3</small></h1>
</div>

<div class="row">
  <div class="col-xs-12">
    <h3>Licznik odsłon</h3>
    <?php
      $file= @fopen("licznik.txt", "c+");
      fscanf($file, "%d", $count);
      $count++;
      rewind($file);
      fputs($file, $count);
      fclose($file);
      echo '<p>Liczba odsłon: <strong>'.$count.'</strong></p>';
    ?>
  </div>
</div>

<?php include 'partials/menu.php'; ?>

<?php include 'partials/footer.php'; ?>
