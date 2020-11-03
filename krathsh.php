 <?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "beachhotel";


$username=$_POST['username'];

$email=$_POST['email'];

$roomtype=$_POST['roomtype'];

$date= $_POST['date'];


$sql = "INSERT INTO krathsh (username, email, roomtype,date)
VALUES ('$username','$email','$roomtype','$date')";
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else 
echo"database connected";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 