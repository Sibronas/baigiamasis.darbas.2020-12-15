<?php
    if(isset($_POST['submit_create'])) {
        include_once 'db.inc.php';
        $first = mysqli_real_escape_string($conn, $_POST['first name']);
        $last = mysqli_real_escape_string($conn, $_POST['last name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);

        if(empty($first) || empty($last) || empty($email) || empty($pwd)) {
            header("Location: ../create.acc.php?signup=empty");
            exit();
        } else {
            if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
                header("Location: ../create.acc.php?signup=invalid");
                exit();
            } else {
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../create.acc.php?signup=invalidemail");
                    exit();
                } else {
                    $sql = "SELECT * FROM just_park_users WHERE user_email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $result_check = mysqli_num_rows($result);
                    if($result_check > 0) {
                        header("Location: ../create.acc.php?signup=invaliduseremail");
                        exit();
                    } else {
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO just_park_users (user_first, user_last, user_email, user_pwd) VALUES('$first', '$last'. '$email', '$hashedPwd');";
                        mysqli_query($conn, $sql);
                        header("Location: ../create.acc.php?signup=success");
                        exit();
                    }
                }
            }
        }

    } else {
        header("Location: ../create.acc.php");
        exit();
    }
?>
