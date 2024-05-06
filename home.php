<?php
    include('includes/header.php');
    session_start();
?>
    

<?php

    if(isset($_SESSION['uname']) && isset($_SESSION['email'])){
        echo "Läuft";
    }
    elseif (isset($_GET['logout'])) {
        header('location:index.php?noentry=Erfolgreich ausgeloggt');
    } 
    else {
        header('location:index.php?noentry=Bitte einloggen');
    }
?>

<a href="includes/logout_process.php" class = "btn btn-danger">Logout</a>


    <?php
    include('includes/footer.php');
?>