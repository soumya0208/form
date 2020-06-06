<html>
	<title>
	Change password
	</title>
	<body>
	<form action="updatepassword.php" method="POST">
                        <div>
                            <input type="password"name="password" id="password"  placeholder="password">
                        </div>
                        
                        <button  type="submit" name="submit" value="Send">update password</button>
                        
                        <a href="Login.html">Sign in</a>
                        
                    </form>
	</body>
</html>
<?php
error_reporting(0);

$errors ='';

if($_POST['submit']=='Send')
{
// Create connection
$conn = new mysqli("localhost", "root", "", "stackhack");
	 session_start();
    
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$password=$_POST['password'];
    $email=($_SESSION['factory']['email']."&nbsp");
    $query = mysqli_query($con,"select * from participants where email = '$email'")
    or die(mysqli_error($con));
    if (mysqli_num_rows ($query)==1)
    {

$sql = "UPDATE participants SET passwd='$password' WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
}
}
$conn->close();
?>
