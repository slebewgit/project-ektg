<x-mitra>
    @include('menu.menu')
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">

                    <a href="{{ url("mitra/atraksi-wisata/$kategori->id") }}/create" class="btn btn-primary float-right mb-10"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h3 class="text-center">Data Atraksi Wisata</h3>

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
                                <th class="text-center">Destinasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_atraksi_wisata as $atraksi_wisata)
                                @if (Auth::guard('mitra')->user()->id == $atraksi_wisata->id_mitra)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url("mitra/atraksi-wisata/$atraksi_wisata->id") }}/show"
                                                    class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                                <x-layout.button.edit-button url="mitra/atraksi-wisata"
                                                    id="{{ $atraksi_wisata->id }}" />
                                                <a href="{{url("mitra/atraksi-wisata/$atraksi_wisata->id")}}/delete" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><span class="fa fa-trash"></span> Hapus</a>

                                                @if ($atraksi_wisata->rekomendasi == 1)
                                                    <form action="{{ url('mitra/rekomendasi', $atraksi_wisata->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="btn btn-success"><span
                                                                class="fa fa-check"></span> Berikan Rekomendasi</button>
                                                    </form>
                                                @endif

                                                @if ($atraksi_wisata->rekomendasi == 2)
                                                    <form
                                                        action="{{ url('mitra/hapus-rekomendasi', $atraksi_wisata->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="btn btn-dark"><span class="fa fa-check"></span>
                                                            Hapus Rekomendasi</button>
                                                    </form>
                                                @endif

                                            </div>
                                        </td>
                                        <td class="text-center">{{ $atraksi_wisata->nama }}</td>
                                        <td class="text-center">{{ $atraksi_wisata->nama_pengelola }}</td>
                                        <td class="text-center">{{ $atraksi_wisata->hari_buka }} /
                                            {{ $atraksi_wisata->jam_buka }} - {{ $atraksi_wisata->jam_tutup }}</td>
                                        <td class="text-center">{{ $atraksi_wisata->destinasi }}</td>

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
