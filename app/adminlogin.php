<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Login Page</title>
</head>
  
<body>
    <form action="validate.php" method="POST">
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
       <div class="sidenav">
         <div class="login-main-text">
            <img src="codered.jpg" >
            <h4>   Application <br> Login page </h4>
            <br>
            <p style="text-align:center">Login or register from here to access.</p>
         </div>
      </div>
        
        <div class="login-box">
            <h1>Administrator</h1>
  
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Adminname" 
                         name="adminname" value="">
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
  
            <input class="button" type="submit" 
                     name="login" value="Sign In" >
        </div>
    </form>
</body>
  
</html> 