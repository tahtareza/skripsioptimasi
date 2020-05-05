<?php $this->load->view('main/header'); ?>

    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <?php $this->load->view('main/navbar'); ?>
    <!-- Mobile Menu end -->
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-heading">
                                    <h3><center>Optimasi Komposisi Pakan Itik Petelur Menggunakan Algoritma Genetika</center></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-details-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-details-inner">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="latest-blog-single blog-single-full-view">
                                <div class="blog-image">
                                    <a href="#"><img src="<?php echo base_url(); ?>assets/img/blog-details/2.jpg" alt="" />
                                    </a>
                                    <div class="blog-date">
                                        <p><span class="blog-day" id="day"></span><br><span id="month"></span></p>
                                    </div>
                                </div>
                                <div class="blog-details blog-sig-details">
                                    <div class="details-blog-dt blog-sig-details-dt courses-info mobile-sm-d-n">
                                        <span><a href="#"><i class="fa fa-user"></i> <b>Name:</b> Itik Petelur</a></span>
                                        <span><a href="#"><i class="fa fa-heart"></i> <b>Nutrition Needs:</b> PK, EM, Met, Lis, Ca, P</a></span>
                                        <span><a href="#"><i class="fa fa-cutlery"></i> <b>Available Foods:</b> 92</a></span>
                                    </div>
                                    <h1><a class="blog-ht" href="#">Latar Belakang</a></h1>
                                    <p align="justify">&emsp;&emsp;Itik berperan sebagai penghasil telur dan daging. Sebanyak 19,35% dari 793.800 ton kebutuhan telur di Indonesia diperoleh dari telur itik. Tingkat produktivitas itik lokal Indonesia baik telur maupun daging masih rendah dan masih berpeluang untuk ditingkatkan. Setioko (1990) melaporkan bahwa tingkat produktivitas itik petelur yang digembalakan hanya sekitar 26,9 − 41,3%, sedangkan tingkat produksi telur itik terkurung dapat mencapai 55,6% (Ketaren, 2002). Ini membuktikan tingkat produktivitas itik petelur terkurung lebih tinggi dari produktivitas itik gembala karena mutu pakan yang diberikan lebih baik. Rendahnya produksi telur tersebut sebagian disebabkan oleh pakan yang tidak memadai. Produksi telur itik gembala tersebut dapat ditingkatkan dari 38,3% menjadi 48,9% dengan memberi pakan tambahan (Ketaren, 2002). Juga dilaporkan bahwa bobot telur meningkat dari rata– rata 66,9 menjadi 71,1 gram dengan pemberian pakan tambahan 24 gram tepung kepala udang kepada itik gembala selama musim kering atau dengan memberi pakan tambahan tepung ikan dan vitamin-mineral premix.</p>

                                    <p align="justify">&emsp;&emsp;Produktivitas ternak dipengaruhi oleh faktor pakan, manajemen dan pembibitan. Permasalahan yang sering dihadapi peternak adalah ketersediaan pakan, yang mana pakan yang diberikan pada ternak memiliki kandungan nutrisi rendah. Sebagai contoh adalah limbah hasil samping pertanian, industri pertanian dan pangan. Limbah pertanian berasal dari limbah tanaman pangan seperti jerami jagung, jerami padi dan lain-lain. Kandungan nutrisi yang rendah akan mempengaruhi kecernaan pakan dan ketersediaan nutrisi, sehingga produktivitas ternak juga rendah (Syururi, Hidayat, & Dewi, 2019). Jika penentuan pakan yang diberikan tidak sesuai dengan standarisasi kebutuhan itik maka yang terjadi adalah itik petelur tidak mencapai kondisi yang optimal seperti kurangnya nafsu makan, mudah terserang penyakit, dan tidak lincah. Bahkan yang lebih fatal lagi bisa mengakibatkan kematian pada itik tersebut. Oleh karena itu dibutuhkan sistem cerdas yang bisa memudahkan peternak maupun masyarakat awam dalam melakukan optimasi pakan ternak terutama pada peternakan itik petelur.</p>

                                    <p align="justify">&emsp;&emsp;Permasalahan optimasi bahan pakan ternak itik petelur dapat diselesaikan dengan algoritma genetika, hal itu dikarenakan algoritma genetika memiliki kelebihan dalam menghasilkan output yang optimal dengan tetap memperhatikan faktor nutrisi. Nutrisi pada itik petelur yang harus dipenuhi antara lain protein kasar, energi, metionin, lisin, kalsium, dan fosfor yang memiliki masing-masing nilai standarnya. Penggunaan konsep evolusi biologi akan menghasilkan suatu output berupa komposisi bahan pakan yang sebaiknya dikonsumsi untuk memenuhi kebutuhan nutrisi (Syururi, Hidayat, & Dewi, 2019). Salah satu penelitian yang menggunakan algoritma genetika telah dilakukan pada objek penentuan komposisi bahan makanan bagi penderita gagal ginjal akut (Lestari, et al., 2017). Dari penelitian tersebut dihasilkan kesimpulan bahwa algoritma genetika dapat digunakan untuk menentukan komposisi makanan yang sesuai untuk kebutuhan gizi penderita gagal ginjal akut.</p>

                                    <p align="justify">&emsp;&emsp;Pada penelitian ini proses optimasi dilakukan menggunakan metode algoritma genetika, sehingga sistem yang dibangun adalah “Optimasi Komposisi Pakan Itik Petelur Menggunakan Algoritma Genetika”. Sistem menyediakan data tentang kebutuhan nutrisi itik petelur, serta daftar kandungan nutrisi pada beberapa bahan makan ternak yang kemudian akan diproses dengan algoritma genetika hingga menghasilkan keluaran berupa kombinasi komposisi pakan dengan solusi terbaik. Kombinasi komposisi pakan tersebut terdiri beberapa bahan makan ternak, semisal dalam satu komposisi terdiri dari lima bahan yaitu dedak padi, menir, jagung, bungkil kelapa, dan ikan kering. Proses optimasi menggunakan algoritma genetika pada penelitian ini dimulai dengan pembangkitan populasi awal (inisialisasi populasi), menghitung fitness, seleksi, crossover, mutasi, dan evaluasi. Pada tahap seleksi menggunakan metode seleksi roulette wheel selection. Teknik crossover yang digunakan adalah single point crossover. Lalu, proses mutasi menggunakan metode random mutation. Serta pada proses evaluasi digunakan populasi model generational replacement, dan untuk mempertahankan individu terbaik pada suatu generasi diperlukan elitisme.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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

<script type="text/javascript">
    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const det = new Date();
    mon = monthNames[det.getMonth()];
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("day").innerHTML = d;
    document.getElementById("month").innerHTML = mon;
</script>
<?php $this->load->view('main/footer'); ?>