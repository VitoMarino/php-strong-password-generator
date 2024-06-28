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

$_SESSION["userName"]= "Gino Ginetti";
$_SESSION["password"]= "Password sicurissima";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <header>
        <h1>
            PHP Session Login
        </h1>

        <nav>
            <ul>
                <li>
                    <a href="./index.php">
                        Home
                    </a>
                </li>

                <li>
                    <a href="./login.php">
                        Login
                    </a>
                </li>
                <li>
                    <a href="./logout.php">
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>