<?php include("header.php"); ?>
  <title>Kliktu | Vendor</title>

</head>
<body>
<?php 
	$files_Kliktu = array("menu", "jumbotron-vendor", "features-vendor", "about-vendor", "contact-landing", "whychoose-vendor", "footer", "backtotop", "scripts");
	$extensionPhp = '.php';
	$howMany = count($files_Kliktu);
	for ($i=0; $i <$howMany; $i++)
   {
    include($files_Kliktu[$i].$extensionPhp);
   }
?>
</body>
</html>