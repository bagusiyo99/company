    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="wrapper-img">
                    <img src="/img/m.jpg" class="img-carousel" alt="">
                </div>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <div class="container my-5">
        <div class="text-center">
            <h4> About </h4>
        </div>
    </div>
    <section class="info mb-5">
        <div class="main-info">
            @foreach ($about as $item)
                <img src="/{{ $item->gambar }}">
                <div class="tulis">
                    <h4>{{ $item->judul }}</h4>
                    <h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
                    <p>{{ $item->deskripsi }}
                    </p>

                </div>
        </div>
        @endforeach
    </section>

    <div class="bg-success my-5">

        <div class="container my-5">
            <div class="text-center text-white">
                <h4> Pelajari lanjut </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam magnam ducimus quam aliquid
                    reprehenderit assumenda nobis facere nostrum odit accusantium delectus, obcaecati commodi voluptas
                    dolorum unde eaque architecto deleniti totam!</p>
            </div>
        </div>
    </div>



    <div class="container mt-5">
        <div class="text-center">
            <h4> Service </h4>
        </div>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach ($mengatur as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="/{{ $item->gambar }}" height="255px">


                            <div class="card-body">
                                <p class="card-text">{{ $item->deskripsi }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <div class="d-flex justify-content-center mt-3">
                {{ $mengatur->links() }}
            </div>
        </ul>

    </nav>


    <div class="container mt-5">
        <div class="text-center">
            <h4> Blog </h4>
        </div>
    </div>
    <div class="atur my-5">
        @foreach ($mengatur as $item)
            <div class="card-jurusan">
                <div class="card-image">
                    <a href="#">
                        <img src="/{{ $item->gambar }}">
                    </a>
                </div>
                <div class="card-description">
                    <h3>{{ $item->judul }}</h3>
                    <p>{{ $item->deskripsi }}</p>
                    <a href="#">Detail</a>
                </div>
            </div>
        @endforeach


    </div>
    <nav aria-label="Page navigation example">

        <div class="d-flex justify-content-center mt-3">
            {{ $mengatur->links() }}
        </div>

    </nav>


    <section id="page-header" class="blog-header">
        <h2>Informasi Terkini</h2>
        <p> Informasi Selalu Update</p>
    </section>

    <section id="blog">
        @foreach ($mengatur as $item)
            <div class="blog-box">
                <div class="blog-img">
                    <img src="/{{ $item->gambar }}">
                </div>
                <div class="blog-detail">
                    <h4>{{ $item->judul }}</h4>
                    <p>{{ $item->deskripsi }}</p>
                    <a href="/about">Lanjutkan Membaca</a>
                </div>
            </div>
        @endforeach
    </section>
