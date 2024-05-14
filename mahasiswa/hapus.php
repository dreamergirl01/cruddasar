<?php 
include "koneksi.php";
$nim = $_GET['nim'];

$query=mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim='$nim'");
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