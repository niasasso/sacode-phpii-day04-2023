<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Pendaftaran Kursus SaCode</title>

	<!-- Talwind CSS-CDN -->
	<script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">

	<!-- HEADER START -->
	<header class="m-5 p-5 border-2 shadow-md bg-white">

		<h1 class="text-3xl font-medium text-gray-700 mb-1">Pendaftaran Kursus SaCode</h1>
		<p class="text-xs text-gray-500">Silahkan lengkapi formulir dengan benar.</p>

	</header>
	<!-- HEADER END -->


	<!-- MAIN CONTENT START -->
	<section class="m-5 p-5 border-2 shadow-md bg-white">

		<?php 

			// integrasi form-tambah
			include('form-tambah.php');


		 ?>
		
	</section>
	<!-- MAIN CONTENT END -->



	<!-- FOOTER START -->
	<footer class="m-5 p-5 border-2 shadow-md bg-white">
		<p class="text-gray-500 text-xs">Copyright&copy; 2023, Design By <i><b>SuleniasH</b></i></p>
	</footer>
	<!-- FOOTER END -->



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>