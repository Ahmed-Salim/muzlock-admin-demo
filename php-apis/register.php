<?php

session_start();

include_once '../db-config/index.php';
include_once '../functions/index.php';

$response_msg = array();

if (empty($_POST["fullName"]) || empty($_POST["age"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["imageUrl"])) {
    $response_msg['status'] = 'error';
    $response_msg['description'] = 'Required Fields Empty!';
} else {
    $email = mysqli_real_escape_string($conn, clean_input($_POST["email"]));

    $sql = "SELECT * FROM user WHERE user_email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response_msg['status'] = 'error';
            $response_msg['description'] = 'Email Already Registered! Please Login!';
        }
    } else {
        $imageUrl = mysqli_real_escape_string($conn, clean_input($_POST["imageUrl"]));
        $fullName = mysqli_real_escape_string($conn, clean_input($_POST["fullName"]));
        $age = mysqli_real_escape_string($conn, clean_input($_POST["age"]));
        $country = mysqli_real_escape_string($conn, clean_input($_POST["country"]));
        $sect = mysqli_real_escape_string($conn, clean_input($_POST["sect"]));
        $revert = mysqli_real_escape_string($conn, clean_input((isset($_POST["revert"])) ? ($_POST["revert"]) : ('')));
        $religion = mysqli_real_escape_string($conn, clean_input($_POST["religion"]));
        $phone = mysqli_real_escape_string($conn, clean_input($_POST["phone"]));
        $gender = mysqli_real_escape_string($conn, clean_input((isset($_POST["gender"])) ? ($_POST["gender"]) : ('')));
        $birthDate = mysqli_real_escape_string($conn, clean_input($_POST["birthDate"]));
        $language = mysqli_real_escape_string($conn, clean_input($_POST["language"]));
        $origin = mysqli_real_escape_string($conn, clean_input($_POST["origin"]));
        $smoke = mysqli_real_escape_string($conn, clean_input((isset($_POST["smoke"])) ? ($_POST["smoke"]) : ('')));
        $jobTitle = mysqli_real_escape_string($conn, clean_input($_POST["jobTitle"]));
        $user_password = mysqli_real_escape_string($conn, clean_input($_POST["password"]));

        $sql2 = "INSERT INTO user (user_img, user_email, user_pass, user_name, user_age, user_country, user_sect, user_revert, user_religion, user_phone, user_gender, user_dob, user_lang, user_origin, user_smoke, user_jobTitle) VALUES ('$imageUrl', '$email', '$user_password', '$fullName', '$age', '$country', '$sect', '$revert', '$religion', '$phone', '$gender', '$birthDate', '$language', '$origin', '$smoke', '$jobTitle')";

        if (mysqli_query($conn, $sql2)) {
            $response_msg['status'] = 'success';
            $response_msg['description'] = 'New Record Created Successfully!';

            $_SESSION['id'] = mysqli_insert_id($conn);
            $_SESSION['user_name'] = $fullName;
            $_SESSION['user_img'] = $imageUrl;
        } else {
            $response_msg['status'] = 'error';
            $response_msg['description'] = "Error: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);

echo json_encode($response_msg);
