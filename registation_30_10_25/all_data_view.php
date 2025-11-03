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
?>

<table border="1">
    <thead>
        <tr>
            <th>Id</th>
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
            while($row=$data_obj->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
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
        header("Location:reg_form.php");
    }
?>