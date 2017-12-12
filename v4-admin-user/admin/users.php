<?php 
	
	#Show user info
	if (isset($_GET['id']) && $_GET['id'] != '') {
		$query  = "SELECT * FROM users";
		$query .= " WHERE id=".$_GET['id'];
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result);
		print '
		<h2>User profile</h2>
		<p><b>First name:</b> ' . $row['firstname'] . '</p>
		<p><b>Last name:</b> ' . $row['lastname'] . '</p>
		<p><b>Username:</b> ' . $row['username'] . '</p>';
		$_query  = "SELECT * FROM countries";
		$_query .= " WHERE country_code='" . $row['country'] . "'";
		$_result = @mysqli_query($MySQL, $_query);
		$_row = @mysqli_fetch_array($_result);
		print '
		<p><b>Country:</b> ' .$_row['country_name'] . '</p>
		<p><b>Date:</b> ' . $row['date'] . '</p>
		<p><a href="index.php?menu='.$menu.'&amp;action='.$action.'">Back</a></p>';
	}
	else {
		print '
		<h2>List of users</h2>
		<div id="users">
			<table>
				<thead>
					<tr>
						<th width="16"></th>
						<th width="16"></th>
						<th width="16"></th>
						<th>First name</th>
						<th>Last name</th>
						<th>E mail</th>
						<th>Država</th>
					</tr>
				</thead>
				<tbody>';
				$query  = "SELECT * FROM users";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '
					<tr>
						<td><a href="index.php?menu='.$menu.'&amp;action='.$action.'&amp;id=' .$row['id']. '"><img src="img/user.png" alt="user"></a></td>
						<td><a href="index.php?menu='.$menu.'&amp;action='.$action.'&amp;edit=' .$row['id']. '"><img src="img/edit.png" alt="uredi"></a></td>
						<td><a href="index.php?menu='.$menu.'&amp;action='.$action.'&amp;delete=' .$row['id']. '"><img src="img/delete.png" alt="obriši"></a></td>
						<td><strong>' . $row['firstname'] . '</strong></td>
						<td><strong>' . $row['lastname'] . '</strong></td>
						<td>' . $row['email'] . '</td>
						<td>';
							$_query  = "SELECT * FROM countries";
							$_query .= " WHERE country_code='" . $row['country'] . "'";
							$_result = @mysqli_query($MySQL, $_query);
							$_row = @mysqli_fetch_array($_result, MYSQLI_ASSOC);
							print $_row['country_name'] . '</td>
					</tr>';
				}
			print '
				</tbody>
			</table>
		</div>';
	}
?>