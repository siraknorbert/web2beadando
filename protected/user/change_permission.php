<?php
if ($_GET['command'] == "muteunmute") {
	if($_GET['userperm'] == 0) {
		require_once DATABASE_CONTROLLER;
		executeDML("UPDATE users SET permission=1 WHERE id =".$_GET['userid']);
	} else {
		require_once DATABASE_CONTROLLER;
		executeDML("UPDATE users SET permission=0 WHERE id =".$_GET['userid']);
	}
} elseif ($_GET['command'] == "banunban") {
	if($_GET['userperm'] < 0) {
		require_once DATABASE_CONTROLLER;
		executeDML("UPDATE users SET permission=1 WHERE id =".$_GET['userid']);
	} else {
		require_once DATABASE_CONTROLLER;
		executeDML("UPDATE users SET permission=-1 WHERE id =".$_GET['userid']);
	}
} header('Location: index.php?page=members');