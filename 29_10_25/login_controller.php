<?php
    session_start();

    $server="localhost";
    $user="root";
    $pass="";
    $db="login_21_10_25";
    $conn=new mysqli($server, $user, $pass, $db);

    if($conn->connect_error){
        die("Database Connection Failed:".$conn->connect_error);
    }else{
        //echo"Database Connection Successfully.";
    }

    $phn=""; $pass="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["phone"]!=""){
            $phn=$_POST["phone"];
        }
        if($_POST["password"]!=""){
            $pass=$_POST["password"];
        }
    }
    $sql="select * from resigter where phone='$phn' and password='$pass'";
    $obj=$conn->query($sql);
    $arr=$obj->fetch_assoc();

    if($obj->num_rows>0){
        $_SESSION["reg_id"]=$arr["id"];
        $_SESSION["phone"]=$arr["phone"];
        $_SESSION["password"]=$arr["password"];
        header("Location:profile.php?up_id=".$arr["id"]);
    }else{
        echo"Login Data Error.</br>".$conn->error;
    }
?>
