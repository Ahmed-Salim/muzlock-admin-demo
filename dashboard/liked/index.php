<?php include_once('../header.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="mb-3">Liked Users</h1>
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Country</th>
                        <th scope="col">Sect</th>
                        <th scope="col">Revert?</th>
                        <th scope="col">Religion</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Language</th>
                        <th scope="col">Origin</th>
                        <th scope="col">Smoke?</th>
                        <th scope="col">Job Title</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    include_once('../../db-config/index.php');

                    $userId = $_SESSION['id'];

                    $sql = "SELECT * FROM liked INNER JOIN user ON user.id = liked.user_like WHERE liked.like_by = $userId ORDER BY user.user_name ASC";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $count = 1;

                        while ($row = mysqli_fetch_assoc($result)) {

                    ?>

                            <tr class="align-middle text-center">
                                <th scope="row"><?php echo $count; ?></th>
                                <td><img src="<?php echo $row['user_img']; ?>" alt="<?php echo $row['user_name']; ?>" height="50px" /></td>
                                <td class="text-capitalize"><?php echo $row['user_name']; ?></td>
                                <td class="text-capitalize"><?php echo $row['user_age']; ?></td>
                                <td class="text-capitalize"><?php echo $row['user_country']; ?></td>
                                <td class="text-capitalize"><?php echo $row['user_sect']; ?></td>
                                <td class="text-capitalize"><?php echo $row['user_revert']; ?></td>
                                <td class="text-capitalize"><?php echo $row['user_religion']; ?></td>
                                <td class="text-capitalize"><?php echo $row['user_gender']; ?></td>
                                <td class="text-capitalize"><?php echo $row['user_lang']; ?></td>
                                <td class="text-capitalize"><?php echo $row['user_origin']; ?></td>
                                <td class="text-capitalize"><?php echo $row['user_smoke']; ?></td>
                                <td class="text-capitalize"><?php echo $row['user_jobTitle']; ?></td>
                            </tr>

                    <?php

                            $count++;
                        }
                    } else {
                        echo "<tr><td colspan='13' class='text-center text-danger'>No Liked Users</td></tr>";
                    }

                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include_once('../footer.php') ?>