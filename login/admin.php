<?php 
include("dbconfig.php");
session_start();
if(!isset($_SESSION['login_user']))
	{
	header("Location: login.php");
	}
?>
<html>
    <head>
        <title>Stand - Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="navbar">
            <nav>
                <a href="index.php"><strong>Nome</strong>Empresa</a>
                <a href="#"><span>Registo</a></span>
                <a href="admin.php"><span>Login</a></span>
            </nav>
        </div>
        <div id="adicionar">
            <form id="form1" name="form1" method="post" action="db_query.php">
                <label>Marca
                <input type="text" name="marca"/></label>
                <label>Modelo
                <input type="text" name="modelo"/></label>
                <input type="submit" name="submit" value="Adicionar"/>
            </form>
        </div>     
        <div class="login-block">
            <?php
	           if(isset($_SESSION['login_user']))
	           {
	               $login_session=$_SESSION['login_user'];
	                   echo '<h1>Welcome '.$login_session.'</h1>';
	           }
            ?>
	           <a href="logout.php">Logout</a>
        </div>
    </body>
</html>