<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codeditors_muzlock";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//include_once './db-config.php';
//include_once './clean-input.php';

function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = mysqli_real_escape_string($conn, clean_input($_POST["email"]));
    $user_password = mysqli_real_escape_string($conn, clean_input($_POST["password"]));

    $response_msg = array();

    $sql = "SELECT * FROM user WHERE user_email = '$email' AND user_pass = '$user_password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            //if (password_verify($user_password, $row['user_password'])) {
            $response_msg['status'] = 'success';
            $response_msg['description'] = 'Login successfull!';

            // $_SESSION['id'] = $row['id'];
            // $_SESSION['username'] = $row['username'];
            // $_SESSION['firstname'] = $row['first_name'];
            // $_SESSION['lastname'] = $row['last_name'];
            // $_SESSION['email'] = $row['email'];
            // } else {
            //     $response_msg['status'] = 'error';
            //     $response_msg['description'] = 'Invalid Email or Password';
            // }
        }
    } else {
        $response_msg['status'] = 'error';
        $response_msg['description'] = 'Invalid Email or Password';
    }
} else {
    $response_msg['status'] = 'error';
    $response_msg['description'] = 'All fields required!';
}

mysqli_close($conn);

echo json_encode($response_msg);
