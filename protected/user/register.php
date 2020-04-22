<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup']))
{
	$postData = [
		'username' => $_POST['username'],
		'email' => $_POST['email'],
		'password' => $_POST['password']
	];

	$query = "SELECT username, email FROM users";
	require_once DATABASE_CONTROLLER;
	$checks = getList($query);
	$alreadyExists = FALSE;
	foreach ($checks as $c) {
		if ($c['username'] == $_POST['username'] || $c['email'] == $_POST['email']) {
			$alreadyExists = TRUE;
			break;
		}
	}

	if (empty($postData['username'])) {
		echo "You forgot to fill in: username!";
	} elseif (empty($postData['email'])) {
		echo "You forgot to fill in: e-mail!";
	} elseif ($alreadyExists) {
		echo "The username or the email address is already in use!";
	} elseif (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
		echo "Wrong e-mail format!";
	} else if(strlen($postData['password']) < 4) {
		echo "Password needs to be at least 4 characters long!";
	} elseif (!UserRegister($postData['email'], $postData['password'], $postData['username'])) {
		echo "Registration failed!";
	}

	$postData['password'] = $postData['password1'] = "";
}
?>

<br>
<form method="POST">
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" class="form-control" name="username" placeholder="e.g.: PhilAA" value="<?= isset($postData) ? $postData['username'] : '';?>">
	</div>
	<div class="form-group">
		<label for="email">Email address</label>
		<input type="email" class="form-control" name="email" placeholder="e.g.: asd@mail.com" value="<?= isset($postData) ? $postData['email'] : '';?>">
	 </div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" placeholder="********" value="">
	 </div>
	<button type="submit" class="btn btn-primary" name="signup">Sign up</button>
</form>
<br>