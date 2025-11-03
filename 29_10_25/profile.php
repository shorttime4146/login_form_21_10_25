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

    if(isset($_SESSION["reg_id"])){
        $id=$_GET["up_id"];
        $sql="select * from resigter where id=$id";
        $data_obj=$conn->query($sql);
        $data_arr=$data_obj->fetch_assoc();
?>

<table>
    <thead></thead>
    <tbody>
        <tr>
            <th>User Name=></th>
            <td><?php echo $data_arr["user_name"]; ?></td>
        </tr>
        <tr>
            <th>Email=></th>
            <td><?php echo $data_arr["email"]; ?></td>
        </tr>
        <tr>
            <th>Address=></th>
            <td><?php echo $data_arr["address"]; ?></td>
        </tr>
        <tr>
            <th>
                <a href="logout.php">Logout</a>
            </th>
        </tr>
    </tbody>
</table>

<?php 
    }else{
        header("Location:login_form.php");
    }
?>