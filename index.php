<?php include("header.php"); ?>
  <title>Kliktu | Dobre produkty rekomendowane przez klientów</title>

</head>
<body>
<?php 
	$files_Kliktu = array("menu", "jumbotron", "features", "about", "contact-landing", "whychoose", "footer", "backtotop", "scripts");
	$extensionPhp = '.php';
	$howMany = count($files_Kliktu);
	for ($i=0; $i <$howMany; $i++)
   {
    include($files_Kliktu[$i].$extensionPhp);
   }
?>
</body>
</html>