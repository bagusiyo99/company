<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">

                <form action="/admin/tentang/update" method="POST" enctype="multipart/form-data">
                    @method('PUT')

                    @csrf
                    <div class="form-group">
                        <label for="">Nama Perusahaan</label>
                        <input type="text" name="nama"
                            class="form-control                             
                        @error('nama')
                            is-invalid
                            @enderror"
                            placeholder="Nama Perusahaan" value="{{ isset($tentang) ? $tentang->nama : old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input type="text" name="deskripsi"
                            class="form-control   
                            @error('deskripsi')
                            is-invalid
                            @enderror"
                            placeholder="Deskripsi"
                            value="{{ isset($tentang) ? $tentang->deskripsi : old('deskripsi') }}">
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar"
                            class="form-control 
                            @error('gambar')
                            is-invalid
                            @enderror"
                            placeholder="Gambar">
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @if (isset($banner))
                            <img src="/{{ $banner->gambar }}" width="100%" class="mt-4" alt="">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
