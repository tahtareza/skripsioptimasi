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
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Riwayat Optimasi</h1>
                        </div>
                        <div class="add-product">
                            <?php if($this->session->userdata('level') != "0"){ ?>
                            <a href="<?php echo base_url('C_user/tentukanbmt'); ?>">Tentukan BMT</a>
                            <?php } ?>
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
                                    <th>ID</th>
                                    <th>Usia</th>
                                    <th>Pakan yg Dipilih</th>
                                    <th>Jumlah Komposisi</th>
                                    <th>Rekomendasi Pakan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=1;

                                foreach ($history as $value) { ?>
                                <tr>
                                    <td><?php echo $value['id'] ?></td>
                                    <td><?php echo $value['nama_usia'] ?></td>
                                    <td><?php echo $value['id_bmt'] ?></td>
                                    <td><?php echo $value['jml_komp'] ?></td>
                                    <td><?php echo $value['id_rekom'] ?></td>
                                    <td class="datatable-ct">
                                        <a href="<?php echo base_url('History/lihatkandungan/'.$value['id'].'/'.$value['id_usia']) ?>"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                        <?php if($this->session->userdata('level') == "0"){ ?>
                                            <a href="<?php echo base_url('C_admin/deletehistory/'.$value['id']) ?>" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                        <?php } ?>
                                    </td>
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