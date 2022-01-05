<style>
    body{
    margin: 0;
    padding: 0;
    background: url("https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.loginbox {
    width : 320px;
    height: 420px;
    background : #f3f3f3;
    color: #1d1c1c;
    top : 50%;
    left : 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding : 70px 30px;
}

.avatar {
    width : 100px;
    height: 100px;
    border-radius: 0%;
    position: absolute;
    top : -50px;
    left: calc(50% - 50px );
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align : center;
    font-size : 20px;
}

p1{
    display: flex;
    position: relative;
    padding-left: 5px;
    cursor: pointer;
    font-size: 15px;

}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
<body>
<div class="loginbox">
    <h1>Login</h1>
    <form action="../homepage.html" method="POST">
    <p>Email</p>
    <input type="text" name="user" placeholder="Enter Username">
    <p>Password</p>
    <input type="password" name="pass" placeholder="Enter your password"> <br>
    <input type="submit" id="student" name="submit" value="Login">
    </form>
    <h5><a href="signup.php">Click here to register</h5>
</div>
</div>
</body>
</head>
</html>

