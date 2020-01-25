<?php
// fungsi include untuk menyertakan file php lain ke dalam suatu program php
include 'koneksi.php';
// include "vendor/autoload.php";

use Intervention\Image\ImageManagerStatic as Image;

$getInt = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_foto_laundry) FROM tb_foto_laundry"))[0];

$b = mysqli_fetch_array(mysqli_query($conn, "SELECT MAX(AUTO_INCREMENT) FROM information_schema.tables WHERE table_name = 'tb_laundry'"))[0];


$date = date("Ymd");
$day30 = strtotime($date . " + 1 months");
$fDay = date("Ymd", $day30);

// membuat variabel sesuai di dalam database
$username = $_POST['username'];
$nama_laundry = $_POST['nama_laundry'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
$email = $_POST['email'];
$telp = $_POST['no_telp'];
$deskripsi = $_POST['deskripsi_laundry'];
$kategori = $_POST['id_detail_kategori'];
$allowedExt = array("jpg","png","jpeg");
// echo "<pre>";
// $id = $getInt['id_laundry'] + 1;
// print_r($_POST); 





$indexFoto = 0 ;
$statusGambar = 0;

foreach($_FILES['foto']['name'] as $p){
    
    $tipeData = explode('.',$p);
    $tipeData = strtolower(end($tipeData));

    if($indexFoto <= 5){ 
        if(in_array($tipeData, $allowedExt))
        {
            $sql1 = "INSERT INTO tb_foto_laundry VALUES('$getInt','$p')";
            

            move_uploaded_file($_FILES['foto']['tmp_name'][$indexFoto], $_SERVER['DOCUMENT_ROOT']."/Rebellion/img/".$p); 

            mysqli_query($conn,$sql1);

            $indexFoto++;
            $statusGambar = 1;

        }else
        {
            echo '<script type="text/javascript">
            alert("Terjadi sebuah kesalahan");
            </script>';
        }
    }else{
        echo '<script type="text/javascript">
        alert("foto tidak boleh melebihi 5");
        </script>';
    }


}

// $a = "INSERT INTO tb_laundry VALUES ('', '$username', '$nama_laundry', '$alamat', '$password', '$email', '$telp', '$deskripsi', '$b', '$getInt', '$fDay', 'Aktif')";
if($statusGambar == 1){
mysqli_query($conn, "INSERT INTO tb_laundry VALUES ('', '$username', '$nama_laundry', '$alamat', '$password', '$email', '$telp', '$deskripsi', '$b', '$getInt', '$fDay', 'Aktif')")or die(mysqli_error($conn));

foreach ($kategori as $key) {
    mysqli_query($conn, "INSERT INTO tb_detail_kategori VALUES('$b', '$key')")or die(mysqli_error($conn));
    }
}else{
    echo '<script type="text/javascript">
        alert("Maaf bos, regis lagi");
        </script>';
}
// mysqli_query($host, "INSERT INTO tb_laundry VALUES ('', '$username', '$nama_laundry', '$alamat', '$password', '$email', '$telp', '$deskripsi', '$b', '$getInt', '$fDay', 'Aktif')")or die(mysqli_error($host));

//     foreach ($kategori as $key) {
//     mysqli_query($host, "INSERT INTO tb_detail_kategori VALUES('$b', '$key')")or die(mysqli_error($host));
//     }




// foreach ($kategori as $key) {
//     mysqli_query($host, "INSERT INTO tb_detail_kategori VALUES('$c', '$key')")or die(mysqli_error($host));
// }



// foreach($_FILES['foto']['name'] as $p){
//     if($indexFoto < 6){
//         echo $id;
//         $sql1 = "INSERT INTO tb_foto_laundry VALUES ('$id', '', '$p')";

//         move_uploaded_file($_FILES['foto']['tmp_name'][$indexFoto], $_SERVER['DOCUMENT_ROOT']."/Rebellion/img/".$p);
//         //Image::make($_SERVER['DOCUMENT_ROOT']."/Rebellion/img/".$p)->resize(348, 400)->save($_SERVER['DOCUMENT_ROOT']."/Rebellion/img/".$p);
//         mysqli_query($conn, $sql1);
//     }else{
//         echo '<script type="text/javascript">
//         alert("foto tidak boleh melebihi 5");
//         </script>';
//     }


// mysqli_query($conn, "INSERT INTO tb_laundry(id_laundry, username, nama_laundry, alamat, password, email, no_telp, deskripsi_laundry, id_detail_kategori, id_foto_laundry, expired) VALUES('', '$username', '$nama_laundry', '$alamat', '$password', '$email', '$no_telp', '$deskripsi_laundry', '$kategori', '$getInt', '$fDay' )");
header("location:user.php");
// if($indexFoto < 6){
// 
// }

?>