<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
</head>
<body>
    
    <main>
    <?php

    // My Login System ****************************************************
        
    if($_SERVER["QUERY_STRING"]){
        $query = explode("=",$_SERVER["QUERY_STRING"]);
        list($key,$value) = $query;
        if($key === "login"){
            include_once("./templates/dashboard.php");
        }
        else if($key === "some" && $value === "error"){
            include_once("./templates/register_login.php");
            echo "<p style='color: red;'> Something went wrong</p>";
        }
        else if($key === "file" && $value === "error"){
            include_once("./templates/register_login.php");
            echo "<p style='color: red;'> File Save Problem</p>";
        }
        else if($key === "con" && $value === "false"){
            include_once("./templates/register_login.php");
            echo "<p style='color: red;'> Confirm password and password didn't match</p>";
        }
        else if($key === "user" && $value === "alreadyExists"){
            include_once("./templates/register_login.php");
            echo "<p style='color: red;'> Already Exists User. Please Login.</p>";

        }else if($key === "pass" && $value === "wrong"){
            echo "<p style='color: red;'>Wrong Password</p>";
            include_once("./templates/register_login.php");
            
        }else if($key === "uname" && $value === "notexist"){
            echo "<p style='color: red;'>Username does not exists</p>";
            include_once("./templates/register_login.php");
        }
        else{
            include_once("./templates/register_login.php");
        }
    }
    else{
        include_once("./templates/register_login.php");
    }
    ?>
    </main>

    <script src="assets/js/script.js" type="text/javascript"></script>

</body> 
</html>