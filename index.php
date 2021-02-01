<?php include_once('./header/index.php'); ?>

<div class="container-fluid vh-100 bg-light">
    <div class="row h-100">
        <div class="col h-100 d-flex justify-content-center align-items-center">
            <form class="border rounded shadow py-5 px-5 w-50 bg-white needs-validation" novalidate>
                <fieldset class="mb-4" id="login-fieldset">
                    <legend class="text-center display-1 mb-5">Login</legend>
                    <div class="row mb-4">
                        <label for="inputEmail" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-lg" id="inputEmail" name="email" autofocus required>
                            <div class="invalid-feedback">
                                Valid Email Required
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputPassword" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control form-control-lg" id="inputPassword" name="password" required>
                            <div class="invalid-feedback">
                                Password Required
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                </fieldset>
                <a href="./register/">New User? Register!</a>
            </form>
        </div>
    </div>
</div>

<script src="./index1.js"></script>

<?php include_once('./footer/index.php') ?>