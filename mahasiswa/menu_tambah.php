<?php 
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
//ambil data file
$namafile = $_FILES['gambar']['name'];
$namasementara = $_FILES['gambar']['tmp_name'];
//pindahkan upload
$terupload = move_uploaded_file($namasementara, '../asset/'.$namafile);

$query = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, jenis_kelamin, email, gambar)
VALUES('$nama', '$jenis_kelamin', '$email', '$namafile') ");
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
