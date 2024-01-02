<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{-- <a href="{{ url('admin/fasilitas/create') }}" class="btn btn-primary float-right mb-10"> <span
                            class="fa fa-plus"></span> Tambah Data</a> --}}
                    <h4 class="card-title">Data Fasilitas</h4>

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
                                            <x-layout.button.info-button url="admin/fasilitas"
                                                id="{{ $kategori_fasilitas->id }}" />
                                            {{-- <x-layout.button.edit-button url="admin/desa-wisata"
                                                id="{{ $kategori_fasilitas->id }}" />
                                            <x-layout.button.delete-button url="admin/desa-wisata"
                                                id="{{ $kategori_fasilitas->id }}" /> --}}
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
</x-app>
