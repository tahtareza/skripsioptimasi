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
                        <li class="active"><a href="#description">Add Data</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                <?php echo form_open_multipart("Kebutuhan/add"); ?>
                                                <?php echo validation_errors(); ?>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <?php $plus=1; foreach ($idmax as $value) { ?>
                                                                <input name="id" type="text" class="form-control" placeholder="Id" value="<?php echo $value['id']+$plus ?>" readonly>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="nama" type="text" class="form-control" placeholder="Nama">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="umur" type="text" class="form-control" placeholder="Umur">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="pk" type="number" step="0.01"  min="0" class="form-control" placeholder="PK">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="em" type="number" step="0.01"  min="0" class="form-control" placeholder="EM">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="met" type="number" step="0.01"  min="0" class="form-control" placeholder="Met">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="lis" type="number" step="0.01"  min="0" class="form-control" placeholder="Lis">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="ca" type="number" step="0.01"  min="0" class="form-control" placeholder="Ca">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="p" type="number" step="0.01"  min="0" class="form-control" placeholder="P">
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