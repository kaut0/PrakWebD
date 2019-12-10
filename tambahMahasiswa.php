<?php

include("koneksi.php");

//var_dump($_POST);
$nim = $_POST['nim_mahasiswa'];
$nama = $_POST['nama_mahasiswa'];
$semester = $_POST['semester'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$phone = $_POST['no_hp'];
$email = $_POST['email'];
$jk = $_POST['jenis_kelamin'];
$status = $_POST['status_mahasiswa'];

$simpan = "INSERT INTO tb_mhs (`nim_mahasiswa`, `nama_mahasiswa`, `semester`, `jurusan`,
`alamat`, `no_hp`, `email`, `jenis_kelamin`, `status_mahasiswa`) VALUES ('$nim','$nama','$semester',
'$jurusan','$alamat','$phone','$email','$jk','$status')";

mysqli_query($koneksi, $simpan);

header("location:home.html");
