<x-web>

    @include('menu.menu')
    <section class="parallax-bg fixed-bg sm-pb-80 sm-pt-80"
        data-parallax-bg-image="{{ url('public/web') }}/assets/images/c.jpeg" data-parallax-speed="0.5"
        data-parallax-direction="up">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 centerize-col text-center">
                    <h5 class="font-50px white-color font-800 wow fadeInUp" data-wow-delay="0.1s"><span
                            class="font-100">Ketapang Travel Guide</span></h5>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class="container">
            <div class="col-md-9 col-sm-9 col-xs-12 xs-mb-50">
                <div class="row">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 mb-50">
                            <ul class="single-blog-list">
                                <li>
                                    <div class="post-text">
                                        <h3><a href="">{{ $berita->judul }}</a></h3>
                                        <div class="post-time">{{ $berita->created_at->format('d F Y') }} </div>
                                    </div>
                                    <div class="post-wrap">
                                        <div class="post-img">
                                            <img class="img-responsive" src="{{ url("public/$berita->foto") }}"
                                                alt="" />
                                        </div>
                                        <div class="post-text">

                                            <p>
                                                {{ $berita->deskripsi }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="sidebar_widget widget_recent_post mb-50">
                    <h5 class="aside-title">Info Terkait</h5>
                    <div class="post-item">
                        @foreach ($recent_berita as $berita)
                            <div class="post-thumb">
                                <a href="{{ url("berita/$berita->id") }}">
                                    <img width="75" height="75"
                                        src="{{ url("public/$berita->foto") }}" class="img-responsive"
                                        alt="post-01" />
                                </a>
                            </div>
                            <div class="post-body">
                                <span class="font-14px"><a
                                        href="{{ url("berita/$berita->id") }}">{{ $berita->judul }}</a></span>
                                <div class="post-time">{{ $berita->created_at->format('d F Y') }} </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web>
