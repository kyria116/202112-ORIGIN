<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member-profile.css">
</head>
<?php include "quote/template/font.php"; ?>

<body class="lang_tw">
    <?php
    include "quote/template/added.php";
    include "quote/template/nav.php";
    ?>
    <main>
        <section class="title-section">
            <h1 class="pageTitle">
                <span>member</span>
                <span>會員專區</span>
            </h1>
        </section>
        <section class="topmenu-section">
            <div class="container">
                <div id="top-menu-ul" class="top-menu-ul">
                    <div class="item_Menu">
                        <div class="item_menu_Box">
                            <ul class="item_menu_list slides">
                                <li class="active">
                                    <a href="member-profile.php">
                                        會員資料
                                    </a>
                                </li>
                                <li>
                                    <a href="member-order.php">
                                        訂單紀錄
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
        <section class="form-section">
            <div class="container">
                <div class="flex">
                    <div class="wrap">
                        <!-- 男: $('.avatar').addClass('M')
                        女: $('.avatar').addClass('F') -->
                        <div class="avatar M">
                            <div class="male"></div>
                            <div class="female"></div>
                        </div>
                        <div class="info">
                            <div class="name f30">
                                歐瑞臻
                            </div>
                            <div class="detail f18">
                                <span class="genter">女</span>
                                <div class="line"></div>
                                <span class="birth">1990.10.02</span>
                            </div>
                            <div class="mail f18">
                                originchocolate123@gmail.com
                            </div>
                            <div class="editbtn">
                                <div class="icon"></div>
                                <div class="icon_hover"></div>
                                <a href="edit-password.php">修改密碼</a>
                            </div>
                        </div>
                    </div>
                    <form action="">
                        <div class="form-group req">
                            <label class="form-label">
                                手機
                            </label>
                            <div class="input-wrap">
                                <input type="text" placeholder="請輸入手機號碼">
                                <small>必填</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">
                                地址
                            </label>
                            <div class="input-wrap">
                                <div class="selections-wrap">
                                    <input type="text" placeholder="請輸入地址">
                                </div>
                            </div>
                        </div>
                        <div class="btnwrap">
                            <a class="btn" href="javascript:;">
                                <div class="f16">儲存變更</div>
                                <div class="btnline">
                                    <div class="btncircle"></div>
                                </div>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php
    include "quote/template/footer.php";
    ?>
    <script src="dist/js/main.js"></script>
    <script src="dist/js/member-profile.js"></script>
</body>

</html>