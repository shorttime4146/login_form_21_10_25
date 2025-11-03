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

    $em=""; $pass="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["email"]!=""){
            $em=$_POST["email"];
        }
        if($_POST["password"]!=""){
            $pass=$_POST["password"];
        }
    }
    $sql="select * from resigter where email='$em' and password='$pass'";
    $data_obj=$conn->query($sql);
    $data_arr=$data_obj->fetch_assoc();

    if($data_obj->num_rows>0){
        $_SESSION["reg_id"]=$data_arr["id"];
        $_SESSION["email"]=$data_arr["email"];
        $_SESSION["password"]=$data_arr["password"];
        header("Location:profile.php?id=".$data_arr["id"]);
    }else{
        echo"LOGIN Data Error.</br>".$conn->error;
    }    
?>