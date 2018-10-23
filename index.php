<?php
	include_once 'dbh2.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Green Guide</title>
</head>
<body>

<?php
	$sql = "SELECT * FROM users;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if($resultCheck > 0){
	while($row = mysqli_fetch_assoc($result)){
			echo $row['uidUsers'];
		}
	}
?>

</body>
</html>
