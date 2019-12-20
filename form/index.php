<?php
//including the database connection file
include_once("config.php");
 

$result = mysqli_query($mysqli, "SELECT * FROM employees ORDER BY id DESC"); 
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <a href="add.html">Add New Data</a><br/><br/>
    <a href="search.php">Search</a><br/><br/>
 
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Phone Number</td>
            <td>Address</td>
            <td>City</td>
            <td>State</td>
            <td>Zip</td>
            <td>Birthdate</td>
            <td>Username</td>
            <td>Password</td>
            <td>Sex</td>
            <td>Relationship</td>
            <td>Update</td>
        </tr>
        <?php 
        
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['fname']."</td>";
            echo "<td>".$res['lname']."</td>";
            echo "<td>".$res['phonenumber']."</td>"; 
            echo "<td>".$res['address']."</td>"; 
            echo "<td>".$res['city']."</td>"; 
            echo "<td>".$res['state']."</td>"; 
            echo "<td>".$res['zip']."</td>"; 
            echo "<td>".$res['birthdate']."</td>"; 
            echo "<td>".$res['username']."</td>"; 
            echo "<td>".$res['password']."</td>"; 
            echo "<td>".$res['sex']."</td>"; 
            echo "<td>".$res['relationship']."</td>"; 
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>
</html>