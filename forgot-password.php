<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/forgot-password.css">
</head>
<?php include "quote/template/font.php"; ?>

<body class="lang_tw">
    <?php
    include "quote/template/added.php";
    include "quote/template/nav.php";
    ?>
    <main>
        <section class="title-section-l">
            <h1 class="pageTitle">
                <span>forgot<br class="mo"> password</span>
                <span>忘記密碼</span>
            </h1>
        </section>
        <section class="form-section">
            <div class="container">
                <div class="flex">
                    <form action="">
                        <div class="f16 txt">
                            系統將寄送臨時密碼至您的Email
                            <br>
                            因安全性考量，建議登入後立即更改密碼
                        </div>
                        <div class="form-group req">
                            <label class="form-label">
                                帳號
                            </label>
                            <div class="input-wrap">
                                <input type="text" placeholder="請輸入常用EMAIL">
                                <small>請輸入正確格式EMAIL</small>
                            </div>
                        </div>
                        <div class="btnwrap">
                            <a class="btn" href="./">
                                <div class="f16">送出</div>
                                <div class="btnline">
                                    <div class="btncircle"></div>
                                </div>
                            </a>
                        </div>
                    </form>
                    <div class="wrap">

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