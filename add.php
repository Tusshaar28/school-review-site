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

  $school = $_POST['username'];
  $pic = $_POST['pic'];
  $web = $_POST['web'];

  $sql = "INSERT INTO `add` (`School`, `Picture`, `Website`) VALUES ('$school', '$pic', '$web')";


  $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    echo "<script>alert('Your school applocation has been sent for review.It will be added after verification'); window.location.href = 'add.html';</script>";

   

  mysqli_close($conn);
?>
