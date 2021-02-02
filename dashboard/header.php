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
    if (basename(getcwd()) === 'register'  || basename(getcwd()) === basename(dirname(__DIR__))) {
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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo urlPrefix(); ?>">Muzlock Admin Demo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-fluid rounded" style="width: 25px;" src="<?php echo $_SESSION['user_img']; ?>" alt="<?php echo $_SESSION['user_name']; ?>">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo urlPrefix(); ?>profile/">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="<?php echo urlPrefix(); ?>../php-apis/logout.php">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-3">
        <div class="row">
            <div class="col-2 border-end">
                <div class="list-group list-group-flush sticky-top">
                    <li class="list-group-item text-center">
                        <figure class="figure">
                            <img class="figure-img img-fluid rounded" style="width: 200px;" src="<?php echo $_SESSION['user_img']; ?>" alt="<?php echo $_SESSION['user_name']; ?>">
                            <figcaption class="fs-4 figure-caption text-center"><?php echo $_SESSION['user_name']; ?></figcaption>
                        </figure>
                    </li>
                    <a href="<?php echo urlPrefix(); ?>" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="<?php echo urlPrefix() . 'profile/'; ?>" class="list-group-item list-group-item-action">Profile</a>
                    <a href="<?php echo urlPrefix() . 'liked/'; ?>" class="list-group-item list-group-item-action">Liked Users</a>
                    <a href="<?php echo urlPrefix() . 'unliked/'; ?>" class="list-group-item list-group-item-action">Unliked Users</a>
                    <a href="<?php echo urlPrefix() . 'favourite/'; ?>" class="list-group-item list-group-item-action">Favourite Users</a>
                    <a href="<?php echo urlPrefix() . 'blocked/'; ?>" class="list-group-item list-group-item-action">Blocked Users</a>
                </div>
            </div>
            <div class="col-10">