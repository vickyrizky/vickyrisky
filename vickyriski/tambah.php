<?php
include ("koneksi.php");

$NIM = $_POST['NIM'];
$NAMA = $_POST['NAMA'];
$SEMESTER = $_POST['SEMESTER'];
$FAKULTAS = $_POST['FAKULTAS'];
$JURUSAN = $_POST['JURUSAN'];
mysqli_query($conn,"insert into mahasiswa values
('$NIM','$NAMA','$SEMESTER'.'$FAKULTAS','$JURUSAN')");
header("location:form_tambah.php");
?>