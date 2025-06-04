<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="signup.css">

<div class="signup">
		
	<form class="form-signin" action="register.php" method="post">
		
		<h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

		<label for="inputEmail" class="sr-only">Name</label>
		<input type="text" id="inputEmail" class="form-control" placeholder="Name" name="name" required autofocus>

		<label for="inputEmail" class="sr-only">Username</label>
		<input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>
		
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

		<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button><br>

		<small>Already have account? <a href="login.php">Log In</a></small>

	</form>
</div>