<?php
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['user'])) || empty(trim($_POST['pass'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['user']);
        $password = trim($_POST['pass']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;
                            echo "<script> 
alert('Account Created Successfully'); 
window.location='login.php'; 
</script>" ; 
                            //Redirect user to welcome page
                            header("location: index.html");
                            
                        }
                        else{
                          echo "<h1><center> Login failed. Invalid username or password.</center></h1>";

                        }
                    }
                    else{
                      echo "<h1><center> Login failed. Invalid username or password.</center></h1>";

                    }

                }
                else{
                  echo "<h1><center> Login failed. Invalid username or password.</center></h1>";

                }
    }
}    


}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Kisan Supply-Login</title>

    <link rel="stylesheet" type="text/css" href="css/agro.css" />
  </head>
  <body>
    <header>
      <div class="main">
        <div class="logo">
          <img src="images\logo.png" alt="Logo" />
        </div>
        <ul>
          <li><a href="index.html">Home</a></li>
          <!-- <li><a href="agro.php">Agro</a></li> -->
          <li><a href="about.html">About</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="signup.html">Sign Up</a></li>
          <li><a href="admin/admin_login.html">Admin Login</a></li>
        </ul>
      </div>
    </header>
    <div class="title">
      <div class="login-page">
        <div class="form">
          <form class="login-form" method="POST" action="">
            <h3 style="color: #43a047;">LOGIN:</h3>
            <input type="text" placeholder="Username" name="user" id="uname" />
            <input
              type="password"
              placeholder="Password"
              name="pass"
              id="pass"
            />
            <button onclick="return validate();">login</button>
            <p class="message">
              Haven't registered yet?
              <a href="signup.html">Create an account</a>
            </p>
          </form>
        </div>
      </div>
    </div>
    <!-- <script type="text/javascript">
      function validate() {
        var username = document.getElementById("uname").value;
        var password = document.getElementById("pass").value;
        if (username == null || username == "") {
          alert("Please enter the username.");
          //window.location="signin.html";
          return false;
        } else {
          if (password == null || password == "") {
            alert("Please enter the password.");
            //window.location="signin.html";
            return false;
          } else {
            var patt1 = /[a-zA-Z0-9]/;
            if (patt1.test(username) == false) {
              alert("Enter a valid username");
              //window.location="signin.html";
              return false;
            } else {
              var patt2 = /[A-Z]+[a-z]+[0-9]+/g;
              if (password.length < 9 || patt2.test(password) == false) {
                alert("Invalid Username or password");
                //window.location="signin.html";
                return false;
              }
            }
          }
        }
      } -->
    </script>
    </div>
    <div class="footer">
      <div class="col-sm-4 quicksand whiteback slightlybigger ">
        <p> 45 A,<br>4 Esplanade,<br>
     Kolkata-700021</p>
     
    </div>
    <div>
     <p><i class="fa fa-2x fa-map-marker"></i> Copyright ® 2020-2021 to Kissan Supply™ </p>
    
    </div>
    </div>
  </body>
</html>
