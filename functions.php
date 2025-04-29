<?php

    // My Login System ****************************************************

    function CheckExistingUser($username){
        $readfile = file_get_contents("./assets/userdata/data.json");
        $data = json_decode($readfile,true);

        foreach($data as $d){
            if($d["uname"] === $username){
                return true;
            }
        }
        return false; 
    }

    //******************************************************************

    function checkpass($pass,$con_pass){
        if($pass === $con_pass){
            return true;
        }
        return false;
    }

    //******************************************************************

    function saveUserPhoto($temp_location,$username,$path){
        $destination = "./assets/userdata/userimages/".$username.".".$path;
        if(move_uploaded_file($temp_location,$destination)){
            return true;
        }
        return false;
    }

    //******************************************************************

    function SaveData($data){
        $datafile = file_get_contents("./assets/userdata/data.json");
        $json = json_decode($datafile,true); // decode se ham json se array me convert karte hai or true se ham data ko conform karte hain.
        array_push($json,$data); // array_push se ham $json se $data me last me kuch bhi add karna.

        $filegyiyanhi = file_put_contents("./assets/userdata/data.json",json_encode($json,JSON_PRETTY_PRINT));

        if(!$filegyiyanhi){
            return false;
        }
        return true;
    }

    function checkPassword($userPassword,$storedPassword){
        if(password_verify($userPassword,$storedPassword)){
            return true;
        }
        return false;
    }
?>
