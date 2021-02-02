<?php

session_start();

include_once '../db-config/index.php';
include_once '../functions/index.php';

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    $user_id = $_SESSION['id'];

    $sql = "DELETE FROM user WHERE id=$user_id";

    if (mysqli_query($conn, $sql)) {
        echo "Your Profile Has Been Deleted Successfully!<br />";

        $sql2 = "DELETE FROM blocked WHERE block_by=$user_id";

        if (mysqli_query($conn, $sql2)) {
            echo "User Blocked Data Deleted Successfully<br />";
        } else {
            echo "Error deleting user blocked record: " . mysqli_error($conn) . '<br />';
        }

        $sql3 = "DELETE FROM favourite WHERE fav_by=$user_id";

        if (mysqli_query($conn, $sql3)) {
            echo "Favourite Data Deleted Successfully<br />";
        } else {
            echo "Error deleting favourite record: " . mysqli_error($conn) . '<br />';
        }

        $sql4 = "DELETE FROM liked WHERE like_by=$user_id";

        if (mysqli_query($conn, $sql4)) {
            echo "Liked Data Deleted Successfully<br />";
        } else {
            echo "Error deleting liked record: " . mysqli_error($conn) . '<br />';
        }

        $sql5 = "DELETE FROM unliked WHERE unlike_by=$user_id";

        if (mysqli_query($conn, $sql5)) {
            echo "Unliked Data Deleted Successfully<br />";
        } else {
            echo "Error deleting unliked record: " . mysqli_error($conn) . '<br />';
        }

        $sql5 = "DELETE FROM user_inform WHERE user_id=$user_id";

        if (mysqli_query($conn, $sql5)) {
            echo "User Inform Data Deleted Successfully<br />";
        } else {
            echo "Error deleting user inform record: " . mysqli_error($conn) . '<br />';
        }

        header("Refresh:3; url=./logout.php");
        die();
    } else {
        echo "Error deleting profile: " . mysqli_error($conn);

        header("Refresh:3; url=../dashboard/profile/");
        die();
    }
} else {
    echo 'Please Login Again to Continue!';

    header("Refresh:3; url=./logout.php");
    die();
}

mysqli_close($conn);
