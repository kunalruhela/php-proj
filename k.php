<?php
	require_once('conn.php');
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
			<td><?=$row['uname'];?></td><br>
			<td><?=$row['email'];?></td><br>
			<td><?=$row['h_phone'];?></td><br>
			<td><?=$row['city'];?></td><br>
		</tr>
<?php	
	}
	}
	else {
		echo "0 results";
	}
	mysqli_close($conn);
?>
  