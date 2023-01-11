
   <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light  bg-light shadow py-3 text-center">
        <div class="container ">
        <a class="navbar-brand" href="#">Fixed navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-4 mb-md-0">
            <li class="nav-item">
                <a class="nav-link {{ Request::is ('home') ? 'menu-active' :'' }}"               
                href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{ Request::is ('about') ? 'menu-active' :'' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{ Request::is ('service') ? 'menu-active' :'' }}" href="/service">Service</a>
            </li>
                       <li class="nav-item">
                <a class="nav-link  {{ Request::is ('blog') ? 'menu-active' :'' }}" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{ Request::is ('contact') ? 'menu-active' :'' }}" href="/contact">Contact</a>
            </li>
            </ul>
            <form class="d-flex">
       <a href="/login" class="btn btn-primary" ><i class="fa-solid fa-right-to-bracket"></i> Login </a>
            </form>
        </div>
        </div>
    </nav>
    </header>

