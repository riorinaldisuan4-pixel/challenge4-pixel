
<?php
$berat = 65;       // Berat dalam kg
$tinggi = 1.70;    // Tinggi dalam meter

if ($berat <= 0 || $tinggi <= 0) {
    $bmi = null;
    $kategori = "Berat dan tinggi harus lebih dari 0";
} else {
    $bmi = $berat / ($tinggi * $tinggi);

    if ($bmi < 18.5) {
        $kategori = "Kurus";
    } elseif ($bmi < 25) {
        $kategori = "Normal";
    } elseif ($bmi < 30) {
        $kategori = "Gemuk";
    } else {
        $kategori = "Obesitas";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator BMI</title>
</head>
<body>
    <h2>Indeks Massa Tubuh (BMI)</h2>

    <p>Berat Badan: <?= $berat ?> kg</p>
    <p>Tinggi Badan: <?= $tinggi ?> meter</p>

    <?php if ($bmi !== null): ?>
        <p>BMI: <?= number_format($bmi, 1, ',', '.') ?></p>
        <h3>Kategori: <?= $kategori ?></h3>
    <?php else: ?>
        <h3><?= $kategori ?></h3>
    <?php endif; ?>
</body>
</html>
