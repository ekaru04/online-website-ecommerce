<?php 

session_start();

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM tb_laundry WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0)
	{
		$data = mysqli_fetch_array($login);
		//Mengecek apakah tanggal aktif dari database lebih besar dari tanggal sekarang
			if($data['expired'] > date("Y-m-d"))
			{
				// login jika tanggal expired lebih besar dari tanggal sekarang
				$_SESSION['username'] = $username;
				header("location:index.php");
			}
			else
			{

				$tanggal_expired = date_create($data['expired']); // waktu disetting seperti didatabase
				$tanggal_bayar = date_add($tanggal_expired, date_interval_create_from_date_string("7 days"));
				// 
				$lama_telat = date_diff($tanggal_bayar, date_create(date('Y-m-d')));
	
				if(date_create(date("Y-m-d")) >= $tanggal_bayar)
				{
					$query = "UPDATE tb_laundry SET status = 'Tidak_aktif' WHERE username = '".$_POST['username']."'";
					mysqli_query($conn,$query);
					header("Location:index.php?pesan=expired");
				}else
				{
	
					header("Location:index.php?pesan=expired&tenggat=".$lama_telat->d);
				}
	
			}
	}
	else
	{
	header("location:index.php?pesan=gagal");
	}

?>