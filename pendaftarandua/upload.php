<?php
if (!empty($_FILES)) {
    $targetDir = "uploaded/";
    $fileName = $_FILES['file']['name'];
    $targetFile = $targetDir . $fileName;
    include "koneksi.php";
    $q = mysqli_query($host, "INSERT INTO tb_foto_laundry(foto) values('$fileName')");
    move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);
}
?>

