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
    $f_name=""; $u_name=""; $eml=""; $pass=""; $phn=""; $add=""; $gen_id="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["first_name"]!=""){
            $f_name=$_POST["first_name"];
        }
        if($_POST["user_name"]!=""){
            $u_name=$_POST["user_name"];
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
        value('$f_name', '$u_name', '$eml', '$pass', '$phn', '$add', '$gen_id')"; 
    $result=$conn->query($sql); //insert already done

    //registration er somoy 2 vabe database theke data ana jay.ekta holo registration er last id dea ba jei lok registration korse tar je insert id oita dea.
    //arekta holo login er somoy jei lok user,pass dise oita dea.

     

      
  
    if($result>0){ //check insert

          $last_id = mysqli_insert_id($conn);
         
            // $sql="select * from resigter where user_name='$u_name' and password=$pass";

            $sql="select * from resigter where id=$last_id";

            $data_obj=$conn->query($sql);
            $arr=$data_obj->fetch_assoc();


        if($data_obj->num_rows>0){ //database data thakle if e dukbe
            $_SESSION["reg_id"]=$arr["id"];
            $_SESSION["firstname"]=$arr["first_name"];
            $_SESSION["username"]=$arr["user_name"];
            $_SESSION["email"]=$arr["email"];
            $_SESSION["password"]=$arr["password"];
            $_SESSION["phone"]=$arr["phone"];
            $_SESSION["address"]=$arr["address"];
            $_SESSION["gender_id"]=$arr["gender_id"];

          //  echo"Successful.<br>";
           header("Location:profile.php?up_id=".$arr["id"]);
        }else{
             
            echo  $sql;
        }

    }else{
        echo"Error.</br>".$conn->error;
    }
?>