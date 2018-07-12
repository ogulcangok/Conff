

<?php
session_start();

$user = "root";
$pass = "";
$db = "conff";

$logged =false;
$username ="";
$email = "";
$errors = array();

  $db = new mysqli("localhost",$user, $pass, $db) or die("Not connected");
  // Check connection
  if ($db->connect_error) {
   die("Connection failed: " . $db->connect_error);
  } 
  
  if(isset($_REQUEST["register"])){


    $username =$_REQUEST['username'];
    
    $email =$_REQUEST['email'];
    
    $password_1 =$_REQUEST['password_1'];
    
    $password_2 =$_REQUEST['password_2'];
    


    if(empty($username)){
      array_push($errors, "User name is required");
    }
    if(empty($email)){ 
      array_push($errors, "Email is required");
    }
    if(empty($password_1)){
      array_push($errors, "Password is required");
    }
    if($password_1 != $password_2){
      array_push($errors, "Passwords do not match");
    }

    //if there are no errors, save user to database
    if(count($errors) == 0){
      $password = md5($password_1); // encrypt password 
      $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
      mysqli_query($db,$sql);
      $logged = true;
      $_SESSION['logged'] = $logged;
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are logged in";
      header("LOCATION: http://localhost/tempA/index.php/");
      
    }
  }

     if(isset($_GET['logout'])){

        $logged = false;
        $_SESSION['logged'] = $logged;
        header('location: http://localhost/tempA/login.php/');
    }

     if(isset($_REQUEST['login_user'])){
        $username =$_REQUEST['username'];
    
        $password =$_REQUEST['password'];

        if(empty($username)){
          array_push($errors, "User name is required");
        }
        
        if(empty($password)){
          array_push($errors, "Password is required");
        }
        if(count($errors) == 0){

          $password = md5($password); // encrypt password
          $query = "SELECT * FROM users WHERE username ='$username' AND password='$password'";
          $result = mysqli_query($db,$query);
          if($result->num_rows > 0){
              $logged = true;
              $_SESSION['logged'] = $logged;
              $_SESSION['username'] = $username;
              $_SESSION['success'] = "You are logged in";
              header('location: http://localhost/tempA/index.php/');//redirect to home page

          }
          else{
              array_push($errors, "Wrong username/password combination");
              #header('location: http://localhost/tempA/login.php/');
          }

        }
    }

  
else { echo ""; }
$db->close();
?>
