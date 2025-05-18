<?php

require '../controllers/connection/connect.php';

$email = $_POST['email'];

$sqlInsertNewletter = "INSERT INTO `newslleter` (`email`) values ('$email')";
$insertResult = mysqli_query($conecta, $sqlInsertNewletter);

if ( $insertResult ){

    //done. redirect to thank-you page.
    header('Location: thank-you.html');

} else {

    echo "O cadastro não pode ser realizado!";

}



?>