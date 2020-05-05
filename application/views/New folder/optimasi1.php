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
                        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <echo $this->session->userdata('uname'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Detail Rapot</span>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">BMT yang Dipilih</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group res-mg-t-15">
                                                        <label>Pakan yang dipilih</label>
                                                        <!-- <input name="bmtterpilih" type="text" class="form-control"> -->
                                                        <textarea name="bmtterpilih" disabled>
                                                            <?php 
                                                            $no=1; 
                                                            echo "\n";
                                                            foreach ($pilihan as $value) { 
                                                                echo $no.". ".$value->nama."\n"; 
                                                                $no++; 
                                                            }
                                                            ?>
                                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Jumlah pakan yang dipilih</label>
                                                        <input name="jmladaterpilih" type="text" class="form-control" value="<?php echo $jmlada ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jumlah komposisi bahan yang diinginkan</label>
                                                        <input name="jmliinginterpilih" type="text" class="form-control" value="<?php echo $jmlingin ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">

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
</div>
<!-- Static Table Start -->

<!-- Static Table End -->
<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2019. All rights reserved. by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php $this->load->view('main/footer'); ?>