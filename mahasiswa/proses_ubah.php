<?php 
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];

if ($_FILES['gambar']['name'] == '') {
    //jika gambar kosong
    $gambar = $_POST['gambar_lama'];
} else {
    //jika gambar diganti (gambar baru)
    // pindahkan file
    $gambar = $_FILES['gambar']['name'];
    $namaSementara = $_FILES['gambar']['tmp_name'];

    //hapus gambar lama
    unlink('../asset/' . $_POST['gambar_lama']);
    //pindahkan gambar baru
    $terupload = move_uploaded_file($namaSementara, '../asset/' . $gambar);
}

$query = mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$nim',nama='$nama', jenis_kelamin='$jenis_kelamin', 
email='$email' gambar='$gambar' WHERE nim='$nim'");
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