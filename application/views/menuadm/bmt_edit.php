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
                        <li class="active"><a href="#description">Update Data</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <?php echo form_open_multipart("Bmt/update"); ?>
                                            <?php echo validation_errors(); ?>
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>ID</label>
                                                            <input type="hidden" name="id_old" value="<?php echo $bmt['id'] ?>">
                                                            <input name="id" type="text" class="form-control" placeholder="Id" value="<?php echo $bmt['id'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input name="nama" type="text" class="form-control" placeholder="Nama" value="<?php echo $bmt['nama'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>PK</label>
                                                            <input name="pk" type="text" class="form-control" placeholder="PK" value="<?php echo $bmt['pk'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>EM</label>
                                                            <input name="em" type="text" class="form-control" placeholder="EM" value="<?php echo $bmt['em'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Met</label>
                                                            <input name="met" type="text" class="form-control" placeholder="Met" value="<?php echo $bmt['met'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Lis</label>
                                                            <input name="lis" type="text" class="form-control" placeholder="Lis" value="<?php echo $bmt['lis'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Ca</label>
                                                            <input name="ca" type="text" class="form-control" placeholder="Ca" value="<?php echo $bmt['ca'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>P</label>
                                                            <input name="p" type="text" class="form-control" placeholder="P" value="<?php echo $bmt['p'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Harga</label>
                                                            <input name="harga" type="text" class="form-control" placeholder="Umur" value="<?php echo $bmt['harga'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jenis BMT</label>
                                                            <input name="id_jenis" type="text" class="form-control" placeholder="Umur" value="<?php echo $bmt['id_jenis'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">

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
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view('main/footer'); ?>