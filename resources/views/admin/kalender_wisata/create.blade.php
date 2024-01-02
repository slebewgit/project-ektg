<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/kalender-wisata" />

                    <h3 class="text-center">Tambah Data Kalender Wisata</h3>
                </div>
                <div class="card-body">

                    <form action="{{ url('admin/kalender-wisata') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Event">
                            </div>

                            <label class="col-sm-2 col-form-label text-left">Alamat Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="tempat" placeholder="Alamat Event">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Bulan Event</label>
                            <div class="col-sm-4">
                                <select name="id_bulan" class="form-control">
                                    <option value=""> Pilih Bulan Event</option>
                                    @foreach ($list_bulan as $bulan)
                                        <option value="{{ $bulan->id }}"> {{ $bulan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label class="col-sm-2 col-form-label text-left">Tanggal Event</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" name="tanggal" placeholder="Tanggal Event">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="event"
                                    placeholder="event">
                            </div>

                            <label class="col-sm-2 col-form-label text-left">Deskripsi Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="deskripsi_event"
                                    placeholder="Deskripsi Event">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Penyelenggara Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="penyelenggara_event"
                                    placeholder="Penyelenggara Event">
                            </div>

                            <label class="col-sm-2 col-form-label text-left">Transportasi</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="transportasi"
                                    placeholder="Transportasi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Foto</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" required>
                            </div>

                            <label class="col-sm-2 col-form-label text-left">Sumber Foto</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="sumber_foto"
                                    placeholder="Sumber Foto">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Foto</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="foto1" accept=".jpg, .png, .jpeg" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Link View Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="link_event"
                                    placeholder="Link View Event">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control mt-15" rows="3" name="deskripsi"></textarea>
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