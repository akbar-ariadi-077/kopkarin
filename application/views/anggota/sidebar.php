<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container " id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">
        <nav id="sidebar">
            <div class="navbar-nav theme-brand flex-row  text-center">
                <div class="nav-logo">
                    <div class="nav-item theme-logo">
                        <a href="index.html">
                            <img src="<?= base_url(); ?>assets/src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="nav-item sidebar-toggle">
                    <div class="btn-toggle sidebarCollapse">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevrons-left">
                            <polyline points="11 17 6 12 11 7"></polyline>
                            <polyline points="18 17 13 12 18 7"></polyline>
                        </svg>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled menu-categories" id="accordionExample">

                <li class="menu<?= ($this->uri->segment(2) == '') ? ' active' : ''; ?>">
                    <a href="<?= base_url(); ?>anggota"
                        aria-expanded="<?= ($this->uri->segment(2) == '') ? 'true' : 'false'; ?>"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-columns">
                                <path
                                    d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18">
                                </path>
                            </svg>
                            <span>Dashboard</span>
                        </div>
                    </a>
                </li>

                <li
                    class="menu<?= ($this->uri->segment(2) == 'tabungan' ? ' active' : ($this->uri->segment(2) == 'tabungan_tambah' ? ' active' : ($this->uri->segment(2) == 'tabungan_ambil' ? ' active' : ''))); ?>">
                    <a href="#home" data-bs-toggle="collapse"
                        aria-expanded="<?= ($this->uri->segment(2) == 'tabungan' ? 'true' : ($this->uri->segment(2) == 'tabungan_tambah' ? 'true' : ($this->uri->segment(2) == 'tabungan_ambil' ? 'true' : 'false'))); ?>"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                            <span>Tabungan</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="home" data-bs-parent="#accordionExample">
                        <li>
                            <a href="<?= base_url(); ?>anggota/tabungan#data"> Data Tabungan </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>anggota/tabungan_tambah#data"> Tambah Tabungan </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>anggota/tabungan_ambil#data"> Ambil Tabungan </a>
                        </li>
                    </ul>
                </li>

                <li
                    class="menu<?= ($this->uri->segment(2) == 'pinjaman' ? ' active' : (($this->uri->segment(2) == 'pengajuan') && ($this->uri->segment(3) == '') ? ' active' : ($this->uri->segment(2) == 'pengajuan_cek' ? ' active' : ''))); ?>">
                    <a href="#home" data-bs-toggle="collapse"
                        aria-expanded="<?= ($this->uri->segment(2) == 'pinjaman') ? 'true' : 'false'; ?>"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-monitor">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                <line x1="8" y1="21" x2="16" y2="21"></line>
                                <line x1="12" y1="17" x2="12" y2="21"></line>
                            </svg>
                            <span>Pinjaman</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="home" data-bs-parent="#accordionExample">
                        <li>
                            <a href="<?= base_url(); ?>anggota/pinjaman#data"> Data Pinjaman </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>anggota/pengajuan#data"> Pengajuan Pinjaman </a>
                        </li>
                    </ul>
                </li>

                <li
                    class="menu<?= ($this->uri->segment(2) == 'barang' ? ' active' : ($this->uri->segment(3) == 'barang' ? ' active' : ($this->uri->segment(2) == 'pengajuan_cek_barang' ? ' active' : ''))); ?>">
                    <a href="#home" data-bs-toggle="collapse"
                        aria-expanded="<?= ($this->uri->segment(2) == 'barang') ? 'true' : 'false'; ?>"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-box">
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                            <span>Barang</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="home" data-bs-parent="#accordionExample">
                        <li>
                            <a href="<?= base_url(); ?>anggota/barang#data"> Pinjaman Barang </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>anggota/pengajuan/barang#data"> Pengajuan Barang </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
    <!--  END SIDEBAR  -->