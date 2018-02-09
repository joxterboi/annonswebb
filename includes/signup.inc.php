<?php
if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['firstName']);
    $last = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    // Error handelers
    //Chck for empty fields
    if ($first == !null && $last == !null && $email == !null && $uid == !null && $pwd == !null) {
        //Check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$", $first) || !preg_match("/^[a-zA-Z]*$", $last)) {
            
        } else {

        }
    } else {
        echo "Fyll i alla fält innan du skickar in!";
    }

} else {
    // header("Location: ../createAccount.php");
}