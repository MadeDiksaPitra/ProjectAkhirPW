<?php
$msg = '';
if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {

    //login Admin
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') { 
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'admin';
        header("Location: index.php");

    //login Guest
    } elseif ($_POST['username'] == 'guest' && $_POST['password'] == 'guest') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'guest';
        header("Location: guest.php");

    //jika username atau password salah
    } else {
        $msg = 'Username atau password salah';
        echo "$msg";
        echo " ";
        echo "<form action = 'login.php' method = 'post'>
        <input id='submit' type = 'submit' value = 'Kembali ke Halaman Login' name = 'submit'>
        </form>";
    }
}
