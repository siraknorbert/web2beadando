<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
  $postData = [
    'username' => $_POST['username'],
    'password' => $_POST['password']
  ];

  require_once DATABASE_CONTROLLER;
  $permission = getField("SELECT permission FROM users WHERE username='{$_POST['username']}'");

  if(empty($postData['username'])) {
    echo "Missing username!";
  } elseif($permission < 0) {
    echo "You are banned!";
  } elseif(empty($postData['password'])) {
    echo "Missing password!";
  } elseif(!UserLogin($postData['username'], $postData['password'])) {
    echo "Wrong username or password!";
  }

  $postData['password'] = "";
}
?>

<br>
<form method="POST">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" value="<?= isset($postData) ? $postData['username'] : '';?>">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" value="">
   </div>
  <button type="submit" class="btn btn-primary" name="login">Login</button>
</form>
<br>