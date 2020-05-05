<body>
<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="<?php echo base_url('assets/img/logo/'); ?>logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="<?php echo base_url('assets/img/logo/'); ?>logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <!-- <li class="active"> -->
                        <li>
                            <a title="Landing Page" href="<?php if($this->session->userdata('level') == "0") { echo base_url('C_admin'); } else { echo base_url('C_user'); } ?>" aria-expanded="false"><span class="educate-icon educate-home icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                        </li>
                        <?php if($this->session->userdata('level') == "0"){ ?>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">
                                <span class="educate-icon educate-course icon-wrap"></span> 
                                <span class="mini-click-non">Data Master</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Kebutuhan Nutrisi Itik" href="<?php echo base_url('C_admin/kebutuhan'); ?>"><span class="mini-sub-pro">Kebutuhan Nutrisi Itik</span></a></li>
                                <li><a title="Kandungan BMT" href="<?php echo base_url('C_admin/bmt'); ?>"><span class="mini-sub-pro">Kandungan BMT</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a title="History Optimasi" href="<?php echo base_url('C_admin/history'); ?>" aria-expanded="false">
                                <span class="educate-icon educate-library icon-wrap" aria-hidden="true"></span> 
                                <span class="mini-click-non">History Optimasi</span>
                            </a>
                        </li>
                        <li>
                            <a title="Report Pengujian" href="<?php echo base_url('C_admin/report'); ?>" aria-expanded="false">
                                <span class="educate-icon educate-charts icon-wrap" aria-hidden="true"></span> 
                                <span class="mini-click-non">Report Pengujian</span>
                            </a>
                        </li>
                        <?php }else{ ?>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">
                                <span class="educate-icon educate-course icon-wrap"></span> 
                                <span class="mini-click-non">Data Master</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Kebutuhan Nutrisi Itik" href="<?php echo base_url('C_user/kebutuhan'); ?>"><span class="mini-sub-pro">Kebutuhan Nutrisi Itik</span></a></li>
                                <li><a title="Kandungan BMT" href="<?php echo base_url('C_user/bmt'); ?>"><span class="mini-sub-pro">Kandungan BMT</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a title="Tentukan BMT" href="<?php echo base_url('C_user/tentukanbmt'); ?>" aria-expanded="false">
                                <span class="educate-icon educate-professor icon-wrap" aria-hidden="true"></span> 
                                <span class="mini-click-non">Tentukan BMT</span>
                            </a>
                        </li>
                        <li>
                            <a title="History Optimasi" href="<?php echo base_url('C_user/history'); ?>" aria-expanded="false">
                                <span class="educate-icon educate-library icon-wrap" aria-hidden="true"></span> 
                                <span class="mini-click-non">History Optimasi</span>
                            </a>
                        </li>
                        <li>
                            <a title="Report Pengujian" href="<?php echo base_url('C_user/report'); ?>" aria-expanded="false">
                                <span class="educate-icon educate-charts icon-wrap" aria-hidden="true"></span> 
                                <span class="mini-click-non">Report Pengujian</span>
                            </a>
                        </li>
                        <?php } ?>

                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="<?php echo base_url('assets/img/logo/'); ?>logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <!-- <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                </li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="#" class="dropdown-item">Documentation</a>
                                                        <a href="#" class="dropdown-item">Expert Backend</a>
                                                        <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                        <a href="#" class="dropdown-item">Contact Support</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                </li>
                                            </ul> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <?php if($this->session->userdata('level') == "0"){ ?>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<!-- <img src="<echo base_url('assets/img/product/'); ?>pro4.jpg" alt="" /> -->
															<span class="admin-name"><?php echo $this->session->userdata('uname'); ?></span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url(); ?>Login/logout"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a href="<?php if($this->session->userdata('level') == "0") { echo base_url('C_admin'); } else { echo base_url('C_user'); } ?>"></span>Dashboard</a></li>
                                        <?php if($this->session->userdata('level') == "0"){ ?>
                                        <li>
                                            <a data-toggle="collapse" data-target="#democrou" href="#">Data Master 
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span>
                                            </a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url('C_admin/kebutuhan'); ?>">Kebutuhan Nutrisi Itik</a></li>
                                                <li><a href="<?php echo base_url('C_admin/bmt'); ?>">Kandungan BMT</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url('C_admin/history'); ?>">History Optimasi</a></li>
                                        <li><a href="<?php echo base_url('C_admin/report'); ?>">Report Pengujian</a></li>
                                        <?php }else{ ?>
                                        <li>
                                            <a data-toggle="collapse" data-target="#democrou" href="#">Data Master 
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span>
                                            </a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url('C_user/kebutuhan'); ?>">Kebutuhan Nutrisi Itik</a></li>
                                                <li><a href="<?php echo base_url('C_user/bmt'); ?>">Kandungan BMT</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url('C_user/tentukanbmt'); ?>">Tentukan BMT</a></li>
                                        <li><a href="<?php echo base_url('C_user/history'); ?>">History Optimasi</a></li>
                                        <li><a href="<?php echo base_url('C_user/report'); ?>">Report Pengujian</a></li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>