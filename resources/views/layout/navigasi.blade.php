<!-- Navigation -->
<nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
    <div class="container">

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="{{ asset ('asset_landing/images/met-u.png') }}" alt="alternative"></a> 

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text" href="index.html">Zinc</a> -->

        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>

                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/jawabanuts">Jawaban UTS</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                        <li><a class="dropdown-item" href="/about">Tentang Kami</a></li>
                        <li><a class="dropdown-item" href="/sambutan_rektor">Sambutan Rektor</a></li>
                        <li><a class="dropdown-item" href="/selayang_pandang">Selayang Pandang</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Pendidikan</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                        <li><a class="dropdown-item" href="/pendaftaran">Pendaftaran</a></li>
                        <li><a class="dropdown-item" href="/akreditasi">Akreditasi</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Penelitian</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                        <li><a class="dropdown-item" href="/research">Research dan Inovasi</a></li>
                        <li><a class="dropdown-item" href="/pusat_studi">Pusat Studi</a></li>
                        <li><a class="dropdown-item" href="/kerjasama">Kerjasama Penelitian </a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Kemahasiswaan</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                        <li><a class="dropdown-item" href="/karir">Karir dan Konseling</a></li>
                        <li><a class="dropdown-item" href="/asrama">Asrama</a></li>
                        <li><a class="dropdown-item" href="/kewirausahaan">Kewirausahaan</a></li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
                <div class="text-end">
                   {{-- Controll session User yang sudah di autentikasi  --}}
                      <ul class="navbar-nav ms-auto">
                        @auth
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" 
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Wellcomeback, {{ auth()->user()->name }} 
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                               Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                              <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                              </form>
                            </li>
                            </ul>
                          </li>
                        @else    
                          {{-- <li class="nav-item"><a href="/login" class="nav-link {{ ($active==='login')? 'active':'' }} "><i class="bi bi-file-lock"></i> Login</a></li> --}}
                          <li class="nav-item"><a href="/login" class="nav-link"><i class="bi bi-file-lock"></i> Login</a></li>
                        @endauth
                      </ul>
                      
                  </div>
            
        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->