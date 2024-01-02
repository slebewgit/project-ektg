<x-app>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <x-layout.button.back-button url="admin/fasilitas/{{$fasilitas->id_kategori_fasilitas}}"/>
                </div>
                <div class="card-body">
                    <div class="dastyle-profile">
                        <div class="row">
                            <div class="col-lg-12 align-self-center mb-3 mb-lg-0">
                                <div class="dastyle-profile-main">
                                    <img src="{{ url("public/$fasilitas->foto") }}" class="rounded"
                                        style="width:100%">
                                </div>
                            </div>
                            <div class="col-lg-12 align-self-center" style="margin-top: 2%">
                                <div class="row">
                                    <div class="col-auto text-left border-right">
                                        <ul class="list-unstyled personal-detail mb-0">
                                            <li class="">
                                                Nama Wisata
                                            </li>
                                            <li class="">
                                                Alamat Wisata
                                            </li>
                                            <li class="">
                                                Nama Pengelola
                                            </li>
                                            <li class="">
                                                No Pengelola
                                            </li>
                                            <li class="">
                                                Jam Operasi
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-unstyled personal-detail mb-0">
                                            <li class="">
                                                : {{ $fasilitas->nama }}
                                            </li>
                                            <li class="">
                                                : {{ $fasilitas->alamat }}
                                            </li>
                                            <li class="">
                                                : {{ $fasilitas->nama_pengelola }}
                                            </li>
                                            <li class="">
                                                : {{ $fasilitas->no_pengelola }}
                                            </li>
                                            <li class="">
                                                : {{ $fasilitas->hari_buka }} / : {{ $fasilitas->jam_buka }} -
                                                : {{ $fasilitas->jam_tutup }}
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 align-self-center" style="margin-top: 2%">
                                <div class="row">
                                    <div class="col-auto text-left border-right">
                                        <ul class="list-unstyled personal-detail mb-0">
                                            <li class="">
                                                Deskripsi : {{ $fasilitas->deskripsi }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
