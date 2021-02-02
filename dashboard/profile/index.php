<?php include_once('../header.php'); ?>

<?php

include_once('../../db-config/index.php');

$userId = $_SESSION['id'];

$sql = "SELECT * FROM user WHERE id=$userId";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

?>

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="mb-3">Profile</h1>
                    <form method="POST" action="../../php-apis/update-profile.php" id="profileForm" class="needs-validation" novalidate>
                        <fieldset class="mb-3" id="registerFieldset">
                            <div class="row mb-3 align-items-center">
                                <label for="imageUrl" class="col-sm-2 col-form-label col-form-label-sm">
                                    <img class="img-fluid rounded-circle" width="100px" src="<?php echo $row['user_img']; ?>" alt="Image URL" />
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="imageUrl" name="imageUrl" value="<?php echo $row['user_img']; ?>" placeholder="Image URL" autofocus required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fullName" class="col-sm-2 col-form-label col-form-label-sm">Full Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="fullName" name="fullName" value="<?php echo $row['user_name']; ?>" required>
                                    <div class="invalid-feedback">
                                        Required Field
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="age" class="col-sm-2 col-form-label col-form-label-sm">Age</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control form-control-sm" id="age" name="age" value="<?php echo $row['user_age']; ?>" required>
                                    <div class="invalid-feedback">
                                        Required Field
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="country" class="col-sm-2 col-form-label col-form-label-sm">Country</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="country" name="country" value="<?php echo $row['user_country']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="sect" class="col-sm-2 col-form-label col-form-label-sm">Sect</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="sect" name="sect" value="<?php echo $row['user_sect']; ?>">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-form-label-sm col-sm-2 pt-0">Revert?</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="revert" id="revertYes" value="Yes" <?php echo ($row['user_revert'] === 'Yes') ? ('checked') : (''); ?>>
                                        <label class="form-check-label" for="revertYes">
                                            YES
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="revert" id="revertNo" value="No" <?php echo ($row['user_revert'] === 'No') ? ('checked') : (''); ?>>
                                        <label class="form-check-label" for="revertNo">
                                            NO
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label for="religion" class="col-sm-2 col-form-label col-form-label-sm">Religion</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="religion" name="religion" value="<?php echo $row['user_religion']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone" class="col-sm-2 col-form-label col-form-label-sm">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="phone" name="phone" value="<?php echo $row['user_phone']; ?>">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-form-label-sm col-sm-2 pt-0">Gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male" <?php echo ($row['user_gender'] === 'Male') ? ('checked') : (''); ?>>
                                        <label class="form-check-label" for="genderMale">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female" <?php echo ($row['user_gender'] === 'Female') ? ('checked') : (''); ?>>
                                        <label class="form-check-label" for="genderFemale">
                                            Female
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="genderOther" value="Other" <?php echo ($row['user_gender'] === 'Other') ? ('checked') : (''); ?>>
                                        <label class="form-check-label" for="genderOther">
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label for="birthDate" class="col-sm-2 col-form-label col-form-label-sm">Date of Birth</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control form-control-sm" id="birthDate" name="birthDate" value="<?php echo $row['user_dob']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="language" class="col-sm-2 col-form-label col-form-label-sm">Language</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="language" name="language" value="<?php echo $row['user_lang']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="origin" class="col-sm-2 col-form-label col-form-label-sm">Origin</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="origin" name="origin" value="<?php echo $row['user_origin']; ?>">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-form-label-sm col-sm-2 pt-0">Smoke?</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="smoke" id="smokeYes" value="Yes" <?php echo ($row['user_smoke'] === 'Yes') ? ('checked') : (''); ?>>
                                        <label class="form-check-label" for="smokeYes">
                                            YES
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="smoke" id="smokeNo" value="No" <?php echo ($row['user_smoke'] === 'No') ? ('checked') : (''); ?>>
                                        <label class="form-check-label" for="smokeNo">
                                            NO
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label for="jobTitle" class="col-sm-2 col-form-label col-form-label-sm">Job Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="jobTitle" name="jobTitle" value="<?php echo $row['user_jobTitle']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control form-control-sm" id="inputEmail" name="email" value="<?php echo $row['user_email']; ?>" required>
                                    <div class="invalid-feedback">
                                        Required Field
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control form-control-sm" id="inputPassword" name="password" value="<?php echo $row['user_pass']; ?>" required>
                                    <div class="invalid-feedback">
                                        Required Field
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                            <button type="button" class="delete btn btn-sm btn-danger">Delete</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

<?php

    }
} else {
    header("Location: ../../php-apis/logout.php");
    die();
}

mysqli_close($conn);

?>

<script src="./index1.js"></script>

<?php include_once('../footer.php') ?>