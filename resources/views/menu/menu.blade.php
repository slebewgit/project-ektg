@section('menu')
    <ul class="dropdown-menu">

        @foreach ($list_kategori as $kategori)
            <li>
                <a href="{{ url("atraksi/$kategori->id") }}">{{ $kategori->nama }}</a>
            </li>
        @endforeach
    </ul>
@endsection

@section('fasilitas')
    <ul class="dropdown-menu">

        @foreach ($list_kategori_fasilitas as $kategori_fasilitas)
            <li>
                <a href="{{ url("fasilitas/$kategori_fasilitas->id") }}">{{ $kategori_fasilitas->nama }}</a>
            </li>
        @endforeach
    </ul>
@endsection

@section('dinas_menu')
    <ul class="nav-second-level" aria-expanded="true">

        @foreach ($list_kategori as $kategori)
            <li>
                <a href="{{ url("dinas/atraksi-wisata/$kategori->id") }}">{{ $kategori->nama }}</a>
            </li>
        @endforeach
    </ul>
@endsection

@section('dinas_fasilitas')
    <ul class="nav-second-level" aria-expanded="false">

        @foreach ($list_kategori_fasilitas as $kategori_fasilitas)
            <li>
                <a href="{{ url("dinas/fasilitas/$kategori_fasilitas->id") }}">
                    <i class="align-self-center menu-icon fa fa-list"></i>
                    <span>{{ $kategori_fasilitas->nama }}</span>
                </a>

            </li>
        @endforeach
    </ul>
@endsection


@section('mitra_menu')
    <li>
        <a href="javascript: void(0);"> <i data-feather="grid"
                class="align-self-center menu-icon"></i><span>Atraksi</span><span class="menu-arrow"><i
                    class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="true">

            @foreach ($list_kategori as $kategori)
                <li>
                    <a href="{{ url("mitra/atraksi-wisata/$kategori->id") }}">{{ $kategori->nama }}</a>
                </li>
            @endforeach
        </ul>
    </li>
@endsection

@section('mitra_fasilitas')
<li>
    <a href="javascript: void(0);"> <i data-feather="grid"
            class="align-self-center menu-icon"></i><span>Fasilitas</span><span class="menu-arrow"><i
                class="mdi mdi-chevron-right"></i></span></a>
    <ul class="nav-second-level" aria-expanded="false">

        @foreach ($list_kategori_fasilitas as $kategori_fasilitas)
            <li>
                <a href="{{ url("mitra/fasilitas/$kategori_fasilitas->id") }}">

                    {{ $kategori_fasilitas->nama }}
                </a>

            </li>
        @endforeach
    </ul>
</li>
@endsection