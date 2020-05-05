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
                        <center><h2>Hasil Pengujian</h2></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Charts Start-->
<div class="charts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="charts-single-pro">
                    <div class="alert-title">
                        <h2>Grafik Hasil Pengujian</h2>
                        <p>Uji Coba Kombinasi Crossover Rate dan Mutation Rate</p>
                    </div>
                    <div id="axis-chart">
                        <canvas id="linechartmultiaxise"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Total Percobaan</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash"></div>
                        </li>
                        <li class="text-right sp-cn-r"><span class="counter text-success"><?php echo $totid[0]['totid'] ?></span></li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Jumlah Cr:Mr</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash2"></div>
                        </li>
                        <li class="text-right graph-two-ctn"><span class="counter text-purple"><?php echo $totcr[0]['totcr'] ?></span></li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Cr:Mr Terbaik</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash3"></div>
                        </li>
                        <li class="text-right graph-three-ctn"><span><?php echo $thebest[0]['cr'].":".$thebest[0]['mr'] ?></span></li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs table-dis-n-pro tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Rata-rata Fitness Tertinggi</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash4"></div>
                        </li>
                        <li class="text-right graph-four-ctn"><span><?php echo round($thebest[0]['avgfit'], 5) ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Charts End-->
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Hasil Uji Coba Kombinasi Cr dan Mr</h1>
                        </div>
                        <div class="add-product">

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
                                    <th>No</th>
                                    <th>Cr</th>
                                    <th>Mr</th>
                                    <?php for ($j=1; $j <= $countid[0]['jmlcob']; $j++) { ?>
                                    <th>Percobaan ke-<?php echo $j ?></th>
                                    <?php } ?>
                                    <th>Rata-rata Fitness</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=1; $idx=0;

                                foreach ($report as $value) { ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $value->cr ?></td>
                                    <td><?php echo $value->mr ?></td>
                                    <?php for ($j=1; $j <= $countid[0]['jmlcob']; $j++) { ?>
                                    <td><?php echo array_key_exists($idx, $rapot) ? $rapot[$idx]['fitness'] : ""; ?></td>
                                    <?php $idx++; } ?>
                                    <td><?php echo round($value->ratafitness, 5) ?></td>
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

<!-- Charts Start-->
<div class="charts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="charts-single-pro responsive-mg-b-30">
                    <div class="alert-title">
                        <h2>Grafik Hasil Pengujian</h2>
                        <p>Uji Coba Jumlah Generasi</p>
                    </div>
                    <div id="basic-chart">
                        <canvas id="basiclinecharte"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <div class="social-media-edu">
                        <i class="fa fa-flask"></i>
                        <div class="social-edu-ctn">
                            <p>Total Percobaan</p>
                            <h3><?php echo $totid[0]['totid'] ?></h3>
                        </div>
                    </div>
                </div>
                <div class="mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <div class="social-media-edu twitter-cl res-mg-t-30 table-mg-t-pro-n">
                        <i class="fa fa-clock-o"></i>
                        <div class="social-edu-ctn">
                            <p>Total Generasi</p>
                            <h3><?php echo $totgen[0]['jmlgen'] ?></h3>
                        </div>
                    </div>
                </div>
                <div class="mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <div class="social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                        <i class="fa fa-check-circle"></i>
                        <div class="social-edu-ctn">
                            <p>Generasi Terbaik</p>
                            <h3><?php echo $bestgen[0]['generasi'] ?></h3>
                        </div>
                    </div>
                </div>
                <div class="mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <div class="social-media-edu youtube-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                        <i class="fa fa-line-chart"></i>
                        <div class="social-edu-ctn">
                            <p>Rata-rata Fitness Tertinggi</p>
                            <h3><?php echo round($bestgen[0]['avgfitnese'], 5) ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Charts End-->
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Hasil Uji Coba Jumlah Generasi</h1>
                        </div>
                        <div class="add-product">

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
                                    <th>Jumlah Generasi</th>
                                    <th>Rata-rata Fitness</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($reportgen as $value) { ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $value->generasi ?></td>
                                    <td><?php echo round($value->ratafitness, 5) ?></td>
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

<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- jquery
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/jquery-price-slider.js"></script>
<!-- meanmenu JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/owl.carousel.min.js"></script>
<!-- sticky JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/jquery.scrollUp.min.js"></script>
<!-- counterup JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/metisMenu/metisMenu-active.js"></script>
<!-- morrisjs JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/morrisjs/raphael-min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/morrisjs/morris.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/morrisjs/morris-active.js"></script>
<!-- morrisjs JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/sparkline/sparkline-active.js"></script>
<!-- calendar JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/calendar/moment.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/calendar/fullcalendar-active.js"></script>
<!-- data table JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/data-table/bootstrap-table-export.js"></script>
<!--  editable JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/editable/jquery.mockjax.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/editable/mock-active.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/editable/select2.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/editable/moment.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/editable/bootstrap-editable.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/editable/xediable-active.js"></script>
<!-- Chart JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/chart/jquery.peity.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/peity/peity-active.js"></script>
<!-- maskedinput JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/masking-active.js"></script>
<!-- datepicker JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/datepicker/jquery-ui.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/datepicker/datepicker-active.js"></script>
<!-- form validate JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/form-validation/jquery.form.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/form-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/form-validation/form-active.js"></script>
<!-- dropzone JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/dropzone/dropzone.js"></script>
<!-- touchspin JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/touchspin/touchspin-active.js"></script>
<!-- colorpicker JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/colorpicker/jquery.spectrum.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/colorpicker/color-picker-active.js"></script>
<!-- datapicker JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/datapicker/datepicker-active.js"></script>
<!-- input-mask JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/input-mask/jasny-bootstrap.min.js"></script>
<!-- chosen JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/chosen/chosen.jquery.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/chosen/chosen-active.js"></script>
<!-- select2 JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/select2/select2.full.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/select2/select2-active.js"></script>
<!-- ionRangeSlider JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/ionRangeSlider/ion.rangeSlider.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/ionRangeSlider/ion.rangeSlider.active.js"></script>
<!-- rangle-slider JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/rangle-slider/rangle-active.js"></script>
<!-- knob JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/knob/knob-active.js"></script>
<!-- c3 JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/c3-charts/d3.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/c3-charts/c3.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/c3-charts/c3-active.js"></script>
<!-- Charts JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/charts/Chart.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/charts/line-chart.js"></script>
<!-- tab JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/tab.js"></script>
<!-- plugins JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/plugins.js"></script>
<!-- main JS
    ============================================ -->
    <script src="<?php echo base_url('') ?>assets/js/main.js"></script>

    
    <script type="text/javascript">
        (function ($) {
         "use strict";

         /*----------------------------------------*/
        /*  1.  Basic Line Chart
        /*----------------------------------------*/
        var ctx = document.getElementById("basiclinecharte");
        var basiclinechart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php $prefix=''; foreach($reportgen as $value){ echo $prefix.'"'.$value->generasi.'"'; $prefix=', '; }?>],
                datasets: [{
                    label: "Rata-rata Fitness",
                    fill: false,
                    backgroundColor: '#933EC5',
                    borderColor: '#933EC5',
                    data: [<?php $prefix=''; foreach($reportgen as $value){ echo $prefix.round($value->ratafitness,5); $prefix=', '; }?>]
                    
                }]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Grafik Pengujian'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            autoSkip: false,
                            maxRotation: 0
                        },
                        ticks: {
                          fontColor: "#fff", // this here
                      },
                      scaleLabel: {
                        display: true,
                        labelString: 'Jumlah Generasi'
                    }
                }],
                yAxes: [{
                    ticks: {
                        autoSkip: false,
                        maxRotation: 0
                    },
                    ticks: {
                          fontColor: "#fff", // this here
                      },
                      scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            }
        }
    });
        
        /*----------------------------------------*/
        /*  2.  Line Chart Multi axis
        /*----------------------------------------*/
        var ctx = document.getElementById("linechartmultiaxise");
        var linechartmultiaxis = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php $prefix=''; foreach($report as $value){ echo $prefix.'"'.$value->cr.':'.$value->mr.'"'; $prefix=', '; }?>],
                datasets: [{
                    label: "Rata-rata Fitness",
                    fill: false,
                    backgroundColor: '#006DF0',
                    borderColor: '#006DF0',
                    data: [<?php $prefix=''; foreach($report as $value){ echo $prefix.$value->ratafitness; $prefix=', '; }?>],
                    yAxisID: "y-axis-1"
                }]
            },
            options: {
                responsive: true,
                hoverMode: 'index',
                stacked: false,
                title:{
                    display: true,
                    text:'Grafik Pengujian'
                },
                scales: {
                    yAxes: [{
                        type: "linear",
                        display: true,
                        position: "left",
                        id: "y-axis-1",
                    }],
                }
            }
        });

    })(jQuery); 
</script>
</body>

</html>