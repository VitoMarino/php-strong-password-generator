<?php 
/* 
Dato un array di utenti, ovvero array associativi con username e password in chiaro
Creiamo una sicurissima e semplicissima pagina di login in cui l'utente puo' autenticarsi via form con:
- un username
- una password
La pagina di login (login.php) ci redireziona, una volta effettuato e SOLO se avvenuto correttamente,
alla pagina principale della nostra applicazione (index.php), in cui visualizziamo via sessione il nome dell'utente loggato.
Creiamo poi una pagina di logout (logout.php) che rimuova le informazioni della sessione dalla sessione attuale e redirezioni
all pagina di login (login.php).
*/

session_start();

$_SESSION["userName"]= "Gina Ginetti";
$_SESSION["password"]= "password";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>LOGIN</title>
</head>
<body>
    <header>
        <h1 class="text-center p-3">
            PHP Session Login
        </h1>

        <nav class="d-flex justify-content-center">
            
            <ul class="d-flex">
                
                <li class="me-2">
                    <a href="./index.php">
                        Home
                    </a>
                </li>

                <li class="me-2">
                    <a href="./login.php">
                        Loggati
                    </a>
                </li>
                
                <li class="me-2">
                    <a href="./logout.php">
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <form class="d-flex justify-content-center align-items-center" action="./login.php" method="GET">
            <label for="userName">Username:</label>
            <input class="me-2" type="text" name="userName" id="userName">
            
            <label for="password">Password:</label>
            <input class="me-2" type="password" name="password" id="password">
            
            <button class="btn btn-primary" type="submit">
                Esegui login
            </button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>