<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="" class="navbar-brand">
            <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Gymnast</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4 bg-secondary">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About Us</a>
                <a href="feature.html" class="nav-item nav-link">Our Features</a>
                <a href="class.html" class="nav-item nav-link">Classes</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="single.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('assets')}}/img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h3 class="text-primary text-capitalize m-0">Gym & Fitness Center</h3>
                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Best Gym In
                        Town</h2>
                    <a href="" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('assets')}}/img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h3 class="text-primary text-capitalize m-0">Gym & Fitness Center</h3>
                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Get Body In
                        Shape</h2>
                    <a href="" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<!-- Carousel End -->
