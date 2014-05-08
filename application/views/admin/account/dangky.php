<!DOCTYPE html>

<html style="background-color: #F8F8F8">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width" />
    <title><?=lang('dangky')?> | Lục Lam Admin</title>
    <link href="<?=base_url();?>static/Content/css.css" rel="stylesheet"/>

    <script src="<?=base_url();?>static/bundles/jquery.js"></script>

    <script src="<?=base_url();?>static/bundles/jqueryui.js"></script>

    <link href="<?=base_url();?>static/Content/themes/base/css.css" rel="stylesheet"/>

    <script type="text/javascript" src="<?=base_url();?>static/scripts/common.js"></script>
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

    <!-- live chat     <script type='text/javascript'>(function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://widget.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({ c: 'f7a9664c-9b61-4ba9-ae50-1f452cc6f36b', f: true }); done = true; } }; })();</script> -->

</head>
<body style="font-size: 14px">
    <div class="maia-header" id="maia-header" role="banner" aria-hidden="false" style="background:#fff;margin:0 auto;padding:0 15px 0;">
        <div class="maia-aux">
            <h1 style="font-weight:normal;font-size:16px;margin-top:8px;">
                <a href="/">
                    <img alt="Foody" src="<?=base_url();?>static/style/images/icon-logo.png" style="float:left; margin-right:5px;">
                    <span style="float:left; margin-top:6px;">cho doanh nghiệp</span></a>
            </h1>
        </div>
    </div>
<form action="/Account/Register" id="registerForm" method="post">        <div style="clear:both;height:40px;font-size: 0px"></div>
        <div class="login-container">

            <span class="login-header" style="font-weight:bold;">Đăng ký tài khoản</span>
            <div style="clear:both;height:15px;font-size: 0px"></div>

            <div style="clear:both;height:10px;font-size: 0px"></div>
            <div class="login-inner-container" style="width: 322px">
                <div class="msg-container-error" id="msgErrorContainer" style="display: none; padding:10px 20px; clear: both"></div>
                <div>
                    <input class="field" data-val="true" data-val-required="Nhập tên" errorMsg="Nhập tên" id="txtFirstName" name="FirstName" placeholder="Tên" require="true" type="text" value="" />
                    <span class="field-status"></span>
                </div>
                <div style="clear:both;height:5px;font-size: 0px"></div>
                <div>
                    <input class="field" data-val="true" data-val-required="Nhập họ" errorMsg="Nhập họ" id="txtLastName" name="LastName" placeholder="Họ" require="true" type="text" value="" />
                    <span class="field-status"></span>
                </div>
                <div style="clear:both;height:5px;font-size: 0px"></div>
                <div>
                    <input type="email" name="Email" require="true" id="txtEmail" class="field" errormsg="Nhập email" errormsg-email="Email kh&#244;ng hợp lệ" placeholder="Email" />
                    <span class="field-status"></span>
                </div>
                <div style="clear:both;height:5px;font-size: 0px"></div>
                <div>
                    <input type="password" name="Password" require="true" id="txtPassword" maxlength="20" class="field" errormsg="Nhập mật khẩu" errormsg-min="Mật khẩu phải từ 4 đến 20 k&#237; tự" placeholder="Mật khẩu" />
                    <span class="field-status"></span>
                </div>
                <div style="clear:both;height:5px;font-size: 0px"></div>
                <div>
                    <input type="password" name="ConfirmPassword" require="true" id="txtConfirmPassword" maxlength="20" equalto="txtPassword" class="field" errormsg="Nhập mật khẩu x&#225;c nhận" errormsg-min="Mật khẩu phải từ 4 đến 20 k&#237; tự" errormsg-compare="Mật khẩu x&#225;c nhận kh&#244;ng tr&#249;ng khớp" placeholder="Nhập lại mật khẩu" />
                    <span class="field-status"></span>
                </div>
                <div style="clear:both;height:5px;font-size: 0px"></div>
                <div>
                    <input class="field" errorMsg="Nhập điện thoại liên hệ" id="txtPhone" name="Phone" placeholder="Điện thoại di động" require="true" type="text" value="" />
                    <span class="field-status"></span>
                </div>
                <div style="clear:both;height:5px;font-size: 0px"></div>
                <div>
                    <input class="field" errorMsg="Nhập địa chỉ liên hệ" id="txtAddress" name="Address" placeholder="Địa chỉ" require="true" type="text" value="" />
                    <span class="field-status"></span>
                </div>
                <div style="clear:both;height:5px;font-size: 0px"></div>
                <label style="float:left">
                    <input checked="checked" data-val="true" data-val-required="&#39;Term And Condition&#39; must not be empty." errorMsg="First Name" id="cbAgree" name="TermAndCondition" require="true" style="width:20px; border:none; background:none; height:15px;" type="checkbox" value="true" /><input name="TermAndCondition" type="hidden" value="false" />
                    <span>Tôi đồng ý với các <a href="/support/privacy" style="text-decoration:underline;">điều khoản</a> của Foody</span>
                </label>
                <div style="clear:both;height:5px;font-size: 0px"></div>
                <label style="float:left">
                    Bạn đã có tài khoản? Vui lòng <a href="/account/login" style="text-decoration: underline">Đăng nhập</a>
                </label>
                <div style="clear:both;height:10px;font-size: 0px"></div>
                <input type="button" id="btnSubmit" class="login-click-button" value="Đăng k&#253; t&#224;i khoản" />
                <div style="clear:both"></div>
            </div>
            <div style="clear:both;height:10px;font-size: 0px"></div>
            <a class="btn" href="/common/changelanguage?code=en&amp;returnUrl=http://manager.foody.vn/account/register"
               style="color: #222">
                <img src="<?=base_url();?>static/Content/Images/icons/flag_en.jpg" />
                English</a>
            <a class="btn btn-active" href="/common/changelanguage?code=vn&amp;returnUrl=http://manager.foody.vn/account/register"
               style="color: #222">
                <img src="<?=base_url();?>static/Content/Images/icons/flag_vi.jpg" />
                Vietnamese</a>
        </div>
        <div style="clear:both"></div>
</form>
    <script type="text/javascript">
        var isCheckingEmail = false;
        jQuery.fn.validateElement = function (errorClass) {
            var $this = $(this);
            var isValid = true;
            var msg = $this.attr('errorMsg');
            if ($this.attr('require')) {
                if ($.trim($this.val()) == '') {
                    isValid = false;
                } else {
                    if ($this.attr('type') == 'email') {
                        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                        ///^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/;
                        if (!emailPattern.test($this.val())) {
                            isValid = false;
                            msg = $this.attr('errorMsg-email');
                        } else {
                            if (!isCheckingEmail) {
                                isCheckingEmail = true;
                                $.post('/account/isvalidfield',
                                    {
                                        fieldType: 'email',
                                        fieldName: 'Email',
                                        fieldValue: $this.val()
                                    },
                                    function (data) {
                                        isCheckingEmail = false;
                                        isValid = data.isValid;
                                        msg = data.message;
                                        $this.closest('div').find('.' + errorClass).each(function () {
                                            if (isValid) {
                                                $(this).addClass("valid");
                                                $(this).removeClass("error");
                                                $(this).removeAttr('title');
                                            } else {
                                                $(this).addClass("error");
                                                $(this).removeClass("valid");
                                                $(this).attr('title', msg);

                                            }
                                        });
                                        return isValid;
                                    }
                                );
                            }
                        }
                    } else if ($this.attr('type') == 'password') {
                        if ($this.val().length < 4) {
                            isValid = false;
                            msg = $this.attr('errorMsg-min');
                        } else if ($this.attr('equalTo')) {
                            if ($this.val() != $('#' + $this.attr('equalTo')).val()) {
                                isValid = false;
                                msg = $this.attr('errorMsg-compare');
                            }
                        }
                    }
                }
                $this.closest('div').find('.' + errorClass).each(function () {
                    if (isValid) {
                        $(this).addClass("valid");
                        $(this).removeClass("error");
                        $(this).removeAttr('title');
                    } else {
                        $(this).addClass("error");
                        $(this).removeClass("valid");
                        $(this).attr('title', msg);

                    }
                });
            }
            return isValid;
        };

        var isValidMail = false;

        function checkEmail(input, callback) {
            var $this = $(input);
            if (!isCheckingEmail) {
                isCheckingEmail = true;
                $.post(
                    '/Account/IsValidField',
                    {
                        fieldType: 'email',
                        fieldName: 'Email',
                        fieldValue: $this.val()
                    },
                    function (data) {
                        var msg = data.message;
                        $this.closest('div').find('.field-status').each(function () {
                            if (data.isValid) {
                                $(this).addClass("valid");
                                $(this).removeClass("error");
                                $(this).removeAttr('title');

                            } else {
                                $(this).addClass("error");
                                $(this).removeClass("valid");
                                $(this).attr('title', msg);

                            }
                        });
                        isCheckingEmail = false;
                        if (typeof (callback) != 'undefined')
                            callback(data);
                    }
                );
            }
        }

        function validForm() {
            var isValid = true;

            $('.field').each(function () {
                if (($(this).val() == '' && $(this).attr("type") == 'email') || $(this).attr("type") != 'email') {
                    if (!$(this).validateElement('field-status'))
                        isValid = false;
                }
            });
            return isValid;
        }

        var isValidating = false;
        $(function () {
            $('.field').live("blur", function () {
                $(this).validateElement('field-status');
            });
            $('#btnSubmit').click(function () {
                isValidating = true;
                if (!$('#cbAgree').is(":checked")) {
                    ShowCustomErrorMessage("Bạn phải đồng ý với các điều khoản của Foody để có thể đăng ký sử dụng hệ thống");
                    $('#cbAgree').focus();
                    isValidating = false;
                    return false;
                }
                var isValid = validForm();
                if (isValid) {
                    checkEmail(document.getElementById('txtEmail'), function (data) {
                        isValidating = false;
                        if (data.isValid) {
                            $('#registerForm').submit();
                        } else {
                            ShowCustomErrorMessage(data.message);
                        }
                    });
                    isValidating;
                } else {

                    ShowCustomErrorMessage("Thông tin không hợp lệ");
                    isValidating;
                    return false;
                }
                return false;
            });
        });
        //// propose username by combining first- and lastname
        //$("#username").focus(function () {
        //    var firstname = $("#firstname").val();
        //    var lastname = $("#lastname").val();
        //    if (firstname && lastname && !this.value) {
        //        this.value = firstname + "." + lastname;
        //    }
        ////});

        ////code to hide topic selection, disable for demo
        //var newsletter = $("#newsletter");
        //// newsletter topics are optional, hide at first
        //var inital = newsletter.is(":checked");
        //var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        //var topicInputs = topics.find("input").attr("disabled", !inital);
        //// show when newsletter is checked
        //newsletter.click(function () {
        //    topics[this.checked ? "removeClass" : "addClass"]("gray");
        //    topicInputs.attr("disabled", !this.checked);
        //});

    </script>
</body>
</html>