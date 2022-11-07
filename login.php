
<!DOCTYPE html>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="login.css">
	<title></title>
</head>

<body>
	<h2>WashDry : Login</h2>
	<div class="container" id="container">

		<div class="form-container sign-in-container">
			<form action="proses_login.php" method="post">
				<h1>Welcome</h1>
				<input type="text" name="username" placeholder="Username" value="" />
				<input type="password" name="password" placeholder="Password" value="" />
				Login As
				<select name="role" class="form-control"></br>
					<option></option>
					<option value="admin">Admin</option>
					<option value="kasir">Kasir</option>
					<option value="owner">Owner</option>
				</select>
				<button>Login</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">

				</div>
			</div>
		</div>
	</div>
</body>

</html> 