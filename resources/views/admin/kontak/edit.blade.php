<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/kontak" />

                    <h3 class="text-center">Edit Data Penanggung Jawab</h3>
                </div>
                <div class="card-body">

                    <form action="{{ url('admin/kontak', $kontak_wisata->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Penanggung Jawab</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" value="{{ $kontak_wisata->nama }}">
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Jabatan Penanggung Jawab</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jabatan" value="{{ $kontak_wisata->jabatan }}">
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Akun/Link Akun Sosmed Whatsapp</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link_wa" value="{{ $kontak_wisata->link_wa }}">
                            </div>



                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Akun/Link Akun Sosmed Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link_fb" value="{{ $kontak_wisata->link_fb }}">
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Akun/Link Akun Sosmed Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link_ig" value="{{ $kontak_wisata->link_ig }}">
                            </div>


                        </div>



                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Foto</label>
                            <div class="col-md-6">

                                <img src="{{ url("public/$kontak_wisata->foto") }}" class="rounded" style="object-fit: cover; position: static; width: 100%; height: 200px;">


                            </div>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" value="{{ $kontak_wisata->foto }}">
                            </div>


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
