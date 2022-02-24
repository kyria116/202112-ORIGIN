<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/registration.css">
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
                <span>registration</span>
                <span>註冊</span>
            </h1>
        </section>
        <section class="form-section">
            <div class="container">
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
                            帳號
                        </label>
                        <div class="input-wrap">
                            <input type="text" placeholder="請輸入常用EMAIL">
                            <small>請輸入正確格式EMAIL</small>
                        </div>
                    </div>
                    <div class="form-group req">
                        <label class="form-label">
                            密碼設定
                        </label>
                        <div class="input-wrap">
                            <input type="text" placeholder="至少6字元以上">
                            <small>至少6字元以上</small>
                        </div>
                    </div>
                    <div class="form-group req">
                        <label class="form-label">
                            密碼確認
                        </label>
                        <div class="input-wrap">
                            <input type="text" placeholder="請再次輸入密碼">
                            <small>與密碼不符</small>
                        </div>
                    </div>
                    <div class="form-group req">
                        <label class="form-label">
                            性別
                        </label>
                        <div class="input-wrap">
                            <div class="radios">
                                <div class="radio-group">
                                    <input type="radio" name="gender" id="male">
                                    <label for="male">男</label>
                                </div>
                                <div class="radio-group">
                                    <input type="radio" name="gender" id="female">
                                    <label for="female">女</label>
                                </div>
                            </div>
                            <small>必填</small>
                        </div>
                    </div>
                    <div class="form-group req">
                        <label class="form-label">
                            生日
                        </label>
                        <div class="input-wrap">
                            <input type="date" placeholder="年/月/日" required>
                            <small>必填</small>
                        </div>
                    </div>
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
                    <div class="term">
                        <input type="checkbox" id="terms">
                        <label class="form-label" for="terms">
                            我同意ORIGIN<a href="terms.php" target="_blank">相關條款</a>
                        </label>
                        <small>*請詳閱ORIGIN相關條款</small>
                    </div>
                    <div class="btnwrap">
                        <a class="btn" href="member-profile.php">
                            <div class="f16">註冊</div>
                            <div class="btnline">
                                <div class="btncircle"></div>
                            </div>
                        </a>
                    </div>
                </form>
            </div>
        </section>

    </main>
    <?php
    include "quote/template/footer.php";
    ?>
    <script src="dist/js/main.js"></script>
    <script src="dist/js/registration.js"></script>

</body>

</html>