<?php

  if(isset($_POST['login']))
  {
    include('../db.php'); 
    $email = $_POST['email'];
    $password = $_POST['password'];

    $queryLogin = mysqli_query($con, "SELECT * FROM peminjam WHERE email= '$email'") or die(mysqli_error($con));

    if(mysqli_num_rows($queryLogin) == 0)
    {
    echo'<script>alert("Email not found!"); window.location = "../page/loginPage.php"</script>';
    }

    else
    {
        $user = mysqli_fetch_assoc($queryLogin);
        if(password_verify($password, $user['password']))
        {
          if($user['email']== "admin")
          {
            session_start();
            $_SESSION['isLoginAdmin'] = true;
            $_SESSION['isLogin'] = false;
            $_SESSION['user'] = $user;
            echo'<script>alert("Login Success As Admin"); window.location = "../page/listAdmin.php"</script>';
          }
          else
          {
            session_start();
            $_SESSION['isLogin'] = true;
            $_SESSION['isLoginAdmin'] = false;
            $_SESSION['user'] = $user;
            echo'<script>alert("Login Success"); window.location = "../page/listBukuUser.php"</script>';
          }
        }
        else
        {
            echo'<script>alert("Username or Password Invalid");window.location = "../page/loginPage.php"</script>';
        }
    }
  }
  else
  {
    echo'<script>window.history.back()</script>';
  }
?>