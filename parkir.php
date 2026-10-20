
<?php
$jenis = "Motor"; // Motor atau Mobil
$lamaJam = 5;

if ($lamaJam <= 0) {
    $tarif = 0;
    $pesan = "Lama parkir harus lebih dari 0 jam.";
} elseif ($jenis == "Motor") {
    $tarif = 2000;

    if ($lamaJam > 2) {
        $tarif += ($lamaJam - 2) * 1000;
    }

    $pesan = "Tarif parkir berhasil dihitung.";
} elseif ($jenis == "Mobil") {
    $tarif = 5000;

    if ($lamaJam > 2) {
        $tarif += ($lamaJam - 2) * 3000;
    }

    $pesan = "Tarif parkir berhasil dihitung.";
} else {
    $tarif = 0;
    $pesan = "Jenis kendaraan tidak valid.";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif Parkir</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-5">

    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-blue-700 mb-6">
            Tarif Parkir
        </h2>

        <div class="space-y-3 text-gray-700">
            <p>Jenis Kendaraan: <strong><?= htmlspecialchars($jenis) ?></strong></p>
            <p>Lama Parkir: <strong><?= $lamaJam ?> jam</strong></p>
            <p><?= htmlspecialchars($pesan) ?></p>
        </div>

        <div class="bg-blue-50 rounded-xl p-5 mt-6">
            <p class="text-gray-600">Total Biaya Parkir</p>
            <h3 class="text-3xl font-bold text-blue-700 mt-2">
                Rp <?= number_format($tarif, 0, ',', '.') ?>
            </h3>
        </div>

        <p class="text-sm text-gray-500 mt-5">
            Motor: Rp 2.000 untuk 2 jam pertama,
            lalu Rp 1.000 per jam berikutnya.
            <br><br>
            Mobil: Rp 5.000 untuk 2 jam pertama,
            lalu Rp 3.000 per jam berikutnya.
        </p>
    </div>

</body>
</html>
