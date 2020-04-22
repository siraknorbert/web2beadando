<?php
if($_GET['lod'] == "like") {
	require_once DATABASE_CONTROLLER;
	executeDML("UPDATE posts SET likes=likes+1 WHERE id =".$_GET['postid']);
} elseif($_GET['lod'] == "dislike") {
	require_once DATABASE_CONTROLLER;
	executeDML("UPDATE posts SET dislikes=dislikes+1 WHERE id =".$_GET['postid']);
} header('Location: index.php?page=topics');