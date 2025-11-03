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
?>

<!DOCTYPE html>
    <head></head>
    <body>
        <form action="login_controller.php" method="post">
            <input type="number" name="phone" placeholder="Phone" value=""></br>  
            <input type="password" name="password" placeholder="Password" value=""></br></br>          
            <button type="submit">Login</button>
        </form>
    </body>
</html>