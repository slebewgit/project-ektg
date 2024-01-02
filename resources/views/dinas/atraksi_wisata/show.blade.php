<x-mitra>
    @include('menu.menu')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <x-layout.button.back-button url="dinas/atraksi-wisata/{{$atraksi_wisata->id_kategori}}"/>
                </div>
                @csrf
                <div class="card-body">
                    <div class="dastyle-profile">
                        <div class="row">
                            <div class="col-lg-12 align-self-center mb-3 mb-lg-0">
                                <div class="dastyle-profile-main">
                                    <img src="{{ url("public/$atraksi_wisata->foto") }}" class="rounded"
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
                                                : {{ $atraksi_wisata->nama }}
                                            </li>
                                            <li class="">
                                                : {{ $atraksi_wisata->alamat }}
                                            </li>
                                            <li class="">
                                                : {{ $atraksi_wisata->nama_pengelola }}
                                            </li>
                                            <li class="">
                                                : {{ $atraksi_wisata->no_pengelola }}
                                            </li>
                                            <li class="">
                                                : {{ $atraksi_wisata->hari_buka }} / : {{ $atraksi_wisata->jam_buka }} -
                                                : {{ $atraksi_wisata->jam_tutup }}
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
                                                Deskripsi : {{ $atraksi_wisata->deskripsi }}
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
</x-mitra>
