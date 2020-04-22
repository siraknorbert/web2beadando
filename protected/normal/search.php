<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['searchT']) && !empty($_POST['searchTopics'])): ?>
<br>
<?php 
$query = "SELECT id, title, who_started, date, post_number FROM topics WHERE title LIKE '%{$_POST['searchTopics']}%' ORDER BY post_number DESC";
require_once DATABASE_CONTROLLER;
$topics = getList($query);
?>
	<?php if(count($topics) <= 0) : ?>
		<br><h1 style="text-align: center;">NO TOPICS FOUND!</h1><br>
	<?php else : ?>
		<table class="table table-hover table-dark">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Title</th>
					<th scope="col">Starter</th>
					<th scope="col">Posts</th>
					<th scope="col">Started at</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; ?>
				<?php foreach ($topics as $t) : ?>
					<?php $i++; ?>
					<tr>
						<th scope="row"><?=$i ?></th>
						<td><a href="<?="index.php?page=load_posts&topictitle=".$t['title']?>"><?=$t['title']?></a></td>
						<td><?=$t['who_started'] ?></td>
						<td><?=$t['post_number'] ?></td>
						<td><?=$t['date'] ?></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	<?php endif; ?>

<?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['searchP']) && !empty($_POST['searchPosts'])): ?>
	<?php 
	$query = "SELECT id, content, poster, topic, date, likes, dislikes FROM posts WHERE content LIKE '%{$_POST['searchPosts']}%' ORDER BY likes DESC ";
	require_once DATABASE_CONTROLLER;
	$posts = getList($query);
	?>
	<br>
	<?php if(count($posts) <= 0) : ?>
		<br><h1 style="text-align: center;">NO POSTS FOUND!</h1><br>
	<?php else : ?>	
		<br>
		<?php foreach ($posts as $p) : ?>
			<table class="table table-dark">
				<thead>
					<tr>
						<th><?=$p['poster'] ?> <span> &nbsp; | &nbsp; </span>
						<?=$p['topic'] ?> <span> &nbsp; | &nbsp; </span>
						<?=$p['date'] ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?=$p['content'] ?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td>Likes <?="(".$p['likes'].")" ?></a> <span> &nbsp; | &nbsp; </span>
						Dislikes <?="(".$p['dislikes'].")" ?></td>
					</tr>
				</tfoot>
			</table>
			<hr>
		<?php endforeach;?>
	<?php endif; ?>

<?php else: ?>
	<br>
	<form method="POST">
		<div class="input-group mb-3">
		  <input type="text" class="form-control" name="searchTopics" placeholder="Search for topics by keywords...">
		  <div class="input-group-append">
		    <button class="btn btn-outline-secondary" type="submit" name="searchT">Go!</button>
		  </div>
		</div>

		<div class="input-group mb-3">
		  <input type="text" class="form-control" name="searchPosts" placeholder="Search for posts by keywords...">
		  <div class="input-group-append">
		    <button class="btn btn-outline-secondary" type="submit" name="searchP">Go!</button>
		  </div>
		</div>
	</form>
	<br>
<?php endif ?>