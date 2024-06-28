<?php 
include "./function.php";

include __DIR__ . '/otherFunction/functionPartials.php';

session_start();

var_dump($access);

$users = [
    [
        "userName" => "Gino Ginetti",
        "password" => "123456"
    ],
    [
        "userName" => "Riccardo Stellantis",
        "password" => "5678910"
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
        "password" => "081833"
    ],
    [
        "userName" => "Francesca Miele",
        "password" => "223890"
    ],
    [
        "userName" => "Carlito Triola",
        "password" => "15081"
    ],
    [
        "userName" => "Iovine Checchia",
        "password" => "1563"
    ],
    [
        "userName" => "Roberto Bolle",
        "password" => "616363"
    ],
    [
        "userName" => "Fedez",
        "password" => "ChiaraFerragni"
    ]
];

//Ciclo gli elementi da controllare
foreach($users as $access) {
    // Faccio un controllo all'interno del ciclo in modo da verificare se quello che c'è scritto nella chiamata GET sia uguale a quello scritto nell'array
    if(isset($_GET["userName"]) === $access["userName"] && isset($_GET["password"]) === $access["password"]) {
        $_SESSION["userName"] = $_GET["userName"];
        $_SESSION["password"] = $_GET["password"];?>

        <h1> Benvenuto <?php $_SESSION["userName"] ?> </h1>

    <?php } else { ?>
        <h1>Non sei registrato e non puoi loggarti</h1>
    <?php }

} ?>



