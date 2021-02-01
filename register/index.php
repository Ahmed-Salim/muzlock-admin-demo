<?php include_once('../header/index.php'); ?>

<div class="container-fluid bg-light">
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <form class="border rounded shadow my-5 py-5 px-5 w-50 bg-white needs-validation" novalidate>
                <fieldset class="mb-3" id="registerFieldset">
                    <legend class="text-center display-1 mb-5">Register</legend>
                    <div class="row mb-3">
                        <label for="fullName" class="col-sm-2 col-form-label col-form-label-sm">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="fullName" name="fullName" autofocus required>
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="age" class="col-sm-2 col-form-label col-form-label-sm">Age</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control form-control-sm" id="age" name="age" required>
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="country" class="col-sm-2 col-form-label col-form-label-sm">Country</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="country" name="country">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sect" class="col-sm-2 col-form-label col-form-label-sm">Sect</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="sect" name="sect">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Revert?</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="revert" id="revertYes" value="Yes">
                                <label class="form-check-label" for="revertYes">
                                    YES
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="revert" id="revertNo" value="No">
                                <label class="form-check-label" for="revertNo">
                                    NO
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="religion" class="col-sm-2 col-form-label col-form-label-sm">Religion</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="religion" name="religion">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="phone" class="col-sm-2 col-form-label col-form-label-sm">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="phone" name="phone">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male">
                                <label class="form-check-label" for="genderMale">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female">
                                <label class="form-check-label" for="genderFemale">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="genderOther" value="Other">
                                <label class="form-check-label" for="genderOther">
                                    Other
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="birthDate" class="col-sm-2 col-form-label col-form-label-sm">Date of Birth</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control form-control-sm" id="birthDate" name="birthDate">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="language" class="col-sm-2 col-form-label col-form-label-sm">Language</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="language" name="language">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="origin" class="col-sm-2 col-form-label col-form-label-sm">Origin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="origin" name="origin">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Smoke?</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="smoke" id="smokeYes" value="Yes">
                                <label class="form-check-label" for="smokeYes">
                                    YES
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="smoke" id="smokeNo" value="No">
                                <label class="form-check-label" for="smokeNo">
                                    NO
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="jobTitle" class="col-sm-2 col-form-label col-form-label-sm">Job Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="jobTitle" name="jobTitle">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-sm" id="inputEmail" name="email" required>
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control form-control-sm" id="inputPassword" name="password" required>
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Register</button>
                </fieldset>
                <a href="../">Already Registered? Login!</a>
            </form>
        </div>
    </div>
</div>

<script src="./index1.js"></script>

<?php include_once('../footer/index.php') ?>