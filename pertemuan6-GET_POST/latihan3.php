<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan POST</title>
</head>
<body style="text-align:center;">
<!-- atribut wajib pada form = action&method, jika tidak di isi maka ada nilai default, jadi isilah walaupun nilainya default -->
<!-- jika dihalaman sendiri -->
<?php if( isset($_POST["submit"]) ):?>
    <h1>Selamat Datang, <?php echo $_POST["nama"] ?></h1>
<?php endif; ?>

<form action="latihan4.php" method="post">
    <p>Masukkan nama : </p> <input type="text" name="nama">
    <br><br>
    <button type="submit" name="submit">Kirim</button>
</form>


</body>
</html>