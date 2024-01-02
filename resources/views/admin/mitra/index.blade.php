<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/mitra/create') }}" class="btn btn-primary float-right mb-10"> <span
                        class="fa fa-plus"></span> Tambah Data</a>
                    <h4 class="card-title">Data Mitra</h4>
                    
                </div>
                
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama Mitra</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Foto</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($list_mitra as $mitra)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            
                                            <x-layout.button.edit-button url="admin/mitra"
                                                id="{{ $mitra->id }}" />
                                            <x-layout.button.delete-button url="admin/mitra"
                                                id="{{ $mitra->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $mitra->nama }}</td>
                                    <td class="text-center">{{ $mitra->username }}</td>
                                    <td class="text-center">{{ $mitra->kategori }}</td>
                                    <td class="text-center">
                                        <img src="{{ url("public/$mitra->foto") }}" alt="" height="130" class="rounded">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app>
