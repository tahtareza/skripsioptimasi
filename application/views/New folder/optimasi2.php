<?php $this->load->view('main/header'); ?>
<!-- Start Left menu area -->
<?php $this->load->view('main/navbar'); ?>
<!-- Mobile Menu end -->
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <a href="<?php echo base_url('C_user/tentukanbmt'); ?>">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        <i class="fa fa-arrow-left-square-o" aria-hidden="true"></i>Back
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <!-- <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Basic Element</span>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline8-list mt-b-30">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <!-- <h1>Basic Login Form</h1> -->
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="basic-login-inner">
                                                        <h3>BMT yang Dipilih</h3>
                                                        <p>(Apabila ingin merubah silahkan klik tombol kembali untuk menginputkan ulang)</p>
                                                        <form action="#">
                                                            <div class="form-group-inner">
                                                                <label>Usia itik yang dipilih</label>
                                                                <?php foreach ($umur as $value) { ?>
                                                                <input name="umur" type="text" class="form-control" value="<?php echo $value->nama ?>" readonly>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="form-group res-mg-t-15">
                                                                <label>Pakan yang dipilih</label>
                                                                <textarea name="bmtterpilih" disabled>
                                                                    <?php 
                                                                    $no=1; 
                                                                    echo "\n";
                                                                    foreach ($pilihan as $value) { 
                                                                        echo $no.". ".$value['nama']."\n"; 
                                                                        $no++; 
                                                                    }
                                                                    ?>
                                                                </textarea>
                                                            </div>
                                                            <?php if($jmlingin < 2){ ?>
                                                            <div class="form-group-inner input-with-error">
                                                                <label>Jumlah komposisi bahan yang diinginkan (disarankan lebih dari 1)</label>
                                                                <div class="form-select-list">
                                                                    <input name="jmlinginterpilih" type="text" class="form-control" value="<?php echo $jmlingin ?>" readonly>
                                                                </div>
                                                            </div>
                                                            <?php }else{ ?>
                                                            <div class="form-group-inner">
                                                                <label>Jumlah komposisi bahan yang diinginkan</label>
                                                                <input name="jmliinginterpilih" type="text" class="form-control" value="<?php echo $jmlingin ?>" readonly>
                                                            </div>
                                                            <?php } ?>
                                                            <div class="login-btn-inner">

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="basic-login-inner">
                                                        <h3>Parameter Algoritma Genetika</h3>
                                                        <form action="#">
                                                            <div class="form-group-inner">
                                                                <label>Jumlah Gen</label>
                                                                <input name="jmlgen" type="text" class="form-control" value="<?php echo $jmlingin ?>" readonly>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <label>Ukuran Populasi</label>
                                                                <input name="jmlkrm" type="text" class="form-control" value="<?php echo $jmlkrm ?>" readonly>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <label>Jumlah Generasi</label>
                                                                <input name="jmlgenrs" type="text" class="form-control" value="<?php echo $jmlkrm ?>" readonly>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <label>Probabilitas Crossover</label>
                                                                <input name="pcr" type="text" class="form-control" value="<?php echo $pcr ?>" readonly>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <label>Probabilitas Mutasi</label>
                                                                <input name="pmt" type="text" class="form-control" value="<?php echo $pmt ?>" readonly>
                                                            </div>
                                                            <div class="login-btn-inner">

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form End-->
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Hasil Optimasi</h1>
                                </div>
                                <div class="add-product">
                                    <!-- <a href="<echo base_url('C_admin/addbmt'); ?>">Add Data</a> -->
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true"  data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kromosom</th>
                                                <th>Fitness</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach ($krm as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $value ?></td>
                                                <td><?php echo $fitness[$key] ?></td>
                                            </tr>
                                            <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('main/footer'); ?>