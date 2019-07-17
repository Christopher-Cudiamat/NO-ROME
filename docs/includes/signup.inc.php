<?php

if (isset($_POST['submit'])) {
  //include database file
  include_once 'conn.inc.php';
  //allow user to type something in the form then insert ot database
  //mysqli_real to convert code to text
  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


  
  // ERROR handlers
  //checking empy fields
  //NOTE:GOOD PRACTICE CHECK ERROR FIRST
  if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
    header("Location: ../signup.php?signup=empty");
    exit();//to exit off the script
  } else {
    //chek if inp character are okay
    if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
      header("Location: ../signup.php?signup=invalid");
      exit();
    } else {
      //check if email is okay
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?signup=email");
        exit();
      } else {
        //check if user have the same username
        $sql = "SELECT * FROM users WHERE user_uid = '$uid';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0) {
          header("Location: ../signup.php?signup=usertaken");
          exit();
        } else {
          //HAsh password
          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

          //insert to database
          $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";

          mysqli_query($conn, $sql);
          header("Location: ../signup.php?signup=success");
          exit();
        }
      }
    }
  }

} else {
  header("Location: ../signup.php");
  exit();
}