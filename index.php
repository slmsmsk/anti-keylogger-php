<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="kapsayici">
	<p>cyber-warrior</p>
	<?php
		require 'class.sifre.php';
		
		$sifre = 'cyber-warrior'; // Şifre
		$sayi = 3; // Sorulacak karakter sayısı
		
		sifre::olustur($sifre,$sayi);
		
	?>
	</div>
</body>
</html>
