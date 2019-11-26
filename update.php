<?php 

include 'koneksi.php';
// $id= $_POST['id'];   
$username =  $_POST ['username'];
$Nama_lapak = $_POST['nama_laundry'];
$Alamat= $_POST['alamat'];
$Kategori = $_POST['id_kattegori'];
$No_Tlp = $_POST['no_tlp'];
$email = $_POST['email'];
// $foto = $_POST['foto'];
$deskripsi = $_POST['deskripsi_laundry'];
$password = $_POST['password'];

$ekstensi_diperbolehkan	= array('png','jpg');
$nama_file = $_FILES['file']['name'];
$x = explode('.', $nama_file);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){			
        move_uploaded_file($file_tmp, 'file/'.$nama_file);
        $query = mysqli_query($host, "UPDATE tb_laundry  SET  nama_laundry='$Nama_lapak', alamat='$Alamat', id_kategori='$Kategori', no_tlp='$No_Tlp', email='$email',deskripsi_laundry='$deskripsi', password='$password' WHERE username='$username'");
        if($query){
            echo 'FILE BERHASIL DI UPLOAD';
        }else{
            echo 'GAGAL MENGUPLOAD GAMBAR';
        }
    }else{
        echo 'UKURAN FILE TERLALU BESAR';
    }
}else{
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}
// mysqli_query($host,"UPDATE registrasi_laundry  SET Nama_lapak='$Nama', Alamat='$Alamat', Kategori='$Kategori', No_Tlp='$No_Tlp', Email='$email' WHERE id_lapak_laundry='$id'");
// header("location:user.php?pesan=update");
?>  