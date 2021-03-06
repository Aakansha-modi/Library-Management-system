<?php include "connection.php";?>

<?php
if(isset($_POST['submit'])){
        $username = $_POST['email'];  
        $password = $_POST['password'];  
        
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  

        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
             header("location:home.php");
        }  
        else{  
         header("location:login.php");
        } 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Library management system</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Log in</h1>
            <form action="login.php" method="post">
              <div class="form-group">
                <label for="email">Username</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
              </div>
              
              <button name="submit" id="login" class="btn btn-block login-btn" type="submit" value="submit">Login</button>
              
            </form>
           
            <p class="login-wrapper-footer-text">Don't have an account? <a href="register.php" class="text-reset">Register here</a></p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="images/library3.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main> 
</body>
</html>
