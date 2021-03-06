
<div class="main-header bg-gradient-7 font-inverse" style=" width: 100%;">
    <div class="container" style="max-width: 100%">
        <div class="right-header-btn">
            <div id="mobile-navigation">
                <button style="    padding: 10px 35px 25px 0;" id="nav-toggle" class="collapsed" data-toggle="collapse" data-target=".header-nav">
                    <span style="background: aliceblue "></span>
                </button>
            </div>

        </div><!-- .header-logo -->
        <ul class="header-nav collapse" style="float: none">
            <li>
                <a href="{{url("/")}}" style="width: 50px; text-align: left">
                    <i class="glyph-icon icon-home" style="font-size: xx-large; color: #8da0aa"></i>
                </a>
            </li>
            <li>
                <a href="#" title="Tentang Kami">
                    Tentang Kami <i class="glyph-icon icon-caret-down"></i>
                </a>
                <ul>

                    <li class="dropdown" style="color: white"><a href="{{route('dasarhukum')}}"> Dasar Hukum</a></li>
                <!--<li class="dropdown" style="color: white"><a href="{{route('kewenangan')}}"> Tujuan dan Sasaran</a></li>-->
                    <li class="dropdown" style="color: white"><a href="{{route('visimisi')}}"> Visi & Misi</a></li>
                    <li class="dropdown" style="color: white"><a href="{{route('sejarah')}}"> Sejarah DLH Kota Serang</a></li>
                    <li class="dropdown" >
                        <a href="#" title="Pages" class="dropdown-toggle" data-toggle="dropdown">
                            Struktur Bidang <i class="glyph-icon icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu" style="position:relative;background-color: #253035; height: 250px; overflow-x: hidden; overflow-y: scroll;" aria-labelledby="dropdownMenu1">
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('kadis')}}"> Kepala Dinas</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('sekdis')}}"> Sekretaris</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('unpeg')}}"> Umum dan Kepegawaian</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('pep')}}"> PEP dan Keuangan</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('pplh')}}"> Bidang Penataan dan Penaatan <br>Perlindungan Pengelolaan <br>Lingkungan Hidup</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('pslb')}}"> Bidang Pengelolaan Sampah,<br> Limbah B3 dan Peningkatan <br>Kapasitas</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('ppklh')}}"> Bidang Pengendalian Pencemaran <br>dan Kerusakan Lingkungan Hidup</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('uptlab')}}"> UPTD Laboratorium</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('uptperbekalan')}}"> UPTD Perlengkapan dan Perbekalan</a></li>
                            <li class="dropdown" style="color: white"><a href="{{route('jabatan')}}"> Kelompok Jabatan Fungsional</a></li>
                        </ul>

                    </li>
                    <li class="dropdown" style="color: white"><a href="{{route('struktur')}}"> Struktur Organisasi</a></li>
                <!--<li class="dropdown" style="color: white"><a href="{{route('programs')}}"> Tugas Pokok dan Fungsi</a></li>-->
                    <li class="dropdown" style="color: white"><a href="{{route('jmlpnsthl')}}"> Jumlah Pegawai</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('cilowong')}}" title="TPAS Cilowong">
                    TPAS Cilowong
                </a>
            </li>
            <li>
                <a href="#" title="Components">
                    Galeri <i class="glyph-icon icon-caret-down"></i> @guest @else
                        @if($fotonotif > 0 OR $videonotif >0)
                            <span class="badge badge-danger badge-small"></span>
                        @endif
                                                                          @endguest
                </a>
                <ul>
                    <li class="dropdown" style="color: white">@guest <a href="{{url('/foto')}}"> @else<a href="{{url('notif')}}/4"> @endguest Foto @guest @else
                                @if($fotonotif > 0 )
                                    <span class="badge badge-danger badge-small"></span>
                                @endif
                            @endguest</a></li>
                    <li class="dropdown" style="color: white">@guest <a href="{{url('/video')}}"> @else<a href="{{url('notif')}}/5"> @endguest Video @guest @else
                                @if($videonotif > 0 )
                                    <span class="badge badge-danger badge-small"></span>
                                @endif
                        @endguest
                        </a></li>
                </ul>
            </li>
            @guest
            @else
                <li>
                    <a href="#" title="Features">
                        Pelayanan <i class="glyph-icon icon-caret-down"></i>
                        @if($amdalnotif > 0  OR $spplnotif > 0  OR $ukluplnotif > 0 )
                        <span class="badge badge-danger badge-small"></span>
                        @endif
                    </a>
                    <ul>
                        <li class="dropdown" style="color: white">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Dokumen Lingkungan <i class="glyph-icon icon-caret-down"></i>
                                @if($amdalnotif > 0  OR $spplnotif > 0  OR $ukluplnotif > 0)
                                    <span class="badge badge-danger badge-small"></span>
                                @endif
                            </a>
                            <ul class="dropdown-menu" style="position:relative;background-color: #253035; height: auto; overflow-x: hidden; overflow-y: hidden;" aria-labelledby="dropdownMenu2">
                                <li class="dropdown" style="width:100%; color: white"><a href="{{url('notif')}}/1"> AMDAL @if($amdalnotif > 0 )
                                            <span class="badge badge-danger badge-small"></span>
                                        @endif</a>
                                </li>
                                <li class="dropdown" style="width:100%; color: white"><a href="{{url('notif')}}/2"> UKL-UPL
                                    @if($ukluplnotif > 0 )
                                        <span class="badge badge-danger badge-small"></span>
                                    @endif
                                    </a>
                                </li>
                                <li class="dropdown" style="width:100%; color: white"><a href="{{url('notif')}}/3"> SPPL
                                    @if($spplnotif > 0 )
                                        <span class="badge badge-danger badge-small"></span>
                                    @endif
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown" style="color: white">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> Limbah <i class="glyph-icon icon-caret-down"></i></a>
                            <ul class="dropdown-menu" style="position:relative;background-color: #253035; height: auto; overflow-x: hidden; overflow-y: hidden;" aria-labelledby="dropdownMenu2">
                                <li class="dropdown" style="width:100%; color: white"><a href="{{route('perizinanlimbah')}}"> Izin Limbah (IPLC) </a></li>
                                <li class="dropdown" style="width:100%; color: white"><a href="javascript:void(0)"> Limbah Cair </a></li>
                                <li class="dropdown" style="width:100%; color: white"><a href="javascript:void(0)"> Limbah Padat </a></li>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown" style="color: white">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> Uji Parameter Kualitas Lingkungan ( UPKL ) <i class="glyph-icon icon-caret-down"></i></a>
                            <ul class="dropdown-menu" style="position:relative;background-color: #253035; height: auto; overflow-x: hidden; overflow-y: hidden;" aria-labelledby="dropdownMenu2">
                                <li class="dropdown" style="width:100%; color: white"><a href="javascript:void(0)"> Uji Parameter Air </a></li>
                                <li class="dropdown" style="width:100%; color: white"><a href="javascript:void(0)"> Uji Parameter Tanah </a></li>
                                <li class="dropdown" style="width:100%; color: white"><a href="javascript:void(0)"> Uji Parameter Udara </a></li>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown" style="color: white"><a href="javascript:(0)"> IPAL </a>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="#" title="Components">
                        Pelaporan <i class="glyph-icon icon-caret-down"></i> @if($pengaduannotif > 0 )
                            <span class="badge badge-danger badge-small"></span>
                        @endif
                    </a>
                    <ul>
                        <li class="dropdown"><a href="{{route('panduan_pelaporan')}}">Tata Cara Pengaduan</a></li>
                        <li class="dropdown" style="color: white"><a href="{{url('notif')}}/6">Pengaduan
                                    @if($pengaduannotif > 0 )
                                        <span class="badge badge-danger badge-small"></span>
                                    @endif</a></li>
                    </ul>

                </li>
                <li>
                    <a href="#" title="Pages">
                        Program <i class="glyph-icon icon-caret-down"></i> @if($banksampahnotif > 0 )
                            <span class="badge badge-danger badge-small"></span>
                        @endif
                    </a>
                    <ul>
                        <li class="dropdown"><a href="{{route('adwiyata')}}">Adiwiyata</a></li>
                        <li class="dropdown"><a href="javascript:(0)">Adipura</a></li>
                        <li class="dropdown"><a href="{{url('notif')}}/7">Bank Sampah @if($banksampahnotif > 0 )
                                    <span class="badge badge-danger badge-small"></span>
                                @endif</a></li>
                        <li class="dropdown"><a href="{{route('pengawasan')}}">Pengawasan</a></li>
                        <li class="dropdown"><a href="{{route('persampahan')}}">Persampahan</a></li>
                        <li class="dropdown"><a href="{{route('tps3r')}}">TPS 3R</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('notif')}}/8" title="Pages">
                        Data @if($datanotif > 0 )
                            <span class="badge badge-danger badge-small"></span>
                        @endif
                    </a>

                </li>
            @endguest
            <li>
                <a href="#" title="Pages">
                    Berita <i class="glyph-icon icon-caret-down"></i> @if($wartanotif > 0 OR $pengumumannotif > 0)
                        <span class="badge badge-danger badge-small"></span>
                    @endif
                </a>
                <ul>
                    <li class="dropdown" style="color: white">@guest <a href="{{url('artikel')}}"> @else<a href="{{url('notif')}}/9"> @endguest Pojok Warta LH @guest @else @if($wartanotif > 0 )
                                <span class="badge badge-danger badge-small"></span>
                            @endif
                        @endguest
                        </a> </li>
                    <li class="dropdown" style="color: white">@guest <a href="{{url('pengumuman')}}"> @else <a href="{{url('notif')}}/10"> @endguest Pengumuman @guest @else @if($pengumumannotif > 0)
                                <span class="badge badge-danger badge-small"></span>
                            @endif @endguest</a>
                    </li>
                </ul>


            </li>
            <li>
                <a href="{{route('aplikasi')}}" title="Pages">
                    Aplikasi
                </a>
            </li>
            <li>
                @guest
                    <a href="{{route('login')}}" title="Pages">
                        Masuk / Daftar
                    </a>
            @else
                <li>
                    <a>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul>
                        @if(Auth::user()->level == "admin")
                            <li><a href="{{route('admin')}}">Dashboard Admin</a></li>
                        @endif
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
        </ul><!-- .header-nav -->
    </div><!-- .container -->
</div><!-- .main-header -->
