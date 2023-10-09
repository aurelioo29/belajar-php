<?php
// looping pada array

$array = [1,3,5,7,9];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .kotak{
      margin: 10px;
      padding: 10px;
      text-align: center;
      float: left;
      background-color: green;
      margin: 5px;
      line-height: 20px;
    }
    .clear{
      clear: both;
    }

  </style>
</head>
<body>
  <!-- Looping menggunakan For -->
  <?php for ($i=0 ; $i < count($array) ; $i++) : ?>
    <div class="kotak"><?php echo $array[$i] ?></div>
  <?php endfor ?>

  <div class="clear"></div>

  <!-- Looping menggunakan ForEach -->
  <?php foreach ($array as $arrays) {?>
    <div class="kotak"><?php echo $arrays ?></div>
  <?php } ?>
</body>
</html>