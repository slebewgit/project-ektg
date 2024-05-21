<x-web>

    @include('menu.menu')

    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home"
        style="background-image: url(public/web/assets/images/5.jpg);">
        <div class="hero-text-wrap xxl-screen">
            <div class="hero-text">
                <div class="text-content-slider slick">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 centerize-col">
                                <div class="all-padding-50 text-center">
                                    <img src="{{ url('public/web') }}/assets/images/kku-white.png" alt=""
                                        style="width:100%; height:auto; object-fit: cover; ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg" id="pricing">
        <div class="container">
            <div class="row">
                <h5 class="font-20px white-color"><span class="font-100" ></span>
                    <a href="{{ url('kalender-wisata') }} "class="btn btn-success">Tahun 2023 </span>> </a>
                </h5>
                @foreach ($list_bulan as $bulan)
                    <div class="col-md-4 pricing-table col-sm-4 mt-50">
                        <div class="date-box dark-bg text-center">
                            <h2><span style="color: white; text-transform: uppercase;">
                                    {{ $bulan->nama }}</span> </h2>
                        </div>
                        <div class="pricing-box pricing-box-bg  wow fadeInLeft" data-wow-delay="0.1s"
                            style="height: 30rem">
                            <div class="select-menu ">
                                <li class="option ">
                                    @foreach ($list_kalender_wisata as $kalender_wisata)
                                        @if ($kalender_wisata->id_bulan == $bulan->id)
                                            <a href="{{ url("detail-kalender/$kalender_wisata->id") }}"
                                                class="icon-link icon-link-hover">
                                                {{-- <a href=""data-toggle="modal" class="icon-link icon-link-hover"
                                                data-target="#Kalender{{ $kalender_wisata->id }}"> --}}
                                                <h6 style="font-size: 14px; text-transform: capitalize;">
                                                    {{ $kalender_wisata->nama }}
                                                    <i class="icofont-travelling" style="color: #1cc49f"></i> <span
                                                        style="display:block; position:relative; "></span>
                                                </h6>
                                            </a>
                                        @endif
                                    @endforeach
                                </li>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-web>

@foreach ($list_kalender_wisata as $kalender_wisata)
    <div class="modal fade" id="Kalender{{ $kalender_wisata->id }}" tabindex="-1" role="dialog"
        aria-labelledby="Kalender{{ $kalender_wisata->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img class="img-responsive" src="{{ url("public/$kalender_wisata->foto") }}"
                        style="width: 100%; height: 50%; object-fit: cover" alt="" />
                    <div class="row" style="margin-top: 2%">

                        <div class="col-md-6">
                            <a href="{{ url("$kalender_wisata->link_event") }}" class="btn btn-success" target="_blank"
                                title="Link Video Youtube"><i class="icofont-youtube"></i>VIEW EVENT</a>
                        </div>
                        <div class="col-md-6">

                            <p class="text-right">Sumber Foto :
                                <em>{{ $kalender_wisata->sumber_foto }}</em>
                            </p>
                        </div>
                    </div>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body">
                    <ul class="single-blog-list">
                        <li>
                            <div class="post-wrap">
                                <div class="post-text">
                                    <h3>{{ $kalender_wisata->nama }}</h3>

                                    <p>

                                        {!! nl2br($kalender_wisata->deskripsi) !!}
                                    </p>

                                    <p><a style="color: black">Event</a> :
                                        <span>{{ $kalender_wisata->event }}</span>
                                    </p>

                                    <p><a style="color: black">Deskripsi Event</a> :
                                        <span>{{ $kalender_wisata->deskripsi_event }}</span>
                                    </p>

                                    <p><a style="color: black">Alamat</a> :
                                        <span>{{ $kalender_wisata->tempat }}</span>
                                    </p>

                                    <p><a style="color: black">Penyelenggara Event</a> :
                                        <span>{{ $kalender_wisata->penyelenggara_event }}</span>
                                    </p>

                                    <p><a style="color: black">Waktu Event</a> :
                                        <span>{{ $kalender_wisata->tanggal }}</span>
                                    </p>

                                    <p><a style="color: black">Transportasi</a> :
                                        <span>{{ $kalender_wisata->transportasi }}</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endforeach