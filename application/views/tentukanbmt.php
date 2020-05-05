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
                                <!-- <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <!-- <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Advanced Element</span>
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
<!-- Advanced Form Start -->
<div class="advanced-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                    <div class="sparkline10-hd">
                        <div class="main-sparkline10-hd">
                            <h1>Tentukan Bahan Makan Ternak</h1>
                        </div>
                    </div>
                    <div class="sparkline10-graph">
                        <div class="input-knob-dial-wrap">
                            <?php echo form_open_multipart("Optimasi/optimasi"); ?>
                            <?php echo validation_errors(); ?>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="chosen-select-single mg-b-20">
                                                <label>Tentukan usia itik</label>
                                                <select data-placeholder="Pilih usia itik..." class="chosen-select" tabindex="-1" name="usia">
                                                    <?php 
                                                    foreach ($keb as $value) { ?>
                                                    <option value="<?php echo $value->id ?>"><?php echo $value->nama ?> (<?php echo $value->umur ?> minggu)</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="chosen-select-single">
                                            <label>Masukkan pakan yang tersedia</label>
                                            <select data-placeholder="Pilih pakan..." class="chosen-select" multiple="" tabindex="-1" name="pilihbmt[]">
                                                <?php 
                                                foreach ($bmt as $value) { ?>
                                                <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="touchspin-inner">
                                            <label>Tentukan jumlah komposisi bahan yang diinginkan</label>
                                            <input class="touchspin3" type="text" value="" name="jmlingin">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="touchspin-inner">
                                            <label>Probabilitas crossover</label>
                                            <input class="touchspin2" type="text" value="" name="pcr">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="touchspin-inner">
                                            <label>Probabilitas mutasi</label>
                                            <input class="touchspin2" type="text" value="" name="pmt">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                </div>
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
<!-- Advanced Form End-->
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