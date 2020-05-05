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
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="basic-login-inner">
                                                        <h3>BMT yang Dipilih</h3>
                                                        <p>Apabila ingin merubah silahkan klik tombol kembali (back) untuk menginputkan ulang</p>
                                                        <form action="#">
                                                            <div class="form-group-inner">
                                                                <label>Usia itik yang dipilih</label>
                                                                <?php foreach ($umur as $value) { ?>
                                                                <input name="umur" type="text" class="form-control" value="<?php echo $value->nama ?>" readonly>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="form-group res-mg-t-15">
                                                                <label>Pakan yang dipilih</label>
                                                                <textarea name="bmtterpilih" disabled><?php 
                                                                $no=1; 
                                                                foreach ($pilihan as $value) { 
                                                                    echo $value['id'].". ".$value['nama']."\n"; 
                                                                    $no++; 
                                                                } ?></textarea>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <label>Jumlah komposisi bahan yang diinginkan</label>
                                                                <input name="jmliinginterpilih" type="text" class="form-control" value="<?php echo $jmlingin ?>" readonly>
                                                            </div>
                                                            <div class="login-btn-inner">

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                                                                <input name="jmlgnrs" type="text" class="form-control" value="<?php echo $jmlgnrs ?>" readonly>
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
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="basic-login-inner">
                                                        <h3>Hasil Optimasi</h3>
                                                        <?php echo form_open_multipart("History/add"); ?>
                                                        <?php echo validation_errors(); ?>
                                                        <form action="#">
                                                            <div class="form-group res-mg-t-15">
                                                                <label>Rekomendasi Pakan</label>
                                                                <textarea name="bmtrekomen" disabled><?php 
                                                                $prefix=" ";foreach ($hasil as $value) { 
                                                                    echo $prefix.$value['nama']; 
                                                                $prefix=", ";}
                                                                ?></textarea>
                                                                <?php foreach ($hasil as $value) { ?>
                                                                <input name="id_rekom[]" type="hidden" class="form-control" value="<?php echo $value['id'] ?>">
                                                                <?php } ?>
                                                            </div>
                                                            <?php foreach ($umur as $value) { ?>
                                                            <input name="id_usia" type="hidden" class="form-control" value="<?php echo $value->id ?>">
                                                            <?php } foreach ($pilihan as $value) { ?>
                                                            <input name="id_bmt[]" type="hidden" class="form-control" value="<?php echo $value['id'] ?>">
                                                            <?php } ?>
                                                            <input name="jml_komp" type="hidden" class="form-control" value="<?php echo $jmlingin ?>">
                                                            <input name="popsize" type="hidden" class="form-control" value="<?php echo $jmlkrm ?>">
                                                            <input name="generasi" type="hidden" class="form-control" value="<?php echo $jmlgnrs ?>">
                                                            <input name="cr" type="hidden" class="form-control" value="<?php echo $pcr ?>">
                                                            <input name="mr" type="hidden" class="form-control" value="<?php echo $pmt ?>">
                                                            <input name="fitness" type="hidden" class="form-control" value="<?php echo $fitnesstertinggi ?>">
                                                            <?php $plus=1; foreach ($idmaxhistori as $value) { ?>
                                                            <input name="id" type="hidden" class="form-control" value="<?php echo $value['id']+$plus ?>">
                                                            <?php } ?>
                                                            <?php $plus=1; foreach ($idmaxhistoribmt as $value) { ?>
                                                            <input name="iddetilbmt" type="hidden" class="form-control" value="<?php echo $value['id']+$plus ?>">
                                                            <?php } ?>
                                                            <?php $plus=1; foreach ($idmaxhistorirekom as $value) { ?>
                                                            <input name="iddetilrekom" type="hidden" class="form-control" value="<?php echo $value['id']+$plus ?>">
                                                            <?php } ?>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light pull-right">Save to History</button>
                                                            </div>
                                                        </form>
                                                        <?php echo form_close(); ?>
                                                    </div>
                                                    <div class="basic-login-inner">
                                                        <?php echo form_open_multipart("Kandopt"); ?>
                                                        <?php echo validation_errors(); ?>
                                                        <form action="#">
                                                        	<?php foreach ($hasil as $value) { ?>
                                                            <input name="bmtopt[]" type="hidden" class="form-control" value="<?php echo $value['id'] ?>">
                                                            <?php }  foreach ($umur as $value) { ?>
                                                            <input name="uspil" type="hidden" class="form-control" value="<?php echo $value->id ?>">
                                                            <?php } ?>
                                                        	<div class="form-group">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light pull-left">Lihat Kandungan</button>
                                                            </div>
                                                        </form>
                                                        <?php echo form_close(); ?>
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
                                    <h1>Seluruh Kromosom dari Setiap Generasi</h1>
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
                                            <?php $no=1; foreach ($populs as $key => $value) { foreach ($value as $ke => $val) { if ($no==count($value)+1){$no=1;}?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $ke ?></td>
                                                <td><?php echo $val ?></td>
                                            </tr>
                                            <?php $no++; } } ?>
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
        <!-- tabs start-->
        <div class="admintab-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="admintab-wrap edu-tab1 mg-t-30">
                            <h3>Proses Reproduksi</h3>
                            <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                                <?php foreach ($populsfortab as $key => $value) { ?>
                                <li class="<?php if($key==0){ echo "active"; } ?>">
                                    <a data-toggle="tab" href="<?php echo "#Tab".$key; ?>">
                                        <span class="edu-icon edu-analytics tab-custon-ic"></span>
                                        <?php echo "Populasi ".$key; ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                            <div class="tab-content">
                                <?php foreach ($populsfortab as $key => $value) { ?>
                                <div id="<?php echo "Tab".$key; ?>" class="tab-pane in active animated flipInX custon-tab-style1">
                                    <?php foreach ($value as $ke => $val) { ?>
                                    <p><?php echo $ke; ?></p>
                                    <?php foreach ($val as $ky => $vl) { ?>
                                    <p><?php echo $ky; ?>&emsp;:&ensp;<?php echo $vl; ?></p>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="admintab-wrap edu-tab1 mg-t-30">
                            <h3>Kromosom Setiap Populasi</h3>
                            <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                                <?php foreach ($populs as $key => $value) { ?>
                                <li class="<?php if($key==0){ echo "active"; } ?>">
                                    <a data-toggle="tab" href="<?php echo "#Tabkrm".$key; ?>">
                                        <span class="edu-icon edu-analytics tab-custon-ic"></span>
                                        <?php echo "Populasi ".$key; ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                            <div class="tab-content">
                                <?php foreach ($populs as $key => $value) { ?>
                                <div id="<?php echo "Tabkrm".$key; ?>" class="tab-pane in active animated flipInX custon-tab-style1">
                                    <?php foreach ($value as $ke => $val) { ?>
                                    <p><?php echo $ke; ?>&emsp;:&ensp;<?php echo $val; ?></p>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tabs End-->
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