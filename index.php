<?php include_once 'layouts/header.php';?>

    <!--=== START-Navigetion Bar ===-->
    <div id="navbar">

        <div class="navbar-group">
            <div class="navbarui-left">
                <!-- <a href="#"><img src="img/ui/fa-chevron-left.png" class="img-fluid"></a> -->
            </div>

            <div class="navbarui-mid">
                <p>首頁</p>
            </div>

            <div class="navbarui-right">
                
            </div>
        </div>

    </div>
    <!--=== END-Navigetion Bar ===-->    
<div id="content">
<section class="main-content">
    <!--=== START-列表 ===-->
    <div id="repair-list">

        <ul class="list-group list-group-flush">
            
            <li class="list-group-item">
                <a href="repair-list.php">
                    <div class="list-group-ui-left">
                         <img src="assets/img/ui/fa-wrench-gary.png" class="img-fluid">
                    </div>
                    <div class="list-group-font">
                        <p class="list-group-title">修繕服務</p>
                        <!-- <p class="list-group-time">2020-04-13</p> -->
                    </div>
                    <div class="list-group-ui-right">
                         <img src="assets/img/ui/fa-chevron-right.png" class="img-fluid">
                    </div>
                </a>
            </li>
            
            <li class="list-group-item">
                <a href="housing-list.php">
                    <div class="list-group-ui-left">
                         <img src="assets/img/ui/fa-wrench-gary.png" class="img-fluid">
                    </div>
                    <div class="list-group-font">
                        <p class="list-group-title">房屋租管</p>
                        <!-- <p class="list-group-time">2020-03-09</p> -->
                    </div>
                    <div class="list-group-ui-right">
                         <img src="assets/img/ui/fa-chevron-right.png" class="img-fluid">
                    </div>
                </a>
            </li>       
            
            <!-- <li class="list-group-item">
                <a href="repair-content.php">
                    <div class="list-group-ui-left">
                         <img src="img/ui/fa-wrench-gary.png" class="img-fluid">
                    </div>
                    <div class="list-group-font">
                        <p class="list-group-title">其他</p>
                        <p class="list-group-time">2020-01-29</p>
                    </div>
                    <div class="list-group-ui-right">
                         <img src="img/ui/fa-chevron-right.png" class="img-fluid">
                    </div>
                </a>
            </li> -->
             
        </ul>  

    </div>
    <!--=== END-修繕服務列表 ===-->

    <!--=== START-置底button ===-->
   <!--  <div class="bottom-align-next">
        <a href="repair-step.php"><p>新增服務</p></a>
    </div> -->
    <!-- <div class="bottom-align-close">
        <p>關閉</p>
    </div> -->
    <!--=== END-置底button ===-->    

    </section>
</div>
<!-- ============= END main ============= -->
<?php include_once 'layouts/footer.php';?>

<script>
    let actionUrl = 'includes/services.php';
    let server = "https://isearch.liveplates.com/quick_payment/";

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
        if (community_id == null && user_id == null) {
            community_id = 1100580014;
            user_id = 105382;
            //測試模式
            // alert("參數不足");
        }

        // init(community, communityNmae, user, account, address);

    });

   // function init(community, communityNmae, user, account, address) {
   //      let searchParams = new URLSearchParams({
   //        community: community,
   //        community_name: communityNmae,
   //        user: user,
   //        account: account
   //      });

   //      $('#paymentList').click(function() {
   //          const listURL = new URL(server+'list.php');
   //          listURL.search = searchParams;

   //          window.location.href= listURL.href; //需要跳轉的地址
   //      });
   //      $('#invoiceList').click(function() {
   //          const invoiceURL = new URL(server+'invoice.php');
   //          invoiceURL.search = searchParams;
   //          window.location.href= invoiceURL.href; //需要跳轉的地址
   //      });

   //      $('#account').text(account);
   //      $('#community-name').text(communityNmae);
   //      $('#community-address').text(address);
   //  }

</script>

</body>
</html>
