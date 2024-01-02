<x-web>

    @include('menu.menu')
    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home"
        style="background-image: url(public/web/assets/images/b.jpg);">
        <div class="hero-text-wrap xxl-screen">
            <div class="hero-text">
                <div class="text-content-slider slick">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 centerize-col">
                                <div class="all-padding-50 text-center">
                                    {{-- <img src="{{ url('public/web') }}/assets/images/logo-putih.png" alt=""
                                        style="width:100%; height:auto; object-fit: cover; "> --}}
                                    <img src="{{ url('public/web') }}/assets/images/tiga.png" alt="">
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
            <div class="container">
                <div id="map" style="width: 100%; height: 500px;"></div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <strong style="font-size: 20px; font-weight:bold; color:black">Note :</strong>
                            <br>
                            <p style="color: black"><img class="mt-2"
                                    src="https://jadesta.kemenparekraf.go.id/images/merah.png" style="width: 20px"
                                    alt=""> : Desa Wisata</p>
                            <p style="color: black"><img class="mt-2"
                                    src="https://jadesta.kemenparekraf.go.id/images/kota.png" style="width: 20px"
                                    alt=""> : Atraksi Wisata</p>
                            <p style="color: black"><img class="mt-2"
                                    src="https://jadesta.kemenparekraf.go.id/images/desa.png" style="width: 20px"
                                    alt=""> : Fasilitas Wisata</p>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
    </section>


    @push('script')
        <script>
            let latitude = -1.8572961278636353
            let longitude = 109.97172781841756
            navigator.geolocation.getCurrentPosition(function(location) {
                latitude = location.coords.latitude
                longitude = location.coords.longitude
                console.log(latitude, longitude)
            })
            const LeafIcon = L.Icon.extend({
                options: {
                    shadowUrl: '',
                    iconSize: [28, 30],
                    shadowSize: [50, 64],
                    // iconAnchor:   [22, 94],
                    shadowAnchor: [4, 62],
                }
            });
            const greenIcon = new LeafIcon({
                iconUrl: 'https://jadesta.kemenparekraf.go.id/images/merah.png'
            })
            const orangeIcon = new LeafIcon({
                iconUrl: 'https://jadesta.kemenparekraf.go.id/images/kota.png'
            });
            const redIcon = new LeafIcon({
                iconUrl: 'https://jadesta.kemenparekraf.go.id/images/desa.png'
            })


            const grayscaled_map = L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    attribution: '&copy; Ar-Razy Muhammad',
                    id: 'mapbox/streets-v11'
                });

            const sattelite_map = L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    attribution: '&copy; Ar-Razy Muhammad',
                    id: 'mapbox/satellite-v9'
                });


            const street_map = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; Ar-Razy Muhammad'
            });

            const baseMaps = {
                "Grayscale": grayscaled_map,
                "Sattelite": sattelite_map,
                "Streets": street_map,
            };
            const map = L.map('map', {
                center: [-1.8572961278636353, 109.97172781841756],
                zoom: 9,
                layers: [street_map],
            });


            const layerControl = L.control.layers(baseMaps).addTo(map);

            L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=Ts9g8McLuNVEfjGFTHeG', {
                attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
            }).addTo(map);

            function cari(id) {
                map.flyTo(geoLayer.getBounds().getCenter(), 19);
            }

            const generatePopup = ({
                nama,
                foto,
                deskripsi,
                link_jadesta,
                dest_lat,
                dest_long
            }) => {
                return `
                <h5 class="text-center">${nama}</h5>
                <img src="${foto}"/>
                <h6 class="text-center" >${deskripsi}</h6>
                <br><br>
                <button class="btn btn-info">
                    <a href="${link_jadesta}" target="_blank" style="color: white">
                        <i class="icofont-look"></i> Lihat Detail
                    </a>
                </button>
                <button class='btn btn-info'>
                    <a href='https://www.google.com/maps/dir/?api=1&origin=${latitude},${longitude}&destination=${dest_lat},${dest_long}' target='_blank'  style='color: white'>
                        <i class='icofont-location-arrow'></i> Rute
                        </a>
                </button>
                `
            }

            @foreach ($list_desa_wisata as $wisata)
                data = {
                    nama: '{{ $wisata->nama_desa_wisata }}',
                    foto: '{{ url("public/$wisata->foto") }}',
                    deskripsi: '{{ $wisata->deskripsi }}',
                    link_jadesta: '{{ $wisata->link_jadesta }}',
                    dest_lat: '{{ $wisata->lat }}',
                    dest_long: '{{ $wisata->lng }}',
                }
                L.marker([data.dest_lat, data.dest_long], {
                    icon: greenIcon
                }).addTo(map).bindPopup(generatePopup(data))
            @endforeach

            @foreach ($list_atraksi_wisata as $wisata)
                data = {
                    nama: `{{ $wisata->nama_atraksi_wisata }}`,
                    foto: `{{ url("public/$wisata->foto") }}`,
                    deskripsi: `{{ $wisata->deskripsi }}`,
                    link_jadesta: `{{ $wisata->link_jadesta }}`,
                    dest_lat: `{{ $wisata->lat }}`,
                    dest_long: `{{ $wisata->lng }}`,
                }
                L.marker([data.dest_lat, data.dest_long], {
                    icon: orangeIcon
                }).addTo(map).bindPopup(generatePopup(data))
            @endforeach

            @foreach ($list_fasilitas as $wisata)
                data = {
                    nama: '{{ $wisata->nama_fasilitas }}',
                    foto: '{{ url("public/$wisata->foto") }}',
                    deskripsi: '{{ $wisata->deskripsi }}',
                    link_jadesta: '{{ $wisata->link_jadesta }}',
                    dest_lat: '{{ $wisata->lat }}',
                    dest_long: '{{ $wisata->lng }}',
                }
                L.marker([data.dest_lat, data.dest_long], {
                    icon: redIcon
                }).addTo(map).bindPopup(generatePopup(data))
            @endforeach


            L.control.locate().addTo(map);
        </script>
    @endpush

</x-web>
