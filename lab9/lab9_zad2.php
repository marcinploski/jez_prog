<?php include 'partials/header.php'; ?>

<!-- content -->
<div class="page-header">
  <h1>Laboratorium 9 <small>zadanie 2</small></h1>
</div>

<div class="row">
  <div class="col-xs-6">
    <h3>Lista osób na imprezę</h3>
    <form>
      <div class="input-group">
      <input type="text" class="form-control" name="nowy" placeholder="Imię" required>
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Dodaj</button>
      </span>
    </div>
      <?php
        error_reporting(0);
          if($_REQUEST['ile']!=NULL) {
            for($i=0;$i<=$_REQUEST['ile'];$i++) {
              if($i< $_REQUEST['ile'] ) {
                $a=$_REQUEST['imie'.$i];
                echo '<input type="hidden" name="imie'.$i.'" value="'.$a.'" />'."\n";
              }
              else {
                echo '<input type="hidden" name="imie'.$i.'" value="'.$_REQUEST['nowy'].'" />'."\n";
              }
            }
          }
        ?>
      <input type ="hidden" name="ile" value="<?php if($_REQUEST['ile']==NULL){ echo "0";}
      if($_REQUEST['ile']!=NULL){ $a= $_REQUEST['ile']; echo $a+1;}?>">
    </form>
  </div>
  <div class="col-xs-6">
    <h3>Zapisane osoby</h3>
    <div class="panel panel-default">
      <div class="panel-body">
        <?php
          error_reporting(0);
            if ($_REQUEST['ile'] != NULL) {
              for ($i = 0; $i <= $_REQUEST['ile']; $i++) {
                if($i< $_REQUEST['ile'] ) {
                    $a= $_REQUEST['imie'.$i];
                      echo $i+1 .". ".$a."<br>";
                }
                else {
                  echo $i+1 .". ".$_REQUEST['nowy']."<br>";
                }
              }
            }
            else {
              echo '<p>Nikt się jeszcze nie zapisał.</p>';
            }
         ?>
       </div>
     </div>
   </div>
</div>

<?php include 'partials/menu.php'; ?>

<?php include 'partials/footer.php'; ?>
