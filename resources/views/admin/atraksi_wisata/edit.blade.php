<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/atraksi-wisata/{{$atraksi_wisata->id_kategori}}"/>

                    <h3 class="text-center">Edit Data Atraksi Wisata</h3>
                </div>
                <div class="card-body">

                    <form action="{{ url('admin/atraksi-wisata', $atraksi_wisata->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Kategori</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="id_kategori">
                                    <option value=""> Pilih Kategori Wisata</option>
                                    @foreach ($list_kategori as $kategori)
                                        <option @if($kategori->id == $atraksi_wisata->id_kategori) selected @endif value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label text-left">Nama Wisata</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" value="{{ $atraksi_wisata->nama }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Alamat Wisata</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="alamat"
                                value="{{ $atraksi_wisata->alamat }}">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Nama Pengelola</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_pengelola"
                                value="{{ $atraksi_wisata->nama_pengelola }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Atraksi Wisata</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="atraksi_wisata"
                                value="{{ $atraksi_wisata->atraksi_wisata }}">
                            </div>

                            <label class="col-sm-2 col-form-label text-left"> Fasilitas</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="fasilitas"
                                value="{{ $atraksi_wisata->fasilitas }}">
                            </div>

                           
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Nomor Pengelola</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="no_pengelola" value="{{ $atraksi_wisata->no_pengelola }}">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Destinasi Wisata</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="destinasi" value="{{ $atraksi_wisata->destinasi}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <label class="col-sm-2 col-form-label text-left"> Jam Buka</label>
                            <div class="col-sm-4">
                                <input type="time" class="form-control" name="jam_buka" value="{{ $atraksi_wisata->jam_buka}}">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Jam Tutup</label>
                            <div class="col-sm-4">
                                <input type="time" class="form-control" name="jam_tutup" value="{{ $atraksi_wisata->jam_tutup}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Hari Buka</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="hari_buka" value="{{ $atraksi_wisata->hari_buka }}">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Sumber Foto</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="sumber_foto" value="{{ $atraksi_wisata->sumber_foto }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Foto</label>
                            <div class="col-sm-6">
                                <img src="{{ url("public/$atraksi_wisata->foto") }}" alt="" height="310"
                                            class="rounded">
                            </div>
                            
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="foto" value="{{ $atraksi_wisata->foto }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Titik Latitude </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lat" value="{{ $atraksi_wisata->lat }}">
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Titik Longitude</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lng" value="{{ $atraksi_wisata->lng }}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Deskripsi</label>
                            <div class="col-sm-4">
                                <div class="tinymce-wrap">
                                    <textarea class="form-control mt-15" rows="3" name="deskripsi">{{ $atraksi_wisata->deskripsi }}</textarea>
                                </div>
                            </div>
                            <label class="col-sm-2 col-form-label text-left"> Nama Mitra</label>
                            <div class="col-sm-4">
                                <select name="id_mitra" class="form-control">
                                    @foreach ($list_mitra as $mitra)
                                        <option @if ($mitra->id == $atraksi_wisata->id_mitra) selected @endif
                                            value="{{ $mitra->id }}">
                                            {{ $mitra->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Paket Wisata</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="paket_wisata"
                                value="{{ $atraksi_wisata->paket_wisata }}">
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
