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
<html>
<head>
    <meta charset="utf-8" />
    <title>KFC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Bootstrap & CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/ffcico.ico"/>
    <script type="text/javascript" src="../assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <!--Bootstrap & CSS-->

</head>
<body>

<!--HEADER START-->
<div class="main-navigation navbar-fixed-top">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="../img/kaefce.png" style="height: 70px; margin-top: -25px; margin-bottom: -25px; margin-left: -30px;"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../index.html">HOME</a></li>
            <li><a href="../it/index.php">IT</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
            <li><a href="../login/index.php">Admin</a></li>
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div>
      </div>
    </nav>
</div>
<!--HEADER END-->

<div class="container">
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- Contact with Map - START -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>
                        <div class="form-group">
                           
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" name="password" type="text" placeholder="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center header">Our Office</div>
                    <div class="textwidget">
                <div class="bookarea">
        <div class="textcontact">
                    <h4 class="addres" style="text-align: center; margin: 20px; color: black;">Jl. Letjen MT Haryono No.7<br>
                        Tebet Barat, Tebet<br>
                        Jakarta Selatan, D.K.I Jakarta<br>
                        <strong>Phone: 021-8310919</strong><br>
                        <strong>Email: jagonyaayam@kfc.com</strong><br>
                    </h4>
        </div>

                    <br>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d93717.74154019044!2d106.83604158407526!3d-6.23992355580293!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x79b4fb4c2bda5a46!2sFast+Food+Indonesia+Tbk!5e0!3m2!1sen!2sid!4v1518687082617" height="290px" width="100%" frameborder="0" style="border:0" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Map js-->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>

<!--Map css-->
<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>
</div>
<!-- Contact with Map - END -->



<br>
<br>

<!--Footer-->
<div class="footer-bottom" style="margin-top: 18px;">
    <div class="container">
      <div style="visibility: visible; animation-name: zoomIn; max-height: 5px; margin-top: -5px; margin-bottom: 15px;" class="col-md-12 text-center wow zoomIn">

          <h5 style="text-align: center; margin-top: 5px;"> &copy Copyright 2018 by PT. FAST FOOD INDONESIA</h5>

          <div class="credits">
          </div>


      </div>
    </div>
  </div>

<!--Footer end-->

<!--Jquery-->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/jquery.easing.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/js/slick.min.js"></script>
  <script type="text/javascript" src="../assets/js/custom.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"> </script>

</body>

</html>