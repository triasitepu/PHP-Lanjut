<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Array</title>
</head>
<?php
// Buat array dengan index nama dan umur
$data = array(
    array("nama" => "Tria Wilujeng", "umur" => 19),
    array("nama" => "Zihan Cahya", "umur" => 19),
    array("nama" => "Ergi Sasmige", "umur" =>19),
    array("nama" => "Azzahra Wahyu", "umur" => 19),
    array("nama" => "Dyan Habiby", "umur" => 20),
    array("nama" => "Dinda Vinanti", "umur" => 20),
    array("nama" => "Elin Akma", "umur" => 18),
    array("nama" => "Ayu Maharani", "umur" => 19),
    array("nama" => "Selly Andriani", "umur" => 20),
    array("nama" => "Rini Angreini", "umur" => 19),
    array("nama" => "Angguna", "umur" => 18),
    array("nama" => "Fitri Amalia", "umur" => 20),
    array("nama" => "Anjelika Adisti", "umur" => 19),
    array("nama" => "Fani Rahmasari", "umur" => 19),
    array("nama" => "Arliza Pratiwi", "umur" => 16)
);

// Konversi array menjadi format JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan JSON data
echo nl2br($json_data);
?>
</html>