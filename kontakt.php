<?php include("header.php"); ?>
  <title>Kliktu | Kontakt</title>

</head>
<body>
<?php 
	$files_Kliktu = array("menu", "contact-site", "whychoose", "footer", "backtotop", "scripts");
	$extensionPhp = '.php';
	$howMany = count($files_Kliktu);
	for ($i=0; $i <$howMany; $i++)
   {
    include($files_Kliktu[$i].$extensionPhp);
   }
?>
</body>
</html>