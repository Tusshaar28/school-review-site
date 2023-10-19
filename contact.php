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

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO `reviews` (`Username`, `Email`, `Message`) VALUES ('$name', '$email', '$message')";


  $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    echo "<script>alert('Thanks for your review!!'); window.location.href = 'contact.html';</script>";

   

  mysqli_close($conn);
?>
