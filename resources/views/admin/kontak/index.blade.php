<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <a href="{{ url('admin/kontak/create') }}" class="btn btn-primary float-right mb-10"> <span
                            class="fa fa-plus"></span> Tambah Data</a>

                    <h4 class="card-title">Data Penanggung Jawab</h4>

                </div>

                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama Penanggung Jawab</th>
                                <th class="text-center">Jabatan</th>
                                <th class="text-center">Akun Sosial Media</th>
                                <th class="text-center">Foto</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_kontak_wisata as $kontak_wisata)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">

                                            <x-layout.button.edit-button url="admin/kontak"
                                                id="{{ $kontak_wisata->id }}" />
                                            <x-layout.button.delete-button url="admin/kontak"
                                                id="{{ $kontak_wisata->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $kontak_wisata->nama }}</td>
                                    <td class="text-center">{{ $kontak_wisata->jabatan }}</td>
                                    <td class="text-center">
                                        <a href="https://api.whatsapp.com/send?phone={{ $kontak_wisata->link_wa }}"><span class="lab la-whatsapp mr-2 text-secondary font-22 align-middle"></span></a>
                                        <a href="{{ $kontak_wisata->link_fb }}"><span class="lab la-facebook-f mr-2 text-secondary font-22 align-middle"></span></a>
                                        <a href="{{ $kontak_wisata->link_ig }}"><span class="lab la-instagram mr-2 text-secondary font-22 align-middle"></span></a>
                                    </td>
                                    <td class="text-center">

                                        <img src="{{ url("public/$kontak_wisata->foto") }}" class="rounded" style="object-fit: cover; position: static; width: 50%; height: 200px;">

                                    </td>
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
                <h5 class="modal-title">Tambah Bulan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('store-bulan') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Nama Bulan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Bulan">
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
