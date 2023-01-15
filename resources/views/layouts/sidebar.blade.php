<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                {{-- Hanya Admin yang bisa mengakses --}}
                @can('admin')
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Referensi
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/rumpunilmu">Rumpun Ilmu</a>
                        <a class="nav-link" href="/statkawin">Status Perkawinan</a>
                        <a class="nav-link" href="/jenjangpendidikan">Jenjang Pendidikan</a>
                        <a class="nav-link" href="/prodi">Program Studi</a>
                        <a class="nav-link" href="/jabatan">Jabatan</a>
                    </nav>
                </div>
                @endcan
                {{-- end of Hanya Admin yang bisa mengakses --}}
                
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Master Files
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="/dosen">Dosen</a>
                        <a class="nav-link" href="/matakuliah">Matakuliah</a>
                        <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                        <a class="nav-link" href="/karyawan">Karyawan</a>
                    </nav>          
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#satu" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Transaksi Files
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="satu" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="/jadwal">Jadwal</a>
                        <a class="nav-link" href="/pendaftaran">Pendaftaran</a>
                        <a class="nav-link" href="/krs">KRS</a>
                        <a class="nav-link" href="/kehadiranmhs">Kehadiran MHS</a>
                        <a class="nav-link" href="/ukt">UKT</a>
                        <a class="nav-link" href="/absen">Absen Karyawan</a>
                        <a class="nav-link" href="/gaji">Gaji</a>
                    </nav>
        </div>
    </nav>
</div>