<?php
session_start();
       $name = $_POST['name'];
       $email = $_POST['email'];
       $pass = $_POST['pass'];
      
       //database detail
       $servername = "localhost";
       $username = "root";
       $password = "";
       $database = "ebook"; 
       //database connection
       $conn = mysqli_connect($servername,$username,$password,$database);
       if(!$conn){
           die('Connection Failed :' . mysqli_connect_error());
       }
       $sql = "INSERT INTO `userinfo` ( `username`, `email`, `upassword`, `dt`) VALUES ('$name', '$email', '$pass', current_timestamp());";
       if($conn->query($sql) == true){
       ?>
      
       <script>alert('Account Created Successfull');</script>
       <?php
        header('location:login.php');
       }else{
        echo "<script>alert('Faild to Create Account !')</script>";
       }

?>
