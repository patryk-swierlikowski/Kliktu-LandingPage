<?php include("header.php"); ?>
  <title>Kliktu | Expert</title>

</head>
<body>
<?php 
	$files_Kliktu = array("menu-expert", "jumbotron-expert", "features-expert", "about-expert", "contact-landing", "whychoose-expert", "footer", "backtotop", "scripts");
	$extensionPhp = '.php';
	$howMany = count($files_Kliktu);
	for ($i=0; $i <$howMany; $i++)
   {
    include($files_Kliktu[$i].$extensionPhp);
   }
?>
</body>
</html>