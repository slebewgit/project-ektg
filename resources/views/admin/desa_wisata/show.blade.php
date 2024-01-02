<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/desa-wisata" />
                </div>
                @csrf
                <div class="card-body">
                    <div class="dastyle-profile">
                        <div class="row">
                            <div class="col-lg-6 align-self-center mb-3 mb-lg-0">
                                <div class="dastyle">
                                    <div class="dastyle">
                                        <img src="{{ url("public/$desa_wisata->foto") }}" alt="" height="300",
                                            class="rounded">

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 ml-auto align-self-center">
                                <ul class="list-unstyled personal-detail mb-0">

                                    <li class="mt-2">
                                        <i class="las la-map-marker text-secondary font-22 align-middle mr-2"></i> <b>
                                            Nama Desa </b> : {{ $desa_wisata->nama_desa_wisata }}
                                    </li>
                                    <li class="mt-2">
                                        <i class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b>
                                            Website </b> :
                                        <a href="{{ $desa_wisata->link_jadesta }}" target="_blank"
                                            class="font-14 text-primary">{{ $desa_wisata->link_jadesta }}</a>
                                    </li>

                                    <li class="mt-2" style="text-align: justify">
                                        <i class="las la-edit text-secondary font-22 align-middle mr-2"></i> <b>
                                            Deskripsi </b> :
                                        {{ $desa_wisata->deskripsi }}
                                    </li>
                                </ul>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</x-app>
