<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/mitra" />

                    <h3 class="text-center">Tambah Data Mitra</h3>
                </div>
                <div class="card-body">

                    <form action="{{ url('admin/mitra') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama mitra</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" placeholder="Nama mitra">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username"
                                    placeholder="Username mitra">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="confirmasi_password"
                                    placeholder="Password mitra">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="alamat"
                                    placeholder="Alamat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Nomor Telpon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nomor_telpon"
                                    placeholder="Nomor Telpon">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> kategori</label>
                            <div class="col-sm-10">
                                <select name="kategori" class="form-control">
                                    <option value="">pilih</option>
                                    <option value="Pengelola Wisata">Pengelola Wisata</option>
                                    <option value="Pelaku Usaha">Pelaku Usaha</option>
                                </select>
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
