<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/berita" />

                    <h3 class="text-center">Edit Berita</h3>
                </div>
                <div class="card-body">

                    <form action="{{ url('admin/berita', $berita->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Judul Berita</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Deskripsi</label>
                            <div class="col-sm-10">
                                <div class="tinymce-wrap">
                                    <textarea class="form-control mt-15" rows="3" name="deskripsi">{{ $berita->deskripsi }}</textarea>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left"> Foto</label>
                            <div class="col-sm-6">
                                <img src="{{ url("public/$berita->foto") }}" style="width: 50%" class="avatar-img rounded">
                            </div>
                            <div class="col-sm-4">
                                <input type="file" name="poto" value="{{$berita->foto}}" accept=".png, .jpg, .jpeg" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-sm-12">
                                <button class="btn btn-primary float-right"><span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>

</x-app>
