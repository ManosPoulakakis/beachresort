 <?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "beachhotel";


$fname=$_POST['fname'];

$lname=$_POST['lname'];

$uname=$_POST['uname'];

$email=$_POST['email'];

$password= $_POST['password'];



// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else 
echo"database connected";

$sql = "INSERT INTO clients (fname, lname, uname,email,password)
VALUES ('$fname', '$lname','$uname','$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 