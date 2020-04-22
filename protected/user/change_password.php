<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['changepw'])) {
  
  require_once DATABASE_CONTROLLER;
  $password = getField("SELECT password FROM users WHERE id='{$_SESSION['uid']}'");

  if(empty($_POST['oldpw']) || empty($_POST['newpw'])) {
    echo "Missing field!";
  } elseif($password != sha1($_POST['oldpw'])) {
    echo "Wrong old password!";
  } elseif(strlen($_POST['newpw']) < 4) {
    echo "New password needs to be at least 4 characters long!";
  } else {
  	$newpassword = sha1($_POST['newpw']);
  	$oldpassword = sha1($_POST['oldpw']);
    require_once DATABASE_CONTROLLER;
    executeDML("UPDATE users SET password='{$newpassword}' WHERE password='{$oldpassword}'");
    header('Location: index.php?page=profile');
  }

  $password = "";
  $_POST['oldpw'] = "";
  $_POST['newpw'] = "";
  $oldpassword = "";
  $newpassword = "";
}
?>

<br>
<form method="POST">
  <div class="form-group">
    <label for="oldpw">Old password</label>
    <input type="password" class="form-control" name="oldpw" value="">
  </div>
  <div class="form-group">
    <label for="newpw">New password</label>
    <input type="password" class="form-control" name="newpw" value="">
   </div>
  <button type="submit" class="btn btn-primary" name="changepw">Ok</button>
</form>
<br>