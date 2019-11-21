<?php 

$koneksi = mysqli_connect("localhost","root","","gg1");
if($koneksi){
    //echo "koneksi berhasil";
}else{
    echo "koneksi gagal";
}
?>