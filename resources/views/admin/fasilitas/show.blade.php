<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                @csrf
                <div class="card-header">
                    <x-layout.button.back-button url="admin/fasilitas" />
                    <a href="{{ url('admin/fasilitas/create', $kategori_fasilitas->id) }}" class="btn btn-primary float-right mb-10"> <span
                        class="fa fa-plus"></span> Tambah Data</a>
                    <h3 class="text-center">Data Fasilitas {{ $kategori_fasilitas->nama }}</h3>

                </div>

                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama Wisata</th>
                                <th class="text-center">Nama Pengelola</th>
                                <th class="text-center">Hari Buka/ Jam Operasi</th>
                                <th class="text-center">Status Fasilitas</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_fasilitas as $fasilitas)
                            @if ($fasilitas->id_kategori_fasilitas == $kategori_fasilitas->id)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ url("admin/fasilitas/show-fasilitas/$fasilitas->id") }}" class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                            <x-layout.button.edit-button url="admin/fasilitas"
                                                id="{{ $fasilitas->id }}" />
                                            <x-layout.button.delete-button url="admin/fasilitas"
                                                id="{{ $fasilitas->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $fasilitas->nama }}</td>
                                    <td class="text-center">{{ $fasilitas->nama_pengelola }}</td>
                                    <td class="text-center">{{ $fasilitas->hari_buka }} / {{ $fasilitas->jam_buka }} - {{ $fasilitas->jam_tutup }}</td>
                                    
                                    <td class="text-center">
                                        @if ($fasilitas->status == 1)
                                            <p class="btn btn-primary"> Data Baru</p>
                                        @endif
                                        @if ($fasilitas->status == 2)
                                            <p class="btn btn-warning"> Di Setujui</p>
                                        @endif

                                        @if ($fasilitas->status == 3)
                                            <p class="btn btn-danger"> Di Batalkan</p>
                                        @endif
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
