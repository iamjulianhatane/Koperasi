<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
          <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
          <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
          <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
             
            <div class="input-group">
            <a href="Logout.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>