<x-web>

    @include('menu.menu')

    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home"
        style="background-image: url(public/web/assets/images/1.jpg);">
        <div class="hero-text-wrap xxl-screen">
            <div class="hero-text">
                <div class="text-content-slider slick">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 centerize-col">
                                <div class="all-padding-50 text-center">
                                    <img src="{{ url('public/web') }}/assets/images/tiga.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-10 centerize-col text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title">
                        <hr class="center_line dark-bg">
                        @foreach ($detail as $detail)
                            <p>
                                {{ $detail->nama }}
                            </p>
                        @endforeach
                        <br>
                        <p>
                            Silahkan KLIK pada nama desa wisata yang tersedia untuk menemukan beragam informasi paket
                            wisata dan fasilitas pendukung lainnya.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 centerize-col text-center">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <span class="font-100" font-weight:bold>DESA WISATA KABUPATEN KETAPANG</span>

                        </div>
                    </div>
                </div>
                <div class="row mt-50">
                    @foreach ($list_desa_wisata as $desa_wisata)
                        <div class="col-md-4 blog-list wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="post-wrap">
                                <div class="post-img">
                                    <div class="blog-grid-slider slick">
                                        <div class="item">
                                            <a class="image-popup-no-margins"
                                                href="{{ url("public/$desa_wisata->foto") }}">
                                                <img class="img-responsive"
                                                    style="width:100% ; height:300px; object-fit: cover"
                                                    src="{{ url("public/$desa_wisata->foto") }}"
                                                    alt="Tidak Dapat Memuat Gambar" />
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a class="image-popup-no-margins"
                                                href="{{ url("public/$desa_wisata->foto1") }}">
                                                <img class="img-responsive"
                                                    style="width:100% ; height:300px; object-fit: cover"
                                                    src="{{ url("public/$desa_wisata->foto1") }}"
                                                    alt="Tidak Dapat Memuat Gambar" />
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a class="image-popup-no-margins"
                                                href="{{ url("public/$desa_wisata->foto2") }}">
                                                <img class="img-responsive"
                                                    style="width:100% ; height:300px; object-fit: cover"
                                                    src="{{ url("public/$desa_wisata->foto2") }}"
                                                    alt="Tidak Dapat Memuat Gambar" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-text">
                                        <h3><a
                                                href="{{ url("$desa_wisata->link_jadesta") }}">{{ $desa_wisata->nama_desa_wisata }}</a>
                                                <p></a><a href="{{ url("$desa_wisata->link_wisata") }}" class="btn btn-success" target="_blank" title="Link Video Youtube"><i class="icofont-youtube"></i></span>VIEW WISATA</a>
                                        </h3>
                                        <p>
                                            {{ "$desa_wisata->deskripsi" }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> <br>
            <div class="container">
                <div class="text-center">
                    <strong style="color: rgb(6, 6, 6)">{{ $list_desa_wisata->onEachSide(1)->links() }}</strong>
                </div>
            </div>
            <hr class="center_line grey-bg">
            <div class="container">
                <div class="text-center">
                    <strong>
                        Menampilkan
                        {{ $list_desa_wisata->firstItem() }}
                        Sampai
                        {{ $list_desa_wisata->lastItem() }}
                        Dari
                        {{ $list_desa_wisata->total() }}
                        Item
                    </strong>
                </div>
            </div>
        </div>
    </section>
    <!--== Blogs End ==-->
</x-web>
