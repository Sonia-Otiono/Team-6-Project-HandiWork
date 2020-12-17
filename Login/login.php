<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>    
<body>    
    <h1>Login Page</h1>
            
    <div class="login">    
        
    <form id="login-form" method="post" action="authen_login.php">   
        <label><b>User Name     
        </br>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </br>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br> 
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>   
        <input type="button" name="log" id="log" value="Login">       
        <br><br>    
        
        <div>    
        <a href="#">Forgot Password</a>  
        </div>
    </form>     
</div>    
</body>    
</html>     