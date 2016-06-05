<html>
    <head>
        <title>Stand</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="navbar">
            <nav>
                <a class="nome" href="index.php">Website stand</a>
                <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
                <a class="contactos" href="#"><span>Contactos</a></span>
                <a class="contactos" href="#"><span>Pesquisa</a></span>
                <a class="login" href="../Projeto_Redes/login/login.php"><span>Login</a></span>
            </nav>
            <script>
                function myFunction() {
                    document.getElementsByClassName("navbar")[0].classList.toggle("responsive");
                }
            </script>
        </div>
    </body>
</html>