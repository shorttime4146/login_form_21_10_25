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
        <form action="register_controller_r.php" method="post">
            <label>First Name:</label></br>
                <input type="text" name="first_name" value=""></br>
            <label>User Name:</label></br>
                <input type="text" name="user_name" value=""></br>
            <label>Email:</label></br>
                <input type="email" name="email" value=""></br>
            <label>Password:</label></br>
                <input type="password" name="password" value=""></br>
            <label>Phone:</label></br>
                <input type="phone" name="phone" value=""></br>
            <label>Address:</label></br>
                <input type="address" name="address" value=""></br>
            <label>Gender:</label>
                <?php 
                    $data="select id,name from gender";
                    $gen_data=$conn->query($data);

                    while($row=$gen_data->fetch_assoc()){
                ?>
                <input type="radio" name="gender_id" value="<?php echo $row['id']; ?>">
                    <label><?php echo $row['name']; ?></label>
                <?php } ?></br></br>
            <button value="submit">Submit</button>
        </form>
    </body>
</html>