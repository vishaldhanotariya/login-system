<?php

    // My Login System ****************************************************

    require("functions.php");

    if(isset($_POST["register"])){
        $uname = $_POST["name"];
        $pass = $_POST["password"];
        $phone = $_POST["phone"];
        $img = $_FILES["file"];
        $email = $_POST["email"];
        $con_pass = $_POST["confirm_password"];

        $userData = array("uname"=>$uname,"phone"=>$phone,"password"=>password_hash($pass,PASSWORD_BCRYPT),"email"=>$email);

        if(CheckExistingUser($uname)){
            header("Location: index.php?user=alreadyExists");
            header("Location: dashboard.php");
            exit();

        }
        else{
            if(checkpass($pass,$con_pass)){
                if(saveUserPhoto($img["tmp_name"],$uname,pathinfo($img["name"],PATHINFO_EXTENSION))){
                    if(SaveData($userData)){

                        header("Location: ./templates/dashboard.php?uname=$uname");

                        session_start();
                        $_SESSION["username"] = $uname;
                    }
                    else{
                        header("Location: index.php?some=error");
                    }
                }
                else{
                    header("Location: index.php?file=error");
                }
            }
            else{
                header("Location: index.php?con=false");
            }
        }
    }



    if(isset($_POST["login"])){
        $uname = $_POST["username"];
        $pass = $_POST["password"];

        $readfile = file_get_contents("./assets/userdata/data.json");
        $json = json_decode($readfile,true);

        foreach($json as $data){
            if($data["uname"] === $uname){
                if(checkPassword($pass,$data["password"])){
                    session_start();
                    session_regenerate_id(true);
                    $_SESSION["username"] = $uname;
                    $_SESSION["LAST_LOGIN"] = time();
                    header("Location: ./templates/dashboard.php?uname=$uname");
                    exit();
                }else{
                    header("Location: ./index.php?pass=wrong");
                    exit();            
                }
            }
        }
        header("Location: ./index.php?uname=notexist");
    }
?>