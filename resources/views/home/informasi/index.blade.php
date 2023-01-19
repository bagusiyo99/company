    <section id="page-header" class="blog-header" class="mb-3">
        <h2>Informasi Terkini</h2>
        <p> Informasi Selalu Update</p>
    </section>

    <section id="blog">
        @foreach ($informasi as $item)
            <div class="blog-box mt-5">
                <div class="blog-img">
                    <img src="/{{ $item->gambar }}">
                </div>
                <div class="blog-detail mb-3">
                    <h4>{{ $item->judul }}</h4>
                    <p> {!! Str::limit($item->deskripsi, 170) !!}</p>
                    <a href="/informasi/detail/{{ $item->id }}">Detail</a>
                </div>
            </div>
        @endforeach
    </section>
