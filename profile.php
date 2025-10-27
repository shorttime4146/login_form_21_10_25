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

    $id=$_GET["baaler_id"];
    $sql_t1="select * from resigter where id=$id";
    $obj=$conn->query($sql_t1);
    $arr=$obj->fetch_assoc();

    $_SESSION["reg_id"]=$arr["id"];
    $_SESSION["name"]=$arr["user_name"];

    $sql_t2="select * from resigter";
    $data=$conn->query($sql_t2);
?>

<table>
    <thead></thead>
    <tbody>
        <tr>
            <td>First Name=></td>
            <td><?php echo $arr["first_name"]; ?></td>
        </tr>
        <tr>
            <td>User Name=></td>
            <td><?php echo $arr["user_name"]; ?></td>
        </tr>
        <tr>
            <td>Password=></td>
            <td><?php echo $arr["password"]; ?></td>
        </tr>
    </tbody>
</table>

<table border="1" style="margin-top:5%">
    <thead>
        <tr>
            <th width="250px">First Name</th>
            <th width="150px">User Name</th>
            <th width="250px">Email</th>
            <th width="50px">Password</th>
            <th width="50px">Phone</th>
            <th width="300px">Address</th>
            <th width="100px">Gender Id</th>
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