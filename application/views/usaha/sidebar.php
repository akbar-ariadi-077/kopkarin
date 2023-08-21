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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevrons-left">
                            <polyline points="11 17 6 12 11 7"></polyline>
                            <polyline points="18 17 13 12 18 7"></polyline>
                        </svg>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled menu-categories" id="accordionExample">

                <li class="menu<?= ($this->uri->segment(2) == '') ? ' active' : ''; ?>">
                    <a href="<?= base_url(); ?>usaha" aria-expanded="<?= ($this->uri->segment(2) == '') ? 'true' : 'false'; ?>" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-columns">
                                <path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18">
                                </path>
                            </svg>
                            <span>Dashboard</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="<?= base_url(); ?>usaha/cek_transaksi" aria-expanded="<?= ($this->uri->segment(2) == 'cek_transaksi') ? 'true' : 'false'; ?>" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-inbox">
                                <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                </path>
                            </svg>
                            <span>Cek Transaksi</span>
                        </div>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
    <!--  END SIDEBAR  -->