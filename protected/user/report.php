<?php
require_once DATABASE_CONTROLLER;
executeDML("UPDATE users SET reported_times=reported_times+1 WHERE username='{$_GET['repusername']}'");
header('Location: index.php?page=topics');