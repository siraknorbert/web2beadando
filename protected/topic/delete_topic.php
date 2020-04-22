<?php
require_once DATABASE_CONTROLLER;
$title = getField("SELECT title FROM topics WHERE id='{$_GET['topicid']}'");

require_once DATABASE_CONTROLLER;
executeDML("DELETE FROM topics WHERE id ='{$_GET['topicid']}'");

executeDML("DELETE FROM posts WHERE topic='{$title}'");

header('Location: index.php?page=topics');