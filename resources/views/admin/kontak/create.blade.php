<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/kontak" />

                    <h3 class="text-center">Tambah Data Penanggung Jawab</h3>
                </div>
                <div class="card-body">

                    <form action="{{ url('admin/kontak') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Penanggung Jawab</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama"
                                    placeholder="Nama Penanggung Jawab">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Jabatan Penanggung Jawab</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jabatan"
                                    placeholder="Jabatan Penanggung Jawab">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Akun/Link Akun Sosmed Whatsapp</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link_wa"
                                    placeholder="Nama Akun/Link Akun Sosmed Whatsapp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Akun/Link Akun Sosmed Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link_fb"
                                    placeholder="Nama Akun/Link Akun Sosmed Facebook">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Akun/Link Akun Sosmed
                                Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link_ig"
                                    placeholder="Nama Akun/Link Akun Sosmed Instagram">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary float-right">
                                    <span class="fa fa-save"></span> Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>
