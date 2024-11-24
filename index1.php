<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input nilai dari form
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];
    $nilai4 = $_POST['nilai4'];
    $nilai5 = $_POST['nilai5'];

    // Hitung rata-rata
    $total = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5;
    $rata_rata = $total / 5;

    // Tentukan status kelulusan
    if ($rata_rata >= 60) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    // Tampilkan hasil
    echo "<p><strong>Nilai Rata-Rata:</strong> $rata_rata</p>
            <p><strong>Status Kelulusan:</strong> $status</p>";
}
?>
<div style='font-family: Arial, sans-serif; max-width: 400px; margin: 50px auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
<h2 style='text-align: center; color: #333;'>Hasil Perhitungan</h2>
<a href='index.html' style='display: block; text-align: center; margin-top: 20px; text-decoration: none; background-color: #007bff; color: white; padding: 10px; border-radius: 5px;'>Kembali</a>