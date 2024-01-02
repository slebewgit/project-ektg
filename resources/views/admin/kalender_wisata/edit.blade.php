<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/kalender-wisata" />

                    <h3 class="text-center">Edit Data Kalender Wisata</h3>
                </div>
                <div class="card-body">

                    <form action="{{ url('admin/kalender-wisata', $kalender_wisata->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" value="{{ $kalender_wisata->nama }}">
                            </div>

                            <label class="col-sm-2 col-form-label text-left">Alamat Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="tempat" value="{{ $kalender_wisata->tempat }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Bulan Event</label>
                            <div class="col-sm-4">
                                <select name="id_bulan" class="form-control">
                                    <option value=""> Pilih Bulan Event</option>
                                    @foreach ($list_bulan as $bulan)
                                        <option @if($bulan->id == $kalender_wisata->id_bulan) selected @endif value="{{ $bulan->id }}">{{ $bulan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label class="col-sm-2 col-form-label text-left">Tahun Event</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" name="tanggal" value="{{ $kalender_wisata->tanggal }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="event"
                                 value="{{ $kalender_wisata->event }}">
                            </div>
                            <label class="col-sm-2 col-form-label text-left">Deskripsi Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="deskripsi_event"
                                 value="{{ $kalender_wisata->deskripsi_event }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Penyelenggara Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="penyelenggara_event"
                                 value="{{ $kalender_wisata->penyelenggara_event }}">
                            </div>
                            <label class="col-sm-2 col-form-label text-left">Transportasi</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="transportasi"
                                 value="{{ $kalender_wisata->transportasi }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Foto</label>
                            <div class="col-md-2">
                                <img src="{{ url("public/$kalender_wisata->foto") }}" alt="" height="100"
                                            class="rounded">
                            </div>
                            <div class="col-sm-2">
                                <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" value="{{ $kalender_wisata->foto }}">
                            </div>
                            <label class="col-sm-2 col-form-label text-left">Sumber Foto</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="sumber_foto"
                                 value="{{ $kalender_wisata->sumber_foto }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Foto</label>
                            <div class="col-md-2">
                                <img src="{{ url("public/$kalender_wisata->foto1") }}" alt="" height="100"
                                            class="rounded">
                            </div>
                            <div class="col-sm-2">
                                <input type="file" class="form-control" name="foto1" accept=".jpg, .png, .jpeg" value="{{ $kalender_wisata->foto1 }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Link View Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="link_event" value="{{ $kalender_wisata->link_event }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control mt-15" rows="3" name="deskripsi">{{ $kalender_wisata->deskripsi }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary float-right"><span
                                        class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>