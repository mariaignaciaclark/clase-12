<?php include('cabeza.php')?>

<div class="container">
  <div class="row">
    <div class="col-12">

    <h1><?php print $title;?></h1>
        
    <h3><?php print basename($_SERVER['PHP_SELF']);?></h3>

      <img src="https://raw.githubusercontent.com/mariaignaciaclark/ev2/gh-pages/imagenes/trabajo"><?php print (rand(1,3));?>.jpg" class="img-fluid">
    </div>
  </div>
</div>

  <?php include('patas.php')?>