<?php
include_once('config.php');
if(isset($_POST['search'])){
	$q = $_POST['q'];
	$query = mysqli_query($mysqli,"SELECT * FROM `employees` WHERE `fname` || 'lname' LIKE '%$qname%'"); 

    $count = mysqli_num_rows($query);
    if(empty($q)) {
        echo "<font color='red'>Search field is empty.</font><br/>";
    }else{
		while($row = mysqli_fetch_array($query)){
		$s = $row['fname' && 'lname']; 
				$output .= '<h2>'.$s.'</h2><br>';
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
	</head>
	<body>
		<form method="POST" action="search.php">
			<input type="text" name="q" placeholder="First Name or Last Name">
			<input type="submit" name="search" value="Search">
        </form>
        <h2>Results: </h2>
        <?php echo $output; ?>
        <br/><br/><a href="/index.php">Return Home</a>
	</body>
</html>