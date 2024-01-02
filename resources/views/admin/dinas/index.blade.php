<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/dinas/create') }}" class="btn btn-primary float-right mb-10"> <span
                        class="fa fa-plus"></span> Tambah Data</a>
                    <h4 class="card-title">Data Dinas</h4>
                    
                </div>
                
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama Dinas</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Foto</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($list_dinas as $dinas)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            
                                            <x-layout.button.edit-button url="admin/dinas"
                                                id="{{ $dinas->id }}" />
                                            <x-layout.button.delete-button url="admin/dinas"
                                                id="{{ $dinas->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $dinas->nama }}</td>
                                    <td class="text-center">{{ $dinas->username }}</td>
                                    <td class="text-center">
                                        <img src="{{ url("public/$dinas->foto") }}" height="130" class="rounded">
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
