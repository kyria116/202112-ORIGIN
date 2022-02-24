<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/lightboxed.css">
<link rel="stylesheet" href="dist/css/media-films.css">
</head>
<?php include "quote/template/font.php"; ?>

<body class="lang_tw">
    <?php
    include "quote/template/added.php";
    include "quote/template/nav.php";
    ?>
    <main data-page="5">
        <section class="title-section">
            <h1 class="pageTitle">
                <span>MEDIA</span>
                <span>影音</span>
            </h1>
        </section>
        <section class="tags-section">
            <div class="flex">
                <div class="link">
                    <a href="media-photo.php">
                        Photo
                    </a>
                </div>
                <div class="link  active">
                    <a class="active" href="media-films.php">
                        Films
                    </a>
                </div>
            </div>
        </section>
        <section class="films-section">
            <div class="container">
                <!-- version1 -->
                <div class="flex v1" data-aos="fade-up">
                    <div class="imgwrap">
                        <img class="lightboxed" src="dist/images/media/media1.jpg" data-link="https://www.youtube.com/embed/9Ks4ehqpkko" data-width="1011" data-height="569" />
                    </div>

                </div>
                <!-- version2 -->
                <div class="flex v2" data-aos="fade-up">
                    <div class="imgwrap">
                        <img class="lightboxed" src="dist/images/media/media2.jpg" data-link="https://www.youtube.com/embed/Iy6DPXOl6O4" data-width="1011" data-height="569" />
                    </div>
                    <div class="imgwrap">
                        <img class="lightboxed" src="dist/images/media/media3.jpg" data-link="https://www.youtube.com/embed/qwdze_QF3sg" data-width="1011" data-height="569" />
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include "quote/template/footer.php";
    ?>
    <script src="dist/js/main.js"></script>
    <script src="dist/js/lightboxed.js"></script>
</body>

</html>