
<?php
$angka = 8;

$hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Genap atau Ganjil</title>
</head>
<body>
    <h2>Genap atau Ganjil</h2>

    <p>Angka: <?= $angka ?></p>
    <h3>Hasil: <?= $hasil ?></h3>
</body>
</html>
