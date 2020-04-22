<?php if(!isset($_SESSION['permission'])) : ?>
	<h1>Page access is forbidden!</h1>

<?php else : ?>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title'])) {
		
		$query = "SELECT title FROM topics";
		require_once DATABASE_CONTROLLER;
		$titles = getList($query);
		$titleExists = FALSE;
		if (!empty($titles)) {
			foreach ($titles as $t) {
				if ($t['title'] == $_POST['title']) {
					$titleExists = TRUE;
					break;
				}
			}
		}

		if ($titleExists) {
			echo "There is a topic already with the same title!";
		} elseif(empty($_POST['title'])) {
			echo "You must give the topic a title!";
		} elseif (strlen($_POST['title'] > 32)) {
			echo "Title is too long!";
		} elseif(empty($_POST['content'])) {
			echo "You must write a first post to this topic!";
		} elseif (strlen($_POST['content']) > 1200) {
			echo "First post is too long!";
		} else {
			$query = "INSERT INTO topics (title, who_started) VALUES ('".$_POST['title']."', '".$_SESSION['username']."')";
			require_once DATABASE_CONTROLLER;
			if(!executeDML($query))
				echo "Error while passing data!";

			$query = "INSERT INTO posts (content, poster, topic) VALUES ('".$_POST['content']."', '".$_SESSION['username']."', '".$_POST['title']."')";
			require_once DATABASE_CONTROLLER;
			if(!executeDML($query)) {
				echo "Error while passing data!";
			} else {
				require_once DATABASE_CONTROLLER;
				executeDML("UPDATE topics SET post_number=post_number+1 WHERE title='{$_POST['title']}'");
		} header('Location: index.php?page=topics');
	}
}
?>
	<br>
		<div class="form-group">
			<form method="POST">
				<input  class="form-control" type="text" name="title" placeholder="Title of topic..."> <br>
				<textarea class="form-control" rows="8" name="content"></textarea> <br>
				<div style="text-align: center;"><input type="submit" class="btn btn-primary" name="sub" value="Start"></div>
			</form>
		</div>
	<br>
<?php endif; ?>