<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/desa-wisata" />

                    <h3 class="text-center">Tambah Data Pengelola</h3>
                </div>
                <div class="card-body">

                    <form action="{{ url('admin/desa-wisata') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Desa Wisata</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_desa_wisata"
                                    placeholder="Nama Desa Wisata">
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

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Link Jadesta</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link_jadesta"
                                    placeholder="Link Website Jadesta">
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
                                <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                            </div>
                            <div class="col-sm-3">
                                <input type="file" class="form-control" name="foto1" accept=".jpg, .png, .jpeg">
                            </div>
                            <div class="col-sm-3">
                                <input type="file" class="form-control" name="foto2" accept=".jpg, .png, .jpeg">
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
