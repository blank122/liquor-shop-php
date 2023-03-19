


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <title>Document</title>
</head>
<body>
    
    <!--Navbar-->
    <?php 
        include 'navbar.php';
    ?>    


    <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
            <div class="carousel-item active">
            <img src="./assets/brands/Hennessy_logo.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="./assets/brands/Hennessy_logo.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="./assets/brands/Hennessy_logo.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--End Carousel-->

    <!--Brandy Category-->
    <div class="container">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <h2 class="text-center">Brandy</h2>
    <div class="row">
        <div class="col-6 col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="./assets/categories/brandy/HennessyVSOP.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hennessy 700 ml</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="./assets/categories/brandy/HennessyVSOP.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hennessy 700 ml</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="./assets/categories/brandy/HennessyVSOP.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hennessy 700 ml</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!--End Brandy Category-->

    <div class="container">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <h2 class="text-center">Brandy</h2>
    <div class="row">
        <div class="col-6 col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="./assets/categories/brandy/HennessyVSOP.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hennessy 700 ml</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="./assets/categories/brandy/HennessyVSOP.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hennessy 700 ml</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="./assets/categories/brandy/HennessyVSOP.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hennessy 700 ml</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>

    </div>
    
    <!--End Brandy Category-->
    <div class="container">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <h2 class="text-center">Brandy</h2>
    <div class="row">
        <div class="col-6 col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="./assets/categories/brandy/HennessyVSOP.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hennessy 700 ml</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="./assets/categories/brandy/HennessyVSOP.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hennessy 700 ml</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="./assets/categories/brandy/HennessyVSOP.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hennessy 700 ml</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>

    </div>
    
    <!--End Brandy Category-->

    <div class="container">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <h2 class="text-center">Brandy</h2>
    <div class="row">
        <div class="col-6 col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="./assets/categories/brandy/HennessyVSOP.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hennessy 700 ml</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="./assets/categories/brandy/HennessyVSOP.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hennessy 700 ml</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="./assets/categories/brandy/HennessyVSOP.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hennessy 700 ml</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>

    </div>
    
    <!--End Brandy Category-->


    <?php 
        include 'about_page.php';
    ?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>