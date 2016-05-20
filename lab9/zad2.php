<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<title>Lista osób</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-xs-6">
        <h3>Nowa osoba:</h3>
        <form>
          <input type="text" name="nowy">
          <?php
          	error_reporting(0);
              if($_REQUEST['ile']!=NULL) {
              	for($i=0;$i<=$_REQUEST['ile'];$i++) {
              		if($i< $_REQUEST['ile'] ) {
                      	$a=$_REQUEST['imie'.$i];
                          echo '<input type="hidden" name="imie'.$i.'" value="'.$a.'" />'."\n";
                      }else {
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
        <h3>Lista osób:</h3>
      	<?php
        	error_reporting(0);
            if ($_REQUEST['ile'] != NULL) {
            	for ($i = 0; $i <= $_REQUEST['ile']; $i++) {
                	if($i< $_REQUEST['ile'] ) {
                    	$a= $_REQUEST['imie'.$i] ;
                        echo $i+1 .". ".$a."<br>";
                    }else {
                        echo $i+1 .". ".$_REQUEST['nowy']."<br>" ;
                    }
                    }
                 }
         ?>
       </div>
     </div>
  </div>
</body>
</html>
