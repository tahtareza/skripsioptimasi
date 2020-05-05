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
                                                <?php echo form_open_multipart("Kebutuhan/update"); ?>
                                                <?php echo validation_errors(); ?>
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <label>ID</label>
                                                        <div class="form-group">
                                                            <input type="hidden" name="id_old" value="<?php echo $keb['id'] ?>">
                                                            <input name="id" type="text" class="form-control" placeholder="Id" value="<?php echo $keb['id'] ?>">
                                                        </div>
                                                        <label>Nama</label>
                                                        <div class="form-group">
                                                            <input name="nama" type="text" class="form-control" placeholder="Nama" value="<?php echo $keb['nama'] ?>">
                                                        </div>
                                                        <label>Umur</label>
                                                        <div class="form-group">
                                                            <input name="umur" type="text" class="form-control" placeholder="Umur" value="<?php echo $keb['umur'] ?>">
                                                        </div>
                                                        <label>PK</label>
                                                        <div class="form-group">
                                                            <input name="pk" type="text" class="form-control" placeholder="PK" value="<?php echo $keb['pk'] ?>">
                                                        </div>
                                                        <label>EM</label>
                                                        <div class="form-group">
                                                            <input name="em" type="text" class="form-control" placeholder="EM" value="<?php echo $keb['em'] ?>">
                                                        </div>
                                                        <label>Met</label>
                                                        <div class="form-group">
                                                            <input name="met" type="text" class="form-control" placeholder="Met" value="<?php echo $keb['met'] ?>">
                                                        </div>
                                                        <label>Lis</label>
                                                        <div class="form-group">
                                                            <input name="lis" type="text" class="form-control" placeholder="Lis" value="<?php echo $keb['lis'] ?>">
                                                        </div>
                                                        <label>Ca</label>
                                                        <div class="form-group">
                                                            <input name="ca" type="text" class="form-control" placeholder="Ca" value="<?php echo $keb['ca'] ?>">
                                                        </div>
                                                        <label>P</label>
                                                        <div class="form-group">
                                                            <input name="p" type="text" class="form-control" placeholder="P" value="<?php echo $keb['p'] ?>">
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