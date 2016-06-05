<?php 
include("dbconfig.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
// username and password received from loginform 
$username=mysqli_real_escape_string($dbconfig,$_POST['username']);
$password=mysqli_real_escape_string($dbconfig,$_POST['password']);

$sql_query="SELECT id FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($dbconfig,$sql_query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);


// If result matched $username and $password, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$username;

header("location: admin.php");
}
else
{
echo "<span class='estilo_echo'>Dados incorretos, tente novamente!</span>";
}
}
?>
<!DOCTYPE html>
<style type="text/css">
.estilo_echo {
    font-family: 'Roboto',sans-serif;
    color: #F5DE31;
    left: 40%;
    text-align: center;
    position: relative;
}
</style>
<html>
<head>
<meta charset="UTF-8">
<link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin - Login</title>
<style>


#navbar {
    top: 2em;
    width: 80%;
    margin: 0 auto;
    position: relative;
    font-family: 'Ubuntu',sans-serif;
}

#navbar span {
    float: right;
    text-decoration: none;
    text-transform: uppercase;
    padding-left: 3%;
    font-size: 15px;
}

#navbar a {  
    font-weight: 500;
    text-transform: uppercase;
    text-decoration: none;
}

.nome {
    color: #4dc7a6;
    font-size: 20px;
}

.login {
    color: #4dc7a6;
    bottom: 8%;
    padding-left: 3%;
}

.contactos {
    color: #575757;
}

.login {
    color: #4dc7a6;
}

.contactos {
    color: #575757;
}

.login-block {
    position: absolute;
    width: 30%;
    padding: 20px;
    background: #fff;
    border: 5px solid #4dc7a6;
    border-width: thin;
    top: 30%;
    left: 34%;
}

.login-block h1 {
    text-align: center;
    color: #4dc7a6;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
    font-family: 'Ubuntu',sans-serif;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: 'Ubuntu',sans-serif;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('../Images/Login_Icons/avatar.png') 20px no-repeat;
    background-size: 20px;
}

.login-block input#password {
    background: #fff url('../Images/Login_Icons/padlock.png') 20px no-repeat;
    background-size: 20px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #575757;
}

.login-block button {
    transition: all 0.5s;
    width: 100%;
    height: 40px;
    background: #4dc7a6;
    border: 1px solid #4dc7a6;
    color: #fff;
    font-weight: 400;
    text-transform: uppercase;
    font-size: 14px;
    font-family: 'Ubuntu',sans-serif;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    transition: all 0.5s;
    background: #fff;
    color: #4dc7a6;
    border: 1px solid #4dc7a6;
}

</style>
</head>

<body>
        <div id="navbar">
            <nav>
                <a class="nome" href="../index.php">Website stand</a>
                <a class="contactos" href="#"><span>Contactos</a></span>
                <a class="login" href="../Projeto_Redes/login/login.php"><span>Login</a></span>
            </nav>
        </div>
<div class="logo"></div>
<div class="login-block">
    <h1>Login</h1>
    <form method="post" action="" name="loginform">
    <input type="text" placeholder="Nome de utilizador" id="username" name="username" />
    <input type="password" placeholder="Password" id="password" name="password" />
    <button type="submit">Entrar</button>
    </form>
</div>
</body>

</html>