<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
                <!-- 控制手機顯示比例固定，顯示比例固定 -->
                <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
                    <!-- START CSS -->
                    <link href="assets/css/bootstrap-reboot.css" rel="stylesheet" type="text/css">
                        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
                            <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
                                <link href="assets/css/style.css" rel="stylesheet" type="text/css">
                                    <link href="assets/css/color.css" rel="stylesheet" type="text/css">
                                        <link href="assets/css/default.date.css" rel="stylesheet" type="text/css">
                                            <!-- END CSS -->
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <!--=== START-Navigetion Bar ===-->
        <div id="navbar">
            <div class="navbar-group">
                <div class="navbarui-left">
                    <a href="repair-list.php">
                        <img class="img-fluid" src="assets/img/ui/fa-chevron-left.png"/>
                    </a>
                </div>
                <div class="navbarui-mid">
                    <p>
                        新增修繕服務
                    </p>
                </div>
                <div class="navbarui-right">
                </div>
            </div>
        </div>
        <!--=== END-Navigetion Bar ===-->
        <!--=== START-修繕服務列表 ===-->
        <div id="repair-list">
            <div class="registercontpage">
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step">
                            <a class="btn btn-circle btn-default1 btn-primary" href="#step-1">
                                1
                            </a>
                            <p>
                                資料
                            </p>
                        </div>
                        <div class="stepwizard-step">
                            <a class="btn btn-default1 btn-circle" disabled="disabled" href="#step-2">
                                2
                            </a>
                            <p>
                                描述
                            </p>
                        </div>
                        <div class="stepwizard-step">
                            <a class="btn btn-default1 btn-circle" disabled="disabled" href="#step-3">
                                3
                            </a>
                            <p>
                                確認
                            </p>
                        </div>
                    </div>
                </div>
                <form action="" data-toggle="validator" id="basicform" method="post" name="basicform" role="form">
                    <div class="setup-content" id="step-1" style="display: block;">
                        <div class="form-group field">
                            <label class="control-label main">
                                <span style="color:red;">
                                    *
                                </span>
                                報修人姓名
                            </label>
                            <div class="input-area">
                                <div class="one">
                                    <input class="form-control" data-error="請輸入報修人姓名" id="reg_fname" maxlength="12" minlength="1" name="reg_fname" placeholder="請輸入報修人姓名" required="required" type="text">
                                        <div class="help-block with-errors">
                                        </div>
                                    </input>
                                </div>
                                <div class="two">
                                    <select class="form-control" id="sel1" name="usertitle" style="background: url(assets/img/ui/arrow.png) no-repeat right center transparent !important; appearance:none;-moz-appearance:none;-webkit-appearance:none;">
                                        <option disabled="disabled" selected="selected" style="display: none" value="">
                                        </option>
                                        <option>
                                            小姐
                                        </option>
                                        <option>
                                            先生
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group field ">
                            <label class="control-label main">
                                <span style="color:red;">
                                    *
                                </span>
                                報修人電話
                            </label>
                            <input class="form-control" data-error="請輸入報修人電話" id="usr_telephone" maxlength="12" name="usr_telephone" onkeyup="numberOnly(this)" placeholder="請輸入報修人電話" required="required" type="text">
                                <div class="help-block with-errors">
                                </div>
                            </input>
                        </div>
                        <div class="form-group field">
                            <label class="control-label main">
                                <span style="color:red;">
                                    *
                                </span>
                                報修人社區
                            </label>
                            <input class="form-control" data-error="請輸入報修人社區" id="reg_addname" maxlength="20" minlength="1" name="reg_addname" placeholder="請輸入報修人社區" required="required" type="text">
                                <div class="help-block with-errors">
                                </div>
                            </input>
                        </div>
                        <div class="form-group field">
                            <label class="control-label main">
                                <span style="color:red;">
                                    *
                                </span>
                                修繕地點(現勘位置)
                            </label>
                            <textarea class="form-control" data-error="請輸入修繕地點(現勘位置)" id="reg_add" maxlength="50" minlength="1" name="reg_add" placeholder="請輸入修繕地點(現勘位置)" required="required" rows="4" type="text">
                            </textarea>
                            <div class="help-block with-errors">
                            </div>
                        </div>
                        <div class="form-group field ">
                            <label class="control-label main">
                                報修人 Email
                            </label>
                            <input class="form-control" id="usr_regemail" name="usr_regemail" placeholder="請輸入報修人 Email" required="" type="email">
                            </input>
                        </div>
                        <div class="form-group field ">
                            <label class="control-label main">
                                報修人傳真
                            </label>
                            <input class="form-control" id="usr_telephone" maxlength="12" name="usr_telephone" onkeyup="numberOnly(this)" placeholder="請輸入報修人傳真" type="text">
                            </input>
                        </div>
                        <button class="bottom-align-next nextBtn" type="button">
                            <p>
                                下一步：新增報修資訊
                            </p>
                        </button>
                    </div>
                    <div class="setup-content" id="step-2" style="display: none;">
                        <div class="form-group field ">
                            <label class="control-label main" for="sel1">
                                <span style="color:red;">
                                    *
                                </span>
                                修繕項目
                            </label>
                            <select class="form-control" data-error="請選擇修繕項目" id="sel2" name="useritem" style="background: url(assets/img/ui/arrow.png) no-repeat right center transparent !important; appearance:none;-moz-appearance:none;-webkit-appearance:none;">
                                <option disabled="disabled" selected="selected" style="display: none" value="">
                                </option>
                                <option>
                                    水電
                                </option>
                                <option>
                                    馬桶
                                </option>
                                <option>
                                    其他
                                </option>
                            </select>
                            <div class="help-block with-errors">
                            </div>
                        </div>
                        <div class="form-group field">
                            <label class="control-label main">
                                <span style="color:red;">
                                    *
                                </span>
                                修繕描述
                            </label>
                            <textarea class="form-control" data-error="請輸入修繕描述" id="reg_description" minlength="1" name="reg_description" placeholder="請輸入修繕描述" required="required" rows="6" type="text">
                            </textarea>
                            <div class="help-block with-errors">
                            </div>
                            <label class="control-label main">
                                <span class="labeltip">
                                    請上傳照片，讓師傅了解服務區域現況，以提供更精準的服務。
                                </span>
                            </label>
                            <div class="upload-pic-area">
                                <div class="repair-upload-area">
                                    <form action="/somewhere/to/upload" enctype="multipart/form-data">
                                        <div class="icon-trash">
                                            <i class="fa fa-trash-o">
                                            </i>
                                        </div>
                                        <input accept="image/jpg, image/gif, image/jpeg, image/png" id="repair-upload" multiple="" type="file">
                                            <div class="repair-upload-here" id="repair-upload-img">
                                                <i class="fa fa-image fa-2x">
                                                </i>
                                            </div>
                                        </input>
                                    </form>
                                </div>
                                <div class="repair-upload-area">
                                    <form action="/somewhere/to/upload" enctype="multipart/form-data">
                                        <div class="icon-trash">
                                            <i class="fa fa-trash-o">
                                            </i>
                                        </div>
                                        <input accept="image/jpg, image/gif, image/jpeg, image/png" id="repair-upload" multiple="" type="file">
                                            <div class="repair-upload-here" id="repair-upload-img">
                                                <i class="fa fa-image fa-2x">
                                                </i>
                                            </div>
                                        </input>
                                    </form>
                                </div>
                                <div class="repair-upload-area">
                                    <form action="/somewhere/to/upload" enctype="multipart/form-data">
                                        <div class="icon-trash">
                                            <i class="fa fa-trash-o">
                                            </i>
                                        </div>
                                        <input accept="image/jpg, image/gif, image/jpeg, image/png" id="repair-upload" multiple="" type="file">
                                            <div class="repair-upload-here" id="repair-upload-img">
                                                <i class="fa fa-image fa-2x">
                                                </i>
                                            </div>
                                        </input>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="form-group field">
                            <label class="control-label main" for="sel3">
                                <span style="color:red;">
                                    *
                                </span>
                                方便現勘時間
                            </label>
                            <section class="section" data-error="請選擇方便現勘時間" style="background: url(assets/img/ui/arrow.png) no-repeat right center transparent !important;">
                                <form>
                                    <fieldset>
                                        <input autofocus="" class="datepicker" id="input_01" name="date" type="text">
                                        </input>
                                    </fieldset>
                                </form>
                                <div id="container">
                                </div>
                            </section>
                            <div class="help-block with-errors">
                            </div>
                        </div>
                        <div class="form-group field">
                            <label class="control-label main" for="sel3">
                                <span style="color:red;">
                                    *
                                </span>
                                方便現勘時段
                            </label>
                            <div class="period-area" data-error="請選擇方便現勘時段">
                                <ul class="period">
                                    <li class="perio-item">
                                        上午
                                    </li>
                                    <li class="perio-item active">
                                        下午
                                    </li>
                                    <li class="perio-item">
                                        晚上
                                    </li>
                                </ul>
                            </div>
                            <div class="help-block with-errors">
                            </div>
                        </div>
                        <div class="form-group field">
                            <label class="control-label main">
                                備註
                            </label>
                            <textarea class="form-control" id="usr_regnote" maxlength="3000" minlength="1" name="usr_regnote" placeholder="請輸入備註" required="" rows="4" type="text">
                            </textarea>
                        </div>
                        <button class="bottom-align-next nextBtn" type="button">
                            <p>
                                下一步：確認託管資訊
                            </p>
                        </button>
                    </div>
                    <div class="setup-content" id="step-3" style="display: none;">
                        <div class="repair-confirm-area">
                            <div class="repair-confirm-tit">
                                報修人資料
                            </div>
                            <ul class="repair-confirm">
                                <li>
                                    <span class="repair-confirm-item">
                                        姓名
                                    </span>
                                    <span class="repair-confirm-content">
                                        王小明
                                    </span>
                                </li>
                                <li>
                                    <span class="repair-confirm-item">
                                        電話
                                    </span>
                                    <span class="repair-confirm-content">
                                        0912345678
                                    </span>
                                </li>
                                <li>
                                    <span class="repair-confirm-item">
                                        社區
                                    </span>
                                    <span class="repair-confirm-content">
                                        大大社區
                                    </span>
                                </li>
                                <li>
                                    <span class="repair-confirm-item">
                                        地址
                                    </span>
                                    <span class="repair-confirm-content">
                                        10074 台北市中正區南昌路一段110 號 6 樓
                                    </span>
                                </li>
                                <li>
                                    <span class="repair-confirm-item">
                                        E-mail
                                    </span>
                                    <span class="repair-confirm-content">
                                    </span>
                                </li>
                                <li>
                                    <span class="repair-confirm-item">
                                        傳真
                                    </span>
                                    <span class="repair-confirm-content">
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="repair-confirm-area">
                            <div class="repair-confirm-tit">
                                修繕資訊
                            </div>
                            <ul class="repair-confirm">
                                <li>
                                    <span class="repair-confirm-item">
                                        項目
                                    </span>
                                    <span class="repair-confirm-content">
                                        水電
                                    </span>
                                </li>
                                <li>
                                    <span class="repair-confirm-item">
                                        描述
                                    </span>
                                    <span class="repair-confirm-content">
                                        修繕描述，修繕描述修繕描述，修繕描述修繕描述修繕描述修繕描述 修繕描述，修繕描述修繕描述，修 繕描述修繕描述修繕描述。
                                    </span>
                                </li>
                                <li>
                                    <div class="repair-confirm-img" data-lity="" href="assets/img/img1.jpg">
                                        <img alt="" src="assets/img/img1.jpg">
                                        </img>
                                    </div>
                                    <div class="repair-confirm-img" data-lity="" href="assets/img/img2.jpg">
                                        <img alt="" src="assets/img/img2.jpg">
                                        </img>
                                    </div>
                                    <div class="repair-confirm-img" data-lity="" href="assets/img/img3.jpg">
                                        <img alt="" src="assets/img/img3.jpg">
                                        </img>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="repair-confirm-area">
                            <div class="repair-confirm-tit">
                                現堪資訊
                            </div>
                            <ul class="repair-confirm">
                                <li>
                                    <span class="repair-confirm-item">
                                        方便現勘時間
                                    </span>
                                    <span class="repair-confirm-content">
                                        2020-03-30
                                    </span>
                                </li>
                                <li>
                                    <span class="repair-confirm-item">
                                        方便現勘時段
                                    </span>
                                    <span class="repair-confirm-content">
                                        下午
                                    </span>
                                </li>
                                <li>
                                    <span class="repair-confirm-item">
                                        備註
                                    </span>
                                    <span class="repair-confirm-content">
                                        備註備註備註備註。
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <button class="bottom-align-next nextBtn" id="finalsubmit" type="button">
                            <p>
                                確認送出
                            </p>
                        </button>
                    </div>
                    <!--=== START-置底button ===-->
                    <div class="bottom-align-close">
                        <a href="exit.php">
                            <p>
                                關閉
                            </p>
                        </a>
                    </div>
                    <!--=== END-置底button ===-->
                </form>
            </div>
        </div>
        <!--=== END-修繕服務列表 ===-->
        <!-- js -->
        <script src="https://code.jquery.com/jquery-1.11.1.min.js">
        </script>
        <!-- js-popup -->
        <script src="assets/js/lity.js" type="text/javascript">
        </script>
        <!-- js-Step form -->
        <script src="assets/js/form.js" type="text/javascript">
        </script>
        <script src="assets/js/validator.min.js" type="text/javascript">
        </script>
        <!-- js-Step2 上傳 -->
        <script>
            $("#repair-upload").change(function(){
        $("#repair-upload-img").php(""); // 清除預覽
        readURL(this);
    });

    function readURL(input){
        if (input.files && input.files.length >= 0) {
            for(var i = 0; i < input.files.length; i ++){
                var reader = new FileReader();
                reader.onload = function (e) {
                    var img = $("<img width='80' height='80'>").attr('src', e.target.result);
                    $("#repair-upload-img").append(img);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }else{
            //var noPictures = $("<p>目前沒有圖片</p>");
            $("#repair-upload-img").append(noPictures);
        }
    }
        </script>
        <!-- js-Step2 日期 -->
        <script src="assets/js/picker.js" type="text/javascript">
        </script>
        <script src="assets/js/picker.date.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        if(dd<10) {
            dd='0'+dd;
        } 
        if(mm<10) {
            mm='0'+mm;
        } 
        today = dd+'/'+mm+'/'+yyyy;
        
        var $input = $( '.datepicker' ).pickadate({
            formatSubmit: 'yyyy/mm/dd',
            // min: [2015, 7, 14],
            container: '#container',
            // editable: true,
            closeOnSelect: false,
            closeOnClear: false,
        })

        var picker = $input.pickadate('picker')
        // picker.set('select', '14 October, 2014')
        // picker.open()

        // $('button').on('click', function() {
        //     picker.set('disable', true);
        // });
        </script>
    </body>
</html>