<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ay:-)</title>
  </head>
  <style>
    .HP {
          display:inline-block;
          height:10px;
    }
    .HP-curr {
      background-color:green;
    }
    .HP-dmg {
      background-color:red;
    }
  </style>
  <body>
  <?php
  $HP = 100;
    echo "Celkové HP: " . $HP . " HP <br>";
  while ($HP > 0) {
    $DMG = rand(0,10);
    $HP -= $DMG;
 ?>
  <p>DOstal jsem dmg:(: <?php echo $DMG; ?></p>
      <div class="HP HP-curr" style="width:<?php echo $HP;?>px;">
      </div>
      <div class="HP HP-dmg" style="width:<?php echo 100-$HP;?>px;">
      </div>
  <?php } ?>
  </body>
  </html>
