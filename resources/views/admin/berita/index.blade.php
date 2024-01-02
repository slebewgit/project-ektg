<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/berita/create') }}" class="btn btn-primary float-right mb-10"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h4 class="card-title">Data Berita</h4>

                </div>

                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama Info Berita</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_berita as $berita)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <x-layout.button.info-button url="admin/berita"
                                                id="{{ $berita->id }}" /> --}}
                                            <x-layout.button.edit-button url="admin/berita"
                                                id="{{ $berita->id }}" />
                                            <x-layout.button.delete-button url="admin/berita"
                                                id="{{ $berita->id }}" />
                                        </div>
                                    </td>
                                    <td>{{ $berita->judul }}</td>
                                    <td class="text-center">
                                        <img src="{{url("public/$berita->foto")}}" style="width: 20%; height:50%;">
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
