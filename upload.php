<?php
// berfungsi upload foto menggunakan target direktori
if (!empty($_FILES)) {
    $targetDir = "uploaded/";
    $fileName = $_FILES['file']['name'];
    $targetFile = $targetDir . $fileName;
    include "koneksi.php";
    move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);
    $q = mysqli_query($host, "INSERT INTO tb_foto_laundry(foto) values('$fileName')");
}
?>

