<?php 
include "koneksi.php";

$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telephone = $_POST['no_telephone'];
$alamat = $_POST['alamat'];

$query = mysqli_query($koneksi, "UPDATE tb_pegawai SET nama_lengkap='$nama', jenis_kelamin='$jenis_kelamin', 
no_telephone='$no_telephone', alamat='$alamat' WHERE id_pegawai='$id_pegawai'");
var_dump($query);

if ($query){
    echo "<script>
    alert('Data Berhasil Diubah')
    window.location='index.php'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Diubah')
    window.location='ubah.php' 
    </script>";
}
?>