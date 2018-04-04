
	<div class="container" style="height: 100%;">
		<div class="wrapper">
			<h1 class="display-1">Ganti Password </h1>
			
			<form action="main/login/change-passwordck.php" method=post  
			onsubmit='return validate(this)' >
			<input type=hidden value=change-password name="todo" >

		<div class="form-group" style="width: 35%;">
			<label for="password">Password lama</label>
			<input type="password" name="old_password" class="bginput form-control" >
		</div>
		<div class="form-group" style="width: 35%;">
			<label for="password"> Password baru</label>
			<input type="password" name="password" class="bginput form-control" >
		</div>
		<div class="form-group" style="width: 35%;">
			<label for="password"> Masukan ulang password baru</label>
			<input type="password" name="password2" class="bginput form-control" >
		</div>
			
		<button type="submit" class="btn btn-success">Ganti Password</button>
		 <a href="../../schedule/index.php" class="btn btn-danger" role="button">Kembali</a>




	</div>
		</div>
