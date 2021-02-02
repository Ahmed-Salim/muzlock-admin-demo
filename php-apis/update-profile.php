<?php

session_start();

include_once '../db-config/index.php';
include_once '../functions/index.php';

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    if (empty($_POST["fullName"]) || empty($_POST["age"]) || empty($_POST["email"]) || empty($_POST["password"])) {
        echo 'Required Fields Empty!';

        header("Refresh:3; url=../dashboard/profile/");
        die();
    } else {
        $user_id = $_SESSION['id'];
        $imageUrl = mysqli_real_escape_string($conn, clean_input($_POST["imageUrl"]));
        $email = mysqli_real_escape_string($conn, clean_input($_POST["email"]));
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

        $sql = "SELECT * FROM user WHERE id = $user_id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($email === $row['user_email']) {
                    $sql2 = "UPDATE user SET user_email='$email', user_pass = '$user_password', user_img = '$imageUrl', user_name = '$fullName', user_age = '$age', user_country = '$country', user_sect = '$sect', user_revert = '$revert', user_religion = '$religion', user_phone = '$phone', user_gender = '$gender', user_dob = '$birthDate', user_lang = '$language', user_origin = '$origin', user_smoke = '$smoke', user_jobTitle = '$jobTitle' WHERE id=$user_id";

                    if (mysqli_query($conn, $sql2)) {
                        header("Location: ../dashboard/profile/");
                        die();
                    } else {
                        echo "Error: " . mysqli_error($conn);

                        header("Refresh:3; url=../dashboard/profile/");
                        die();
                    }
                } else {
                    $sql3 = "SELECT * FROM user WHERE user_email='$email'";
                    $result3 = mysqli_query($conn, $sql3);

                    if (mysqli_num_rows($result3) > 0) {
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            echo 'Email:' . $email . ' is Already Registered!';

                            header("Refresh:3; url=../dashboard/profile/");
                            die();
                        }
                    } else {
                        $sql2 = "UPDATE user SET user_email='$email', user_pass = '$user_password', user_name = '$fullName', user_age = '$age', user_country = '$country', user_sect = '$sect', user_revert = '$revert', user_religion = '$religion', user_phone = '$phone', user_gender = '$gender', user_dob = '$birthDate', user_lang = '$language', user_origin = '$origin', user_smoke = '$smoke', user_jobTitle = '$jobTitle' WHERE id=$user_id";

                        if (mysqli_query($conn, $sql2)) {
                            header("Location: ../dashboard/profile/");
                            die();
                        } else {
                            echo "Error: " . mysqli_error($conn);

                            header("Refresh:3; url=../dashboard/profile/");
                            die();
                        }
                    }
                }
            }
        } else {
            echo 'Please Login Again to Continue!';

            header("Refresh:3; url=./logout.php");
            die();
        }
    }
} else {
    echo 'Please Login Again to Continue!';

    header("Refresh:3; url=./logout.php");
    die();
}

mysqli_close($conn);
