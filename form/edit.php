<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
    {    
        $id = $_POST['id'];
        
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $phonenumber=$_POST['phonenumber'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zip=$_POST['zip'];
        $birthdate=$_POST['birthdate'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sex=$_POST['sex'];
        $relationship=$_POST['relationship'];    
        
        // checking empty fields
        if(empty($fname) || empty($lname) || empty($phonenumber) || empty($address) || empty($city) || empty($state) || empty($zip) || empty($birthdate)
    || empty($username) || empty($password) || empty($sex) || empty($relationship)) {
        if(empty($fname)) {
            echo "<font color='red'>First Name field is empty.</font><br/>";
        }
        
        if(empty($lname)) {
            echo "<font color='red'>Last Name field is empty.</font><br/>";
        }
        
        if(empty($phonenumber)) {
            echo "<font color='red'>Phone Number field is empty.</font><br/>";
        }
         
        if(empty($address)) {
            echo "<font color='red'>Address field is empty.</font><br/>";
        }
         
        if(empty($city)) {
            echo "<font color='red'>City field is empty.</font><br/>";
        }
         
        if(empty($state)) {
            echo "<font color='red'>State field is empty.</font><br/>";
        }
         
        if(empty($zip)) {
            echo "<font color='red'>Zip field is empty.</font><br/>";
        }
         
        if(empty($birthdate)) {
            echo "<font color='red'>Birthdate field is empty.</font><br/>";
        }
         
        if(empty($username)) {
            echo "<font color='red'>Username field is empty.</font><br/>";
        }
         
        if(empty($password)) {
            echo "<font color='red'>Password field is empty.</font><br/>";
        }
         
        if(empty($sex)) {
            echo "<font color='red'>Sex field is empty.</font><br/>";
        }
         
        if(empty($relationship)) {
            echo "<font color='red'>Relationship field is empty.</font><br/>";
        }

        } else {    
            //updating the table
            $result = mysqli_query($mysqli, "UPDATE employees SET fname='$fname',lname='$lname',phonenumber='$phonenumber'
            ,address='$address',city='$city',state='$state',zip='$zip',birthdate='$birthdate'
            ,username='$username',password='$password',sex='$sex',relationship='$relationship' WHERE id=$id");
            
            //redirectig to the display page. In our case, it is index.php
            header("Location: index.php");
        }
    }
    ?>
    <?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM employees WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $fname = $res['fname'];
    $lname = $res['lname'];
    $phonenumber = $res['phonenumber'];
    $address = $res['address'];
    $city = $res['city'];
    $state = $res['state'];
    $zip = $res['zip'];
    $birthdate = $res['birthdate'];
    $username = $res['username'];
    $password = $res['password'];
    $sex = $res['sex'];
    $relationship = $res['relationship'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
        <tr> 
                <td>First Name: (A-Z or a-z)</td>
                <td><input type="text" name="fname" pattern="[A-Za-z]+"value="<?php echo $fname;?>"></td>
            </tr>
            <tr> 
                <td>Last Name: (A-Z or a-z)</td>
                <td><input type="text" name="lname" pattern="[A-Za-z]+"value="<?php echo $lname;?>"></td>
            </tr>
            <tr> 
                <td>Phone Number: (Numbers only)</td>
                <td><input type="text" name="phonenumber" pattern="[0-9]+"value="<?php echo $phonenumber;?>"></td>
            </tr>
            <tr> 
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $address;?>"></td>
            </tr>
            <tr> 
                <td>City</td>
                <td><input type="text" name="city" value="<?php echo $city;?>"></td>
            </tr>
            <tr> 
                <td>State</td>
                <td><input type="text" name="state" value="<?php echo $state;?>"></td>
            </tr>
            <tr> 
                <td>Zip</td>
                <td><input type="text" name="zip" value="<?php echo $zip;?>"></td>
            </tr>
            <tr> 
                <td>Birthdate</td>
                <td><input type="text" name="birthdate" value="<?php echo $birthdate;?>"></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $username;?>"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password" value="<?php echo $password;?>"></td>
            </tr>
            <tr> 
                <td>Sex</td>
                <td><input type="text" name="sex" value="<?php echo $sex;?>"></td>
            </tr><tr> 
                <td>Relationship</td>
                <td><input type="text" name="relationship" value="<?php echo $relationship;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>