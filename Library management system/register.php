<?php include "connection.php";?>
<?php include "functions.php";?>
<?php createProfile();?>


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
          
          <div class="login-wrapper my-auto" style="margin-top: -120px;">
            <h1 class="login-title">Sign up</h1>
            <form action="register.php" method="post">
              <div class="form-group">
                <label for="email">Username</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
              </div>
                <div class="form-group">
                <label for="student_id">Student-id</label>
                <input type="id" name="student_id" id="id" class="form-control" placeholder="enter your student id">
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
              </div>
                <div class="form-group">
                <label for="name">Name</label>
                <input type="name" name="name" id="name" class="form-control" placeholder="enter your name">
              </div>
                <div class="form-group">
                <label for="phone number">Phone Number</label>
                <input type="phone_number" name="phone_number" id="phone_number" class="form-control" placeholder="enter your phone number">
              </div>
              <button name="submit" id="register" class="btn btn-block login-btn" type="submit" value="submit">Register</button>
            </form>
           
            <p class="login-wrapper-footer-text">Have an account? <a href="login.html" class="text-reset">Login here</a></p>
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
