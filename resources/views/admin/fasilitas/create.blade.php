<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/fasilitas" />

                    <h3 class="text-center">Tambah Data Fasilitas {{ $kategori_fasilitas->nama }}</h3>
                </div>
                <div class="card-body">

                    <form action="{{ url('admin/fasilitas') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Kategori Fasilitas</label>
                            <div class="col-sm-4">

                                <input type="text" value="{{ $kategori_fasilitas->nama }}" class="form-control"
                                    readonly>
                                <input type="text" name="id_kategori_fasilitas" value="{{ $kategori_fasilitas->id }}"
                                    class="form-control" hidden>
                            </div>
                            <label class="col-sm-2 col-form-label text-left">Nama Mitra</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="id_mitra">
                                    <option value=""> Pilih Mitra</option>
                                    @foreach ($list_mitra as $mitra)
                                        <option value="{{ $mitra->id }}">{{ $mitra->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Tempat</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Wisata">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Alamat </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat Wisata">
                            </div>
                           
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Pengelola</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_pengelola"
                                    placeholder="Nama Pengelola">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Nomor Pengelola</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="no_pengelola"
                                    placeholder="Nomor Pengelola">
                            </div>
                           
                        </div>

                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label text-left"> Jam Buka</label>
                            <div class="col-sm-4">
                                <input type="time" class="form-control" name="jam_buka"placeholder="Jam Buka">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Jam Tutup</label>
                            <div class="col-sm-4">
                                <input type="time" class="form-control" name="jam_tutup" placeholder="Jam Tutup">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Hari Buka</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="hari_buka"placeholder="Hari Buka">
                            </div>

                            <label class="col-sm-2 col-form-label text-left"> Link</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="link"placeholder="Link">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Rating</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="rating" placeholder="Rating">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Sumber Foto</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="sumber_foto" placeholder="Sumber Foto">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Titik Latitude </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lat" placeholder="Titik Latitude">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Titik Longitude</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lng" placeholder="Titik Longitude">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Foto</label>
                            <div class="col-sm-3">
                                <input type="file" class="form-control" name="foto"
                                    accept=".jpg, .png, .jpeg">
                            </div>
                            <div class="col-sm-3">
                                <input type="file" class="form-control" name="foto1"
                                    accept=".jpg, .png, .jpeg">
                            </div>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="foto2"
                                    accept=".jpg, .png, .jpeg">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Fasilitas</label>
                            <div class="col-sm-10">
                                <div class="tinymce-wrap">
                                    <textarea class="form-control mt-15" rows="3" name="fasilitas"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Deskripsi</label>
                            <div class="col-sm-10">
                                <div class="tinymce-wrap">
                                    <textarea class="form-control mt-15" rows="3" name="deskripsi"></textarea>
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

</x-app>
