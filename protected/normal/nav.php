<ul>
	<li>
		<a href="index.php">Home</a>
	</li>
	<span> &nbsp; | &nbsp; </span>
	<li>
		<a href="index.php?page=topics">Topics</a>
	</li>
	<span> &nbsp; | &nbsp; </span> 
		<li>
			<a href="index.php?page=search">Search</a>
		</li>

	<?php if(!IsUserLoggedIn()) : ?>
		<span> &nbsp; | &nbsp; </span> 
		<li>
			<a href="index.php?page=login">Login</a>
		</li>
		<span> &nbsp; | &nbsp; </span>
		<li>
			<a href="index.php?page=reg">Register</a>
		</li>
	
	<?php else : ?>
		<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] > 1) : ?>
			<span> &nbsp; | &nbsp; </span>
			<li>
				<a href="index.php?page=members">Members</a>
			</li>
		<?php elseif(isset($_SESSION['permission']) && $_SESSION['permission'] < 2) : ?>
			<span> &nbsp; | &nbsp; </span>
			<li>
				<a href="index.php?page=profile">Profile</a>
			</li>
		<?php endif; ?>
		<span> &nbsp; | &nbsp; </span>
		<li>
			<a href="index.php?page=logout">Logout</a>
		</li>
	<?php endif; ?>
</ul>