<?php
session_start();
if(isset($_POST['submit'])){
$id = $_POST['id'];
$password = $_POST['password'];

$con = new mysqli("localhost", "root", "" ,"test");
if($con->connect_error){
    die("failed to connect: ".$con->connect_error);
} else{
    $stmt = $con->prepare("select * from user where id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
      $data = $stmt_result->fetch_assoc();
      if($data['password'] === $password){
        $_SESSION['username']=$data['id'];
        header('location: userinfo.html');
      } 
      else{
        echo"<h2> Invalid Email or password </h2>";
      }
      if($data['password'] === 'password'){
        header('location: admin.php');
      } 
    }
      else{
        echo"<h2> Invalid Email Or Passwrod </h2>";
    }
}
}
?>