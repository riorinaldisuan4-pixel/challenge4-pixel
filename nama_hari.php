
<?php
$nomorHari = 3;

$namaHari = match ($nomorHari) {
    1 => "Senin",
    2 => "Selasa",
    3 => "Rabu",
    4 => "Kamis",
    5 => "Jumat",
    6 => "Sabtu",
    7 => "Minggu",
    default => "Nomor hari tidak valid"
};
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Nama Hari</title>
</head>
<body>
    <h2>Program Nama Hari</h2>

    <p>Nomor Hari: <?= $nomorHari ?></p>
    <h3>Nama Hari: <?= $namaHari ?></h3>
</body>
</html>
