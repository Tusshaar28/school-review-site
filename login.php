<?php
    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="schools4u";

    $conn = new mysqli($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo"Connection Failed:",mysqli_connect_error();
        exit;
    }
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM register WHERE Username='$username' AND Password='$password'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        header("location: postloggedin.html");
    }
    else
    {
        echo "<script>alert('Wrong username or Password'); window.location.href = 'login.html';</script>"; 
    }
    mysqli_close($conn);
?>
