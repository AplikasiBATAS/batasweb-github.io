<!DOCTYPE html>
<html>
<head>
	<title>Membuat Form Validasi dengan Javascript - WWW.MALASNGODING.COM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<style>
		body {
  background: #3498db;
  font-family: sans-serif;
}
 
h2 {
  color: #fff;
}
 
.login {
  padding: 1em;
  margin: 2em auto;
  width: 17em;
  background: #fff;
  border-radius: 3px;
}
 
label {
  font-size: 10pt;
  color: #555;
}
 
input[type="text"],
input[type="password"],
textarea {
  padding: 8px;
  width: 95%;
  background: #efefef;
  border: 0;
  font-size: 10pt;
  margin: 6px 0px;
}
 
.tombol {
  background: #3498db;
  color: #fff;
  border: 0;
  padding: 5px 8px;
  margin: 20px 0px;
}
	</style>

	<br/>
	<br/>
	<br/>
	<div class="login">
	<br/>
	<form action="" method="post" onSubmit="return validasi()" >
		<center><img src=" <?php echo base_url('/assets/images/logo.png');  ?>" width="200" height="67" /></center>
		<center><h3>Aplikasi Data BATAS</h3></center>
		<center><h4>Login</h4></center>
			<div>
				<label>Username:</label>
				<input type="text" name="txt_user" id="username">
			</div>
			<div>
				<label>Password:</label>
				<input type="Password" name="txt_pass" id="password">
			</div>			
			<div>
			<center><input type="submit" name="btn_login" value="Login" class="tombol"></center>
			</div>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>