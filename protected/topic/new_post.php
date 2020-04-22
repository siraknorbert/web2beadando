<?php if(!isset($_SESSION['permission'])) : ?>
	<h1>Page access is forbidden!</h1>

<?php else : ?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['content'])) {
	if(empty($_POST['content'])) {
		echo "You must write something!";
	} 
	elseif (strlen($_POST['content']) > 1200) {
		echo "Content is too long!";
	}
	else {
		$query = "INSERT INTO posts (content, poster, topic) VALUES ('".$_POST['content']."', '".$_SESSION['username']."', '".$_GET['topictitle']."')";
		require_once DATABASE_CONTROLLER;
		if(!executeDML($query)) {
			echo "Error while passing data!";
		} else {
			require_once DATABASE_CONTROLLER;
			executeDML("UPDATE topics SET post_number=post_number+1 WHERE title='{$_GET['topictitle']}'");
		} header('Location: index.php?page=topics');
	}
}
?>
	<br>
		<div class="form-group">
			<form method="POST">
			    <textarea class="form-control" rows="8" name="content"></textarea>
			    <br>
			    <div style="text-align: center;"><input type="submit" class="btn btn-primary" name="sub" value="Post"></div>
		    </form>
	  	</div>
	<br>
<?php endif; ?>