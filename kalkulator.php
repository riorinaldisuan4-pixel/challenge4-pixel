
<?php
$namaBarang = "Buku";
$harga = 18000;
$jumlah = 3;

$total = $harga * $jumlah;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Belanja</title>
</head>
<body>
    <h2>Kalkulator Belanja</h2>

    <p>Nama Barang: <?= $namaBarang ?></p>
    <p>Harga Satuan: Rp <?= number_format($harga, 0, ',', '.') ?></p>
    <p>Jumlah: <?= $jumlah ?></p>
    <h3>Total Harga: Rp <?= number_format($total, 0, ',', '.') ?></h3>
</body>
</html>
