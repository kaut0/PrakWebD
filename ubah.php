<?php
include "koneksi.php";

$nim = $_POST['nim_mahasiswa'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$semester = $_POST['semester'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_mahasiswa = $_POST['status_mahasiswa'];


$ubah = "UPDATE tb_mhs SET nim_mahasiswa=".$nim.", nama_mahasiswa='".$nama_mahasiswa."', semester ='".$semester."', jurusan='".$jurusan."',
           alamat='".$alamat."', no_hp=".$no_hp.", email='".$email."', jenis_kelamin='".$jenis_kelamin."', status_mahasiswa='".$status_mahasiswa."' WHERE nim_mahasiswa=".$nim;

// cek koneksiS
if (mysqli_query($koneksi, $ubah)) {
    echo "<script languange= 'javascript'>
    alert('data berhasil di ubah')
    document.location = 'data_mahasiswa.php'
    </script>";
    
} else {
    echo "lapor !! data tidak berhasil disimpan" . mysqli_error($koneksi);
}