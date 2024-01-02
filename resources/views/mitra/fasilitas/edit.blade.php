<x-mitra>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="mitra/fasilitas/{{$fasilitas->id_kategori_fasilitas}}"/>

                    <h3 class="text-center">Edit Data Fasilitas {{ $fasilitas->nama }}</h3>
                </div>
                <div class="card-body">

                    <form action="{{ url('mitra/fasilitas', $fasilitas->id) }}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Kategori</label>
                            <div class="col-sm-4">
                                <input type="text" value="{{ $fasilitas->kategorifasilitas->nama }}" class="form-control" readonly>
                                <input type="text" name="id_kategori_fasilitas" value="{{ $fasilitas->kategorifasilitas->id }}" class="form-control" hidden>
                            </div>
                            <label class="col-sm-2 col-form-label text-left">Nama </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" value="{{ $fasilitas->nama }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Alamat </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="alamat"
                                value="{{ $fasilitas->alamat }}">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Nama Pengelola</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_pengelola"
                                value="{{ $fasilitas->nama_pengelola }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Nomor Pengelola</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="no_pengelola" value="{{ $fasilitas->no_pengelola }}">
                            </div>

                            <label class="col-sm-2 col-form-label text-left"> Jam Buka / Tutup</label>
                            <div class="col-sm-2">
                                <input type="time" class="form-control" name="jam_buka" value="{{ $fasilitas->jam_buka}}">
                            </div>

                            <div class="col-sm-2">
                                <input type="time" class="form-control" name="jam_tutup" value="{{ $fasilitas->jam_tutup}}">
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Hari Buka</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="hari_buka" value="{{ $fasilitas->hari_buka }}">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Sumber Foto</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="sumber_foto" value="{{ $fasilitas->sumber_foto }}">
                            </div>
                        </div>

                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label text-left"> Link</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="link"placeholder="Link" value="{{$fasilitas->link}}">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Rating</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="rating" placeholder="Rating" value="{{$fasilitas->rating}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Foto1</label>
                            <div class="col-sm-4">
                                <img src="{{ url("public/$fasilitas->foto") }}" style="width: 50%" class="avatar-img rounded">
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" value="{{ $fasilitas->foto }}">
                            </div>

                            <label class="col-sm-2 col-form-label text-left"> Foto2</label>
                            <div class="col-sm-4">
                                <img src="{{ url("public/$fasilitas->foto1") }}" style="width : 100%;"
                                            class="rounded">
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="foto1" value="{{ $fasilitas->foto1}}">
                            </div>

                            <label class="col-sm-2 col-form-label text-left"> Foto3</label>
                            <div class="col-sm-4">
                                <img src="{{ url("public/$fasilitas->foto2") }}" style="width : 100%;"
                                            class="rounded">
                            </div>

                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="foto2" value="{{ $fasilitas->foto1 }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Titik Latitude </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lat" value="{{ $fasilitas->lat }}">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Titik Longitude</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lng" value="{{ $fasilitas->lng }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Fasilitas</label>
                            <div class="col-sm-10">
                                <div class="tinymce-wrap">
                                    <textarea class="form-control mt-15" rows="3" name="fasilitas">{{ $fasilitas->fasilitas }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Deskripsi</label>
                            <div class="col-sm-10">
                                <div class="tinymce-wrap">
                                    <textarea class="form-control mt-15" rows="3" name="deskripsi">{{ $fasilitas->deskripsi }}</textarea>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-sm-12">
                                <button class="btn btn-primary float-right"><span class="fa fa-save"></span>
                                    Simpan</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-mitra>
