<?

include "config.php"; // database connection details stored here

?>
<!doctype html public >

<html>

<head>
<title>signup form</title>

<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>

<div class="container" style="border: 1px solid black; margin-top: 20px; width: 35%; box-shadow: 3px 5px 3px 5px grey;">

 <div class="wrapper">
 	<div class="col-md-12" align="center">
 	<h1 class="display-1">Daftar</h1>
 	<div class="outter"><img src="../../assets/images/kfce.png" style="width: 35%; height: 20%;"><br><br>
 	</div>
 	</div>

<div class="col-md-12" align="center">
	<form name=form1 method=post action='signupck.php' onsubmit='return validate(this)'><input type=hidden name=todo value=post>

<div class="form-group " style="width: 80%;" id="username">
<label for="username"></label>
    <input type="text" class="bginput form-control" name="username" placeholder="Username" required autofocus>
    <span class="glyphicon glyphicon-user"></span>
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
</div>

<div class="form-group" style="width: 80%;" id="password">
	<label for="password"></label>
	<input type="password" name="password" placeholder="Password" class="bginput form-control" >
	<span class="glyphicon glyphicon-lock"></span>
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
</div>

<div class="form-group" style="width: 80%;" id="password2">
	<label for="password2"></label>
	<input type="password" name="password2" placeholder="Re-enter Password" class="bginput form-control" required>
	<span class="glyphicon glyphicon-lock"></span>
	<style>
      #password2 {
      position: relative;
      }

      #password2 input[type="password"] {
      padding-right: 30px;
      }

      #password2 .glyphicon {
      right: 105%;
      position: absolute;
      top: 12px;
      }
    </style>
</div>

<div class="form-group" style="width: 80%;" id="email">
	<label for="email"></label>
	<input type="text" name="email" placeholder="Email" class="bginput form-control" required>
	<span class="glyphicon glyphicon-envelope"></span>
	<style>
      #email {
      position: relative;
      }

      #email input[type="text"] {
      padding-right: 30px;
      }

      #email .glyphicon {
      right: 105%;
      position: absolute;
      top: 12px;
      }
    </style>
</div>

<div class="form-group" style="width: 80%;" id="name">
	<label for="nama"></label>
	<input type="text" name="nama" placeholder="Name" class="bginput form-control" required>
	<span class="glyphicon glyphicon-user"></span>
    <style>
      #name {
      position: relative;
      }

      #name input[type="text"] {
      padding-right: 30px;
      }

      #name .glyphicon {
      right: 105%;
      position: absolute;
      top: 12px;
      }
    </style>
</div>

<div class="form-group" style="width: 80%;" id="phone">
	<label for="phone"></label>
	<input type="number" name="phone" placeholder="Phone" class="bginput form-control" required>
	<span class="glyphicon glyphicon-phone"></span>
    <style>
      #phone {
      position: relative;
      }

      #phone input[type="text"] {
      padding-right: 30px;
      }

      #phone .glyphicon {
      right: 105%;
      position: absolute;
      top: 12px;
      }
    </style>
</div>

<div class="form-group" style="width: 80%;" id="di1">
	<label for="di1"></label>
		<select class="form-control" name="division" id="di1">
			<option hidden>Select Division</option>
			<option>IT Support</option>
			<option>IT Infrastruktur</option>
			<option>IT Electronic Data Processing</option>
			<option>IT Solution</option>
		</select>
		<span class="glyphicon glyphicon-briefcase"></span>
    <style>
      #di1 {
      position: relative;
      }

      #di1 input[type="text"] {
      padding-right: 30px;
      }

      #di1 .glyphicon {
      right: 105%;
      position: absolute;
      top: 12px;
      }
    </style>
</div>

 <button type="submit" class="btn btn-success">Daftar</button>
 <a href="index.php" class="btn btn-primary" role="button">Login disini</a>

</div>
</div>
</form>
</div>
<center>
</body>

</html>
