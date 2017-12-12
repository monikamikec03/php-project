<?php 
	print '
	<h1>Administration</h1>
	<div id="admin">
		<ul>
			<li><a href="index.php?menu=7&amp;action=1">Users</a></li>
			<li><a href="index.php?menu=7&amp;action=2">News</a></li>
		</ul>';
		# Admin Users
		if ($action == 1) { include("admin/users.php"); }
	print '
	</div>';
?>