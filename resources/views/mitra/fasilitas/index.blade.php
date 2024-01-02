<x-mitra>
    @include('menu.menu')
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                @csrf
                <div class="card-header">
                   
                    <a href="{{ url("mitra/fasilitas/$kategori_fasilitas->id") }}/create" class="btn btn-primary float-right mb-10"> <span
                        class="fa fa-plus"></span> Tambah Data</a>
                    <h3 class="text-center">Data Fasilitas </h3>

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
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_fasilitas as $fasilitas)
                            @if (Auth::guard('mitra')->user()->id == $fasilitas->id_mitra)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ url("mitra/fasilitas/$fasilitas->id") }}/show" class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                            <x-layout.button.edit-button url="mitra/fasilitas"
                                                id="{{ $fasilitas->id }}" />
                                                <a href="{{url("mitra/fasilitas/$fasilitas->id")}}/delete" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><span class="fa fa-trash"></span> Hapus</a>
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $fasilitas->nama }}</td>
                                    <td class="text-center">{{ $fasilitas->nama_pengelola }}</td>
                                    <td class="text-center">{{ $fasilitas->hari_buka }} / {{ $fasilitas->jam_buka }} - {{ $fasilitas->jam_tutup }}</td>
                                    

                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-mitra>
