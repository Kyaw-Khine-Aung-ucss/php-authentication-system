<?php
session_start();

if (!isset($_SESSION['user_id'])) { // if user try to search and open profile.php in browser, this page will not open
    header('location: index.php');
    exit();
}

include("config/database.php");
$db = dbConnect();

$id = $_SESSION['user_id'];
$qry = "SELECT * FROM users WHERE id = ?"; // show user data in profile from database
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
    <title>My Profile</title>

    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="asset/bootstrap-icons/bootstrap-icons.min.css">

</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">
                            My Profile
                        </h2>
                        <div class="text-center">
                            <?php if (isset($_GET['error'])): ?>
                                <div class="alert alert-warning">Could not upload</div>
                            <?php endif ?>
                            <?php if (isset($_SESSION['profile-photo'])): ?>
                                <img src="<?php echo $_SESSION['profile-photo']; ?>"
                                    class="rounded-circle border border-3"
                                    width="140"
                                    height="140">
                            <?php else: ?>
                                 <img src="photos/default-profile.jpg"
                                    class="rounded-circle border border-3"
                                    width="140"
                                    height="140">
                            <?php endif; ?>
                            <h4 class="mt-3">
                                <?php echo $user['fullname']; ?>
                            </h4>
                        </div>
                        <hr>
                        <form action="actions/upload.php"
                            method="POST"
                            enctype="multipart/form-data">
                            <div class="input-group mb-4">
                                <input
                                    type="file"
                                    name="photo"
                                    class="form-control">
                                <button class="btn btn-primary">
                                    Upload
                                </button>
                            </div>
                        </form>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <i class="bi bi-envelope-fill text-primary"></i>
                                <strong>Email :</strong>
                                <?php echo $user['email']; ?>
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-telephone-fill text-success"></i>
                                <strong>Phone :</strong>
                                <?php echo $user['phone'] ?>
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-geo-alt-fill text-danger"></i>
                                <strong>Address :</strong>
                                <?php echo $user['address'] ?>
                            </li>
                        </ul>
                        <div class="text-center mt-4">
                            <a href="edit-profile.php"
                                class="btn btn-warning me-2">
                                <i class="bi bi-pencil-square"></i>
                                Edit Profile
                            </a>
                            <a href="actions/logout.php"
                                class="btn btn-danger">
                                <i class="bi bi-box-arrow-right"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>