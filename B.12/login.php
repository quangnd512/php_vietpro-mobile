<?php
$conn = mysqli_connect('localhost', 'root', '', 'users_manager');
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE user_mail='$email' AND user_pass='$password'";
    $query = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($query);
    if ($num > 0) {
        $row = mysqli_fetch_array($query);
        $_SESSION['email'] = $row['user_mail'];
        $_SESSION['password'] = $row['user_pass'];

//        check nút nhớ tài khoản
        if (isset($_POST['remember'])) {
            setcookie('user', $email, time() + 3600, '/', '', 0, 0);
            setcookie('pass', $password, time() + 3600, '/', '', 0, 0);
        }

        if ($row['user_level'] == 1) {
            $_SESSION['level'] = $row['user_level'];
            header('location: admin.php');
        } else {
            header('location: index.php');
        }
    } else {
        echo "<script>alert('ten sai');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Login form</h2>
            <?php
            if (!isset($_SESSION['email'])) {
                ?>
                <form method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input required="" type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if(isset($_COOKIE['user'])){echo $_COOKIE['user'];} ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input required="" type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" value="<?php if(isset($_COOKIE['pass'])){echo $_COOKIE['pass'];} ?>">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" value="" <?php if(isset($_COOKIE['user'])){echo 'checked';} ?>> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </form>
                <?php
            } else {
                if (!isset($_SESSION['level'])) {
                    header('location: index.php');
                } else {
                    header('location: admin.php');
                }
            }
            ?>
        </div>
    </body>
</html>
