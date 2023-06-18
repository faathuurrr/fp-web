<?php
    include ('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brain Coffee</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- nav section start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo.png" style="width: 4rem;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    <!-- </li>
                    <form action="about/about.php">
                        <input type="submit" value="click on me!">
                    </form> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Chart</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Others
                        </a>
                        <ul class="dropdown-menu">
                            <li class="fw-bold text-center">Operational Hours</li>
                            <li><a class="dropdown-item" href="#">07.00 AM - 10.00 PM</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="fw-bold text-center">Contact</li>
                            <li><a class="dropdown-item" href="#">@braincoffee.id</a></li>
                            <li><a class="dropdown-item" href="#">0895-0396-9086</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- nav section end -->

    <!-- layout section start -->
    <div class="container-fluid text-center pt-3 pb-3">
        <div class="row align-items-center">
            <div class="col-sm-3 text-start">
                <ul class="fw-bold list-unstyled fs-1">
                    <li>MINI</li>
                    <li>CAFFEINE</li>
                    <li>DEALER</li>
                </ul>
                <p style="text-align: justify;">Just a small room for the crowd people's
                    talk. Like the name, Brain, we build a
                    comforting space to do brainstorming and
                    serve somce coffee too for boost the quality
                    talk. Welcome to our mini caffeine</p>
                <hr class="border-4 border-dark opacity-100">
                <p>Wonokromo Tangkis no. 52 Surabaya</p>
            </div>
            <div class="col-sm-9 text-end">
                <img src="img/brain3.png" alt="brain coffee" style="width: 75%;">
            </div>
        </div>
    </div>
    <!-- layout section end -->

    <!-- espresso based section start -->
    <div class="container text-center pt-5">
        <div class="col-sm-12 pb-3 pt-3 text-center">
            <h1 class="fw-bold">Espresso Based</h1>
        </div>
        <div class="row align-items-center text-center flex-nowrap overflow-auto">
            <?php
                while($product = mysqli_fetch_assoc($product_id)):
            ?>
            <div class="col-sm-3 g-2">
                <div class="card">
                    <img src="img/espresso.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['product_name'];?></h5>
                        <p class="card-text"><?= $product['product_description'];?></p>
                        <h6 class="card-title">Rp <?= $product['price'];?></h6>
                        <a href="#" class="btn btn-dark w-100">Add to cart</a>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            ?>
        </div>
    </div>
    <!-- espresso based section end -->

    <!-- non coffee section start -->
    <div class="container text-center pt-5">
        <div class="col-sm-12 pb-3 pt-5 text-center">
            <h1 class="fw-bold">Signature Non Coffee</h1>
        </div>
        <div class="row align-items-center text-center flex-nowrap overflow-auto">
        <?php
                while($product = mysqli_fetch_assoc($product_id1)):
            ?>
            <div class="col-sm-3 g-2">
                <div class="card">
                    <img src="img/espresso.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['product_name'];?></h5>
                        <p class="card-text"><?= $product['product_description'];?></p>
                        <h6 class="card-title">Rp <?= $product['price'];?></h6>
                        <a href="#" class="btn btn-dark w-100">Add to cart</a>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            ?>
        </div>
    </div>
    <!-- non coffee section end -->

    <!-- mixology section start -->
    <div class="container text-center pt-5">
        <div class="col-sm-12 pb-3 pt-5 text-center">
            <h1 class="fw-bold">Mixology</h1>
        </div>
        <div class="row align-items-center text-center flex-nowrap overflow-auto">
            <?php
                while($product = mysqli_fetch_assoc($product_id2)):
            ?>
            <div class="col-sm-3 g-2">
                <div class="card">
                    <img src="img/espresso.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['product_name'];?></h5>
                        <p class="card-text"><?= $product['product_description'];?></p>
                        <h6 class="card-title">Rp <?= $product['price'];?></h6>
                        <a href="#" class="btn btn-dark w-100">Add to cart</a>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            ?>
        </div>
    </div>
    <!-- mixology section end -->

    <!-- snack section start -->
    <div class="container text-center pt-5">
        <div class="col-sm-12 pb-3 pt-5 text-center">
            <h1 class="fw-bold">Snack</h1>
        </div>
        <div class="row align-items-center text-center flex-nowrap overflow-auto">
            <?php
                while($product = mysqli_fetch_assoc($product_id3)):
            ?>
            <div class="col-sm-3 g-2">
                <div class="card">
                    <img src="img/espresso.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['product_name'];?></h5>
                        <p class="card-text"><?= $product['product_description'];?></p>
                        <h6 class="card-title">Rp <?= $product['price'];?></h6>
                        <a href="#" class="btn btn-dark w-100">Add to cart</a>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            ?>
        </div>
    </div>
    <!-- snack section end -->

    <!-- Copyright -->
    <footer class="text-center text-white pt-5">
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="#">Brain Coffee</a>
        </div>
    </footer>
    <!-- Copyright -->

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>