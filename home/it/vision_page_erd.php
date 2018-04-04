<!-- AUTHOR:
  -BACK END :
              - CHRISTIAN SHEVA ALEXANDER
              - VITO RADITYA FAUZAN
  -FRONT END : 
              -ALDIAN FEBRIYANTO
              -FARIZ AZHAR KHALIED
              
  SMK BAKTI IDHATA 
-->

<!DOCTYPE html>
<!-- saved from url=(0036)https://s.bootsnipp.com/iframe/Qb83E -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="robots" content="noindex, nofollow">

    <title>IT</title>

    <!--Bootstrap & CSS-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/bootstrap.min(1).css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="style_it.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/ffcico.ico"/>

    <!--script-->
    <script src="../assets/js/jquery-1.11.1.min.js.download"></script>
    <script src="../assets/js/bootstrap.min.js(1).download"></script>

 

</head>
<body>
	    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
       <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" style="background-color: #008080;">
           <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a class="navbar-brand js-scroll-trigger" href="../index.html"><img src="../img/kaefce.png" style="height: 70px; margin-top: 10px;"></a>
                </li>
                <li>
                    <a href="index.php" style="margin-top: 40px;">Information Technology</a>
                </li>


                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IT Infrastructure<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">   </li>
                    <li><a href="vision_page_infra.php">Visi & Misi</a></li>
                    <li><a href="biodata.php">Biodata Karyawan</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IT ERD<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">   </li>
                    <li><a href="vision_page_erd.php">Visi & Misi</a></li>
                    <li><a href="biodata.php">Biodata Karyawan</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IT Support<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">   </li>
                    <li><a href="vision_page_support.php">Visi & Misi</a></li>
                    <li><a href="biodata.php">Biodata Karyawan</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IT Solution<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">   </li>
                    <li><a href="vision_page_solution.php">Visi & Misi</a></li>
                    <li><a href="biodata.php">Biodata Karyawan</a></li>
                  </ul>
                </li>
                
                <li>
                    <a href="contact.php">Contact Us</a>
                </li>

                <li>
                  <a href="../login/index.php">Admin</a>
                </li>

            
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container" style="background-color:#fefbf7; border-radius: 15px; margin-bottom: 21%; text-align: center;">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1>IT Electronic Data Processing</h1>


        <hr class="style-eight">
          <div class="gallery">
            <div class="box">
             
               <h3>Visi</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus efficitur nunc in pharetra. Suspendisse nisl sapien, varius at felis quis, cursus porta dui. Mauris nec sagittis velit. Nullam id enim convallis, pharetra leo ut, egestas mi. Quisque vel libero orci. Proin porta nunc quis orci aliquet aliquam. Cras id fermentum nisl.</p>
              
            </div>
            
            <div class="box">
              
               <h3>Misi</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus efficitur nunc in pharetra. Suspendisse nisl sapien, varius at felis quis, cursus porta dui. Mauris nec sagittis velit. Nullam id enim convallis, pharetra leo ut, egestas mi. Quisque vel libero orci. Proin porta nunc quis orci aliquet aliquam. Cras id fermentum nisl.s</p>
                    
            </div>

            
      </div>
      <hr class="style-eight">
                    </div>
                </div>
            </div>

            <div class="footer-bottom" style="background-color: #008080; margin-top: 50px; padding-top: 15px; padding-bottom: 5px;">
    <div class="container">
     

          <h5 style="text-align: center; margin-top: 5px;"> &copy Copyright 2018 by PT. FAST FOOD INDONESIA</h5>
          <div class="credits">
          </div>
        </div>
      </div>
    </div>
  </div>
        </div>
      </div>
      </div>
        <!-- /#page-content-wrapper -->

    

    

    <!-- script -->
	<script type="text/javascript">

	$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
	</script>


</body>
</html>