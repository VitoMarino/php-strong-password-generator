<?php 
include "./function.php";

include __DIR__ . '/otherFunction/functionPartials.php';

session_start();

$users = [
    [
        "userName" => "Gino Ginetti",
        "password" => "123456"
    ],
    [
        "userName" => "Riccardo Stellantis",
        "password" => "123456"
    ],
    [
        "userName" => "Mario Rossi",
        "password" => "sedia"
    ],
    [
        "userName" => "Matteo Bianchi",
        "password" => "abcd"
    ],
    [
        "userName" => "Luigi Verdi",
        "password" => "123456"
    ],
    [
        "userName" => "Francesca Miele",
        "password" => "123456"
    ],
    [
        "userName" => "Carlito Triola",
        "password" => "123456"
    ],
    [
        "userName" => "Iovine Checchia",
        "password" => "123456"
    ],
    [
        "userName" => "Roberto Bolle",
        "password" => "123456"
    ],
    [
        "userName" => "Fedez",
        "password" => "ChiaraFerragni"
    ]
];

$loginTrue = false;

$welcome = false;
// Abbreviazione del ternario. In sostanza quando SESSION è vuoto SESSION diventa false (ha senso se si apre prima login di index.php)
/*$_SESSION['userName'] = $_SESSION['userName'] ?? false;
$_SESSION['password'] = $_SESSION['password'] ?? false;*/

var_dump($_SESSION["userName"]);

    foreach($users as $access) {
        // Faccio un controllo all'interno del ciclo in modo da verificare se quello che c'è scritto nella chiamata GET sia uguale a quello scritto nell'array
        if($_SESSION["userName"] === $access["userName"] && $_SESSION["password"] === $access["password"]) { ?>
            
            <!-- INTERRUZIONE CICLO AL POSTO DEL BREACK!-->
            <?php $welcome = true; 
            if($welcome === true) { ?>
            <h1> Benvenuto <?php echo $_SESSION["userName"] ?> </h1>
            <?php $welcome = false ?>
            
            <?php $loginTrue = true ?>
            <?php } ?>
    <?php } ?>

    <?php } ?>
    
    <?php if(!$loginTrue) { ?>
            <h1>Non sei registrato e non puoi loggarti</h1>
        <?php }





