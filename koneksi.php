<?php 

$koneksi = mysqli_connect("localhost","root","","laundry");
if($koneksi){
    //echo "koneksi berhasil";
}else{
    echo "koneksi gagal";
}
?>