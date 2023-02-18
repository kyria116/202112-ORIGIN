<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/media-photo.css">
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
                <div class="link active">
                    <a href="media-photo.php">
                        Photo
                    </a>
                </div>
                <div class="link">
                    <a class="active" href="media-films.php">
                        Films
                    </a>
                </div>
            </div>
        </section>
        <section class="topmenu-section">
            <div class="container">
                <div id="top-menu-ul" class="top-menu-ul">
                    <div class="item_Menu">
                        <div class="item_menu_Box">
                            <ul class="item_menu_list slides">
                                <li class="active">
                                    <a href="javascript:;">
                                        TEA
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        COFFEE
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        CHOCOLATE
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        YI-WU
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex-direction-nav">
                        <a href="#" class="flex-prev">
                            <div></div>
                        </a>
                        <a href="#" class="flex-next">
                            <div></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="photo-section">
            <div class="container">
                <!-- version1 -->
                <div class="flex v1" data-aos="fade-up">
                    <img class="imgwrap" src="dist/images/media/MB1.jpg">
                    <img class="imgwrap" src="dist/images/media/MB2.jpg">
                </div>
                <!-- version2 -->
                <div class="flex v2" data-aos="fade-up">
                    <img class="imgwrap" src="dist/images/media/MB3.jpg">
                    <img class="imgwrap" src="dist/images/media/MB4.jpg">
                    <img class="imgwrap" src="dist/images/media/MB5.jpg">
                </div>
                <!-- version3 -->
                <div class="flex v3" data-aos="fade-up">
                    <img class="imgwrap" src="dist/images/media/MB6.jpg">
                    <img class="imgwrap" src="dist/images/media/MB7.jpg">
                </div>
            </div>
        </section>
    </main>
    <?php
    include "quote/template/footer.php";
    ?>
    <script src="dist/js/main.js"></script>
</body>

</html>