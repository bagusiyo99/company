<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <a href="/admin/about/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>

                    <tr>
                        <td> No </td>
                        <td> Gambar </td>
                        <td> Judul</td>
                        {{-- <td width="50px"> Deskripsi </td> --}}
                        <td> Action </td>
                    </tr>

                    @foreach ($about as $item)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td><img src="/{{ $item->gambar }}" width="100px" alt=""> </td>
                            <td> {{ $item->judul }} </td>
                            {{-- <td> {{ $item->desc }} </td> --}}

                            <td>
                                <div class="d-flex">
                                    <a href="/admin/about/{{ $item->id }}/edit " class="btn btn-success">Edit</a>

                                    <form action="/admin/about/{{ $item->id }}" method="POST">
                                        @method ('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger mx-2">Hapus</button>

                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>
