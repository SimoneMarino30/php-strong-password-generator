<?php 
// prendo il valore da GET 
$length = $_GET['my_length'] ?? '';
// e lo converto in numero
settype($length, 'integer'); 
// var_dump($length);



// funzione per generazione random 
function random_password($length) {
    // caratteri da utilizzare
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    // funzione shuffle dei caratteri in chars
    return substr(str_shuffle($chars), 0, $length);
}
$session_psw = random_password($length);
var_dump($session_psw);
session_start();

// $_SESSION['$length'];
?>