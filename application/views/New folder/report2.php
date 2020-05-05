<?php
 
$dataPoints = array(
    array("y" => 25, "label" => "Sunday"),
    array("y" => 15, "label" => "Monday"),
    array("y" => 25, "label" => "Tuesday"),
    array("y" => 5, "label" => "Wednesday"),
    array("y" => 10, "label" => "Thursday"),
    array("y" => 0, "label" => "Friday"),
    array("y" => 20, "label" => "Saturday")
);
 
?>

<?php $this->load->view('main/header'); ?>
<!-- Start Left menu area -->
<?php $this->load->view('main/navbar'); ?>
<!-- Mobile Menu end -->

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

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

<?php $this->load->view('main/footer'); ?>