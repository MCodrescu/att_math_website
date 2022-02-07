<!--Check Login Status-->
<?php require_once 'check-status.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Include Bootstrap and Meta Tags-->
    <?php require_once 'page-head.php' ?>
    <title>Welcome</title>
</head>

<body>

    <!--Navbar-->
    <?php require_once 'navbar.php' ?>

    <!--Header-->
    <div class="container py-3">
        <div class="row">
            <div class="col text-center">
                <h1>Welcome!</h1>
                <p>Select a subject below to learn more!</p>
            </div>
        </div>
    </div>

    <!--Subject Cards-->
    <div class="container">
        <div class="row justify-content-center">

            <!--Algebra Card-->
            <div class="col col-sm-4">
                <div class="card mx-auto">
                    <div class="card-body justify-content-center">
                        <h2 class="card-title text-center">Algebra</h2>
                        <p class="fs-5 pt-1 card-text text-center">The study of numbers and patterns using mathematical symbols and abstractions.</p>
                        <div class="row justify-content-center">
                            <img src="AlgebraCardHead.JPG" class="card-img-bottom w-75 pb-1">
                        </div>
                        <div class="d-grid">
                            <a href="#" class="btn btn-primary">Lessons</a>
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