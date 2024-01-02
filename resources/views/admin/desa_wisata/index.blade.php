<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/desa-wisata/create') }}" class="btn btn-primary float-right mb-10"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h4 class="card-title">Data Desa Wisata</h4>

                </div>

                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama Desa Wisata</th>
                                <th>Link Jadesta</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_desa_wisata as $desa_wisata)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-layout.button.info-button url="admin/desa-wisata"
                                                id="{{ $desa_wisata->id }}" />
                                            <x-layout.button.edit-button url="admin/desa-wisata"
                                                id="{{ $desa_wisata->id }}" />
                                            <x-layout.button.delete-button url="admin/desa-wisata"
                                                id="{{ $desa_wisata->id }}" />
                                        </div>
                                    </td>
                                    <td>{{ $desa_wisata->nama_desa_wisata }}</td>
                                    <td>{{ $desa_wisata->link_jadesta }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
