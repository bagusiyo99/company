<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <a href="/admin/kategori/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>

                    <tr>
                        <td> No </td>
                        <td> Nama </td>
                        <td> Action </td>
                    </tr>

                    @foreach ($kategori as $item)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $item->name }} </td>

                            <td>
                                <div class="d-flex">
                                    <a href="/admin/kategori/{{ $item->id }}/edit " class="btn btn-success">Edit</a>

                                    <form action="/admin/kategori/{{ $item->id }}" method="POST">
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
