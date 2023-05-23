<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
    <i class="fa-solid fa-hand-holding-dollar"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Komite Finance</div>
    <br>
</a>
<!-- Heading -->
<div class="sidebar-heading">
    SMKN 2 SUBANG
</div>


<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="{{route('beranda')}}">
    <i class="fa-solid fa-house"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<!-- Heading -->

<!-- Nav Item - Tables -->
<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Data Siswa</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('tingkat-satu')}}">Tingkat 1</a>
            <a class="collapse-item" href="{{route('tingkat-dua')}}">Tingkat 2</a>
            <a class="collapse-item" href="{{route('tingkat-tiga')}}">Tingkat 3</a>
        </div>
    </div>
</li> -->

        <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Siswa</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Siswa:</h6>
                        <a class="collapse-item" href="{{route('tingkat-satu')}}">Tingkat 1</a>
                        <a class="collapse-item" href="{{route('tingkat-dua')}}">Tingkat 2</a>
                        <a class="collapse-item" href="{{route('tingkat-tiga')}}">Tingkat 3</a>
                    </div>
                </div>
            </li>

<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Data Laporan </span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('pemasukan')}}">Laporan Pemasukan</a>
            <a class="collapse-item" href="{{route('cetak-data-pemasukan-form')}}">Cetak Data Pemasukan</a>
        </div>
    </div>
</li> -->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">

</div> 

</li>

   <!-- Nav Item - Charts -->
   <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">
                <i class="fa-solid fa-right-from-bracket"></i></i>
                    <span>Logout</span></a>
            </li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>