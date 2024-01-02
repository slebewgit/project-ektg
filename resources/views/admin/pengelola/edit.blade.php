<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/pengelola" />

                    <h3 class="text-center">Edit Data Pengelola</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/pengelola', $user->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Nama Pengelola</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama"
                                    value="{{ $user->nama }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username"
                                    value="{{ $user->username }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="confir_password"
                                    value="{{ $user->confir_password }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Poto</label>
                            <div class="col-sm-4">
                                <img src="{{ url("public/$user->poto") }}" style="width:50%">
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="poto" accept=".jpg, .png, .jpeg"
                                    value="{{ $user->poto }}">
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
