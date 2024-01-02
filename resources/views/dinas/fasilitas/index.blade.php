<x-dinas>
    @include('menu.menu')
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
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

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_fasilitas as $fasilitas)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ url("dinas/fasilitas/$fasilitas->id") }}/show"
                                                class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>

                                            @if ($fasilitas->status == 1)
                                                <form action="{{ url('dinas/status-fasilitas', $fasilitas->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-success"><span class="fa fa-check"></span>
                                                        Setuju</button>
                                                </form>
                                            @endif

                                            @if ($fasilitas->status == 1)
                                                <form action="{{ url('dinas/hapus-status-fasilitas', $fasilitas->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-dark"><span class="fa fa-check"></span>
                                                        Tidak Setuju</button>
                                                </form>
                                            @endif

                                            @if ($fasilitas->status == 2)
                                                <form action="{{ url('dinas/batal-status-fasilitas', $fasilitas->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-dark"><span class="fa fa-check"></span>
                                                        Batalkan Persetujuan</button>
                                                </form>
                                            @endif
                                            @if ($fasilitas->status == 3)
                                                <form action="{{ url('dinas/status-fasilitas', $fasilitas->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-success"><span class="fa fa-check"></span>
                                                        Berikan Persetujuan</button>
                                                </form>
                                            @endif

                                        </div>
                                    </td>
                                    <td class="text-center">{{ $fasilitas->nama }}</td>
                                    <td class="text-center">{{ $fasilitas->nama_pengelola }}</td>
                                    <td class="text-center">{{ $fasilitas->hari_buka }} / {{ $fasilitas->jam_buka }}
                                        - {{ $fasilitas->jam_tutup }}</td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-dinas>
