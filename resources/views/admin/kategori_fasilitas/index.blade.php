<x-app>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary float-right mb-10" data-toggle="modal"
                        data-target="#modaltambah">
                        <span class="fa fa-plus"></span> Tambah Kategori
                    </button>
                    <h4 class="card-title">Data Kategori</h4>

                </div>

                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama Kategori</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_kategori_fasilitas as $kategori_fasilitas)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target="#modaledit{{ $kategori_fasilitas->id }}">
                                            <span class="fa fa-edit"></span> Edit
                                        </button>

                                        <div class="modal fade" id="modaledit{{ $kategori_fasilitas->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="modaledit" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Kategorin Fasilitas</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ url('admin/kategori-fasilitas', $kategori_fasilitas->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Nama
                                                                    Kategori</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control"
                                                                        name="nama" value="{{ $kategori_fasilitas->nama }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" data-dismiss="modal"><span
                                                                    class="fa fa-times"></span> Close</button>
                                                            <button class="btn btn-primary"><span
                                                                    class="fa fa-save"></span> Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <x-layout.button.delete-button url="admin/kategori-fasilitas"
                                                id="{{ $kategori_fasilitas->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $kategori_fasilitas->nama }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="modaltambah"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/kategori-fasilitas') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama Kategori</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Kategori">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-times"></span>
                            Close</button>
                        <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app>
