<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "dacs2");

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  } else if($_POST["action"] == "check_email"){
    checkEmail();
  } else if($_POST["action"] == "login"){
    login();
  }
}


function checkEmail() {
  global $conn;
  $email = $_POST["email"];

  $user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
  if (mysqli_num_rows($user) > 0) {
      echo "invalid"; 
  } else {
      echo "valid"; 
  }
}



// REGISTER
function register(){
  global $conn;

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  if(empty($name) || empty($email) || empty($password)){
    echo "Vui lòng điền đủ thông tin!";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
  if(mysqli_num_rows($user) > 0){
    echo "Email đăng kí đã tồn tại";
    exit;
  }

      $hashedPassword = md5($password);
      $query = mysqli_query($conn, "INSERT INTO user value('', '$email', '$name', '$hashedPassword')");
      echo "Đăng kí thành công";
}

// LOGIN
function login(){
  global $conn;

  $email = $_POST["email"];
  $password = $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Đăng nhập thành công";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
    }
    else{
      echo "Mật khẩu không chính xác";
      exit;
    }
  }
  else{
    echo "Email không tồn tại";
    exit;
  }
}




?>
