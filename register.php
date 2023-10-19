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
$email=$_POST['email'];
$phone=$_POST['phone'];

if(empty($username) || empty($password) || empty($email) || empty($phone)) {
    echo "<script>alert('Enter all details!'); window.location.href = 'register.html';</script>";
    exit;
}

$sql="INSERT INTO `register` (`S.no`, `Username`, `Password`, `E-mail`, `Phone-No`) VALUES (NULL, '$username', '$password', '$email', '$phone')";

$result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    echo "<script>alert('Registration successful!'); window.location.href = 'postloggedin.html';</script>";

    mysqli_close($conn);
    

?>