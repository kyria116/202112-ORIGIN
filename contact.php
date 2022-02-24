<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/contact.css">
</head>
<?php include "quote/template/font.php"; ?>

<body class="lang_tw">
    <?php
    include "quote/template/added.php";
    include "quote/template/nav.php";
    ?>
    <main data-page="7">
        <section class="title-section">
            <h1 class="pageTitle">
                <span>CONTACT</span>
                <span>聯絡</span>
            </h1>
        </section>
        <section class="form-section">
            <div class="container">
                <!-- 綠色區塊有兩組，↓為手機板 -->
                <div class="greenbg mo" data-aos="fade-up">
                    <div class="logo">
                        <img src="dist/images/contact/logo.png" alt="origin logo">
                    </div>
                    <div class="info">
                        <div class="flex f16">
                            <div class="imgwrap">
                                <img src="dist/images/icon_phone.png" alt="phone">
                            </div>
                            <a href="tel:+886 0800-585-598">0800-585-598</a>
                        </div>
                        <div class="flex f16">
                            <div class="imgwrap">
                                <img src="dist/images/icon_mail.png" alt="mail">
                            </div>
                            <a href="mailto:service@gmail.com">service@gmail.com</a>
                        </div>
                        <div class="flex f16">
                            <div class="imgwrap">
                                <img src="dist/images/icon_addr.png" alt="address">
                            </div>
                            <a href="https://g.page/ACONPURE?share" target="_blank">新北市新店區寶興路45巷9弄2號</a>
                        </div>
                    </div>
                    <ul class="media">
                        <li>
                            <a href="https://www.facebook.com/ACONPURE/" target="_blank">
                                <img class="unhover" src="dist/images/icon_fb.png" alt="">
                                <img class="hover" src="dist/images/icon_fb_hover.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/ACONPURE/" target="_blank">
                                <img class="unhover" src="dist/images/icon_fb.png" alt="">
                                <img class="hover" src="dist/images/icon_fb_hover.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="f16-18 txt" data-aos="fade-up">
                    ORIGIN邀請您一同體驗及感受一壺茶、一杯咖啡、一片巧克力背後的故事。
                    <br>
                    若有任何疑問，歡迎與我們聯繫，我們將盡快安排專員為您服務。
                </div>
            </div>
            <div class="container form-container" data-aos="fade-up">
                <div class="form-wrap">
                    <!-- 綠色區塊有兩組，↓為桌機板 -->
                    <div class="greenbg pc">
                        <div class="logo">
                            <img src="dist/images/contact/logo.png" alt="origin logo">
                        </div>
                        <div class="info">
                            <div class="flex f16">
                                <div class="imgwrap">
                                    <img src="dist/images/icon_phone.png" alt="phone">
                                </div>
                                <a href="tel:+886 0800-585-598">0800-585-598</a>
                            </div>
                            <div class="flex f16">
                                <div class="imgwrap">
                                    <img src="dist/images/icon_mail.png" alt="mail">
                                </div>
                                <a href="mailto:service@gmail.com">service@gmail.com</a>
                            </div>
                            <div class="flex f16">
                                <div class="imgwrap">
                                    <img src="dist/images/icon_addr.png" alt="address">
                                </div>
                                <a href="https://g.page/ACONPURE?share" target="_blank">新北市新店區寶興路45巷9弄2號</a>
                            </div>
                        </div>
                        <ul class="media">
                            <li>
                                <a href="https://www.facebook.com/ACONPURE/" target="_blank">
                                    <img class="unhover" src="dist/images/icon_fb.png" alt="">
                                    <img class="hover" src="dist/images/icon_fb_hover.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/ACONPURE/" target="_blank">
                                    <img class="unhover" src="dist/images/icon_fb.png" alt="">
                                    <img class="hover" src="dist/images/icon_fb_hover.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form action="">
                        <div class="form-group req">
                            <label class="form-label">
                                姓名
                            </label>
                            <div class="input-wrap">
                                <input type="text" placeholder="請輸入姓名">
                                <small>必填</small>
                            </div>
                        </div>
                        <div class="form-group req">
                            <label class="form-label">
                                手機
                            </label>
                            <div class="input-wrap">
                                <input type="text" placeholder="請輸入手機號碼">
                                <small>
                                    必填
                                </small>
                            </div>
                        </div>
                        <div class="form-group req">
                            <label class="form-label">
                                信箱
                            </label>
                            <div class="input-wrap">
                                <input type="text" placeholder="請輸入常用EMAIL">
                                <small>
                                    請輸入常用EMAIL
                                </small>
                            </div>
                        </div>
                        <div class="form-group req">
                            <label class="form-label">
                                聯絡事項
                            </label>
                            <div class="input-wrap">
                                <div class="radios">
                                    <div class="radio-group">
                                        <input type="radio" name="why" id="buy">
                                        <label for="buy">購買問題</label>
                                    </div>
                                    <div class="radio-group">
                                        <input type="radio" name="why" id="return">
                                        <label for="return">商品退/換貨</label>
                                    </div>
                                    <div class="radio-group">
                                        <input type="radio" name="why" id="member">
                                        <label for="member">會員權益</label>
                                    </div>
                                    <div class="radio-group">
                                        <input type="radio" name="why" id="coorperate">
                                        <label for="coorperate">合作提案</label>
                                    </div>
                                    <div class="radio-group">
                                        <input type="radio" name="why" id="purchase">
                                        <label for="purchase">大宗採購</label>
                                    </div>
                                    <div class="radio-group">
                                        <input type="radio" name="why" id="other">
                                        <label for="other">其他</label>
                                    </div>
                                </div>
                                <small>必填</small>
                            </div>
                        </div>
                        <div class="form-group req">
                            <label class="form-label">
                                需求內容
                            </label>
                            <div class="input-wrap">
                                <textarea class="mCustomScrollbar" cols="30" rows="10" placeholder="請輸入需求內容"></textarea>
                                <small>
                                    必填
                                </small>
                            </div>
                        </div>
                        <div class="btnwrap">
                            <a class="btn" href="javascript:;">
                                <div class="f16">送出</div>
                                <div class="btnline">
                                    <div class="btncircle"></div>
                                </div>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="map-section">
            <div class="greybg">
                <div class="container">
                    <div class="flex">
                        <h2 class="pageTitle">
                            <span>STORE</span>
                            <span>門市資訊</span>
                        </h2>
                        <ul data-aos="fade-up">
                            <li>
                                <div class="title">
                                    新店直營門市
                                </div>
                                <div class="tel">
                                    <div class="imgwrap">
                                        <img src="dist/images/icon_phone.png" alt="phone">
                                    </div>
                                    <a href="tel:0800-585-598">0800-585-598</a>
                                </div>
                                <div class="addr">
                                    <div class="imgwrap">
                                        <img src="dist/images/icon_addr.png" alt="address">
                                    </div>
                                    <a href="https://g.page/ACONPURE?share" target="_blank">新北市新店區寶興路45巷9弄2號</a>
                                </div>
                                <div class="map">
                                    <a href="https://g.page/ACONPURE?share" target="_blank">
                                        <div class="icon"></div>
                                        <div class="icon_hover"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    新店直營門市
                                </div>
                                <div class="tel">
                                    <div class="imgwrap">
                                        <img src="dist/images/icon_phone.png" alt="phone">
                                    </div>
                                    <a href="tel:0800-585-598">0800-585-598</a>
                                </div>
                                <div class="addr">
                                    <div class="imgwrap">
                                        <img src="dist/images/icon_addr.png" alt="address">
                                    </div>
                                    <a href="https://g.page/ACONPURE?share" target="_blank">新北市新店區寶興路45巷9弄2號</a>
                                </div>
                                <div class="map">
                                    <a href="https://g.page/ACONPURE?share" target="_blank">
                                        <div class="icon"></div>
                                        <div class="icon_hover"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    新店直營門市
                                </div>
                                <div class="tel">
                                    <div class="imgwrap">
                                        <img src="dist/images/icon_phone.png" alt="phone">
                                    </div>
                                    <a href="tel:0800-585-598">0800-585-598</a>
                                </div>
                                <div class="addr">
                                    <div class="imgwrap">
                                        <img src="dist/images/icon_addr.png" alt="address">
                                    </div>
                                    <a href="https://g.page/ACONPURE?share" target="_blank">新北市新店區寶興路45巷9弄2號</a>
                                </div>
                                <div class="map">
                                    <a href="https://g.page/ACONPURE?share" target="_blank">
                                        <div class="icon"></div>
                                        <div class="icon_hover"></div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
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