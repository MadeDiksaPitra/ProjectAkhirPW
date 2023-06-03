<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location:../admin-zoo");
}

require_once "../Models/opt/connection.php";

$user_login_err = $user_password_err = $login_err = "";
$user_login = $user_password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["user_login"]))) {
        $user_login_err = "Masukkan email anda.";
    } else {
        $user_login = trim($_POST["user_login"]);
    }

    if (empty(trim($_POST["user_password"]))) {
        $user_password_err = "Masukkan password anda.";
    } else {
        $user_password = trim($_POST["user_password"]);
    }

    if (empty($user_login_err) && empty($user_password_err)) {

        $sql = "SELECT email, password FROM admin_zoo WHERE email = ?";

        if ($stmt = mysqli_prepare($mysqli, $sql)) {
            
            mysqli_stmt_bind_param($stmt, "s", $param_user_login);

            
            $param_user_login = $user_login;

            if (mysqli_stmt_execute($stmt)) {
               
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    
                    mysqli_stmt_bind_result($stmt,$email, $hashed_password);

                    if (mysqli_stmt_fetch($stmt)) {
                        $hashed_password = password_hash($user_password, PASSWORD_BCRYPT);

                        if (password_verify($user_password, $hashed_password) == true) {

                            $_SESSION["email"] = $email;
                            $_SESSION["loggedin"] = TRUE;

                            header("location: ../admin-zoo");
                        } else {
                            $login_err = "Email atau password yang anda masukkan salah.";

                        }
                    }
                } else {

                    $login_err = "Email atau password tidak sah.";
                }
            } else {
                echo "<script>" . "alert('Terjadi kesalahan. Coba lagi nanti.');" . "</script>";
                echo "<script>" . "window.location.href='login.php'" . "</script>";
                exit;
            }

            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($mysqli);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.php" media="screen">
    <script defer src="./js/script.js"></script>

    <script>
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };
    </script>

</head>

<body>
    <div class="">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-lg-5">
                <?php
                if (!empty($login_err)) {
                    echo "<div class='alert alert-danger'>" . $login_err . "</div>";
                }
                ?>
                <div class="form-wrap border rounded p-4">
                    <h1>Login</h1>
                    <p>Please login to continue as admin</p>
                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
                        <div class="mb-3">
                            <label for="user_login" class="form-label">Username</label>
                            <input type="text" class="form-control" name="user_login" id="user_login" value="<?= $user_login; ?>">
                            <small class="text-danger"><?= $user_login_err; ?></small>
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="user_password" id="password">
                            <small class="text-danger"><?= $user_password_err; ?></small>
                        </div>
                        <br>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary form-control" name="submit" value="Log In">
                        </div>
                    </form>
                    <div class="bottom">
                        <form action="../index.php" method="post">
                            <input id="submit" class=".center" type="submit" name="create" value="Kembali ke halaman utama">
                        </form>
                    </div>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>