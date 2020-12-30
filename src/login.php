<!DOCTYPE html>    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>    
    

    <!-- <link rel="stylesheet" type="text/css" href="login.css">  -->
    <style>
    <?php include "login.css" ?>
    </style>

</head>    
<body>    
            
    <div class="login">    
    
    <form id="login-form" method="post" action="login.php">   
    <h1>Login </h1>

        <div class="input-field">
        <label>User Name </label> 
        <input type="text" name="username" required id="username" class="validate" placeholder="Username"> 
        </div>

        <div class="input-field">
        <label>Password</label>    
        <input type="Password" name="password" class="validate" required id="password" placeholder="Password">
        </div>
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <input type="submit" name="log" id="log" value="Login">               
        <!--<div>    
        <a href="#">Forgot Password</a>  
        </div>-->
    </form>     
</div>   

<?php  
 include('include/config.php');


 //If user entered username and password
if (isset($_POST['username']) and isset($_POST['password']))
{
    // Get username and password from Form POST Request and assign to vairables
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Query to check matching username and password from users table 
    $query = "SELECT * FROM users WHERE Username='$username' and Password='$password'";

    if(mysqli_query($conn, $query))
    {
    //Execute Query
    $result = mysqli_query($conn, $query);  
            
    //Get numbers of rows retrieved 
    $count = mysqli_num_rows($result);

    if ($count == 1)
    {
        $user = mysqli_fetch_array($result);
        session_start();
                            
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["UserID"] = $user['UserId'];
        $_SESSION["Role"] = $user['Role'];



        //echo "Login Credentials verified";
        echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

        // success
        header('Location: homepage.php');
        
    }
    else
    {
        //echo "Invalid Login Credentials";
        echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
    }
        }
        else{
            echo "<script type='text/javascript'>alert('Database connection failed')</script>";

        }
  
}
?>