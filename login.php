<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/login.css">
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
                <span>LOGIN</span>
                <span>登入</span>
            </h1>
        </section>
        <section class="form-section">
            <div class="container">
                <div class="flex">
                    <form action="">
                        <div class="form-group req">
                            <label class="form-label">
                                帳號
                            </label>
                            <div class="input-wrap">
                                <input type="text" placeholder="請輸入常用EMAIL">
                                <small>請輸入正確格式EMAIL</small>
                            </div>
                        </div>
                        <div class="form-group req">
                            <label class="form-label">
                                密碼
                            </label>
                            <div class="input-wrap">
                                <input type="text" placeholder="請輸入密碼">
                                <small>至少6字元以上</small>
                            </div>
                        </div>
                        <div class="btnwrap">
                            <a class="btn" href="member-profile.php">
                                <div class="f16">登入</div>
                                <div class="btnline">
                                    <div class="btncircle"></div>
                                </div>
                            </a>
                        </div>
                    </form>
                    <div class="line"></div>
                    <div class="wrap">
                        <div class="button">
                            <a href="registration.php">立即註冊</a>
                            <span></span>
                        </div>
                        <div class="button">
                            <a href="forgot-password.php">忘記密碼</a>
                            <span></span>
                        </div>
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