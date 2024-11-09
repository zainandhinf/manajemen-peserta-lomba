<aside class="sidebar bg-white py-2" style="line-height: 1.25">
    <div class="logo">
        <a href="/" class="logo-details">
            <div class="img">
                <img src="/assets/img/logo.jpeg" alt="Logo" width="35" height="35"
                    class="d-inline-block align-text-top">
            </div>
            <span class="logo_name h6 m-0 fw-semibold wrap-text">Logo</span>
        </a>
    </div>
    <ul class="nav-links" style="padding-bottom: 115px;">
        <li>
            <div class="nav-button active">
                <a href="/">
                    <i class="fa-regular fa-house"></i>
                    <span class="link_name">Home</span>
                </a>
            </div>
            <ul class="sub-menu blank">
                <li class="fw-semibold link_name">Home</li>
            </ul>
        </li>
        <li>
            <div class="nav-button">
                <a href="">
                    <i class="fa-regular fa-grid-2"></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </div>
            <ul class="sub-menu blank">
                <li class="fw-semibold link_name">Dashboard</li>
            </ul>
        </li>
        <li>
            <div class="nav-button">
                <a href="/kasir">
                    <i class="fa-regular fa-cash-register"></i>
                    <span class="link_name">Kasir</span>
                </a>
            </div>
            <ul class="sub-menu blank">
                <li class="fw-semibold link_name">Kasir</li>
            </ul>
        </li>

        <li class="showMenu">
            <div class="nav-button">
                <div class="iocn-link" onclick="expandMenu(this)">
                    <a>
                        <i class="fa-light fa-box"></i>
                        <span class="link_name">Data Barang</span>
                    </a>
                    <i class='fa-regular fa-angle-down arrow'></i>
                </div>
            </div>
            <ul class="sub-menu">
                <li><span class="link_name fw-semibold">Data Barang</span></li>

                <li class="nav-button">
                    <a class="d-flex gap-2 fw-semibold" href="/barang">
                        <span class="fa-regular fa-book"></span>
                        Daftar Barang
                    </a>
                </li>
                
                <li><span class="link_name fw-semibold d-block">Master Data</span></li>
                
                <li class="nav-button">
                    <a class="d-flex gap-2 fw-semibold" href="">
                        <span class="fa-regular fa-hashtag"></span>
                        Daftar Kategori
                    </a>
                </li>
            
                <li class="nav-button">
                    <a class="d-flex gap-2 fw-semibold" href="">
                        <span class="fa-regular fa-ruler"></span>
                        Daftar Satuan
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="">
            <div class="nav-button">
                <div class="iocn-link" onclick="expandMenu(this)">
                    <a>
                        <i class="fa-regular fa-cart-arrow-up"></i>
                        <span class="link_name">Penjualan</span>
                    </a>
                    <i class='fa-regular fa-angle-down arrow'></i>
                </div>
            </div>
            <ul class="sub-menu">
                <li><span class="link_name fw-semibold">Penjualan</span></li>
                <li class="nav-button">
                    <a class="d-flex gap-2 fw-semibold" href="/penjualan">
                        <span class="fa-regular fa-file-invoice"></span>
                        Data Penjualan
                    </a>
                </li>
                <li class="nav-button">
                    <a class="d-flex gap-2 fw-semibold" href="/penjualan/kredit">
                        <span class="fa-regular fa-dollar"></span>
                        Data Kredit Penjualan
                    </a>
                </li>
                <li class="nav-button">
                    <a class="d-flex gap-2 fw-semibold" href="">
                        <span class="fa-regular fa-file-chart-line"></span>
                        Laporan Penjualan
                    </a>
                </li>
                <li><span class="link_name fw-semibold d-block">Master Data</span></li>
                <li class="nav-button">
                    <a class="d-flex gap-2 fw-semibold" href="">
                        <span class="fa-regular fa-square-star"></span>
                        Daftar Member
                    </a>
                </li>
            </ul>
        </li>

        <li class="">
            <div class="nav-button">
                <div class="iocn-link" onclick="expandMenu(this)">
                    <a>
                        <i class="fa-regular fa-cart-flatbed"></i>
                        <span class="link_name">Operasional</span>
                    </a>
                    <i class='fa-regular fa-angle-down arrow'></i>
                </div>
            </div>
            <ul class="sub-menu">
                <li><span class="link_name fw-semibold">Penjualan</span></li>
                <li class="nav-button">
                    <a class="d-flex gap-2 fw-semibold" href="">
                        <span class="fa-regular fa-cart-flatbed"></span>
                        Data Operasional
                    </a>
                </li>
                <li class="nav-button">
                    <a class="d-flex gap-2 fw-semibold" href="/operasional/laporan">
                        <span class="fa-regular fa-file-invoice-dollar"></span>
                        Laporan Operasional
                    </a>
                </li>
            </ul>
        </li>

        <li class="">
            <div class="nav-button">
                <div class="iocn-link" onclick="expandMenu(this)">
                    <a>
                        <i class="fa-regular fa-user-gear"></i>
                        <span class="link_name">Pengguna</span>
                    </a>
                    <i class='fa-regular fa-angle-down arrow'></i>
                </div>
            </div>
            <ul class="sub-menu">
                <li><span class="link_name fw-semibold">Pengguna</span></li>
                <li class="nav-button">
                    <a class="d-flex gap-2 fw-semibold" href="">
                        <span class="fa-solid fa-shield-halved"></span>
                        Data Role
                    </a>
                </li>
                <li class="nav-button">
                    <a class="d-flex gap-2 fw-semibold" href="">
                        <span class="fa-regular fa-user"></span>
                        Data Pengguna
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav-button">
                <a href="">
                    <i class="fa-regular fa-clock-rotate-left"></i>
                    <span class="link_name">Histori Aktifitas</span>
                </a>
            </div>
            <ul class="sub-menu blank">
                <li class="fw-semibold link_name">Histori Aktifitas</li>
            </ul>
        </li>
        <li class="position-absolute w-100 bg-white" style="bottom: 0">
            <div class="bg-white me-2">
                <div class="nav-button">
                    <a href="">
                        <i class="fa-regular fa-gear"></i>
                        <span class="link_name">Pengaturan</span>
                    </a>
                </div>
            </div>
            <ul class="sub-menu blank">
                <li class="fw-semibold link_name">Pengaturan</li>
            </ul>
        </li>

    </ul>
</aside>
