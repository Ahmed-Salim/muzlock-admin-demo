<?php include_once('./header.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="text-capitalize">Welcome, <?php echo $_SESSION['user_name']; ?></h1>
        </div>
    </div>
</div>

<?php include_once('./footer.php') ?>