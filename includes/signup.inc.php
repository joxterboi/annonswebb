<?php
if (isset($_POST['signupSubmit'])) {
    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['firstName']);
    $last = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    // Error handelers
    //Chck for empty fields
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
        header("Location: ../createAccount.php?signup=empty");
        exit();
    } else {
        //Check if first and last names are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("Location: ../createAccount.php?signup=invalid");
            exit();
        } else {
            //Checks for valid email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../createAccount.php?signup=email");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_id='$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                //Checks of isername is taken
                if ($resultCheck > 0) {
                    header("Location: ../createAccount.php?signup=usertaken");
                    exit();
                } else {
                    //Hashing password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //Insert the user into the database
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
                    VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd')";
                    mysqli_query($conn, $sql);
                    header("Location: ../createAccount.php?signup=sucess");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../createAccount.php?signup=notpressed");
    exit();
}