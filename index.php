<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <style>
        .wrap {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5 col-md-7">
                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h3 class="mb-0">
                            <i class="bi bi-person-plus-fill"></i>
                            Login Form
                        </h3>
                    </div>
                    <?php if (isset($_GET['incorrect'])): ?>
                        <div class="alert alert-warning">Invalid email or password</div>
                    <?php endif ?>
                    <?php if (isset($_GET['register'])): ?>
                        <div class="alert alert-success">Registration Successful. Please login.</div>
                    <?php endif ?>
                    <div class="card-body">
                        <form action="actions/login.php" method="POST">
                            <div class="mb-3">
                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    placeholder="Email:"
                                    required>
                            </div>
                            <div class="mb-3">
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Password:"
                                    required>
                            </div>
                            <button
                                type="submit"
                                class="btn btn-primary w-100">
                                <i class="bi bi-person-check-fill"></i>
                                Login
                            </button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="register.php">
                            register
                        </a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>


<!-- <div class="wrap">
        <h3>
            <i class="bi bi-person-plus-fill h3 mb-3"></i>
            Login
        </h3>
        <?php if (isset($_GET['incorrect'])): ?>
            <div class="alert alert-warning">Invalid email and password</div>
        <?php endif ?>

        <form action="./actions/login.php" method="post">
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary"> Login </button>
        </form>
        <br>
        <a href="register.php">Register</a>
    </div> -->