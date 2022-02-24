<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/edit-password.css">
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
                <span>edit<br class="mo"> password</span>
                <span>修改密碼</span>
            </h1>
        </section>
        <section class="form-section">
            <div class="container">
                <div class="flex">
                    <form action="">
                        <div class="form-group req">
                            <label class="form-label">
                                原密碼
                            </label>
                            <div class="input-wrap">
                                <input type="text" placeholder="請輸入原密碼">
                                <small>至少6字元以上</small>
                            </div>
                        </div>
                        <div class="form-group req">
                            <label class="form-label">
                                新密碼
                            </label>
                            <div class="input-wrap">
                                <input type="text" placeholder="請輸入新密碼">
                                <small>至少6字元以上</small>
                            </div>
                        </div>
                        <div class="form-group req">
                            <label class="form-label">
                                密碼確認
                            </label>
                            <div class="input-wrap">
                                <input type="text" placeholder="請再次輸入新密碼">
                                <small>與新密碼不符</small>
                            </div>
                        </div>
                        <div class="btnwrap">
                            <a class="btn" href="member-profile.php">
                                <div class="f16">確認修改</div>
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