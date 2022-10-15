<?php 

include 'conn.php';

if (isset($_POST['submit'])){

    $fullname =$_POST['fullname'];
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $tell =$_POST['tell'];
    $date_reg =$_POST['date_reg'];
   
    $insert = "INSERT INTO users (fullname, username, email, password, tell, date_reg) 
    values ('$fullname','$username', '$email', '$password', '$tell', '$date_reg')";
   

    $result = mysqli_query($conn,$insert);

    if($result){
      echo 'registered successfully';
    }else{
        echo $conn->error;
    }
}




?>