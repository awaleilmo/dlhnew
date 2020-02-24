<div id="page-sidebar">
    <div class="scroll-sidebar">


        <ul id="sidebar-menu">
            <li class="header"><span>Overview</span></li>
            <li>
                <a href="{{route('welcome')}}" title="Dashboard Admin">
                    <i class="glyph-icon icon-linecons-beaker"></i>
                    <span>Dashboard User</span>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="{{route('admin')}}" title="Admin Dashboard">
                    <i class="glyph-icon icon-linecons-tv"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="{{route('pengaduan')}}" title="Elements">
                    <i class="glyph-icon icon-linecons-location"></i>
                    <span>Pelaporan</span>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#" title="Elements">
                    <i class="glyph-icon icon-linecons-graduation-cap"></i>
                    <span>Program</span>
                </a>

                <ul class="sidebar-submenu">
                    <li><a href="{{route('admin/pengawasan')}}">Pengawasan</a></li>
                    <li><a href="#">Persampahan</a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('admin/timbulansampah')}}">Data Timbulan sampah</a></li>
                            <li><a href="{{route('admin/penanganansampah')}}">Penanganan Sampah Liar</a></li>
                            <li><a href="#">Data TPS</a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{route('admin/datatps')}}">Lokasi TPS</a></li>
                                    <li><a href="{{route('admin/jenistps')}}">Jenis TPS</a></li>
                                    <li><a href="{{route('admin/angkutan')}}">Jenis Angkutan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Adwiyata</a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('admin/sca')}}">Sekolah Calon Adwiyata</a></li>
                            <li><a href="{{route('admin/scatingkat')}}">SCA Tingkat</a></li>
                            <li><a href="{{route('admin/sna')}}">Sekolah Non Adwiyata</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('admin/banksampah')}}">Bank Sampah</a></li>
                    <li><a href="{{route('admin/tps3r')}}">TPS 3R</a></li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#" title="Elements">
                    <i class="glyph-icon icon-linecons-comment"></i>
                    <span>Pelayanan</span>
                    @if($doklingadminnotif > 0)
                        <span class="badge badge-danger badge-small" style="    display: inline-block;"></span>
                    @endif
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('admin/doklingkungan')}}">Dokumen Lingkungan @if($doklingadminnotif > 0)
                                <span class="badge badge-danger badge-small" style="    display: inline-block;"></span>
                            @endif</a></li>
                    <li><a href="{{route('admin/limbah')}}">Perizinan Limbah B3</a></li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>
                <a href="{{route('admin/data')}}" title="Elements">
                    <i class="glyph-icon icon-linecons-database"></i>
                    <span>Data</span>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#" title="Elements">
                    <i class="glyph-icon icon-linecons-doc"></i>
                    <span>Berita</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('admin/artikel')}}">Pojok Warga LH</a></li>
                    <li><a href="{{route('admin/pengumuman')}}">Pengumuman</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
