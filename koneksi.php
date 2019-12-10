<?php 

$koneksi = mysqli_connect("localhost","root","","cuci");
if($koneksi){
    //echo "koneksi berhasil";
}else{
    echo "koneksi gagal";
}
?>