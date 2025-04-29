<?php

    // My Login System ****************************************************

    session_start();

    if(isset($_SESSION["username"])){
        echo "";
    }else{
        header("Location: ../index.php");
    }

    if(isset($_SESSION["LAST_LOGIN"])){
        if((time() - $_SESSION["LAST_LOGIN"]) > 60){
            session_unset();
            session_destroy();
            header("Location: ../index.php");
        }
    }
    if(isset($_POST["logout"])){
        session_unset();
        session_destroy();
        header("Location: ../index.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/templates/dashboard.css"/>
</head>
<body>
    <header>
        <div class="top">
            <div class="brand_img">
                <img src="../assets/image/image.png"/>
            </div>
            <div class="brand_name">
                MAA SHANTI SKILLS
            </div>
            <nav>
                <ul>
                    <li>Home</li>
                    <li>Result</li>
                    <li>Attendance</li>
                    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
                        <input type="submit" name="logout" class="lg_btn" value="logout"/> 
                    </form>
                </ul>
            </nav>            
        </div>
    </header>
    <?php 

        $query = $_SERVER["QUERY_STRING"];
        $arr = explode("=",$query);
        $uname = $arr[1];
    ?>
    <img src="../assets/userData/userImages/<?php echo $uname ?>.jpg"/>
    <p>Welcome <?php echo $uname ?>!</p>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
        <input type="submit" value="Logout" name="logout"/>
    </form>
</body>
</html>