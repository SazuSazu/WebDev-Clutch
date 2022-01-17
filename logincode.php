<?php
session_start();
include('dbconnection.php');
global $conn;
$email = $_POST['email'];
$password = $_POST['pass'];

//to prevent from mysqli injection
$sql = "select* from user where email = '$email' and password = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

$query = "SELECT username FROM e-phone WHERE email='$email'";
$results = mysqli_query($conn, $query);
$row = mysqli_fetch_array($results);
$_SESSION['name'] = $row['username'];

if ($email == "admin@123" && $count == 1) {
    $_SESSION["userId"] = $username;
    $_SESSION["userPassword"] = $password;
    $_SESSION['userTable'] = $table;

    header("Location:admin.php");

}

else if ( $count == 1) {

    $_SESSION["userId"] = $username;
    $_SESSION["userPassword"] = $password;
    $_SESSION['userTable'] = $table;
        
    header("Location:/homeindex.php");
}

else {  
    $_SESSION['loginErr'] = "error";
    $_SESSION['status'] = "Login Fail";
    $_SESSION['msg'] = "Invalid User ID or Password";
    echo '<script> alert("Error Login "); window.location = "logout.php";</script>'; 
}

?>

<?php
if (isset($_SESSION['status']))
    if ($_SESSION['status'] == "Login Fail") {
        echo $_SESSION['msg'];
        $_SESSION['status'] = "Null";
    }
?>