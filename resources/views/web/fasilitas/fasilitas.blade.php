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
                                    <img  src="{{ url('public/web') }}/assets/images/tiga.png" style="width:70%; height:auto; object-fit: cover;" alt="">
                            </center>
                        </div>

                    </li>
                </ul>
                <div class="tp-bannertimer" style="height: 3px; background-color: rgba(255, 255, 255, 0.25);">
                </div>
            </div>
        </div>
    </div>

    <section class="white-bg" id="pricing">
        <div class="container">
            <div class="section-title wow fadeInUp text-center" data-wow-delay="0.1s">
                <strong style="font-size: 20px; font-weight:bold; color:grey"> {{$kategori_fasilitas->nama}} Di Kabupaten
                    Ketapang
                </strong>
                <hr class="center_line grey-bg">
            </div>
            <div class="row mt-50">
                @foreach ($list_fasilitas as $fasilitas)
                @if ($fasilitas->status == 2)
                    
                    <div class="col-md-4 blog-list wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="post-wrap">
                            <div class="post-img">
                                <div class="item">
                                    <a href="{{ url("fasilitas-wisata/$fasilitas->id") }}">
                                    <img class="img-responsive" style="width:100%
                                     ; height:200px; object-fit: cover"
                                        src="{{ url("public/$fasilitas->foto") }}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="post-text">
                                    <a href="{{ url("fasilitas-wisata/$fasilitas->id") }}">
                                    {{ $fasilitas->nama }}</a>
                                    <p style="color: #007bff">
                                        @for ($i = 1; $i <= $fasilitas->rating; $i++)
                                            <i class="icofont-thumbs-up"></i>
                                        @endfor
                                    </p>
                                </div>
                            <div class="post-text">
                                <p>{{$fasilitas->alamat}}</p>
                            </div>
                            <hr class="grey-bg">
                        </div>
                    </div>
                    
                @endif
                @endforeach
            </div>
        </div>
    </section>
</x-web>
