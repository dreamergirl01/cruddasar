<?php 
include "koneksi.php";
$id_pegawai = $_GET['id_pegawai'];

$query=mysqli_query($koneksi, "DELETE FROM tb_pegawai WHERE id_pegawai='$id_pegawai'");
// var_dump($query);die();
if ($query){
    echo "<script>
    alert('Data Berhasil Dihapus')
    window.location='index.php'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Dihapus')
    window.location='index.php' 
    </script>";
}
?>