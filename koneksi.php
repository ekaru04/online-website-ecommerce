<?php 

$koneksi = mysqli_connect("localhost","root","","londre");
if($koneksi){
    //echo "koneksi berhasil";
}else{
    echo "koneksi gagal";
}
?>