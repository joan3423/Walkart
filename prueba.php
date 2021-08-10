<?php

    $exist = "joan60";
    if(isset($_POST['username'])){
        if($_POST['username'] == $exist){
            echo json_encode(array("message" => "Already exist"));
        }else{
            echo json_encode(array("message" => "You can succesfully add"));

            // get username and password
            $username = $_POST['username'];
            $password = $_POST['pass'];

            // process file input
            // Check whether user has uploaded any file or not
            if(is_uploaded_file($_FILES['fileupload']['tmp_name'])){

                // user has uploaded a file

            }else{
                // no file has been uploaded
            }
        }
    }else{
        echo json_encode(array("message" => "Invalid form inputs"));
    }

?>