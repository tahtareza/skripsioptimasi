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
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Hasil Optimasi</h1>
                            <p>BMT yang direkomendasikan memenuhi standar nutrisi</p>
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
                                    <th data-field="" data-editable="true">Kromosom</th>
                                    <th data-field="fitness" data-editable="true">Fitness</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=1;

                                foreach ($fitness as $value) { ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $value->fitness ?></td>
                                    
                                </tr>
                                <?php
                                $no++; 
                            } ?>
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
                    <p>Copyright © 2019. All rights reserved. by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php $this->load->view('main/footer'); ?>