<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 2) : ?>
	<h1>Page access is forbidden!</h1>

<?php else : ?>
	<?php 
	$query = "SELECT id, username, email, permission, reported_times FROM users ORDER BY reported_times DESC";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
	?>
	<?php if(count($users) <= 0) : ?>
		<h1>No users found in the database.</h1>
	<?php else : ?>
		<table class="table table-striped table-dark">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Username</th>
					<th scope="col">Email</th>
					<th scope="col">Permission</th>
					<th scope="col">Reports</th>
					<th scope="col">Mute/Unmute</th>
					<?php if($_SESSION['permission'] > 2) ?> <!--only for admins-->
						<th scope="col">Ban/Unban</th>
					<?php endif; ?>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; ?>
				<?php foreach ($users as $u) : ?>
					<?php $i++; 
					?>
					<tr>
						<th scope="row"><?=$i ?></th>
						<td><?=$u['username'] ?></td>
						<td><?=$u['email'] ?></td>
						<?php if($u['permission'] == 0) : ?> 
							<td>Muted</td>
						<?php elseif($u['permission'] == 1) : ?>
							<td>Member</td>
						<?php elseif($u['permission'] == 2) : ?>
							<td>Moderator</td>
						<?php elseif($u['permission'] == 3) : ?>
							<td>Admin</td>
						<?php elseif($u['permission'] < 0) : ?>
							<td>Banned</td>
						<?php endif; ?>
						<?php if ($u['permission'] < 2): ?>
							<td><?=$u['reported_times'] ?></td>
						<?php else: ?>
							<td>#</td>
						<?php endif ?>
						<?php if($u['permission'] < 2) : ?>
							<?php if($u['permission'] == 1) : ?>
								<td><a href="<?="index.php?page=change_perm&command=muteunmute&userperm=".$u['permission']."&userid=".$u['id']?>">Mute</a></td>
							<?php elseif($u['permission'] == 0) : ?>
								<td><a href="<?="index.php?page=change_perm&command=muteunmute&userperm=".$u['permission']."&userid=".$u['id']?>">Unmute</a></td>
							<?php elseif($u['permission'] < 0) : ?>
								<td>#</td>
							<?php endif; ?>
						<?php else : ?>
							<td>#</td>
						<?php endif; ?>
						<?php if($_SESSION['permission'] > 2) : ?> <!--only for admins-->
							<?php if($u['permission'] < 2) : ?>
								<?php if($u['permission'] > 0) : ?>
									<td><a href="<?="index.php?page=change_perm&command=banunban&userperm=".$u['permission']."&userid=".$u['id']?>">Ban</a></td>
								<?php elseif($u['permission'] < 0) : ?>
									<td><a href="<?="index.php?page=change_perm&command=banunban&userperm=".$u['permission']."&userid=".$u['id']?>">Unban</a></td>
									<?php elseif($u['permission'] == 0) : ?>
								<td>#</td>
								<?php endif; ?>
								<?php else : ?>
									<td>#</td>
							<?php endif; ?>
							<?php else : ?>
								<td>#</td>
						<?php endif; ?>
					</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>
