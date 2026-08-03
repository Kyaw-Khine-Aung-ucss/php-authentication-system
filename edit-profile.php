<?php

session_start();

// if user try to search and open profile.php in browser, this page will not open
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

include("config/database.php");
$db = dbConnect();

$id = $_SESSION['user_id'];
$qry = "SELECT * FROM users WHERE id = ?"; // get data from database to edit
$stmt = mysqli_prepare($db, $qry);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

?>

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
                            Edit Form
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="actions/update-profile.php" method="POST">
                            <div>
                                <input type="hidden" name="id" value="<?= $user['id']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Full Name
                                </label>
                                <input
                                    type="text"
                                    name="fullname"
                                    value="<?= $user['fullname'] ?>"
                                    class="form-control"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Email
                                </label>
                                <input
                                    type="email"
                                    name="email"
                                    value="<?= $user['email'] ?>"
                                    class="form-control"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Phone
                                </label>
                                <input
                                    type="text"
                                    name="phone"
                                    value="<?= $user['phone'] ?>"
                                    class="form-control"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Address
                                </label>
                                <textarea name="address" class="form-control" required>
                                    <?= $user['address'] ?>
                                </textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>