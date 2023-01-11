<?php 

$ambil_data = $conn->query("SELECT * FROM dkriteria WHERE id_kriteria='$_GET[id]'");
$hasil = $ambil_data->fetch_assoc();

$ambil_data2 = $conn->query("SELECT * FROM nkriteria WHERE id_kriteria='$_GET[id]'");
$hasil2 = $ambil_data2->fetch_assoc();

$conn->query("DELETE FROM dkriteria WHERE id_kriteria='$_GET[id]'");
$conn->query("DELETE FROM nkriteria WHERE id_kriteria='$_GET[id]'");

echo "<script>alert('Data Kriteria sudah dihapus!');</script>";
echo "<script>location='index.php?page=Dkriteria';</script>";

?>