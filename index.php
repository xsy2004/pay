
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>在线餐费收取</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//cdn.staticfile.org/mdui/0.4.1/css/mdui.min.css">
    <link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//cdn.staticfile.org/mdui/0.4.1/js/mdui.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>

    a{
        text-decoration:none;
    }
</style>
<body>
<div class="mdui-container-fluid">
    <div class="mdui-tab mdui-tab-full-width" mdui-tab>
        <a href="#tab2" class="mdui-ripple">支付渠道</a>
        <a href="#tab1" class="mdui-ripple" disabled>用餐人数统计</a>
        <a href="#tab3" class="mdui-ripple">关于</a>
    </div>

    <div id="tab1" class="mdui-p-a-2">
        <div class="mdui-text-center">
            <h1>待完善</h1>
        </div>
    </div>
    <div id="tab2" class="mdui-p-a-2">
        <div class="mdui-text-center">
            <h1>支付渠道</h1>
            <br><div class="mdui-divider"></div><br><br>
            <p>您可以通过：</p>
            <p>支付宝</p>
            <p>微信</p>
            <p>支付餐费</p>
        </div>
        <br><br>
        <div class="mdui-row">
            <div class="mdui-col-xs-6">
                <div class="mdui-card mdui-hoverable">
                    <div class="mdui-card-media">
                        <img class="mdui-img-fluid photo" src="https://ww2.sinaimg.cn/large/ed039e1fgy1fvodjbb5fpj208c08cwej"/>
                    </div>
                    <div class="mdui-card-actions">
                        <a href="HTTPS://QR.ALIPAY.COM/FKX07661YHSFIADTZ3QOF3">
                            <button class="mdui-btn mdui-ripple">跳转支付</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mdui-col-xs-6">
                <div class="mdui-card mdui-hoverable">
                    <div class="mdui-card-media">
                        <img class="mdui-img-fluid photo" src="https://ww2.sinaimg.cn/large/ed039e1fgy1fvodjzv5axj208c08c0sp"/>
                    </div>
                    <!-- 卡片的内容 -->
                    <div class="mdui-card-content">微信不支持跳转</div>
                </div>
            </div>
        </div>

    </div>
    <div id="tab3" class="mdui-p-a-2">

        <div class="mdui-row">
            <div class="mdui-col-sm-12">
                <div class="mdui-card mdui-shadow-7" mdui-tooltip="{content: '我最菜，别看了'}">
                    <!-- XSY大辣鸡 -->
                    <div class="mdui-card-header">
                        <img class="mdui-card-header-avatar mdui-img-fluid" src="https://ww2.sinaimg.cn/large/ed039e1fgy1fv9is11ly3j2046046gln"/>
                        <div class="mdui-card-header-title">XSY</div>
                        <div class="mdui-card-header-subtitle">网页开发</div>
                    </div>

                    <!-- 卡片的内容 -->
                    <div class="mdui-card-content">我很菜的</div>
                </div>
            </div>
        </div>
            <br><br><br>
        <div class="mdui-panel" mdui-panel="{accordion: true}">
            <div class="mdui-panel-item mdui-panel-item-open">
                <div class="mdui-panel-item-header">CDN仓库，图床，开源框架</div>
                <div class="mdui-panel-item-body">
                    <ul class="mdui-list">

                        <li class="mdui-list-item mdui-ripple">
                            <i class="mdui-list-item-icon mdui-icon fa fa-bolt" aria-hidden="true"></i>
                            <div class="mdui-list-item-content">Staticfile CDN</div>
                        </li>

                        <li class="mdui-list-item mdui-ripple">
                            <i class="mdui-list-item-icon mdui-icon fa fa-weibo" aria-hidden="true"></i>
                            <div class="mdui-list-item-content">微博图床</div>
                        </li>

                        <li class="mdui-list-item mdui-ripple">
                            <i class="mdui-list-item-icon mdui-icon material-icons">&#xe86f;</i>
                            <div class="mdui-list-item-content">MDUI</div>
                        </li>

                        <li class="mdui-list-item mdui-ripple">
                            <i class="mdui-list-item-icon mdui-icon fa fa-bookmark"></i>
                            <div class="mdui-list-item-content">一言</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
<br><br><br>
    <footer>
        <!-- 一言 -->
        <script src="//v1.hitokoto.cn/?encode=js&select=%23hitokoto" defer></script>
        <div class="mdui-text-center">
            <p id="hitokoto" class="footer-copyright">:D 获取中...</p>
            © 2016-2018 <a href="https://xsy.cool/" target="_blank">XSY</a>丨All Rights Reserved
        </div>
    </footer>

</div>
</body>
</html>