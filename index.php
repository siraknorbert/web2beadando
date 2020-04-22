<?php session_start(); ?>
<?php require_once 'protected/config.php'; ?>
<?php require_once USER_MANAGER; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Own CSS -->
	<link rel="stylesheet" type="text/css" href="<?=PUBLIC_DIR.'styles.css?'?>">
	<title>Random Stuff Forum</title>
</head>
<body>
	<header><?php include_once PROTECTED_DIR.'normal/header.php'; ?></header>
	<nav><?php require_once PROTECTED_DIR.'normal/nav.php'; ?></nav>
	<main class="container" style="background-color: rgb(65, 62, 68);"><?php require_once PROTECTED_DIR.'routing.php'; ?></main>
	<footer style="width: 83.5%;"><?php include_once PROTECTED_DIR.'normal/footer.php'; ?></footer>
</body>
</html>