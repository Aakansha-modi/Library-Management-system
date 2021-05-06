<?php include "connection.php" ?>
   <?php
    
function login($email,$password){
        global $con;
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
    }

function createProfile(){
    if(isset($_POST['submit'])) {
    global $con;
    $email = $_POST['email'];
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];

    $email = mysqli_real_escape_string($con, $email );   
    $password = mysqli_real_escape_string($con, $password );
    $name = mysqli_real_escape_string($con, $name ); 
    $student_id = mysqli_real_escape_string($con, $student_id );
    $phone_number = mysqli_real_escape_string($con, $phone_number ); 

    $hashFormat = "$2y$10$"; 
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password,$hashF_and_salt);   

        $query = "INSERT INTO (email,student_id,password,name,phone_number) ";
        $query .= "VALUES ('$email', '$student_id','$password','$name','$phone_number')";

       $result = mysqli_query($con, $query);
        if(!$result) {
            die('Query FAILED' . mysqli_connect_error());

        } else {

           header("location:login.php");

        }

}

}



?>