<br>
<?php 
require_once DATABASE_CONTROLLER;
executeDML("DELETE FROM topics WHERE post_number <= 0");

$query = "SELECT id, title, who_started, date, post_number FROM topics ORDER BY post_number DESC";
require_once DATABASE_CONTROLLER;
$topics = getList($query);
?>

<?php if(count($topics) <= 0) : ?>
	<br><h1 style="text-align: center;">THERE ARE NO TOPICS YET!</h1>
<?php else : ?>
	<table class="table table-hover table-dark">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Title</th>
				<th scope="col">Starter</th>
				<th scope="col">Posts</th>
				<th scope="col">Started at</th>
				<?php if(isUserLoggedIn()): ?>
					<th scope="col">Delete</th>
				<?php endif ?>
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
					<?php 
						require_once DATABASE_CONTROLLER;
						$starter_of_topic = getField("SELECT who_started FROM topics WHERE id=".$t['id']);
					 ?>
					 <?php if(isUserLoggedIn()) : ?>
					 	<?php if($_SESSION['username'] == $starter_of_topic || $_SESSION['permission'] > 1) : ?>
							<td><a href="<?="index.php?page=delete_topic&topicid=".$t['id']?>">Delete</a></td>
						<?php else : ?>
							<td>#</td>
						<?php endif; ?>
					<?php endif; ?>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php endif; ?>

<table class="table table-hover table-dark">
	<th scope="row" style="text-align: center;">
	<?php if(isUserLoggedIn()) : ?>
		<?php if ($_SESSION['permission'] < 1) : ?>
			<b>YOU ARE MUTED! YOU CAN'T START A TOPIC!</b>
		<?php else : ?>
			<b><a href="index.php?page=new_topic"> >> START A NEW TOPIC HERE << </a></b>
		<?php endif; ?>
	<?php else : ?>
		<b>GUESTS CAN ONLY READ TOPICS!</b>
	<?php endif; ?>
	</th>
</table>