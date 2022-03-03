<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/cart.css">
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
                <span>CART</span>
                <span>購物車</span>
            </h1>
        </section>
        <section class="buylist-section">
            <div class="container border" data-aos="fade-up">
                <div class="f20 sectionTitle">
                    購物清單
                </div>
                <!-- 修改▼ 沒有商品時只顯示emptyCart -->
                <div class="emptyCart">
                    購物車目前沒有任何商品
                </div>
                <!-- 修改▲ -->
                <ul class="table-title">
                    <li class="t1">
                        產品
                    </li>
                    <li class="t2">
                        數量
                    </li>
                    <li class="t3">
                        單價
                    </li>
                    <li class="t4">
                        小計
                    </li>
                    <li class="t5">
                        移除
                    </li>
                </ul>
                <ul class="table-content">
                    <li class="t1">
                        <a href="tea-detail.php" class="product">
                            <div class="product-img" style="  background-image: url(dist/images/index/PD2.jpg);"></div>
                            <div class="product-info">
                                <div class="product-name">
                                    烏龍茶烏龍茶烏龍茶烏龍茶烏龍茶烏龍茶
                                </div>
                                <div class="orgline"></div>
                                <div class="product-content">
                                    有機秘魯.中度烘焙.12盎司(340克)有機秘魯.中度烘焙.12盎司(340克)
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="t2">
                        <span class="mo">數量</span>
                        <span>已售完</span>
                        <!-- <select>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select> -->
                    </li>
                    <li class="t3">
                        <span class="mo">單價</span>
                        <span>1,000</span>
                    </li>
                    <li class="t4">
                        <span class="mo">小計</span>
                        <span>0</span>
                    </li>
                    <li class="t5">
                        <a class="deletebtn" href="javascript:;">
                            <div class="unhover"></div>
                            <div class="hover"></div>
                        </a>
                    </li>
                </ul>
                <ul class="table-content">
                    <li class="t1">
                        <a href="tea-detail.php" class="product">
                            <div class="product-img" style="  background-image: url(dist/images/index/PD2.jpg);"></div>
                            <div class="product-info">
                                <div class="product-name">
                                    Mt. Whitney Coffee Roasters
                                </div>
                                <div class="orgline"></div>
                                <div class="product-content">
                                    有機秘魯.中度烘焙.12盎司(340克)
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="t2">
                        <span class="mo">數量</span>
                        <select>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </li>
                    <li class="t3">
                        <span class="mo">單價</span>
                        <span>1,000</span>
                    </li>
                    <li class="t4">
                        <span class="mo">小計</span>
                        <span>3,000</span>
                    </li>
                    <li class="t5">
                        <a class="deletebtn" href="javascript:;">
                            <div class="unhover"></div>
                            <div class="hover"></div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- price area -->
            <div class="container" data-aos="fade-up">
                <div class="flex">
                    <div class="dotlists">
                        <div class="list">
                            <div class="f18 dottitle">
                                贈品
                            </div>
                            <a href="tea-detail.php" class="content">
                                <div class="giveaway-img" style="background-image: url(dist/images/index/PD2.jpg);"></div>
                                <div class="txt-wrap">
                                    <div class="product-name">
                                        Mt. Whitney Coffee Roasters
                                    </div>
                                    <div class="txt">
                                        贈品送完為止，若送完將會人工通知您並給予補償方案
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="list">
                            <div class="f18 dottitle">
                                贈品
                            </div>
                            <!-- 修改▼ -->
                            <a href="tea-detail.php" class="content">
                                <div class="giveaway-img" style="  background-image: url(dist/images/index/PD2.jpg);"></div>
                                <div class="txt-wrap">
                                    <div class="product-name">
                                        Mt. Whitney Coffee RoastersMt. Whitney Coffee RoastersMt. Whitney Coffee RoastersMt. Whitney Coffee RoastersMt. Whitney Coffee RoastersMt. Whitney Coffee RoastersMt. Whitney Coffee RoastersMt. Whitney Coffee Roasters
                                    </div>
                                    <div class="txt">
                                        贈品送完為止，若送完將會人工通知您並給予補償方案
                                    </div>
                                </div>
                            </a>
                            <!-- 修改▲ -->
                        </div>
                        <div class="list">
                            <div class="f18 dottitle">
                                贈品
                            </div>
                            <a href="tea-detail.php" class="content">
                                <div class="giveaway-img" style="  background-image: url(dist/images/index/PD2.jpg);"></div>
                                <div class="txt-wrap">
                                    <div class="product-name">
                                        Mt. Whitney Coffee Roasters
                                    </div>
                                    <div class="txt">
                                        贈品送完為止，若送完將會人工通知您並給予補償方案
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="list">
                            <div class="f18 dottitle">
                                滿<span>1200</span>免運
                            </div>
                            <div class="txt">
                                外島地區目前無免運優惠，將會另外酌收運費
                            </div>
                        </div>
                    </div>
                    <div class="price-detail">
                        <div class="sum">
                            <span>總計</span>
                            <span>4,000</span>
                        </div>
                        <div class="shipping">
                            <span>運費</span>
                            <span>0</span>
                        </div>
                        <div class="total">
                            <span>應付金額</span>
                            <span>4,000</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="form-section" data-aos="fade-up">
            <div class="container">
                <div class="flex">
                    <div class="f20 sectionTitle">
                        收件人資訊
                    </div>
                    <div class="check-group">
                        <input type="checkbox" id="memSame">
                        <label for="memSame">同會員資料</label>
                    </div>
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
                            <small>必填</small>
                        </div>
                    </div>
                    <div class="form-group req">
                        <label class="form-label">
                            信箱
                        </label>
                        <div class="input-wrap">
                            <input type="text" placeholder="請輸入常用EMAIL">
                            <small>請輸入正確格式EMAIL</small>
                        </div>
                    </div>
                    <div class="form-group req">
                        <label class="form-label">
                            地址
                        </label>
                        <div class="input-wrap">
                            <div class="selections-wrap">
                                <input type="text" placeholder="請輸入地址">
                            </div>
                            <small>必填</small>
                        </div>
                    </div>
                    <div class="form-group req">
                        <label class="form-label">
                            發票資訊
                        </label>
                        <div class="input-wrap">
                            <div class="radios">
                                <div class="radio-group">
                                    <input type="radio" name="invoice" id="duplicate" value="duplicate">
                                    <label for="duplicate">二聯式發票</label>
                                </div>
                                <div class="radio-group">
                                    <input type="radio" name="invoice" id="triplicate" value="triplicate">
                                    <label for="triplicate">三聯式發票</label>
                                </div>
                            </div>
                            <small></small>
                        </div>
                    </div>
                    <div class="form-group req">
                        <label class="form-label">
                            發票地址
                        </label>
                        <div class="input-wrap">
                            <div class="selections-wrap">
                                <input type="text" placeholder="請輸入地址">
                            </div>
                            <small>必填</small>
                        </div>
                    </div>
                    <div class="form-group req invoice-d">
                        <label class="form-label">
                            公司抬頭
                        </label>
                        <div class="input-wrap">
                            <input type="text" placeholder="請輸入公司抬頭">
                            <small>必填</small>
                        </div>
                    </div>
                    <div class="form-group req invoice-d">
                        <label class="form-label">
                            公司統編
                        </label>
                        <div class="input-wrap">
                            <input type="text" placeholder="請輸入公司統編">
                            <small>必填</small>
                        </div>
                    </div>
                    <div class="form-group w-100">
                        <label class="form-label">
                            備註
                        </label>
                        <div class="input-wrap">
                            <textarea cols="1" rows="1" placeholder="請輸入備註"></textarea>
                            <small></small>
                        </div>
                    </div>
                    <div class="form-group req payType">
                        <label class="form-label">
                            付款方式
                        </label>
                        <div class="input-wrap">
                            <div class="radios">
                                <div class="radio-group">
                                    <input type="radio" name="paid" id="card">
                                    <label for="card">線上刷卡</label>
                                </div>
                                <div class="radio-group">
                                    <input type="radio" name="paid" id="COD">
                                    <label for="COD">貨到付款</label>
                                </div>
                                <div class="radio-group">
                                    <input type="radio" name="paid" id="transfer">
                                    <label for="transfer">匯款</label>
                                </div>
                            </div>
                            <small></small>
                        </div>
                    </div>
                    <div class="payType-detail">
                        匯款資訊
                        <br>
                        人口點此圖象先後什麼是他是意思長時間發佈時間增加，說完不詳機場隨後，態度她們隨便還要，眾多頓時，女人上漲可能引用交換，中學適應，幾乎每個給他符合內置體育，朋友表示，工資都是漸漸成為此時留言板腦袋當我法院之類驚訝化工，一下污染在此寫出來小心，種子私人，人體。
                    </div>
                    <div class="btnwrap">
                        <a class="btn" href="javascript:;">
                            <div class="f16">進行付款</div>
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
    <script src="dist/js/cart.js"></script>
</body>

</html>