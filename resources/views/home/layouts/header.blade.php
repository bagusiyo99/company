{{-- <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light  bg-light shadow py-3 text-center">
        <div class="container ">
            <a class="navbar-brand" href="#">Fixed navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-4 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('home') ? 'menu-active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('about') ? 'menu-active' : '' }}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('service') ? 'menu-active' : '' }}"
                            href="/service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('blog') ? 'menu-active' : '' }}" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('contact') ? 'menu-active' : '' }}"
                            href="/contact">Contact</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <a href="/login" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i> Login </a>
                </form>
            </div>
        </div>
    </nav>
    
</header> --}}


<header>
    <section id="topbar"
        class="mb-2 mb-lg-0 mb-sm-0 d-none d-lg-flex align-items-center pt-2 pb-2 bg-success text-white topbar-transparent">
        <div class="container">
            <div class="row">
                <div class="col-lg-6   judul">
                    <span class="px-3">ahhdajdj </span>
                    <span class="px-3">ahhdajdj </span>


                </div>
                <div class="col-md-6 text-end">
                    <a href="" class="me-3 icon">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="" class="me-3 icon">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="" class="me-3 icon">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="" class="me-3 icon">
                        <i class="fa-brands fa-facebook"></i> </a>

                </div>
            </div>
        </div>
    </section>

    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light text-warning">
        <div class="container">
            <a class=" navbar-brand d-flex d-lg-none" href="index.html">
                <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0 bg-light">School</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="bi bi-list"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link " href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/about">About</a>
                    </li>
                    <div class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Laptop</a>
                        <div class="dropdown-menu m-0">
                            <a href="/service" class="dropdown-item ">Blog Grid</a>
                            <a href="/blog" class="dropdown-item">Blog Detail</a>
                            <a href="/informasi" class="dropdown-item">Informasi</a>
                            <a href="team.html" class="dropdown-item">The Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Processors</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="team.html" class="dropdown-item">The Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Motherboard</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="team.html" class="dropdown-item">The Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Monitor</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Samsung</a>
                            <a href="detail.html" class="dropdown-item">Acer</a>
                            <a href="feature.html" class="dropdown-item">Dell</a>
                            <a href="team.html" class="dropdown-item">Hp</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Accessories</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="team.html" class="dropdown-item">The Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Audio</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="team.html" class="dropdown-item">The Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>

                    <li class="nav-item">
                        <a class="nav-link " href="/contact">Contact</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <!--Navbar -->
</header>
