<?php

session_start();

include_once '../db-config/index.php';
include_once '../functions/index.php';

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    $user_id = $_SESSION['id'];

    $sql = "DELETE FROM user WHERE id=$user_id";

    if (mysqli_query($conn, $sql)) {
        echo "Your Profile Has Been Deleted Successfully!";

        header("Refresh:3; url=./logout.php");
        die();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);

        header("Refresh:3; url=../dashboard/profile/");
        die();
    }
} else {
    echo 'Please Login Again to Continue!';

    header("Refresh:3; url=./logout.php");
    die();
}

mysqli_close($conn);
