<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                @csrf
                <div class="card-header">
                    <x-layout.button.back-button url="admin/atraksi-wisata" />
                    <h3 class="text-center">Data Atraksi Wisata dengan Kategori {{ $kategori->nama }}</h3>

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
                                <th class="text-center">Status Atraksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_atraksi_wisata as $atraksi_wisata)
                                @if ($atraksi_wisata->id_kategori == $kategori->id)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url("admin/atraksi-wisata/show-atraksi-wisata/$atraksi_wisata->id") }}"
                                                    class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                                <x-layout.button.edit-button url="admin/atraksi-wisata"
                                                    id="{{ $atraksi_wisata->id }}" />
                                                <x-layout.button.delete-button url="admin/atraksi-wisata"
                                                    id="{{ $atraksi_wisata->id }}" />
                                                @if ($atraksi_wisata->rekomendasi == 1)
                                                    <form action="{{ url('admin/rekomendasi', $atraksi_wisata->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="btn btn-success"><span
                                                                class="fa fa-check"></span> Berikan Rekomendasi</button>
                                                    </form>
                                                @endif

                                                @if ($atraksi_wisata->rekomendasi == 2)
                                                    <form
                                                        action="{{ url('admin/hapus-rekomendasi', $atraksi_wisata->id) }}"
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
                                        <td class="text-center">
                                            @if ($atraksi_wisata->status == 1)
                                                <p class="btn btn-primary"> Data Baru</p>
                                            @endif
                                            @if ($atraksi_wisata->status == 2)
                                                <p class="btn btn-warning"> Di Setujui</p>
                                            @endif

                                            @if ($atraksi_wisata->status == 3)
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
