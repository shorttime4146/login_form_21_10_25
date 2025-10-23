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
    $sq="select * from resigter where user_name='$u_nm' and password=$pass";
    $data_obj=$conn->query($sql);
    $data_arr=$data_obj->fetch_assoc();

    $data_arr=$f_name['first_name'];
    $data_arr=$u_name['user_name'];
    $data_arr=$password['password'];

    if($conn->query($data_arr)==1){
        echo"Data Login Successfully.";
    }else{
        echo"Login Data Error.".$data_arr."</br>".$conn->error;
    }
    
?>