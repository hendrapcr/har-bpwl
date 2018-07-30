<?php  
	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db   = 'keranjaa';

	$conn = new mysqli ($host, $user, $pass, $db);

	if($conn -> connect_error){
		echo "Koneksi Gagal ".connect_error;
	}

?>