<?php

session_start();

function urlPrefix()
{
    if (basename(getcwd()) === basename(dirname(__DIR__))) {
        return './';
    } elseif (basename(dirname(getcwd())) === basename(dirname(__DIR__))) {
        return '../';
    } elseif (basename(dirname(dirname(getcwd()))) === basename(dirname(__DIR__))) {
        return '../../';
    } elseif (basename(dirname(dirname(dirname(getcwd())))) === basename(dirname(__DIR__))) {
        return '../../../';
    } else {
        return './';
    }
}

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    if (basename(getcwd()) === 'register'  || basename(getcwd()) === basename(dirname(__DIR__))) {
        header("Location: " . urlPrefix() . "dashboard/");
        die();
    } else {
    }
} else {
    if (strpos(getcwd(), 'dashboard') === false) {
    } else {
        header("Location: " . urlPrefix() . "php-apis/logout.php");
        die();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muzlock Admin Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>