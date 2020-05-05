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
                            <h1>Kandungan Nutrisi pada Bahan Makan Ternak</h1>
                        </div>
                        <div class="add-product">
                            <?php if($this->session->userdata('level') == "0"){ ?>
                            <a href="<?php echo base_url('C_admin/addbmt'); ?>">Add Data</a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                    <!-- <select class="form-control dt-tb">
                                       <option value="">Export Basic</option>
                                       <option value="all">Export All</option>
                                       <option value="selected">Export Selected</option>
                                   </select> -->
                               </div>
                               <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true"  data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                               data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                               <thead>
                                <tr>
                                    <!-- <th data-field="state" data-checkbox="true"></th> -->
                                    <th data-field="id" data-editable="true">ID</th>
                                    <th data-field="nama" data-editable="true">Nama</th>
                                    <th data-field="pk" data-editable="true">Protein Kasar (%)</th>
                                    <th data-field="em" data-editable="true">Energi (kkal EM/kg)</th>
                                    <th data-field="met" data-editable="true">Metionin (%)</th>
                                    <th data-field="lis" data-editable="true">Lisin (%)</th>
                                    <th data-field="ca" data-editable="true">Ca (%)</th>
                                    <th data-field="p" data-editable="true">P (%)</th>
                                    <?php if($this->session->userdata('level') == "0"){ ?>
                                    <th>Aksi</th>
                                    <?php } ?>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=1;

                                foreach ($bmt as $value) { ?>
                                <tr>
                                    <!-- <td></td> -->
                                    <td><?php echo $value->id ?></td>
                                    <td><?php echo $value->nama ?></td>
                                    <td><?php echo $value->pk ?></td>
                                    <td><?php echo $value->em ?></td>
                                    <td><?php echo $value->met ?></td>
                                    <td><?php echo $value->lis ?></td>
                                    <td><?php echo $value->ca ?></td>
                                    <td><?php echo $value->p ?></td>
                                    <?php if($this->session->userdata('level') == "0"){ ?>
                                    <td class="datatable-ct">
                                        <a href="<?php echo base_url('C_admin/editbmt/'.$value->id) ?>"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                        <a href="<?php echo base_url('C_admin/deletebmt/'.$value->id) ?>" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                    </td>
                                    <?php } ?>
                                    
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