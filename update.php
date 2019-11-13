<?php 

include 'koneksi.php';
// $id= $_POST['id'];   
$username =  $_POST ['username'];
$Nama_lapak = $_POST['Nama_lapak'];
$Alamat= $_POST['Alamat'];
$Kategori = $_POST['Kategori'];
$No_Tlp = $_POST['No_Tlp'];
$email = $_POST['Email'];
// $foto = $_POST['foto'];
$deskripsi = $_POST['deskripsi'];
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
        $query = mysqli_query($host, "UPDATE registrasi_laundry  SET  Nama_lapak='$Nama_lapak', Alamat='$Alamat', Kategori='$Kategori', No_Tlp='$No_Tlp', email='$email',deskripsi='$deskripsi', password='$password' WHERE username='$username'");
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