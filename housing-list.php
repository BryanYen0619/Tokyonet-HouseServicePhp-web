<?php include_once 'layouts/header.php';?>
    <!--=== START-Navigetion Bar ===-->
    <div id="navbar">
        <div class="navbar-group">
            <div class="navbarui-left">
                <a href="index.php">
                    <img class="img-fluid" src="assets/img/ui/fa-chevron-left.png"/>
                </a>
            </div>
            <div class="navbarui-mid">
                <p>
                    房屋租管
                </p>
            </div>
            <div class="navbarui-right">
            </div>
        </div>
    </div>
    <!--=== END-Navigetion Bar ===-->
    <!--=== START-修繕服務列表 ===-->
    <div id="repair-list">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a href="housing-content.php">
                    <div class="list-group-ui-left">
                        <img class="img-fluid" src="assets/img/ui/fa-wrench.png">
                        </img>
                    </div>
                    <div class="list-group-font">
                        <p class="list-group-title">
                            出售
                        </p>
                        <p class="list-group-time">
                            2020-04-13
                        </p>
                    </div>
                    <div class="list-group-ui-right">
                        <img class="img-fluid" src="assets/img/ui/fa-chevron-right.png">
                        </img>
                    </div>
                </a>
            </li>
            <li class="list-group-item">
                <a href="housing-content.php">
                    <div class="list-group-ui-left">
                        <img class="img-fluid" src="assets/img/ui/fa-wrench.png">
                        </img>
                    </div>
                    <div class="list-group-font">
                        <p class="list-group-title">
                            出售
                        </p>
                        <p class="list-group-time">
                            2020-03-30
                        </p>
                    </div>
                    <div class="list-group-ui-right">
                        <img class="img-fluid" src="assets/img/ui/fa-chevron-right.png">
                        </img>
                    </div>
                </a>
            </li>
            <li class="list-group-item">
                <a href="housing-content.php">
                    <div class="list-group-ui-left">
                        <img class="img-fluid" src="assets/img/ui/fa-wrench.png">
                        </img>
                    </div>
                    <div class="list-group-font">
                        <p class="list-group-title">
                            代管
                        </p>
                        <p class="list-group-time">
                            2020-03-09
                        </p>
                    </div>
                    <div class="list-group-ui-right">
                        <img class="img-fluid" src="assets/img/ui/fa-chevron-right.png">
                        </img>
                    </div>
                </a>
            </li>
            <li class="list-group-item">
                <a href="housing-content.php">
                    <div class="list-group-ui-left">
                        <img class="img-fluid" src="assets/img/ui/fa-wrench.png">
                        </img>
                    </div>
                    <div class="list-group-font">
                        <p class="list-group-title">
                            出租
                        </p>
                        <p class="list-group-time">
                            2020-01-29
                        </p>
                    </div>
                    <div class="list-group-ui-right">
                        <img class="img-fluid" src="assets/img/ui/fa-chevron-right.png">
                        </img>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!--=== END-修繕服務列表 ===-->
    <!--=== START-置底button ===-->
    <div class="bottom-align-next">
        <a href="housing-step.php">
            <p>
                新增服務
            </p>
        </a>
    </div>
    <div class="bottom-align-close">
        <a href="exit.php">
            <p>
                關閉
            </p>
        </a>
    </div>
    <!--=== END-置底button ===-->
<?php include_once 'layouts/footer.php';?>

<script>
    let actionUrl = 'includes/services.php';
    let server = "https://isearchapi.liveplates.com/app/";

    var urlParams = new URLSearchParams(window.location.search);

    if (urlParams.has('community_id')) {
        community_id = urlParams.get('community_id');
    } else {
        community_id = null;
    }

    if (urlParams.has('user_id')) {
        user_id = urlParams.get('user_id');
    }else {
        user_id = null;
    }

    $(document).ready(function () {
        if (community_id != null && user_id != null) {
            getList(community, account);
        } else {
            alert("參數不足");
        }
    });

    function getList(community, account) {

        var callback = function (result) {
            dataArray = result[community];

            var htmlList = '';

            for (var i = 0; i < dataArray.length; i++) {
                var item = dataArray[i];

                var statusHtml = '';
                var link = '';
                if (item.status === '請洽櫃檯') {
                    statusHtml = '<p class="list-group-time status-ask">' + item.status + '</p>';
                } else if (item.status === '已繳費') {
                    statusHtml = '<p class="list-group-time status-done">' + item.status + '</p>';
                } else {    // 未繳費
                    statusHtml = '<p class="list-group-time status-none">' + item.status + '</p>';
                }

                var htmlItem =
                        '<li class="list-group-item">' +
                        '<button id="list_' +item.id + '">' +
                        '<div class="list-group-font">' +
                        '<p class="list-group-title">' + item.name + '</p>' +
                        '<p class="list-group-time">截止日期 : ' + item.end_time + '</p>' +
                        '<p class="list-group-time">應繳金額 : $' + item.amount_payable + '</p>' +
                        '</div>' +
                        '<div class="list-group-ui-right">' +
                        statusHtml +
                        '</div>' +
                        '</button>' +
                        '</li>';

                        

                $('#list').append(htmlItem);

                // setListener
                var idLink = "#list_" + item.id;
                $(idLink).click(function(){
                    var contentPanelId = jQuery(this).attr("id");
                    window.location.href= getDetailLinkAndBundle(contentPanelId); //需要跳轉的地址
                });
            }
        };

        ajaxPostRequestPayment(actionUrl, {'community': community, 'account': account, 'type': 'paymentList'}, callback);

    }

    function getDetailLinkAndBundle(requestIdLink) {
        console.log(requestIdLink);
        for (var i = 0; i < dataArray.length; i++) {

            var item = dataArray[i];

            var id = item.id;
            var idLink = "list_" + id;
            var listURL ='';
            var searchParams;
            if (item.status == '請洽櫃檯' || item.status == '已繳費') {
                searchParams = new URLSearchParams({
                    order_id:item.id,
                    name: item.name,
                    end_time: item.end_time ,
                    amount_paid: item.amount_payable,
                    status: item.status,
                    payment_way_name :item.payment_way_name,
                    pay_time:item.pay_time
                });
                listURL = new URL(server+'detail.php');
            } else {    // 未繳費
                searchParams = new URLSearchParams({
                    order_id:item.id,
                    name: item.name,
                    end_time: item.end_time ,
                    amount_paid: item.amount_payable,
                    status: item.status,
                    virtual_account_id :item.virtual_account_id,
                    community_name:communityName,
                    account:account
                });
                listURL = new URL(server+'category.php');
            }

            if (requestIdLink === idLink) {
                listURL.search = searchParams;
                return listURL.href;
            }
        }
    }

    /* post action */
    function ajaxPostRequest(url, data, callback = null) {
//    $.blockUI();
        $.post(url, data, function (result) {

            if (result.errorcode == '0') {
                callback(result);
            }
        }).done(function () {
//        $.unblockUI();
        });
    }

    function ajaxPostRequestPayment(url, data, callback = null) {
//    $.blockUI();
        $.post(url, data, function (result) {
            callback(result);
        }).done(function () {
//        $.unblockUI();
        });
    }

    function ajaxPostResponse() {

    }

</script>

</body>
</html>