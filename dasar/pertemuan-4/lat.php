<?php
$mahasiswa = [
  ['Aurelio', 2233040202, 'Informatika'],
  ['Budi', 245678920, 'Management']
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>List nama mahasiswa</h1>

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <?php echo $mhs[0] ?>
      </li>
      <li>
        <?php echo $mhs[1] ?>
      </li>
      <li>
        <?php echo $mhs[2] ?>
      </li>
    </ul>
  <?php endforeach ?>
</body>

</html>