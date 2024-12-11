<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('ready/assets/img/profile.jpg')}}">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        Hasyim Jr
                        <span class="user-level">Administrator</span>

                    </span>
                </a>


            </div>
        </div>

        
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="dashboard">
                    <i class="la la-dashboard"></i>
                    <p>Dashboard</p>
                    <span class="badge badge-count"></span>
                </a>
            </li>
        
            <li class="nav-item {{ Request::is('alternatifs*') ? 'active' : '' }}">
                <a href="{{ route('alternatifs.index') }}">
                    <i class="la la-dashboard"></i>
                    <p>Data Alternatif</p>
                    <span class="badge badge-count"></span>
                </a>
            </li>
        
            <li class="nav-item {{ Request::is('kriterias*') ? 'active' : '' }}">
                <a href="{{ route('kriterias.index') }}">
                    <i class="la la-table"></i>
                    <p>Data Kriteria</p>
                    <span class="badge badge-count"></span>
                </a>
            </li>
        
            <li class="nav-item {{ Request::is('matriks_keputusan*') ? 'active' : '' }}">
                <a href="{{ route('matriks_keputusan.index') }}">
                    <i class="la la-keyboard-o"></i>
                    <p>Matriks Keputusan</p>
                    <span class="badge badge-count"></span>
                </a>
            </li>
        
            <li class="nav-item {{ Request::is('matriks_normalisasi') ? 'active' : '' }}">
                <a href="matriks_normalisasi">
                    <i class="la la-th"></i>
                    <p>Matriks Normalisasi</p>
                    <span class="badge badge-count"></span>
                </a>
            </li>
        
            <li class="nav-item {{ Request::is('nilai_optimasi') ? 'active' : '' }}">
                <a href="nilai_optimasi">
                    <i class="la la-bell"></i>
                    <p>Nilai Optimasi</p>
                    <span class="badge badge-success"></span>
                </a>
            </li>
        
            <li class="nav-item {{ Request::is('perankingan') ? 'active' : '' }}">
                <a href="perankingan">
                    <i class="la la-font"></i>
                    <p>Perankingan</p>
                    <span class="badge badge-danger"></span>
                </a>
            </li>
        </ul>
        
    </div>
</div>