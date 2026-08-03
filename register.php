<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5 col-md-7">
                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h3 class="mb-0">
                            <i class="bi bi-person-plus-fill"></i>
                            Register Form
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="actions/create.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">
                                    Full Name
                                </label>
                                <input
                                    type="text"
                                    name="fullname"
                                    class="form-control"
                                    placeholder="Enter your full name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Email
                                </label>
                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    placeholder="Enter your email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Password
                                </label>
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Enter password"
                                    required>
                            </div>
                            <button
                                type="submit"
                                class="btn btn-primary w-100">
                                <i class="bi bi-person-check-fill"></i>
                                Register
                            </button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        Already have an account?
                        <a href="index.php">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>