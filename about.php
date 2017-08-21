<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Libre+Baskerville:400i|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="./slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">

    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- slick carousel -->
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <!-- font awesome -->
    <script src="https://use.fontawesome.com/b881a9a4a0.js"></script>
    <!-- sly js -->
    <script src="js/sly.min.js"></script>

    <!-- Other stylesheets -->
    <link type="text/css" rel="stylesheet" href="index.css">
    <link type="text/css" rel="stylesheet" href="about.css?version=2">
    <!-- Other scripts -->
    <script type="text/javascript" src="about.js"></script>
</head>

<body>
    <?php include('header.php')?>
    <div id="overview">
        <div class="container">
            <h1 style="margin-top: 0; margin-bottom: 25px; font-size: 45px">Sekilas tentang kami ...</h1>
            <p>Kami adalah perusahaan yang bergerak dibidang perdagangan dan jasa, yang berdomisili kota Pontianak. Kami telah
                memiliki pengalaman yaang cukup banyak dalam bidangnya, hal ini didukung oleh tenaga kerja yang handal yang
                akan selalu siap memberikan yang terbaik kepada client kami, sesuai dengan motto kami yaitu : “Kepuasan Anda
                Kebanggaan Kami”.
            </p>
        </div>
    </div>
    <div id="vis-mis">
        <span class="fa fa-caret-up up" style="width: 100%; text-align:center; font-size: 30px; position: absolute; top: 10px; z-index: 10"></span>
        <span class="fa fa-caret-down down" style="width: 100%; text-align:center; font-size: 30px; position: absolute; bottom: 10px; z-index: 10"></span>
        <div class="overlay background" style="background-image:url(img/vismis0.jpeg); background-size:cover; background-position: center">
        </div>
        <div class="slides">
            <div class="slide" style="color: white;">
                <h1>VISI</h1>
                <div class="slide-content">
                    <p>
                        Memberikan layanan integrated marketing communication yang prima dengan sistem layanan One Stop Service dalam satu atap:
                        <ol>
                            <li>PT. DELTA VISUAL MANDIRI memberikan pelayanan mulai dari penyediaan materi bahan sampai finishing.</li>
                            <li>PT. DELTA VISUAL MANDIRI memperhatikan keseimbangan faktor bisnis dan tanggung jawab kualitas.</li>
                            <li>PT. DELTA VISUAL MANDIRI menjadi pilihan utama layanan produksi materi indoor/outdoor dari pengguna
                                jasa (produsen brand)
                            </li>
                        </ol>
                    </p>
                </div>
            </div>
            <div class="slide" style="color: white;">
                <h1>MISI</h1>
                <div class="slide-content">
                    <p>
                        <ol>
                            <li>Memberikan nilai lebih dalam setiap layanan</li>
                            <li>Menjadi Solusi terbaik bagi Produsen Brand dalam memenuhi semua kebutuhan progam marketing communication-nya.</li>
                            <li>Menjadi partner profesional dengan mengedepankan layanan yang prima dan kepuasan pelanggan.</li>
                        </ol>

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="clients">
        <h1 style="font-family: 'Montserrat', sans-serif; font-weight:bold; text-align: center; font-size: 50px; padding-bottom: 25px; border-bottom: solid 1px #222">KLIEN-KLIEN KAMI</h1>
        <div class="items">
            <a class="item">PT. NUSANTARA INDAH MAKMUR (WIN/BHETA)</a>
            <a class="item">PT. ANEKA MAKMUR SEJAHTERA (YAMAHA)</a>
            <a class="item">PT. YAMAHA INDONESIA MANUFACTURING</a>
            <a class="item">PT. ASTRA INTERNATIONAL Tbk (HONDA)</a>
            <a class="item">PT. AUTO CITRA PRIMA (HINO)</a>
            <a class="item">PT. INDONESIA OPPO ELECTRONICS (OPPO)</a>
            <a class="item">PT. SUMI RUBBER INDONESIA (DUNLOP)</a>
            <a class="item">PT. UNILEVER INDONESIA Tbk</a>
            <a class="item">PT. SIMPATINDO MULTI MEDIA</a>
            <a class="item">PT. JASA RAHARJA</a>
            <a class="item">PT. SINAR SOSRO</a>

        </div>
    </div>
    <?php include('footer.php')?>
</body>

</html>