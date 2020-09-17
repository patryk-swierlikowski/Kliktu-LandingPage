<div class="w-100 bg-white">
    &nbsp;
    <?php 
        
        function classActiveVendor(){
        $filename = basename($_SERVER['PHP_SELF']);
        if($filename == "vendor.php")  {
          echo "active";
                            } 
        }
        function classActiveExpert(){
        $filename = basename($_SERVER['PHP_SELF']);
        if($filename == "expert.php")  {
          echo "active";
                            } 
        }
        function classActiveKontakt(){
        $filename = basename($_SERVER['PHP_SELF']);
        if($filename == "kontakt.php")  {
          echo "active";
                            } 
        }
    ?>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto text-uppercase"><a href="index.html">Kliktu</a></h1>

      <nav class="main-nav d-none d-lg-block">
        <ul>
          <li class="<?php classActiveVendor(); ?>"><a href="vendor.php">Vendor</a></li>
          <li class="<?php classActiveExpert(); ?>"><a href="expert.php" >Expert</a></li>
          <li class="<?php classActiveKontakt(); ?>"><a href="kontakt.php" >Kontakt</a></li>
        </ul>
          <div class="d-none d-lg-flex align-items-end topbar-transparent">
            <ul class="container d-flex social-links">
              <li class="">
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="">
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </li>
              <li class="">
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              </li>
            </ul>
          </div>
      </nav><!-- .main-nav-->

    </div>
  </header><!-- End Header -->