<?php 
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

    $u_nm=""; $pass="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["user_name"]!=""){
            $u_nm=$_POST["user_name"];
        }
        if($_POST["password"]!=""){
            $pass=$_POST["password"];
        }
        
    }
    $sql="select * from resigter where user_name='$u_nm' and password=$pass";
    $data_obj=$conn->query($sql);
    $data_arr=$data_obj->fetch_assoc();

    $f_name=$data_arr["first_name"];
    $u_name=$data_arr["user_name"];
    $password=$data_arr["password"];

    if($data_obj->num_rows>0){
        header("LOcation:profile.php?baaler_id=".$data_arr["id"]);
    }else{
        echo"Login Data Error."."</br>".$conn->error;
    }
    
?>