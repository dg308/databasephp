<?php

    // set variable 
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    // to prevent the mysql injection
    $Email = stripcslashes($Email);
    $Password = stripcslashes($Password);
    $Email = mysql_real_escape_string($Email);
    $Password = mysql_real_escape_string($Password);

    // connect to the server
    mysql_connect("localhost", "root", "");
    mysql_select_db("Login");

    $result = mysql_query("select * from users where Email = $Email and Password = $Password")
                or die("Failed to query database".mysql_error());
    $row = mysql_fetch_array($result);
    if($row['Email'] = $Email && $row['Password'] = $Password ) {
        echo "Login successful! Welcome User";
    } else {
        echo "Login Unsuccessful, try again!";
    }         


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        <link rel="stylesheet" href="css/style_login.css">
    </head>

    <body>

        <form class="box" action="Login.php" method="post">
            <h1>LOGIN</h1>
            <input type="text" name="" placeholder="email">
            <input type="password" name="" placeholder="password">
            <input type="submit" name="" value="Login">
        </form>

    </body>
</html>

























