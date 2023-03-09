<?php
$conn = mysqli_connect('localhost','root','','smart_irrigation');

$suhu = $_GET['suhu'];
$kelembaban = $_GET['kelembaban'];
$sensorValue = $_GET['sensorValue'];


mysqli_query($conn, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");
//simpan nilai sensor ke tabel tb_sensor
$simpan = mysqli_query($conn, "INSERT INTO tb_sensor(suhu, kelembaban, sensorValue)VALUES('$suhu', '$kelembaban', '$sensorValue')");

//berikan respon ke nodemcu
if($simpan)
	echo "Berhasil disimpan";
else
	echo "Gagal tersimpan";

?>