<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $birthdate = $_POST['birthdate'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $relationship = $_POST['relationship'];
        
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
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled          
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO employees(fname,lname,phonenumber,address,city,state,zip,birthdate,
        username,password,sex,relationship) VALUES('$fname','$lname','$phonenumber','$address','$city','$state','$zip','$birthdate'
        ,'$username','$password','$sex','$relationship')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>