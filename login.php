<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    
        <section>
            <form action="login.php" method="post" >
                <h1>Login</h1>
                <div class="inputbox">
                    
                    <input type="text" name="uname" id="userName" required>
                    <label for="userName">User Name</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="pass" id="passwd" required>
                    <label for="passwd">Password</label>
                </div>
                <div class="forget">
                    <!-- <label for=""><input type="checkbox">Remember Me</label> -->
                  <a href="#">Forget Password</a>
                </div>
                <button name="login">Log in</button>
                <div class="register">
                    <p>Don't have a account <a href="./register.html">Register</a></p>
                </div>
            </form>
        </section>
    
</body>
</html>
<!-- LOGIN PHP CODE -->
<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "ebook"; 
 //database connection
 $conn = mysqli_connect($servername,$username,$password,$database);
 if(!$conn){
     die('Connection Failed :' . mysqli_connect_error());
 
 }
 
if(isset($_POST['login']))
{
    
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $uname= $_POST['uname'];

        $check = "SELECT username,email,upassword FROM userinfo  WHERE  email = '$email' && upassword = '$pass'";
        $result = mysqli_query($conn,$check); //run query and store result in $result
        // $user_name= mysqli_query($conn,$uname);
        $total = mysqli_num_rows($result); //check no. of rows match in database 
       
        if($total == 1){
            $_SESSION['user'] = $email;
            $_SESSION['names'] = $uname;
            header('location:index.php');
        }else{
            header('location:login.php');
        }
    }
?>