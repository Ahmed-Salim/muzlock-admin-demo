<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muzlock Admin Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid vh-100 bg-light">
        <div class="row h-100">
            <div class="col h-100 d-flex justify-content-center align-items-center">
                <form class="border rounded shadow py-5 px-5 w-50 bg-white">
                    <fieldset class="mb-4" id="login-fieldset">
                        <legend class="text-center display-1 mb-5">Login</legend>
                        <div class="row mb-4">
                            <label for="inputEmail" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-lg" id="inputEmail" name="email" autofocus>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="inputPassword" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control form-control-lg" id="inputPassword" name="password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                    </fieldset>
                    <a href="./register">New User? Register!</a>
                </form>
            </div>
        </div>
    </div>

    <script src="./index1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>