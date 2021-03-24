<?php
    if(isset($_POST['login'])){
        echo '<center><h1>Login With new Credentials</h1></center>';
    }else{
        echo '<center><h1>Login Page</h1></center>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
        <form action="#">
            <input type="email" placeholder="Enter Email"><br><br>
            <input type="password" placeholder="Enter Password"><br><br>
            <input type="submit" value="Login">
        </form>
    </center>
</body>
</html>