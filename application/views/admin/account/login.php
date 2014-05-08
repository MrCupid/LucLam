


<!DOCTYPE html>

<html style="background-color: #F8F8F8">
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Foody.vn for Business Manager - Login</title>
    <link href="/Content/css?v=QqKRs3GwJrvvq7VT5nxbl0LSok2_AN3IL9Wuzahy49Y1" rel="stylesheet"/>

    <script src="/bundles/jquery?v=1A_Qqa6eu1hIFc9O--lfxRqvbqGj9Zd6uAr93zLdrWM1"></script>

    <script src="/bundles/jqueryui?v=gANMrjbYg4plVqlM67k9xKbQ-VhB8bv2R2Xa-ZcLz5k1"></script>

    <link href="/Content/themes/base/css?v=yUn8lfPquuNHA9257EWnugLiSqrCb7gAjVq85_6olZw1" rel="stylesheet"/>

    <style type="text/css">
        #maia-header {
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #fafafa), color-stop(1, #f5f5f5));
            border-bottom: 1px solid #eee;
            color: #444;
            min-height: 44px;
            padding: 14px 15px 13px;
            margin: 0 -15px;
            display: block;
            font-size: 13px;
            line-height: 1.54;
            font-family: arial, sans-serif;
        }
        .maia-aux {
            margin: auto;
            max-width: 978px;
            display: block;
        }
        .maia-aux:after {
            clear: both;
            content: " ";
            display: block;
            height: 0;
            visibility: hidden;
            left: 100%;
            width: 100%;
        }
        #maia-header h1, #maia-header h1 a {
            color: #63666a;
        }
        #maia-header h1 {
            float: left;
            line-height: 1.375;
            margin: 0;
            padding-bottom: 0;
            font-family: "open sans",arial,sans-serif;
            display: block;
            -webkit-margin-before: 0.67em;
            -webkit-margin-after: 0.67em;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;
        }
        #maia-header h1 a {
            text-decoration: none;
        }
        #maia-header h1 img {
            margin: -1px 0 -4px;
            vertical-align: middle;
            border: 0;
        }
    </style>
    
    <!-- live chat -->
    <script type='text/javascript'>(function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://widget.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({ c: 'f7a9664c-9b61-4ba9-ae50-1f452cc6f36b', f: true }); done = true; } }; })();</script>
</head>
<body style="font-size: 14px">
    <div class="maia-header" id="maia-header" role="banner" aria-hidden="false" style="background:#fff;margin:0 auto;padding:0 15px 0;">
        <div class="maia-aux">
            <h1 style="font-weight:normal;font-size:16px;margin-top:8px;">
                <a href="/">
                    <img alt="Foody" src="http://static.foody.vn/style/images/icon-logo.png" style="float:left; margin-right:5px;">
                    <span style="float:left; margin-top:6px;">cho doanh nghiệp</span></a>
            </h1>
        </div>
    </div>
<form action="/account/login" method="post">        <div style="clear:both;height:40px;font-size: 0px"></div>
        <div class="login-container">
            
            <span class="login-header" style="font-weight:bold;">Đăng nhập hệ thống</span>
            <div style="clear:both;height:15px;font-size: 0px"></div>
            <span class="login-tips" style="font-style:italic;">Bạn có thể đăng nhập bằng tài khoản trên Foody.vn</span>
            <div style="clear:both;height:10px;font-size: 0px"></div>
            <div class="login-inner-container">
                <input data-val="true" data-val-required="*" id="Email" name="Email" placeholder="Email" required="True" type="text" value="" />
                <div style="clear:both;height:5px;font-size: 0px"></div>
                <input data-val="true" data-val-required="*" id="Password" name="Password" placeholder="Password" required="True" type="password" />
                <div style="clear:both;height:5px;font-size: 0px"></div>
                <label style="float:left">
                    <input checked="checked" id="RememberMe" name="RememberMe" type="checkbox" value="true" /><input name="RememberMe" type="hidden" value="false" />
                    Nhớ tài khoản trên máy tính này
                </label>
                <div style="clear:both;height:10px;font-size: 0px"></div>
                <div style="font-weight: normal !important; margin-bottom: 10px;" class="validation-summary-container"></div>
                <input type="submit" id="btnLogin" value="Đăng nhập" class="login-click-button"/>
                <div style="clear:both;height:15px;font-size: 0px"></div>
                <span class="login-register-link">
                    <a href="/account/register">Đăng ký</a></span> nếu bạn chưa có tài khoản.
                </span>
            </div>
            <div style="clear:both;height:10px;font-size: 0px"></div>
            <a class="btn" href="/common/changelanguage?code=en&amp;returnUrl=http://manager.foody.vn/account/login"
               style="color: #222">
                <img src="/Content/Images/icons/flag_en.jpg" />
                English</a>
            <a class="btn btn-active" href="/common/changelanguage?code=vn&amp;returnUrl=http://manager.foody.vn/account/login"
               style="color: #222">
                <img src="/Content/Images/icons/flag_vi.jpg" />
                Vietnamese</a>
        </div>
        <div style="clear:both"></div>
</form></body>
</html>