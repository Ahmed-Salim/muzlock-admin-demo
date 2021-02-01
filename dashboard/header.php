<?php

session_start();

function urlPrefix()
{
    if (basename(getcwd()) === basename(__DIR__)) {
        return './';
    } elseif (basename(dirname(getcwd())) === basename(__DIR__)) {
        return '../';
    } elseif (basename(dirname(dirname(getcwd()))) === basename(__DIR__)) {
        return '../../';
    } elseif (basename(dirname(dirname(dirname(getcwd())))) === basename(__DIR__)) {
        return '../../../';
    } else {
        return './';
    }
}

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    if (basename(getcwd()) === 'register'  || basename(getcwd()) === basename(__DIR__)) {
        header("Location: " . urlPrefix() . "dashboard/");
        die();
    } else {
    }
} else {
    if (strpos(getcwd(), 'dashboard') === false) {
    } else {
        header("Location: " . urlPrefix() . "../php-apis/logout.php");
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
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo urlPrefix(); ?>">Muzlock Admin</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="btn btn-outline-light" aria-current="page" href="<?php echo urlPrefix(); ?>../php-apis/logout.php">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-secondary text-light">

            </div>
            <div class="col-10">