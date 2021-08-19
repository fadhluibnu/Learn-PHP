<?php
// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {

    // cek username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>

<body>
    <h1>Login Admin</h1>
    <?php if (isset($error)) : ?>
        <p style="color:salmon; font-weight: bold; font-style:italic;">ussername / password salah</p>
    <?php endif; ?>
    <ul>
        <!-- jika ingin membuat menu login harus menggunakan method POST -->
        <form action="" method="POST">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="name" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>

</html>