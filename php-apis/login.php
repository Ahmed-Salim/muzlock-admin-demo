<?php

session_start();

include_once '../db-config/index.php';
include_once '../functions/index.php';

$response_msg = array();

if (empty($_POST["email"]) || empty($_POST["password"])) {
    $response_msg['status'] = 'error';
    $response_msg['description'] = 'All fields required!';
} else {
    $email = mysqli_real_escape_string($conn, clean_input($_POST["email"]));
    $user_password = mysqli_real_escape_string($conn, clean_input($_POST["password"]));

    $sql = "SELECT * FROM user WHERE user_email = '$email' AND user_pass = '$user_password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response_msg['status'] = 'success';
            $response_msg['description'] = 'Login Successfull';

            $_SESSION['id'] = $row['id'];
        }
    } else {
        $response_msg['status'] = 'error';
        $response_msg['description'] = 'Invalid Email or Password';
    }
}

mysqli_close($conn);

echo json_encode($response_msg);
