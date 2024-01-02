<x-app>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <x-layout.button.back-button url="admin/kalender-wisata/"/>
                </div>
                <div class="card-body">
                    <div class="dastyle-profile">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-lg-6 align-self-center mb-3 mb-lg-0">
                                <div class="dastyle-profile-main">
                                    <img src="{{ url("public/$kalender_wisata->foto") }}" class="rounded"
                                        style="width:100%">
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-lg-12 align-self-center" style="margin-top: 2%">
                                <div class="row">
                                    <div class="col-auto text-left border-right">
                                        <ul class="list-unstyled personal-detail mb-0">
                                            <li class="">
                                                Nama Event
                                            </li>
                                            <li class="">
                                                Tempat Event
                                            </li>
                                            <li class="">
                                                Bulan Event
                                            </li>
                                            <li class="">
                                                Tahun Event
                                            </li>



                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-unstyled personal-detail mb-0">
                                            <li class="">
                                                : {{ $kalender_wisata->nama }}
                                            </li>
                                            <li class="">
                                                : {{ $kalender_wisata->tempat }}
                                            </li>
                                            <li class="">
                                                : {{ $kalender_wisata->bulan->nama }}
                                            </li>
                                            <li class="">
                                                : {{ $kalender_wisata->tahun }}
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
                                                Deskripsi : {{ $kalender_wisata->deskripsi }}
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
