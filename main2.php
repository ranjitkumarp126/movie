<?php 
session_start();
if(!$_SESSION['myusername']){
header("location:index.php");
}
?>

<html>
<body>
<?php
$username = $_SESSION['myusername'];
echo "Welcome $username";
?>

<a href="logout.php">Logout</a>
</body>
</html>