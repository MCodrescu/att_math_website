<?php require_once 'login-form.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'page-head.php' ?>
    <title>Login</title>

</head>

<body>

    <!--Navbar-->
    <?php require_once 'login-navbar.php' ?>

    <!--Home Page-->
    <div class="container pt-5 px-lg-2">
        <div class="row">

            <!--Logo-->
            <div class="col-7 text-center pt-5">
                <h2 class="text-primary fst-italic">Codrescu Mathematics</h2>
                <h3>$$e^{\pi i}+1=0$$</h3>
            </div>

            <div class="col-sm-5 col-lg-4 pt-5">
                <div class="container shadow py-5 rounded">
                    <!--Login Form-->
                    <div class="row justify-content-center">
                        <div class="col">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="input-group input-group-lg mb-3">
                                    <input type="text" name="username" placeholder="Username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                                </div>
                                <div class="input-group input-group-lg">
                                    <input type="password" name="password" placeholder="Password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                </div>
                                <br>
                                <div class="d-grid mb-3">
                                    <input type="submit" class="btn btn-primary" value="Login">
                                </div>
                                <div class="d-grid">
                                    <a class="btn btn-secondary" href="register.php" role="button">Create Account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>





</body>

<!--Footer-->
<footer class="footer">
    <div class="container-fluid position-absolute bottom-0" style=" background-color: #f0f0f5;">
        <span class="text-muted">Created by Marcus Codrescu</span>
    </div>
</footer>

</html>