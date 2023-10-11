<!-- 
  Pada SuperGlobal POST, harus menggunakan FORM,
  agar aman karena link nya tidak nampak di atas.
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- 
    Pada form harus ada 2 Atribut, action & method
    jika tidak ada tidak bakalan error, tetapi akan ada
    nilai deafult simpan ke 2 atribut itu
  -->
  <?php if (isset($_POST['nama'])) : ?>
    <h1>Welcome Back, <?php echo $_POST["nama"] ?></h1>
  <?php endif ?>

  <!-- 
    Jika action nya tidak di isi, ia akan menyimpan di form itu juga 
  -->
  <form action="" method="post">
    Username = 
    <input type="text" name="nama">
      <button type="submit" name="send">Send</button>
  </form>
</body>
</html>