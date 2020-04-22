
<?php if(!isset($_SESSION['permission'])) : ?>
	<h1>Page access is forbidden!</h1>

<?php elseif(isset($_POST['change'])) : ?>
	<?php 
	if(empty($_POST['change'])) {
		echo "You must write something!";
	} 
	elseif (strlen($_POST['change']) > 1200) {
		echo "Your post is too long!";
	}
	else {
		require_once DATABASE_CONTROLLER;
		executeDML("UPDATE posts SET content='".$_POST['change']."' WHERE id=".$_GET['postid']);
		header('Location: index.php?page=topics');
	}
	?>
<?php endif; ?>

<?php if($_GET['edit_or_del'] == "del") : ?>
<?php
	require_once DATABASE_CONTROLLER;
	$topicTitle = getField("SELECT topic FROM posts WHERE id='{$_GET['postid']}'");

	require_once DATABASE_CONTROLLER;
	executeDML("UPDATE topics SET post_number=post_number-1 WHERE title='{$topicTitle}'");
	
	require_once DATABASE_CONTROLLER;
	executeDML("DELETE FROM posts WHERE id =".$_GET['postid']);

	header('Location: index.php?page=topics');
?>

<?php elseif($_GET['edit_or_del'] == "edit") : ?>

	<?php 
		require_once DATABASE_CONTROLLER;
		$postContent = getField("SELECT content FROM posts WHERE id='{$_GET['postid']}'"); 
	?>

	<br>
	<div class="form-group">
		<form method="POST">
		    <textarea rows="8" class="form-control" style="width: 100%; text-align: justify;" name="change"><?=$postContent?></textarea>
		    <br>
		    <div style="text-align: center;"><input type="submit" class="btn btn-primary" name="sub" value="Ok"></div>
	    </form>
  	</div>
	<br>
<?php endif; ?>