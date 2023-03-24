<?php 

	#echo "proses tambah...";
	
	/*
	membuat variabel baru dari data yang 
	dikirimkan dari form
	*/
	$nama_lengkap = $_GET['nama_lengkap'];
	$alamat_email = $_GET['alamat_email'];

	// menampilkan nama lengkap
	echo "<b>Nama Lengkap</b>: <br>";
	echo $nama_lengkap;
	echo "<br><br>";

	// menampilkan email
	echo "<b>Alamat Email</b>: <br>";
	echo $alamat_email;

 ?>