
<head>
<meta charset = "windows-1251">
<link rel="stylesheet" type ="text/css" href="login.css">
</head>
<body background="back.jpg">
<?php
session_start();
                mysql_connect('localhost','root','')or die(mysql_error());
              mysql_select_db("users");
              if (isset($_POST['submit'])){
                $username   = $_POST['username'];
                $login      = $_POST['login'];
                $password   = $_POST['password'];
                $r_password = $_POST['r_password'];

                if($password == $r_password){
                    $password   = md5($password);
                    $db = mysql_query("INSERT INTO `user`(`username`, `login`, `password`, `basket`) VALUES ('$username','$login','$password','')")or die(mysql_error());
                }
                else{
                    echo "Password are not same<br>";
            }
        }
        if(isset($_POST['enter'])){
            $e_login    = $_POST['e_login'];
            $e_password = md5($_POST['e_password']);
            $db = mysql_query("SELECT*FROM user WHERE login='$e_login'");
            $user_data  = mysql_fetch_array($db);
        
        if($user_data['password'] == $e_password){ 
            $_SESSION['id']=$user_data['id'];
            header('Location: kids.php');      
        }
        else{
        echo "your entered something wrong";
        }
    }
?>
<form method="post" action="Login.php" >
<div class="register">
    <input type="text" placeholder="username" name="username"  id="text"><br>
    <input type="text" placeholder="login" name="login" id="text" required/><br>
    <input type="password" placeholder="password" id="text" name="password" required/><br>
    <input type="password" placeholder="repeat password" id="text" name="r_password" required/><br>
    <input type="submit" name="submit" id="text" value="Registration"/><br>
    <input type="reset" name="submit" id="text" value="Reset"/>
</form>
</div>

<div class="enter">
<form method="post" action="login.php"/>
    <input type="text" placeholder="login" name="e_login" id="text" required/><br>
    <input type="password" placeholder="password" name="e_password"id="text" required/><br>
    <input type="submit" name="enter" value="Enter"id="text"/>
    <input type="submit" name="log out" value="log out" id="text"/>
</form>
</div>


</html>
