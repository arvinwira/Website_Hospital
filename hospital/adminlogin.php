<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'rmh_sakit') or die('connection failed');

// Cek jika pengguna sudah login, redirect ke admin.php jika sudah login
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('location: admin.php');
    exit;
}

// Cek jika form login telah dikirimkan
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifikasi username dan password di tabel admin
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        // Autentikasi berhasil, set session dan redirect ke admin.php
        $_SESSION['loggedin'] = true;
        header('location: admin.php');
        exit;
    } else {
        // Autentikasi gagal, tampilkan pesan error
        $login_error = "Username atau password salah!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin ABC Hospital</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            text-align: center;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="text"],
        input[type="password"] {
            width: 200px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            width: 100px;
            background-color: #4caf50;
            border: none;
            color: #fff;
            cursor: pointer;
        }
        p {
            text-align: center;
            margin-bottom: 10px;
        }
        p.error-message {
            color: red;
        }
        p.success-message {
            color: green;
        }
    </style>
</head>
<body>
    <h2>Login Admin ABC Hospital</h2>
    <?php if (isset($login_error)) : ?>
        <p class="error-message"><?php echo $login_error; ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>