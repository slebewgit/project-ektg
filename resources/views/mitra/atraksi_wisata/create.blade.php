<x-mitra>
    @include('menu.menu')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="mitra/atraksi-wisata/{{$kategori->id}}"/>

                    <h3 class="text-center">Tambah Data Atraksi Wisata</h3>
                </div>
                <div class="card-body">

                    <form action="{{ url('mitra/atraksi-wisata') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id_mitra" class="form-control" value="{{ Auth::guard('mitra')->user()->id }}" hidden>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Kategori</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="id_kategori">
                                    <option value=""> Pilih Kategori Wisata</option>
                                    @foreach ($list_kategori as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label text-left">Nama Wisata</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama"
                                    placeholder="Nama Wisata">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Alamat Wisata</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="alamat"
                                    placeholder="Alamat Wisata">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Nama Pengelola</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_pengelola"
                                    placeholder="Nama Pengelola">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Nomor Pengelola</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="no_pengelola" placeholder="Nomor Pengelola">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Destinasi Wisata</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="destinasi" placeholder="Destinasi Wisata">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Hari Buka</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="hari_buka"placeholder="Hari Buka">
                            </div>
                            <label class="col-sm-1 col-form-label text-left"> Jam Buka</label>
                            <div class="col-sm-3">
                                <input type="time" class="form-control" name="jam_buka"placeholder="Jam Buka">
                            </div>
                            <label class="col-sm-1 col-form-label text-left"> Jam Tutup</label>
                            <div class="col-sm-3">
                                <input type="time" class="form-control" name="jam_tutup" placeholder="Jam Tutup">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Foto</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
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

</x-mitra>
