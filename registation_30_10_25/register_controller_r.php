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

    $fname=""; $uname=""; $eml=""; $pass=""; $phn=""; $add=""; $gen_id="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["first_name"]!=""){
            $fname=$_POST["first_name"];
        }
        if($_POST["user_name"]!=""){
            $uname=$_POST["user_name"];
        }
        if($_POST["email"]!=""){
            $eml=$_POST["email"];
        }
        if($_POST["password"]!=""){
            $pass=$_POST["password"];
        }
        if($_POST["phone"]!=""){
            $phn=$_POST["phone"];
        }
        if($_POST["address"]!=""){
            $add=$_POST["address"];
        }
        if($_POST["gender_id"]!=""){
            $gen_id=$_POST["gender_id"];
        }
    }

    $sql="insert into resigter(first_name, user_name, email, password, phone, address, gender_id)
        value('$fname', '$uname', '$eml', '$pass', '$phn', '$add', '$gen_id')";
    $result=$conn->query($sql);

    if($result>0){

        //$last_id=mysqli_insert_id($conn);
        //$sql="select * from resigter where id=$last_id";

        $sql="select * from resigter where email='$eml' and password='$pass'";
        $data_obj=$conn->query($sql);
        $data_arr=$data_obj->fetch_assoc();
        
        if($data_obj->num_rows>0){
            $_SESSION["reg_id"]=$data_arr["id"];
            $_SESSION["username"]=$data_arr["user_name"];
            $_SESSION["email"]=$data_arr["email"];
            $_SESSION["password"]=$data_arr["password"];

            header("Location:profile.php?id=".$data_arr["id"]);
        }else{
            echo $sql;
        }

    }else{
        echo"Error.</br>".$conn->erroe;
    }
?>