
<?php
$totalAwal = 650000;

if ($totalAwal >= 500000) {
    $diskon = 15;
} elseif ($totalAwal >= 200000) {
    $diskon = 10;
} else {
    $diskon = 0;
}

$besarDiskon = $totalAwal * $diskon / 100;
$totalBayar = $totalAwal - $besarDiskon;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Diskon Toko</title>
</head>
<body>
    <h2>Program Diskon Toko</h2>

    <p>Total Awal: Rp <?= number_format($totalAwal, 0, ',', '.') ?></p>
    <p>Diskon: <?= $diskon ?>%</p>
    <p>Besar Diskon: Rp <?= number_format($besarDiskon, 0, ',', '.') ?></p>
    <h3>Total Bayar: Rp <?= number_format($totalBayar, 0, ',', '.') ?></h3>
</body>
</html>
