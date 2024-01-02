<x-web>

    @include('menu.menu')
    <div class="remove-padding transition-none" id="home">
        <div id="rev_slider_1078_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
            data-alias="classic4export" data-source="gallery"
            style="margin:0px auto;background-color:#000000;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="rev_slider_1078_2" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-3045" data-transition="slotfade-vertical" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title=""
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('public/web') }}/assets/images/d.jpg" alt=""
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="hero-text-wrap">
                            <center>
                                <h3 style="color: white; font-weight:10px; margin-top:30vh"></h3>
                                {{-- <img src="{{ url('public/web') }}/assets/images/logo-putih.png" alt=""
                                    style="width:50%; height:auto; object-fit: cover; "> --}}
                                <img src="{{ url('public/web') }}/assets/images/slebew.png"
                                    style="width:70%; height:auto; object-fit: cover;" alt="">
                            </center>
                        </div>

                    </li>
                </ul>
                <div class="tp-bannertimer" style="height: 3px; background-color: rgba(255, 255, 255, 0.25);">
                </div>
            </div>
        </div>
    </div>

    <section id="blog" class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 centerize-col text-center">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="raleway-font"><span class="font-100">{{ $kategori->nama }} Di Kabupaten
                            Ketapang</h3>
                        <hr class="center_line dark-bg">
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                @foreach ($list_atraksi_wisata as $atraksi_wisata)
                    @if ($atraksi_wisata->status == 2)
                        <div class="col-md-4 blog-list wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="post-wrap mb-30">
                                <div class="post-img">
                                    <div class="date-box">
                                        <span class="day">
                                            @if ($atraksi_wisata->rekomendasi == 2)
                                                <a href="{{ url("atraksi-wisata/$atraksi_wisata->id") }}"
                                                    class="btn btn-light">
                                                    <strong style="font-size: 15px; font-weight:bold;">
                                                        <i style= "color: rgb(8, 11, 175)" class="icofont-badge"> Rekomendasi</i>
                                                    </a>
                                            @elseif ($atraksi_wisata->rekomendasi == 1)
                                            @endif
                                        </span>
                                       
                                    </div>
                                    <div class="item">
                                        <a href="{{ url("atraksi-wisata/$atraksi_wisata->id") }}">
                                            <img class="img-responsive"
                                                style="width:100% ; height:200px; object-fit: cover"
                                                src="{{ url("public/$atraksi_wisata->foto") }}" alt="" />
                                        </a>
                                    </div>
                                </div>

                                <div class="post-text">
                                    <h3 class="text-center">
                                        <strong style="font-size: 17px; font-weight:bold;">{{ $atraksi_wisata->nama }}
                                    </h3>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

</x-web>
