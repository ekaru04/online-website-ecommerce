<?php 
include 'koneksi.php'; //include merupan perintah untuk menyisipkanfile php ke dalam file php yang lainnya
// $id_lapak= $_POST['d_lapak_laundry'];
$ekstensi_diperbolehkan	= array('png','jpg');
$nama_file = $_FILES['id_foto_laundry']['name'];
$x = explode('.', $nama_file);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['id_foto_laundry']['size'];
$file_tmp = $_FILES['id_foto_laundry']['tmp_name'];
$username =  $_POST ['username'];
$Nama_lapak = $_POST['nama_laundry'];
$Alamat= $_POST['alamat'];
$Kategori = $_POST['id_kategori'];
$No_Tlp = $_POST['no_tlp'];
$email = $_POST['email'];
// $foto = $_POST['foto'];
$deskripsi = $_POST['deskripsi_laundry'];
$password = $_POST['password'];
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){			
        move_uploaded_file($file_tmp, 'file/'.$nama_file);
        $query = mysqli_query($host,"INSERT INTO tb_laundry (username,nama_laundry, alamat,id_kategori, no_tlp, email,id_foto_laundry, deskripsi_laundry, `password`)  VALUES('$username','$Nama_lapak','$Alamat','$Kategori','$No_Tlp','$email','$nama_file', '$deskripsi','$password')");
       if($query){
            echo 'FILE BERHASIL DI UPLOAD';
            header("lOcAtioN:../Rebellion/user.php");
        }else{
            echo 'GAGAL MENGUPLOAD GAMBAR';
        }
    }else{
        echo 'UKURAN FILE TERLALU BESAR';
    }
}else{
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}
 //query mysql untuk menjalankan perintah pada mysql (untuk menampilkan data pada tabel user variabel)

 
//  header("location:index.php?pesan=input"); //untuk mengalihkan halaman
?>