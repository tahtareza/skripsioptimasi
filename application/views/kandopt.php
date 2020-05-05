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
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <a href="<?php echo base_url('C_user/tentukanbmt'); ?>">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        <i class="fa fa-arrow-left-square-o" aria-hidden="true"></i>Tentukan BMT
                                    </button>
                                </a>
                            </ul>
                        </div>
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
                            <h1>Kebutuhan Gizi Itik Petelur yang Harus Dipenuhi</h1>
                        </div>
                        <div class="add-product">

                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">

                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="nama">Jenis</th>
                                        <th data-field="umur">Umur (minggu)</th>
                                        <th data-field="pk">Protein Kasar (%)</th>
                                        <th data-field="em">Energi (kkal EM/kg)</th>
                                        <th data-field="met">Metionin (%)</th>
                                        <th data-field="lis">Lisin (%)</th>
                                        <th data-field="ca">Ca (%)</th>
                                        <th data-field="p">P (%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($uspil as $value) { ?>
                                    <tr>
                                        <td><?php echo $value->nama ?></td>
                                        <td><?php echo $value->umur ?></td>
                                        <td><?php echo $value->pk ?></td>
                                        <td><?php echo $value->em ?></td>
                                        <td><?php echo $value->met ?></td>
                                        <td><?php echo $value->lis ?></td>
                                        <td><?php echo $value->ca ?></td>
                                        <td><?php echo $value->p ?></td>
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
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Kandungan Nutrisi pada Bahan Makan Ternak yang Direkomendasikan</h1>
                        </div>
                        <div class="add-product">

                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">

                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Protein Kasar (%)</th>
                                        <th>Energi (kkal EM/kg)</th>
                                        <th>Metionin (%)</th>
                                        <th>Lisin (%)</th>
                                        <th>Ca (%)</th>
                                        <th>P (%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kandopt as $value) { ?>
                                    <tr>
                                        <td><?php echo $value['id'] ?></td>
                                        <td><?php echo $value['nama'] ?></td>
                                        <td><?php echo $value['pk'] ?></td>
                                        <td><?php echo $value['em'] ?></td>
                                        <td><?php echo $value['met'] ?></td>
                                        <td><?php echo $value['lis'] ?></td>
                                        <td><?php echo $value['ca'] ?></td>
                                        <td><?php echo $value['p'] ?></td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="2">Total</td>
                                        <?php foreach($totkandopt as $valu){ ?>
                                        <td><?php echo $valu ?></td>
                                        <?php } ?>
                                    </tr>
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
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Comparison</h1>
                        </div>
                        <div class="add-product">

                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">

                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th>Zat Makanan</th>
                                        <th>Kebutuhan</th>
                                        <th>Total Kandungan</th>
                                        <th>+/-</th>
                                        <th>Conclusion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sisa=0; $idx=0; $zat=array("Protein Kasar(%)", "Energi(kkal EM/kg)", "Metionin(%)", "Lisin(%)", "Ca(%)", "P(%)"); 
                                    foreach ($comparison as $kekeyi => $valir) { ?>
                                    <tr>
                                        <td><?php echo $zat[$idx] ?></td>
                                        <td><?php echo $kekeyi ?></td>
                                        <td><?php echo $valir ?></td>
                                        <td><?php echo ($valir-$kekeyi) ?></td>
                                        <?php if($valir>$kekeyi){ $sisa=$valir-$kekeyi; $arrsisa[]=$sisa; ?>
                                        <td>
                                            <button type="button" class="btn btn-custon-rounded-three btn-success btn-xs"><i class="fa fa-check edu-checked-pro" aria-hidden="true"></i> Terpenuhi</button>
                                        </td>
                                        <?php }else{ ?>
                                        <td>
                                            <button type="button" class="btn btn-custon-rounded-three btn-danger btn-xs"><i class="fa fa-times edu-danger-error" aria-hidden="true"></i> Belum</button>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <?php $idx++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(min($arrsisa) < 0){ ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <p>Untuk yang belum terpenuhi, lakukan pemilihan bmt dan tambahkan bahan makan ternak dengan kandungan yang <b>lebih dari kebutuhannya</b> ke rekomendasi komposisi yang diberikan. Kebutuhan yang perlu dipenuhi adalah :
                        <?php $idx=0; $zat = array("Protein Kasar(%)", "Energi(kkal EM/kg)", "Metionin(%)", "Lisin(%)", "Ca(%)", "P(%)"); 
                        foreach ($comparison as $kekeyi => $valir){ if($valir<$kekeyi){ ?>
                        <li><?php echo $zat[$idx] ?> : (<?php echo $kekeyi ?>)</li>
                        <?php } $idx++; } ?>
                        <br>Gunakan tabel kandungan nutrisi bahan makan ternak dibawah ini, lalu klik ikon sort pada header kolom zat yang belum terpenuhi untuk mengurutkan nilai kandungannya.</p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- Static Table End -->
    <?php if(min($arrsisa) < 0){ ?>
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
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true"  data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Protein Kasar (%)</th>
                                        <th>Energi (kkal EM/kg)</th>
                                        <th>Metionin (%)</th>
                                        <th>Lisin (%)</th>
                                        <th>Ca (%)</th>
                                        <th>P (%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($bmt as $value) { ?>
                                    <tr>
                                        <td><?php echo $value->id ?></td>
                                        <td><?php echo $value->nama ?></td>
                                        <td><?php echo $value->pk ?></td>
                                        <td><?php echo $value->em ?></td>
                                        <td><?php echo $value->met ?></td>
                                        <td><?php echo $value->lis ?></td>
                                        <td><?php echo $value->ca ?></td>
                                        <td><?php echo $value->p ?></td>
                                    </tr>
                                    <?php } ?>
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
<?php } ?>
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