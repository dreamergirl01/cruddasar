<?php 
include "koneksi.php";
$nama = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telephone = $_POST['no_telephone'];
$alamat = $_POST['alamat'];
//ambil data file
$namafile = $_FILES['gambar']['name'];
$namasementara = $_FILES['gambar']['tmp_name'];
//pindahkan upload
$terupload = move_uploaded_file($namasementara, 'asset/'.$namafile);

$query = mysqli_query($koneksi, "INSERT INTO tb_pegawai (nama_lengkap, jenis_kelamin, no_telephone, alamat, gambar)
VALUES('$nama', '$jenis_kelamin', '$no_telephone', '$alamat', '$namafile') ");
// var_dump($query);die();

if ($query){
    echo "<script>
    alert('Data Berhasil Ditambahkan')
    window.location='index.php'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Ditambahkan')
    window.location='tambah.php' 
    </script>";
}
