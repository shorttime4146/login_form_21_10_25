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
        $id=$_GET["id"];
        $sql="select * from resigter where id=$id";
        $obj=$conn->query($sql);
        $arr=$obj->fetch_assoc();

        $sql="select * from resigter";
        $data=$conn->query($sql);
?>

<table>
    <thead></thead>
    <tbody>
        <tr>
            <th>First Name =></th>
            <td><?php echo $arr["first_name"]; ?></td>
        </tr>
        <tr>
            <th>User Name =></th>
            <td><?php echo $arr["user_name"]; ?></td>
        </tr>
        <tr>
            <th>Email =></th>
            <td><?php echo $arr["email"]; ?></td>
        </tr>
        <tr>
            <th>Password =></th>
            <td><?php echo $arr["password"]; ?></td>
        </tr>
        <tr>
            <td>
                <a href="logout.php">Logout</a>
            </td>
        </tr>
    </tbody>
</table>

<table border="1" style="margin-top:5%">
    <thead>
        <tr>
            <th>First Name</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Gender Id</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            while($row=$data->fetch_assoc()){        
        ?>
        <tr>
            <td><?php echo $row["first_name"]; ?></td>
            <td><?php echo $row["user_name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["password"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["gender_id"]; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php 
    }else{
        header("Location:login_form.php");
    }
?>