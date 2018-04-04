<?Php

include "include/session.php";

include "config.php";

?>

<!doctype >

<html>

<head>
<title>Login</title>

<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>

<div class="container" style="border: 1px solid black; margin-top: 20px; width: 25%; box-shadow: 3px 5px 3px 5px grey;">

<div class="wrapper">
  <div class="col-md-12" align="center">
	<h1 class="display-1">Login</h1>
  <div class="outter"><img src="../../assets/images/kfce.png" style="width: 70%; height: 25%;"><br><br>
    
  </div>
  </div>
</div>

<div class="col-md-12" align="center" >
  <form action='loginck.php' method=post>

  <div class="form-group" style="width: 90%; margin-left: 5%;" id="username">
    
    <style>
      #username {
      position: relative;
      }

      #username input[type="text"] {
      padding-right: 30px;
      }

      #username .glyphicon {
      right: 105%;
      position: absolute;
      top: 12px;
      }
    </style>

    <label class="" for="username"></label>
    <input type="text" class="bginput form-control" name="username" placeholder="Username" required autofocus>
    <span class="glyphicon glyphicon-user"></span>

  </div>

  <div class="form-group" style="width: 90%; margin-left: 5%;" id="password">

    <style>
      
    #password {
    position: relative;
    }

    #password input[type="password"] {
    padding-right: 30px;
    }

    #password .glyphicon {
    right: 105%;
    position: absolute;
    top: 12px;
    }

    </style>

    <label for="password"></label>
    <input type="password" class="bginput form-control" name="password" placeholder="Password" required>
    <span class="glyphicon glyphicon-lock"></span>
  </div>

  <button type="submit" class="btn btn-success">Login</button>

 <a href="signup.php" class="btn btn-primary" role="button">Daftar Disini</a>
  
</form>
</div>

</div>
</div>
</body>

<script type="text/javascript" src="../../static/js/bootstrap.min.js"></script>


</html>
