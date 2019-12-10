<?php

include "koneksi.php";

//$nim = $_GET['nim'];
//$koneksi->query("DELETE FROM tb_mhs where nim_mahasiswa=".$nim);

$koneksi->query("DELETE FROM tb_mhs where nim_mahasiswa=".$_GET['nim']);



?>
<script>
    document.location = 'data_mahasiswa.php'
</script>