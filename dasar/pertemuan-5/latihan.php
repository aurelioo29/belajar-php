<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .kotak {
      width: 50px;
      height: 50px;
      float: left;
      background-color: blue;
      margin: 5px;
      text-align: center;
      color: white;
      line-height: 50px;
    }

    .clear {
      clear: both;
    }
  </style>
</head>

<body>

  <?php
  $array = [
    [1, 3, 6, 9],
    [2, 4, 6, 8],
    [11, 13, 16, 19]
  ]
  ?>

  <?php foreach ($array as $a) : ?>
    <?php foreach ($a as $b) : ?>
      <div class="kotak">
        <?php echo $b ?>
      </div>
    <?php endforeach ?>
    <div class="clear"></div>
  <?php endforeach ?>
</body>

</html>