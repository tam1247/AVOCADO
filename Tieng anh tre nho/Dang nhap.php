<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập
    if ($username == 'admin' && $password == '123456') {
        header('Location: Trang ca nhan.php');
        exit();
      } else {
        $error_message = 'Tên đăng nhập hoặc mật khẩu không chính xác.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="dang nhap.css">
    <link rel="shortcut icon" type="./img/AVOCADO.png" href="./img/AVOCADO.png">
</head>
<body>
  <h1>Đăng nhập</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" name="submit" value="Đăng nhập">
    </form>
    <?php
    if (isset($error_message)) {
        echo '<p>' . $error_message . '</p>';
    }
    ?>

</body>
</html>