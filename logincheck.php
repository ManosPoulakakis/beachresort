<?php
session_start();
 require('config.php');
?>

<?php
if (isset($_POST['uname']) AND isset($_POST['password'])){
$uname = $_POST['uname'];
$password = $_POST['password'];



$query = "SELECT uname,password FROM clients WHERE uname='$uname' AND password='$password' ";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_num_rows($result);
if ($count == 1) {


$_SESSION["user_login"] = "OK";
echo "<h2> Welcome $uname</h2>";
echo "<br>";
echo '<a href="index.php" style="color:black"> <h2> Go to main page </h2>  </a> ';
} }else{
echo "<h2>Wrong credentials. Please try again. </h2>";
echo "<br>";
echo '<a href="login.php" style="color:black"> <h2> Login again </h2> </a>';
}

mysqli_close($link);

?>

