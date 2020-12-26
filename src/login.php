<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>    
<body>    
    <h1>Login Page</h1>
            
    <div class="login">    
    
    <form id="login-form" method="post" action="login.php">   
        <label><b>User Name     
        </br>    
        </label>    
        <input type="text" name="username" id="username" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </br>    
        </label>    
        <input type="Password" name="password" id="password" placeholder="Password">    
        <br><br> 
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>   
        <input type="submit" name="log" id="log" value="Login">       
        <br><br>    
        
        <!--<div>    
        <a href="#">Forgot Password</a>  
        </div>-->
    </form>     
</div>    
</body>    
</html> 

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

        session_start();
                            
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;


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
else{
    echo "failed";

}
?>