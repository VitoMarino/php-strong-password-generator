<?php 

session_start();

if(isset($_GET["userName"]) && isset($_GET["password"])) {
    $_SESSION["userName"] = $_GET["userName"];
    $_SESSION["password"] = $_GET["password"] ?>
        
        <h1>
            Benvenuto <?php echo $_SESSION["userName"]; ?>
        </h1>

<?php }else { ?>

    <h1>Non hai eseguito l'accesso</h1>

<?php } ?>