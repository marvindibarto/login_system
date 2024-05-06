<?php
    include('dbcon.php');
    session_start();
?>

<?php
    if(isset($_POST['login'])){
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    $query = "SELECT * FROM `users` WHERE `username` = '$username' and `email_id` = '$email' and `password` = '$password'";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die("Keine Einträge gefunden".mysqli_error());
    }
    else{
        $row = mysqli_num_rows($result);
        echo $row;

        if ($row == 1) {
            
            $_SESSION['uname'] = $username;
            $_SESSION['email'] = $email;
            header('location:../home.php');

        }
        elseif ($row == 0) {
            header('location:../index.php?noentry=Es wurde kein Nutzer mit diesen Eingaben gefunden');
        }
        elseif ($row > 1) {
            echo "Es gibt einen Datenbankfehler <br> Bitte kontaktieren Sie uns unter marvin.dibartolomeo@gmail.com";
        }
    }

?>