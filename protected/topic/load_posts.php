<?php 
	$query = "SELECT id, content, poster, topic, date, likes, dislikes FROM posts WHERE topic ='" .urldecode($_GET['topictitle']). "' ORDER BY date ASC ";
	require_once DATABASE_CONTROLLER;
	$posts = getList($query);
?>

<?php if(count($posts) <= 0) : ?>
	<br><h1 style="text-align: center;">THERE ARE NO POSTS FOR THIS TOPIC YET!</h1><br>
<?php else : ?>	
	<br>
	<?php foreach ($posts as $p) : ?>
		<table class="table table-dark">
			<thead>
				<tr>
					<th><?=$p['poster'] ?> <span> &nbsp; | &nbsp; </span>
					Posted at: <?=$p['date'] ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?=$p['content'] ?></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
				<td><a href="<?="index.php?page=like_dislike&lod=like&postid=".$p['id']?>">Like <?="(".$p['likes'].")" ?></a> <span> &nbsp; | &nbsp; </span>
				<a href="<?="index.php?page=like_dislike&lod=dislike&postid=".$p['id']?>">Dislike <?="(".$p['dislikes'].")" ?></a> 
				<?php if (isUserLoggedIn() && $_SESSION['username'] != $p['poster']): ?>
					<?php require_once DATABASE_CONTROLLER;
					$perm = getField("SELECT permission FROM users WHERE username='{$p['poster']}'"); ?>
					<?php if ($perm < 2): ?> <!-- if not admin or moderator -->
						<span> &nbsp; | &nbsp; </span>
					<a href="<?="index.php?page=report&repusername=".$p['poster']?>">Report</a>
					<?php endif ?>
				<?php endif ?>
				<?php 
					require_once DATABASE_CONTROLLER;
					$writer_of_post = getField("SELECT poster FROM posts WHERE id=".$p['id']);
				 ?>
				 <?php if(isUserLoggedIn()) : ?>
				 	<?php if($_SESSION['username'] == $writer_of_post || $_SESSION['permission'] > 1) : ?>
				 		<?php if($_SESSION['username'] == $writer_of_post) : ?>
				 			<span> &nbsp; | &nbsp; </span>
							<a href="<?="index.php?page=edit_del_post&edit_or_del=edit&postid=".$p['id']?>">Edit</a>
						<?php endif; ?> <span> &nbsp; | &nbsp; </span>
						<a href="<?="index.php?page=edit_del_post&edit_or_del=del&postid=".$p['id']?>">Delete</a>
					<?php endif; ?>
					</td>
				<?php endif; ?>
				</tr>
			</tfoot>
		</table>
		<hr>
	<?php endforeach;?>
<?php endif; ?>

<table class="table table-hover table-dark">
	<th scope="row" style="text-align: center;">
		<?php if(isUserLoggedIn()) : ?>
			<?php if ($_SESSION['permission'] < 1) : ?>
				<b>YOU ARE MUTED! YOU CAN'T POST!</b>
			<?php else : ?>
				<b><a href="<?="index.php?page=new_post&topictitle=".$_GET['topictitle']?>"> >> WRITE A NEW POST FOR THIS TOPIC HERE << </a></b>
			<?php endif; ?>
		<?php else : ?>
			<b>GUESTS CAN ONLY READ POSTS!</b>
		<?php endif; ?>
	</th>
</table>