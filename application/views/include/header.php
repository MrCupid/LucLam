    <body>
        <header class="header">
            <div id="float-header" style="position: fixed; z-index: 1000; width: 100%;">
                <div class="container-s">
                    <div class="container-f">
                        <div class="logo">
                            <div style="float:left;margin:9px 10px 0 0;">
                                <a href="/luclam">
                                <img src="<?=base_url()?>static/style/images/icon-logo.png" alt="Lục Lam" />
                                <!-- women day -->
                                <!-- end women day -->
                                </a>
                            </div>
                        </div>
                        <div class="search-bar-top" style="position:relative">
                            <div class="city-selectors">
                                <dl class="dropdown1">
                                    <dt>
                                    <a href="javascript:void(0)"><span class="text">TP. HCM</span><span class="value">ho-chi-minh</span></a>
                                    </dt>
                                    <dd>
                                    <ul>
                                        <li class="arrow"></li>
                                        <li class="drop_head">Toàn quốc<span id="totalrescount">63,384</span></li>
                                        <li><a href="/ho-chi-minh">
                                            TP. HCM<span class="d-right">
                                            24,469
                                            </span></a>
                                        </li>
                                        <li><a href="/ha-noi">
                                            H&#224; Nội<span class="d-right">
                                            12,741
                                            </span></a>
                                        </li>
                                        <li><a href="/da-nang">
                                            Đ&#224; Nẵng<span class="d-right">
                                            2,226
                                            </span></a>
                                        </li>
                                        <li><a href="/vung-tau">
                                            B&#224; Rịa Vũng T&#224;u<span class="d-right">
                                            434
                                            </span></a>
                                        </li>
                                        <li><a href="/can-tho">
                                            TP. Cần Thơ<span class="d-right">
                                            814
                                            </span></a>
                                        </li>
                                        <li><a href="/khanh-hoa">
                                            Kh&#225;nh Ho&#224;<span class="d-right">
                                            845
                                            </span></a>
                                        </li>
                                        <li><a href="/hai-phong">
                                            Hải Ph&#242;ng<span class="d-right">
                                            716
                                            </span></a>
                                        </li>
                                        <li><a href="/binh-thuan">
                                            B&#236;nh Thuận<span class="d-right">
                                            366
                                            </span></a>
                                        </li>
                                        <li class="drop_seeall">Xem 63 tỉnh th&#224;nh <span>&#187;</span> </li>
                                    </ul>
                                    </dd>
                                </dl>
                                <div id="allLocation" style="display: none">
                                    <table style="width:100%">
                                        <tr>
                                            <td valign="middle" align="center"><img src="<?=base_url()?>static/style/images/icons/loading.gif" /></td>
                                        </tr>
                                    </table>
                                </div>
                                <script type="text/javascript">
                                        $(function ()
                                        {
                                        var loadAll = false;
                                        $('.drop_seeall, .drop_head').click(function ()
                                        {
                                        $('#province dt a').click();
                                        $('#allLocation').modal({ persist: true });
                                        if (!loadAll)
                                        {
                                        $('#allLocation').load('/common/AllLocationPopup', {}, function ()
                                        {
                                        $('#simplemodal-container').css('height', '500px');
                                        $('#simplemodal-container').css('width', '900px');
                                        $('#simplemodal-container').css('background-color', '#F9F9F9');
                                        $(window).resize();
                                        loadAll = true;
                                        });
                                        }
                                        });
                                        $("#btnInviteFriend, #btnInviteFriendFooter").click(function ()
                                        {
                                        CommonHelper.InviteFriend();
                                        });
                                        if ($("#pkeywords").val().length == 0)
                                        {
                                        $('#pkeywords').addClass('watermark');
                                        }
                                        else
                                        {
                                        $('#pkeywords').removeClass('watermark');
                                        }
                                        $("#pkeywords").watermark('Tìm theo tên địa điểm, địa chỉ, món ăn...', {
                                        useNative: true,
                                        className: 'watermark'
                                        })
                                        .focus(function ()
                                        {
                                        if ($(this).val().length == 0)
                                        $(this).addClass('watermark');
                                        else
                                        $(this).removeClass('watermark');
                                        })
                                        .keyup(function ()
                                        {
                                        if ($(this).val().length == 0)
                                        $(this).addClass('watermark');
                                        else
                                        $(this).removeClass('watermark');
                                        })
                                        .blur(function ()
                                        {
                                        if ($(this).val().length == 0)
                                        $(this).addClass('watermark');
                                        else
                                        $(this).removeClass('watermark');
                                        });
                                        //$("#pkeywords").watermark('Từ khóa', { useNative: true, className: 'watermark' });
                                        });
                                </script>
                            </div>
                            <form action="/ho-chi-minh/dia-diem" id="searchFormTop" method="get">                        <div style="float:left;position:relative;">
                                <input style="vertical-align:middle" name="q" type="text" id="pkeywords" data-autocomplete-type="keywords" data-autocomplete-url="/AutoComplete/Keywords?provinceId=217" data-autocomplete-minlength="2" />
                                <a class="ico-search" onclick="$('#searchFormTop').submit()">
                                <img width="20" style="margin:6px 0px 0 8px" src="<?=base_url()?>static/style/images/icons/icon-search.png" alt="" />
                                </a>
                                <input type="hidden" name="ss" value="header_search_form" />
                            </div>
                            <!--??-->
                        </form>
                        <!-- Foody party -->
                        <style type="text/css">
                            .header .search-bar-top { width: 600px; }
                        </style>   
                    </div>
                    <div class="account-manage" id="accountmanager">
                        <form action="/dang-nhap?returnUrl=%2Fbai-viet%2Fhcm-top-cac-dia-diem-phuc-vu-hai-san-tuoi-song-ngon-nhat-tai-sai-gon-276" id="loginForm" method="post">    <script type="text/javascript">
                                                                                $(function () {
                                                                                $('.clsEmailF').watermark('Email hoặc Username', { className: 'comment-watermark' });
                                                                                $('.clsPasswordF').watermark('Mật khẩu', { className: 'comment-watermark' });
                                                                                });
                            </script>
                            <div id="login_form">
                                <div class="topnav">
                                    <!-- <a class="facebook-login" provider="1" href="#">
                                    <img class="fb_icon" src="<?=base_url()?>static/style/images/icons/facebook_24.jpg" alt="fb" /></a> -->
                                    <div class="dsig">
                                        <a href="/dang-nhap" class="signin">
                                        <span>Đăng nhập</span></a>
                                    </div>
                                </div>
                                <div id="signin_menu">
                                    <div style="padding: 20px 12px 12px 12px;">
                                        <p>
                                        <input class="clsEmailF" id="Email" name="Email" tabindex="4" title="Email" type="text" value="" />
                                        </p>
                                        <p>
                                        <input class="clsPasswordF" id="Password" name="Password" tabindex="5" title="Password" type="password" value="" />
                                        </p>
                                        <div class="remember">
                                            <div class="left">
                                                <div>
                                                    <input checked="checked" id="RememberMe" name="RememberMe" tabindex="7" type="checkbox" value="true" /><input name="RememberMe" type="hidden" value="false" />
                                                    <label for="RememberMe">
                                                    Nhớ tài khoản</label>
                                                </div>
                                                <div class="forgot">
                                                    <a href="/quen-mat-khau" id="resend_password_link" title="Bạn sẽ nhận được email đổi mật khẩu mới">
                                                    Quên mật khẩu?</a><br />
                                                    <a href="/luclam/user/dangky" class="register">Đăng ký</a>
                                                </div>
                                            </div>
                                            <div class="right">
                                                <input id="signin_submit" value="Đăng nhập" tabindex="6" type="submit">
                                                <span class="login-progress" style="display: none"></span>
                                            </div>
                                        </div>
                                        <!-- <div class="signin-or">
                                            <p style="border-top: 1px solid #b8b8b8; padding: 10px 0 5px 0; clear: both; float: left; width: 100%; margin-top: 10px;">
                                            </p>
                                            <div class="or-used">
                                                hoặc dùng
                                            </div>
                                            <ul class="social-icon-login">
                                                <li class="fb"><a provider="1" href="#"></a></li>
                                                <li class="gl"><a provider="2" href="#"></a></li>
                                                <li class="yh"><a provider="3" href="#"></a></li>
                                                <li class="in"><a provider="6" href="#"></a></li>
                                                <li class="tw"><a provider="5" href="#"></a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $('#loginForm').submit(function (e) {
                                e.preventDefault();
                                var email = $('#Email', this);
                                var password = $('#Password', this);
                                var remember = $('#RememberMe', this);
                                var message = "";
                                if (email.val() == "") {
                                message += "Vui lòng nhập email hoặc username của bạn";
                                //semail.focus();
                                }
                                if (password.val() == "") {
                                if (message == "") {
                                message += "Vui lòng nhập mật khẩu đăng nhập";
                                //password.focus();
                                }
                                else {
                                message += "\n" + "Vui lòng nhập mật khẩu đăng nhập";
                                }
                                }
                                if (message != "") {
                                alert(message);
                                return;
                                }
                                var that = this;
                                $('input', that).attr('disabled', 'disabled');
                                $('.login-progress').fadeIn();
                                login(email.val(), password.val(), remember[0].checked, function () {
                                $('input', that).removeAttr('disabled');
                                $('.login-progress').fadeOut();
                                switch (window.location.pathname) {
                                case '/quen-mat-khau':
                                window.location = '/tai-khoan';
                                break;
                                }
                                if (typeof (UpdatePublishWishlistModel) != 'undefined')
                                UpdatePublishWishlistModel();
                                });
                                })
                            </script>
                            <span class="access"></span>
                        </form>
                        <script src="<?=base_url(); ?>static/Scripts/public.account.update.profile.min.js?20140429" type="text/javascript"></script>
                        <div id="update-profile-popup" style="display: none">
                        </div>
                        <div id="update-profile-popup-loading" style="display: none">
                            Loading...
                        </div>
                        <div id="loginPopup" style="display: none">
                            <script type="text/javascript">
                                                                                $(function () {
                                                                                //LoginPopup.BindingsWatermark();
                                                                                });
                                                                                LoginPopup.BindingsWatermark = function () {
                                                                                $('.clsEmail').watermark('Email hoặc Username', {
                                                                                useNative: true,
                                                                                className: 'watermark'
                                                                                });
                                                                                $('.clsPassword').watermark('Mật khẩu', {
                                                                                useNative: true,
                                                                                className: 'watermark'
                                                                                });
                                                                                $('.login-inputs .clsEmail').watermark('Email hoặc Username', {
                                                                                useNative: true,
                                                                                className: 'watermark'
                                                                                });
                                                                                $('.login-inputs .clsPassword').watermark('Mật khẩu', {
                                                                                useNative: true,
                                                                                className: 'watermark'
                                                                                });
                                                                                $('#Reg_FirstName').watermark('Tên', {
                                                                                useNative: true,
                                                                                className: 'watermark'
                                                                                });
                                                                                $('#Reg_LastName').watermark('Họ', {
                                                                                useNative: true,
                                                                                className: 'watermark'
                                                                                });
                                                                                $('#Reg_Email').watermark('Email', {
                                                                                useNative: true,
                                                                                className: 'watermark'
                                                                                });
                                                                                $('#Reg_Password').watermark('Mật khẩu', {
                                                                                useNative: true,
                                                                                className: 'watermark'
                                                                                });
                                                                                $('#Reg_ConfirmPassword').watermark('Nhập lại mật khẩu', {
                                                                                useNative: true,
                                                                                className: 'watermark'
                                                                                });
                                                                                };
                            </script>
                            <div class="pop-review-header">
                                <div>
                                Đăng nhập</div>
                            </div>
                            <div class="writereview-loginform">
                                <div class="login-social-writereview">
                                    <div class="title">
                                        Đăng nhập nhanh bằng tài khoản
                                    </div>
                                    <ul>
                                        <li class="fb"><a provider="1" href="javascript:void(0);" title="Facebook ID"></a></li>
                                        <li class="gl"><a provider="2" href="javascript:void(0);" title="Google ID"></a></li>
                                        <li class="yh"><a provider="3" href="javascript:void(0);" title="Yahoo ID"></a></li>
                                        <li class="tw"><a provider="5" href="javascript:void(0);" title="Twitter ID"></a></li>
                                        <li class="in"><a provider="6" href="javascript:void(0);" title="LinkedIn ID"></a></li>
                                    </ul>
                                </div>
                                <div class="or">
                                    <span>Hoặc</span>
                                </div>
                                <div id="popup-login-div">
                                    <form action="/dang-nhap" class="login-form" id="popupLoginForm" method="post">            <div class="loginform" style="position:relative">
                                        <div class="title">
                                            Đăng nhập bằng tài khoản Lục lam
                                        </div>
                                        <div class="login-inputs">
                                            <div>
                                                <div class="login_bg">
                                                    <input class="clsEmail" id="Email" name="Email" tabindex="4" title="Username" type="text" value="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="login_bg">
                                                    <input class="clsPassword" id="Password" name="Password" tabindex="5" title="Password" type="password" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="login-remember">
                                            <table>
                                                <tr>
                                                    <td width="130">
                                                        <div>
                                                            <input checked="checked" id="RememberMe" name="RememberMe" tabindex="7" type="checkbox" value="true" /><input name="RememberMe" type="hidden" value="false" />
                                                            Nhớ tài khoản
                                                        </div>
                                                        <div style="padding-top: 4px;">
                                                            <a href="/quen-mat-khau" style="color:#3692f9">Quên mật khẩu?</a>
                                                        </div>
                                                    </td>
                                                    <td align="right">
                                                        <input type="submit" value="Đăng nhập" id="bt-login" class="login-popup-button"/>
                                                        <a href="/luclam/user/dangky" id="bt-register" class="login-popup-button">Đăng ký</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="popupLoginLoading" style="display: none; position:absolute; top:5px; right:5px;">
                                            <img src="<?=base_url()?>static/style/images/icons/ajax-loader.gif" />
                                        </div>
                                    </div>
                                </form>    </div>
                            </div>
                        </div>
                        <div id="loginFacebookPopup" style="display: none">Loading...</div>
                    </div>
                    <div style="position: relative; float: right;">
                        <div class="nav-add-buttons" style="float:right;">
                            <a>+</a>
                        </div>
                        <div id="add-buttons">
                            <span class="arrow"></span>
                            <ul>
                                <li><a href="javascript:void(0)" class="add-new-reviews">Thêm bình luận</a></li>
                                <li><a href="javascript:void(0)" class="add-new-qa btn-create-question">Thêm câu hỏi</a></li>
                                <li><a href="javascript:void(0)" class="add-new-list">Tạo Lists</a></li>
                                <li><a id="btnInviteFriend" href="javascript:void(0)" class="add-new-friend">Mời bạn bè</a></li>
                                <li><a href="/gop-y" class="add-feedback">Góp ý</a></li>
                            </ul>
                        </div>
                    </div>
                    <div style="position: relative; float: right;">
                        <div class="nav-add-buttons2" style="float:right;">
                            <a style="font-size:12px;" href="/luclam/location/themdiadiem" target="_blank">+ Tạo địa điểm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin:46px auto 0 auto; height:46px; background:#fff; width:100%;border-bottom:#ddd 1px solid;">
            <div style="width:1000px; margin:0 auto;">
                <div style="position: relative; ">
                    <div class="nav-place">
                        <a href="/">
                        <img src="<?=base_url()?>static/style/images/icons/home-new-icon.png" width="20" style="margin-top:10px;float:left;" />
                        </a>
                        <a class="places">&nbsp;Địa điểm</a>
                        <a href="/ho-chi-minh/dia-diem-gan-toi">Gần tôi</a>
                        <a href="/ho-chi-minh/binh-luan" title="B&#236;nh luận" style="border-radius:0 0 2px 0px;">
                        Bình luận
                        </a>
                        <a href="/bai-viet/ho-chi-minh" title="" data-type="article">
                        Tin tức
                        </a>
                        <a href="/ho-chi-minh/khuyen-mai" title="">
                        Khuyến mãi
                        </a>
                        <a href="/hoi-dap" title="" data-type="qa">
                        Liên hệ
                        </a>
                        <a style="position:absolute;right:0px;border-left:0px" onclick="return changeLanguage('en')" rel="nofollow" href="/common/changelanguage?code=en&amp;returnUrl=http%3A%2F%2Fwww.foody.vn%2Fbai-viet%2Fhcm-top-cac-dia-diem-phuc-vu-hai-san-tuoi-song-ngon-nhat-tai-sai-gon-276">
                        <img src="<?=base_url()?>static/style/Images/icons/english.png" height="16" alt="en" style="float:left;margin-right:3px;margin-top:15px;"/> EN</a>
                        <script>
                            function changeLanguage(code) {
                            var languageUrl = '/common/changelanguage';
                            languageUrl = languageUrl + '?code=' + code + '&returnUrl' + location.href;
                            location.href = languageUrl;
                            return false;
                            }
                        </script>
                    </div>
                    <div id="all-place">
                        <span class="arrow"></span>
                        <div class="all-place-alls">
                            <a href="/ho-chi-minh/dia-diem">
                            Tất cả địa điểm <span style="font-weight: normal; font-size: 11px;padding-left:10px;">
                            24,428
                            </span>
                            </a>
                        </div>
                        <ul class="menusub1">
                            <li class="">
                                <a href="/ho-chi-minh/an-vat-via-he" title="Ăn vặt/vỉa h&#232;">
                                <span class="ico_anvat"></span>Ăn vặt/vỉa h&#232;
                                <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/ho-chi-minh/nha-hang" title="Nh&#224; h&#224;ng">
                                <span class="ico_res"></span>Nhà hàng
                                <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/ho-chi-minh/cafe" title="Café;/Kem">
                                <span class="ico_cafe"></span>Cafe/Kem
                                <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/ho-chi-minh/nha-hang" title="Nh&#224; h&#224;ng">
                                <span class="ico_res"></span>Quán ăn
                                <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/ho-chi-minh/karaoke" title="Karaoke">
                                <span class="ico_ka"></span>Karaoke
                                <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/ho-chi-minh/khu-du-lich" title="Khu du lịch">
                                <span class="ico_kdl"></span>Khu du lịch
                                <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="menusub2" style="max-height: 350px; overflow:auto;">
                            <li>
                                <a href="/ho-chi-minh/khu-vuc-quan-1" title="Quận 1" style="width:210px;">
                                Quận 1 <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span></a>
                            </li>
                            <li>
                                <a href="/ho-chi-minh/khu-vuc-quan-2" title="Quận 2" style="width:210px;">
                                Quận 2 <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span></a>
                            </li>
                            <li>
                                <a href="/ho-chi-minh/khu-vuc-quan-3" title="Quận 3" style="width:210px;">
                                Quận 3 <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span></a>
                            </li>
                            <li>
                                <a href="/ho-chi-minh/khu-vuc-quan-4" title="Quận 4" style="width:210px;">
                                Quận 4 <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span></a>
                            </li>
                            <li>
                                <a href="/ho-chi-minh/khu-vuc-quan-5" title="Quận 5" style="width:210px;">
                                Quận 5 <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span></a>
                            </li>
                            <li>
                                <a href="/ho-chi-minh/khu-vuc-quan-6" title="Quận 6" style="width:210px;">
                                Quận 6 <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span></a>
                            </li>
                            <li>
                                <a href="/ho-chi-minh/khu-vuc-quan-7" title="Quận 7" style="width:210px;">
                                Quận 7 <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span></a>
                            </li>
                            <li>
                                <a href="/ho-chi-minh/khu-vuc-quan-8" title="Quận 8" style="width:210px;">
                                Quận 8 <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span></a>
                            </li>
                            <li>
                                <a href="/ho-chi-minh/khu-vuc-quan-9" title="Quận 9" style="width:210px;">
                                Quận 9 <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span></a>
                            </li>
                            <li>
                                <a href="/ho-chi-minh/khu-vuc-quan-10" title="Quận 10" style="width:210px;">
                                Quận 10 <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span></a>
                            </li>
                            <li>
                                <a href="/ho-chi-minh/khu-vuc-quan-11" title="Quận 11" style="width:210px;">
                                Quận 11 <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span></a>
                            </li>
                            <li>
                                <a href="/ho-chi-minh/khu-vuc-quan-12" title="Quận 12" style="width:210px;">
                                Quận 12 <span style="font-weight: normal; color: #aaa; width:30px;">1,000</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="t_clear" style="display: none"></div>

        <script type="text/javascript">
            var popupEditAvatarStatusModel = new PopupEditAvatarStatusModel();
            $(function () {
            popupEditAvatarStatusModel.Init();
            });
    </script>
    <div id="popup-edit-status" style="display:none" class="fod-form">
        <table>
            <tr>
                <td class="fod-heading" colspan="2">
                    Chỉnh sửa chú thích
                </td>
            </tr>
            <tr>
                <td class="fod-label" style="vertical-align: top">
                    Chú thích
                </td>
                <td class="fod-input">
                    <textarea id="txt-edit-status" class="fod-textarea" spellcheck="false" style="height:50px" data-bind="value:Status"></textarea>
                </td>
            </tr>
            <tr>
                <td class="fod-label">
                    &nbsp;
                </td>
                <td class="fod-input">
                    <a id="btn-edit-status" href="javascript:void(0);" class="fod-submit" title="Lưu">Lưu</a>
                </td>
            </tr>
        </table>
    </div>
    <script type="text/javascript">
                                                        // link media upload
                                                        var CONST_MEDIA_UPLOAD_URL = "http://media.foody.vn/";
                                                        $(function () {
                                                        // top search form
                                                        $("#searchFormTop input[data-autocomplete-url]").foodyAutocomplete({
                                                        offsetTop: 0,
                                                        offsetLeft: 0,
                                                        offsetWidth: 200,
                                                        minLength: 1,
                                                        showImg: true,
                                                        showAddress: true,
                                                        goDetailsOnSelect: false,
                                                        viewMoreLinkText: 'Xem thêm',
                                                        detailsLinkText: 'Chi tiết',
                                                        closedLinkText: 'Đóng cửa',
                                                        onItemSelected: function (data, event) {
                                                        $('#searchFormTop').submit();
                                                        }
                                                        });
                                                        });
                                                        // Tynt Script
                                                        /*if (document.location.protocol == 'http:') {
                                                        var Tynt = Tynt || []; Tynt.push('dErqRaG9Or44UUacwqm_6r');
                                                        (function () { var s = document.createElement('script'); s.async = "async"; s.type = "text/javascript"; s.src = 'http://tcr.tynt.com/ti.js'; var h = document.getElementsByTagName('script')[0]; h.parentNode.insertBefore(s, h); })();
                                                        }*/
                                                        // auto insert copyright when copy & paste content
                                                        $("body").bind('copy', function (e) {
                                                        var element = e.target;
                                                        if (element.type != "text" && element.type != "textarea") {
                                                        if (typeof window.getSelection == "undefined") return; // IE8 or earlier...
                                                        var body_element = document.getElementsByTagName('body')[0];
                                                        var selection = window.getSelection();
                                                        // if the selection is short let's not annoy our users
                                                        if (("" + selection).length < 20) return;
                                                        var newdiv = document.createElement('div');
                                                        newdiv.style.position = 'absolute';
                                                        newdiv.style.left = '-99999px';
                                                        body_element.appendChild(newdiv);
                                                        newdiv.appendChild(selection.getRangeAt(0).cloneContents());
                                                    // we need a <pre> tag workaround
                                                    // otherwise the text inside "pre" loses all the line breaks!
                                                    if (selection.getRangeAt(0).commonAncestorContainer.nodeName == "PRE") {
                                                    newdiv.innerHTML = "<pre>" + newdiv.innerHTML
                                                    + "</pre><br />Nguồn: <a href='" + document.location.href + "' title='" + document.title + "'>"
                                                        + document.location.href + "</a>";
                                                        }
                                                        else {
                                                        newdiv.innerHTML += "<br /><br />Nguồn: <a href='"
                                                        + document.location.href + "' title='" + document.title + "'>"
                                                        + document.location.href + "</a>";
                                                        }
                                                        selection.selectAllChildren(newdiv);
                                                        window.setTimeout(function () { body_element.removeChild(newdiv); }, 200);
                                                        }
                                                        });
    </script>