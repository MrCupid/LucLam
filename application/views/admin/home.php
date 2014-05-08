<!DOCTYPE html>
<html class="google-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
        <title>Dành cho Doanh nghiệp | Lục lam</title>
        <link href="<?=base_url()?>static/Content/default-nelson.css" rel="stylesheet">
        <link href="<?=base_url()?>static/Content/StartPage.css" rel="stylesheet">
        <script src="<?=base_url()?>static/bundles/jquery.JS"></script>
        <script type="text/javascript" src="<?=base_url()?>static/Scripts/jquery.leanModal.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>static/Scripts/jquery.divslideshow-1.2-min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>static/Scripts/tipsy/jquery.tipsy.js"></script>
        <script type="text/javascript" src="<?=base_url()?>static/Scripts/jquery.slideshow.js"></script>
        <script type="text/javascript" src="<?=base_url()?>static/Scripts/TopReviewOfDayModel.js"></script>
        <style>
                /* slideshow styles */
                .slideShow ul,
                .slideShow li,
                .slideShow ol {
                    list-style-type: none;
                    margin: 0px;
                    padding: 0px;
                }
                .slideShow {
                    height: 435px;
                }
                /** navigation **/
                ol.navigation {
                    position: absolute;
                    bottom: 15px;
                    right: 30px;
                }
                ol.navigation li {
                    display: inline;
                }
                ol.navigation li a {
                    color: #333;
                    font-size: 12px;
                    text-decoration: underline;
                    text-shadow: 0 1px 1px #111;
                }
                ol.navigation li a.selected {
                    text-decoration: none;
                }
                /* popular customers */
                .popular-customer {
                    float:left;width: 177px;height:80px;margin-right: 5px;border:#ddd 1px solid;
                }
                .popular-customers-btn {
                    font-size: 12px;
                    color: #000;
                    text-decoration: none;
                    margin-right: 10px;
                }
        </style>
        <!-- live chat -->
        <!-- <script type='text/javascript'>(function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://widget.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({ c: 'f7a9664c-9b61-4ba9-ae50-1f452cc6f36b', f: true }); done = true; } }; })();</script> -->
    </head>
    <body>
        <div class="maia-header" id="maia-header" role="banner" aria-hidden="false" style="padding:6px 15px 5px;">
            <div class="maia-aux">
                <h1 style="font-weight:normal;font-size:16px;margin-top:8px;">
                <a href="/">
                <img alt="Foody" src="<?=base_url()?>static/style/images/icon-logo.png" style="margin-right:5px;">
                <span style="margin-top:6px;">cho doanh nghiệp</span></a>
                </h1>
                <div class="maia-util">
                    <ul>
                        <li class="ga-auth-false" id="ga-product-links">
                            <span class="ga-sign-in-cta"><a href="/account/login">Đăng nhập</a> hoặc <a href="/account/register">đăng ký</a></span>
                        </li>
                        <li class="ga-util-menu secondary-link">
                            <a href="javascript:void(0)">Hướng dẫn <span>&nbsp;</span></a>
                            <ul>
                                <li>
                                    <a href="/support/guide/buytools">Mua Tool quản lý</a>
                                </li>
                                <li>
                                    <a href="/support/guide/buyads">Mua quảng cáo</a>
                                </li>
                                <li>
                                    <a href="/support/guide/info">Quản lý thông tin</a>
                                </li>
                                <li>
                                    <a href="/support/guide/review">Quản lý bình luận</a>
                                </li>
                                <li>
                                    <a href="/support/guide/picture">Quản lý hình ảnh</a>
                                </li>
                                <li>
                                    <a href="/support/guide/menu">Quản lý thực đơn</a>
                                </li>
                                <li>
                                    <a href="/support/guide/news">Quản lý tin tức</a>
                                </li>
                                <li>
                                    <a href="/support/guide/customer">Quản lý khách hàng</a>
                                </li>
                            </ul>
                        </li>
                        <li class="secondary-link">
                            <span style="color:#555">Hotline: 0937 544 745</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="maia-nav" id="maia-nav-x">
            <div class="maia-aux">
                <ul>
                    <!--<li class="active">Home
                    </li>-->
                    <li>
                        <a id="introLnk" href="#introContainer" rel="intro">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="/Home/AllServices">
                        Dịch vụ đã mua</a>
                    </li>
                    <li>
                        <a href="/Home">Công cụ Quản lý</a>
                    </li>
                    <li>
                        <a href="http://www.foody.vn/developer" target="_blank">Dữ liệu cộng đồng</a>
                    </li>
                    <li>
                        <a href="/Start/Certificate">Foody Sticker</a>
                    </li>
                </ul>
                <div style="position:absolute; top:12px; right:0;">
                    <a href="/home/buyservices" style="padding: 8px 20px;border-radius: 2px; background:#cc0000; padding:7px 10px; color:#fff; text-decoration:none;font-weight:bold;">
                + Mua thêm dịch vụ</a></div>
                <!-- modals -->
                <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                <script type="text/javascript">
                        google.load("visualization", "1", { packages: ["corechart"] });
                        google.setOnLoadCallback(drawChart);
                        function drawChart() {
                            //chart age
                            var data_age = google.visualization.arrayToDataTable([
                            ['Tuổi', 'Tỷ lệ'],
                            ['16-20 tuổi', 5000],
                            ['20-30 tuổi', 10000],
                            ['30-40 tuổi', 3000],
                            ['>40 tuổi', 2000]
                            ]);
                            var options_age = {
                                title: 'Age',
                                chartArea: { left: 20, top: 20, width: "100%", height: "100%" }
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('chart_age'));
                            chart.draw(data_age, options_age);
                            //chart gender
                            var data_gender = google.visualization.arrayToDataTable([
                            ['Tuổi', 'Tỷ lệ'],
                            ['Nữ', 14000],
                            ['Nam', 6000]
                            ]);
                            var options_gender = {
                                title: 'Gender',
                                chartArea: { left: 20, top: 20, width: "100%", height: "100%" }
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('chart_gender'));
                            chart.draw(data_gender, options_gender);
                            //chart income
                            var data_income = google.visualization.arrayToDataTable([
                            ['Thu nhập', 'Tỷ lệ'],
                            ['Dưới 5 triệu', 14000],
                            ['Dưới 10 triệu', 6000],
                            ['Dưới 15 triệu', 6000],
                            ['Dưới 20 triệu', 6000],
                            ['> 20 triệu', 6000]
                            ]);
                            var options_income = {
                                title: 'Gender',
                                chartArea: { left: 20, top: 20, width: "100%", height: "100%" }
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('chart_income'));
                            chart.draw(data_income, options_income);
                            //chart eatout
                            var data_eatout = google.visualization.arrayToDataTable([
                            ['Ăn ngoài', 'Tỷ lệ'],
                            ['1 lần/tuần', 8000],
                            ['2 lần/tuần', 7000],
                            ['3 lần/tuần', 2000],
                            ['5 lần/tuần', 2000],
                            ['Trên 5 lần/tuần', 1000]
                            ]);
                            var options_eatout = {
                                title: 'Eat Out',
                                chartArea: { left: 20, top: 20, width: "100%", height: "100%" }
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('chart_eatout'));
                            chart.draw(data_eatout, options_eatout);
                            //chart location
                            var data_location = google.visualization.arrayToDataTable([
                            ['Địa lý', 'Tỷ lệ'],
                            ['TP. HCM', 14000],
                            ['Hà Nội', 6000],
                            ['Đà Nẵng', 6000],
                            ['Vùng Khác', 6000]
                            ]);
                            var options_location = {
                                title: 'Location',
                                chartArea: { left: 20, top: 20, width: "100%", height: "100%" }
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('chart_location'));
                            chart.draw(data_location, options_location);
                        }
                </script>
                <div class="lean-modal" id="introContainer">
                    <a class="modal_close" href="javascript:void(0)"></a>
                    <div class="title">Giới thiệu về Foody</div>
                    <div style="clear: both"></div>
                    <div class="content">
                        <div class='slideshow'>
                            <div class='slide'><p><img src="http://static.foody.vn/style/images/icons/footer-phones.png" style="float:right; margin-left:20px; margin-top:30px" /><span style="font-size:16px"><span style="color:#000000"><strong>1. Foody l&agrave; g&igrave;?</strong></span></span></p>
                                <p>Được x&acirc;y dựng từ giữa năm 2012 tại TP. HCM, Việt Nam, Foody l&agrave; cộng đồng tin cậy cho mọi người c&oacute; thể <em>&quot;t&igrave;m kiếm &amp; b&igrave;nh luận đ&aacute;nh gi&aacute;&quot;</em> c&aacute;c địa điểm ăn uống: nh&agrave; h&agrave;ng, qu&aacute;n ăn, cafe, bar, karaoke, Billiards, tiệm b&aacute;nh, khu du lịch... tại Việt Nam - từ <em>Website</em> hoặc <em>Ứng dụng di động</em></p>
                                <p>Tất cả th&agrave;nh vi&ecirc;n từ Bắc đến Nam, Foody kết nối những thực kh&aacute;ch đến với c&aacute;c địa điểm ăn uống lớn nhỏ tr&ecirc;n 60 tỉnh th&agrave;nh to&agrave;n quốc.</p>
                                <p>Đến thời điểm hiện tại, Foody với <em>h&agrave;ng chục ngh&igrave;n địa điểm</em>, <em>h&agrave;ng ngh&igrave;n B&igrave;nh luận đ&aacute;nh gi&aacute;</em> v&agrave; <em>h&agrave;ng trăm ngh&igrave;n H&igrave;nh ảnh</em> được chia sẻ.</p>
                                <p>Foody l&agrave; c&aacute;ch dễ nhất để cộng đồng c&oacute; thể T&igrave;m kiếm, đ&aacute;nh gi&aacute; v&agrave; lựa chọn địa điểm tốt nhất cho m&igrave;nh, bạn b&egrave; &amp; gia đ&igrave;nh.</p>
                            </div>
                            <div class='slide'><h3><span style="color:#000000"><strong>2. Đặc điểm nổi bật của Foody</strong></span></h3>
                                <p><img src="<?=base_url()?>static/Content/Images/mobile2.png" style="float:right; margin-left:10px; margin-top:20px; width:300px" /></p>
                                <p>T&igrave;m kiếm dễ d&agrave;ng với lượng dữ liệu lớn. C&ocirc;ng cụ t&igrave;m kiếm th&ocirc;ng minh bằng c&aacute;ch g&otilde;: t&ecirc;n địa điểm, hoặc địa chỉ, hoặc t&ecirc;n đường, hoặc t&ecirc;n m&oacute;n ăn, hoặc mục đ&iacute;ch, hoặc t&ecirc;n khu vực. Hệ thống t&igrave;m kiếm sử dụng gợi &yacute; &amp; xem nhanh th&ocirc;ng tin, gi&uacute;p bạn t&igrave;m địa điểm nhanh nhất</p>
                                <p><strong>Ph&acirc;n loại r&otilde; r&agrave;ng</strong>. Foody ph&acirc;n loại c&aacute;c địa điểm ra rất chi tiết: theo mục đ&iacute;ch, loại h&igrave;nh, m&oacute;n ăn, gi&aacute; cả, loại ẩm thực... Điều n&agrave;y gi&uacute;p cộng đồng lọc địa điểm theo mục đ&iacute;ch của m&igrave;nh rất nhanh ch&oacute;ng.</p>
                                <p><strong style="line-height:1.6em">Cộng đồng thực kh&aacute;ch đ&ocirc;ng đảo</strong><span style="line-height:1.6em">. Lượng th&agrave;nh vi&ecirc;n tham gia chia sẻ trải nghiệm ăn uống cao, h&agrave;ng tuần c&oacute; gần 500 th&agrave;nh vi&ecirc;n tham gia chia sẻ nhận x&eacute;t.</span></p>
                                <p><strong>Sử dụng tr&ecirc;n nhiều thiết bị</strong>. Foody c&oacute; thể sử dụng tr&ecirc;n M&aacute;y t&iacute;nh, Laptop, Mobile, Tablet: Website, iOS, Android, Windows Phone, BlackBerry</p>
                                <p>&nbsp;</p>
                            </div>
                            <div class='slide'><h3><span style="color:#000000">3. Thống k&ecirc; tổng quan</span></h3>
                                <p><img src="<?=base_url()?>static/Content/Images/icons/increase.jpg" style="float:right; height:440px; margin-left:10px; width:400px" /></p>
                                <p>Ra mắt. 10/8/2012 - Thống k&ecirc; tại thời điểm: 01/04/2014</p>
                                <p><strong>Số lượng th&agrave;nh vi&ecirc;n: &nbsp;&nbsp;</strong>Đạt mốc 150.000 - Tăng trưởng 700+ đăng k&yacute;/ng&agrave;y</p>
                                <p><strong>Lưu lượng truy cập </strong></p>
                                <p>Website: 90.000+ lượt/ng&agrave;y &ndash; 2.500.000+ lượt/th&aacute;ng - Pageview: ~9.000.000+ pageviews/th&aacute;ng</p>
                                <p>Mobile Web: 10.000+ lượt/ng&agrave;y</p>
                                <p>iOS App: 2.500+ lượt/ng&agrave;y</p>
                                <p>Android: 2.000+ lượt/ng&agrave;y</p>
                                <p>&nbsp;</p>
                                <p><strong>Lượt tải Ứng dụng</strong></p>
                                <p>iOS App: 60.000+ lượt</p>
                                <p>Android App: 50.000+ lượt</p>
                                <p>&nbsp;</p>
                                <p><strong>Tổng số địa điểm</strong>&nbsp; Hơn 60.000 địa điểm. Tổng số b&igrave;nh luận: 60.000+. Tổng số h&igrave;nh ảnh chia sẻ: 350.000+ ảnh</p>
                                <p><strong>Facebook Fanpage &nbsp;</strong>Hơn 350.000+ fan</p>
                            </div>
                            <div class='slide'>
                                <h3>4. Đối tượng sử dụng</h3>
                                <div id="chart_age" style="width: 400px;height:320px;float:left;"></div>
                                <div id="chart_gender" style="width: 400px;height:320px;float:left;"></div>
                                <div id="chart_income" style="width: 400px;height:320px;float:left;"></div>
                                <div id="chart_eatout" style="width: 400px;height:320px;float:left;"></div>
                                <div id="chart_location" style="width: 400px;height:320px;float:left;"></div>
                            </div>
                            <div class='slide'><h3><span style="color:#000000"><strong>5. Bạn c&oacute; thể l&agrave;m g&igrave; với Foody</strong></span></h3>
                                <div style="width:800px;">
                                    <div class="homepage-button" style="float:right;width:200px;margin-right:50px;"><a href="/Home/BuyAds" style="width:200px!important;">Đăng k&yacute; Quảng c&aacute;o</a></div>
                                    <p><strong>1. T&igrave;m th&ecirc;m kh&aacute;ch h&agrave;ng mới</strong><br />
                                    Tăng độ nhận diện, độ phủ thương hiệu<br />
                                    Tạo sự nổi bật giữa c&aacute;c thương hiệu kh&aacute;c<br />
                                    Gi&uacute;p kh&aacute;ch h&agrave;ng t&igrave;m được tr&ecirc;n Mobile, Search Engine<br />
                                    C&aacute;c h&igrave;nh thức: Listing, B&agrave;i PR, Đăng Banner, Từ kh&oacute;a...</p>
                                </div>
                                <div style="width:800px;">
                                    <div class="homepage-button" style="float:right;width:200px;margin-right:50px;"><a href="/Home/ClaimDetail" style="width:200px!important;">Đăng k&yacute; Quản l&yacute;</a></div>
                                    <p><strong>2. Chăm s&oacute;c kh&aacute;ch h&agrave;ng, củng cố thương hiệu</strong><br />
                                    Cập nhật th&ocirc;ng tin, nội dung, h&igrave;nh ảnh, thực đơn...<br />
                                    Tăng th&ecirc;m số lượng Review, H&igrave;nh ảnh v&agrave; sự tương t&aacute;c<br />
                                    Tạo c&aacute;c chương tr&igrave;nh tặng thưởng cho kh&aacute;ch h&agrave;ng<br />
                                    Quản l&yacute; dữ liệu kh&aacute;ch h&agrave;ng, tương t&aacute;c với kh&aacute;ch h&agrave;ng</p>
                                </div>
                                <div style="width:800px;">
                                    <p><strong>3. Quản l&yacute; B&aacute;n h&agrave;ng (coming soon)</strong><br />
                                    Quản l&yacute; Đơn Đặt H&agrave;ng Giao Tận Nơi<br />
                                    Quản l&yacute; Đặt B&agrave;n<br />
                                    Quản l&yacute; Mua B&aacute;n Coupon/Vouchers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lean-modal" id="getstartedContainer">
                    <a class="modal_close" href="javascript:void(0)"></a><span class="title">Bắt đầu sử dụng Foody Manager</span>
                    <div style="clear: both">
                    </div>
                    <div class="content">
                        <p>
                        <b>1. Đăng ký mua Quảng Cáo.</b> Thực hiện bước chọn các dịch vụ quảng cáo trên bảng giá, sau đó chọn thời gian hoặc số lượng muốn mua. Bấm mua và thanh toán
                        <br />
                        Nhân viên của Foody sẽ liên hệ với bạn, trong vòng tối đa 24 giờ làm việc, để trao đổi, xác nhận thông tin.
                        <br />
                        </p>
                        <p>
                        <b>2. Đăng ký mua quyền Quản Lý.</b> Tìm địa điểm của bạn trước, sau đó chọn gói dịch vụ Quản lý. Bấm mua và thanh toán sau khi hoàn tất
                        <br />
                        Nhân viên của Foody sẽ liên hệ với bạn, trong vòng tối đa 24 giờ làm việc, để trao đổi, xác nhận thông tin.
                        <br />
                        </p>
                        <p>
                        <b>3. Chia sẻ với khách hàng của bạn là Địa điểm của bạn đang ở trên Foody.</b> Điều này sẽ giúp bạn cung cấp thông tin đến khách hàng chính xác hơn, tạo được nhiều tương tác hơn.
                        <br />
                        </p>
                        <p>
                        <b>4. Tìm khách hàng mới & chăm sóc họ.</b> Cung cấp các khuyến mãi, sự kiện đặc biệt lên Foody để khách hàng biết và tạo điều kiện để họ thưởng thức các sản phẩm đặc biệt của bạn.
                        </p>
                        <p>
                        <b>5. Cập nhật thông tin thường xuyên.</b> Thường xuyên kiểm tra các bình luận, đánh giá, chia sẽ của khách hàng trên Foody để giúp sản phẩm & dịch vụ của bạn ngày càng tốt hơn.
                        </p>
                    </div>
                </div>
                <div class="lean-modal" id="casestudyContainer">
                    <a class="modal_close" href="javascript:void(0)"></a><span class="title">Các thương hiệu tiêu biểu đã tham gia</span>
                    <div style="clear: both">
                    </div>
                    <div class="content">
                        <div class='slideshow'>
                            <div class='slide'><div style="margin-top:20px;">
                                <div class="slide-left"><img src="<?=base_url()?>static/Content/Images/mof.jpg"/></div>
                                <div class="slide-right">
                                    <h3>MOF Japanese Sweets & Coffee</h3>
                                    <p>MOF là chuỗi cửa hàng phục vụ các món Desert kiểu Nhật tại TP. HCM. Khách hàng của MOF là các bạn trẻ năng động, thích khám phá và các đối tượng nhân viên văn phòng có thu nhập tốt.
                                    Menu đa dạng các món desert kiểu Nhật: kem, bánh ngọt, mỳ, cơm.</p>
                                    <ul>
                                        <li>Chi nhánh tham gia: 6 chi nhánh tại HCM</li>
                                        <li>Trên 130+ bình luận đánh giá, 500+ hình ảnh từ người dùng</li>
                                        <li>Tổng lượt Xem trên 35.000 và hơn 300+ lượt yêu thích</li>
                                        <li>Links: <a href="http://www.foody.vn/ho-chi-minh/dia-diem?q=mof" target="_blank">Click vào đây</a> </li>
                                    </ul>
                                </div>
                            </div></div>
                            <div class='slide'><div style="margin-top:20px;">
                                <div class="slide-left">
                                    <img src="<?=base_url()?>static/Content/Images/burger-king2.jpg"/>
                                </div>
                                <div class="slide-right">
                                    <h3>Burger King</h3>
                                    <p>Burger King là thương hiệu Fastfood nổi tiếng trên thế giới đã có mặt tại Việt Nam với chuỗi cửa hàng phủ sóng trên khắp Sài Gòn. Nổi tiếng với các loại burger Bò với nhiều cách mix tạo nên hương vị độc đáo, đặc trưng rất riêng. Không gian mở thoáng mát, hiện đại - sự lựa chọn lý tưởng cho các bạn trẻ và những người bận rộn
                                    </p>
                                    <ul>
                                        <li>Chi nhánh tham gia: 17 chi nhánh trên toàn quốc</li>
                                        <li>Trên 50+ bình luận đánh giá, 100+ hình ảnh từ người dùng</li>
                                        <li>Tổng lượt view trên 27.000+</li>
                                        <li>Links TP. HCM: <a href="http://www.foody.vn/ho-chi-minh/tim-kiem/burger-king" target="_blank">Click vào đây</a> </li>
                                        <li>Links Hà Nội: <a href="http://www.foody.vn/ha-noi/dia-diem?q=burger+king" target="_blank">Click vào đây</a> </li>
                                        <li>Links Đà Nẵng: <a href="http://www.foody.vn/da-nang/dia-diem?q=burger+king" target="_blank">Click vào đây</a> </li>
                                    </ul>
                                </div>
                            </div></div>
                            <div class='slide'><div style="margin-top:20px;">
                                <div class="slide-left">
                                    <img src="<?=base_url()?>static/Content/Images/kem_fanny.jpg"/>
                                </div>
                                <div class="slide-right">
                                    <h3>Chuỗi Thương Hiệu Kem Fanny</h3>
                                    <p>một trong những thương hiệu kem Ý có mặt từ rất sớm tại Sài thành. Với chất lượng kem luôn hoàn chỉnh từ chất lượng đến trình bày Fanny từ lâu đã trở thành sự lựa chọn hàng đầu của các thực khách yêu kem. Không tự mãn với những gì đã có, Fanny luôn cập nhật nhanh chóng xu hướng ẩm thực và cho ra đời nhiều mùi vị kem mới phục vụ thị trường. Các cửa hàng kem Fanny luôn được bày trí với phong cách trẻ trung, tươi sáng, dễ chịu.</p>
                                    <ul>
                                        <li>Chi nhánh tham gia: 7 chi nhánh toàn quốc</li>
                                        <li>Trên 50+ bình luận đánh giá, 170+ hình ảnh từ người dùng</li>
                                        <li>Tổng lượt view trên 15.000+</li>
                                        <li>Links TP. HCM: <a href="http://www.foody.vn/ho-chi-minh/dia-diem?q=fanny" target="_blank">Click vào đây</a> </li>
                                        <li>Links Hà Nội: <a href="http://www.foody.vn/ha-noi/kem-fanny-ly-thuong-kiet" target="_blank">Click vào đây</a> </li>
                                    </ul>
                                </div>
                            </div></div>
                            <div class='slide'><div style="margin-top:20px;">
                                <div class="slide-left"><img src="<?=base_url()?>static/Content/Images/snowee.jpg"/></div>
                                <div class="slide-right">
                                    <h3>Snowee Icecream</h3>
                                    <p>Snowee là thương hiệu có cửa hàng kem trộn đầu tiên tại Sài Gòn. Với cách pha trộn các mùi vị kem cùng các loại bánh, kẹo ngọt tạo sự khác biệt của Snowee với các thương hiệu khác. Bên cạnh các loại kem, tại Snowee còn có các loại crepe tự làm mùi vị tươi mới ngon lành</p>
                                    <ul>
                                        <li>Chi nhánh tham gia: 7 chi nhánh</li>
                                        <li>Trên 20+ bình luận đánh giá, 70+ hình ảnh từ người dùng</li>
                                        <li>Tổng lượt view trên 5.000+ </li>
                                        <li>Links: <a href="http://www.foody.vn/ho-chi-minh/dia-diem?q=snowee" target="_blank">Click vào đây</a></li>
                                    </ul>
                                </div>
                            </div></div>
                            <div class='slide'><div style="margin-top:20px;">
                                <div class="slide-left"><img src="<?=base_url()?>static/Content/Images/4p.jpg"/></div>
                                <div class="slide-right">
                                    <h3>Pizza 4P's - Japanese & Italian Pizza</h3>
                                    <p>Pizza Ý được làm mới với phong cách ẩm thực tươi ngon, tỉ mỉ kiểu Nhật. Nhà hàng Pizza 4P's chuyên phục vụ các loại pizza tươi ngon với nhiều mùi vị độc đáo pha trộn giữa Ý và Nhật. Không gian chỉnh chu, gọn gàng và đầm ấm thích hợp cho các buổi gặp gỡ bạn bè, đối tác hay đơn giản là thưởng thức một bữa tối ngon miệng cùng gia đình</p>
                                    <ul>
                                        <li>Chi nhánh tham gia: 1 cửa hàng</li>
                                        <li>Trên 46+ bình luận đánh giá, 300+ hình ảnh từ người dùng</li>
                                        <li>Tổng lượt view trên 21.000</li>
                                        <li>Links: <a href="http://www.foody.vn/ho-chi-minh/pizza-4p-s" target="_blank">Click vào đây</a></li>
                                    </ul>
                                </div>
                            </div></div>
                            <div class='slide'><div style="margin-top:20px;">
                                <div class="slide-left"><img src="<?=base_url()?>static/Content/Images/retrobite2.jpg"/></div>
                                <div class="slide-right">
                                    <h3>Retrobite Cafe</h3>
                                    <p>Retrobite Cafe nằm ngay khu vực Hồ Con Rùa, thiết kế theo phong cách retro Mỹ thập niên 60, tông màu đỏ rực rỡ thể hiện sức trẻ, năng động. Quán chuyên phục vụ các thức uống và các loại steak, thức ăn nhanh.</p>
                                    <ul>
                                        <li>Chi nhánh tham gia: 6 chi nhánh</li>
                                        <li>Trên 7+ bình luận đánh giá, 140+ hình ảnh từ người dùng</li>
                                        <li>Tổng lượt view trên 1000+ </li>
                                        <li>Links: <a href="http://www.foody.vn/ho-chi-minh/retrobite-diner-cafe" target="_blank">Click vào đây</a></li>
                                    </ul>
                                </div>
                            </div></div>
                            <div class='slide'><div style="margin-top:20px;">
                                <div class="slide-left"><img src="<?=base_url()?>static/Content/Images/decibel.jpg" /></div>
                                <div class="slide-right">
                                    <h3>Decibel Restaurant & Cafe</h3>
                                    <p>không gian cafe, nhà hàng và như một hội quán hiện đại cho những tâm hồn nghệ sỹ nhạy cảm. Nơi thích hợp cho các bạn trẻ, nghệ sỹ đến giao lưu chia sẻ với nhau qua các đêm nhạc, chiếu phim (vào thứ 4 hàng tuần). Phong cách hiện đại pha trộn Trung Đông huyền bí</p>
                                    <ul>
                                        <li>Số cửa hàng: 1 cửa hàng</li>
                                        <li>Trên 10+ bình luận đánh giá, 60+ hình ảnh từ người dùng</li>
                                        <li>Tổng lượt view trên 2.000</li>
                                        <li>Links: <a href="http://www.foody.vn/ho-chi-minh/decibel-restaurant-cafe-lounge" target="_blank">Click vào đây</a></li>
                                    </ul>
                                </div>
                            </div></div>
                            <div class='slide'><div style="margin-top:20px;">
                                <div class="slide-left"><img src="<?=base_url()?>static/Content/Images/vuon_nam.jpg" /></div>
                                <div class="slide-right">
                                    <h3>Nhà hàng Vườn Nấm</h3>
                                    <p>Nhà hàng chuyên phục vụ các món ăn ngon lành được chế biến từ các loại nấm chọn lọc, không gian trong lành từ gam màu thiết kế nhã nhặn đến. Nhà hàng Vườn Nấm thích hợp cho những thực khách tìm kiếm các món ăn ngon, bổ dưỡng, đa dạng tốt cho sức khỏe với mức giá dễ chịu</p>
                                    <ul>
                                        <li>Số cửa hàng: 1 cửa hàng</li>
                                        <li>Trên 14+ bình luận đánh giá, 136+ hình ảnh từ người dùng</li>
                                        <li>Tổng lượt view trên 2.000</li>
                                        <li>Links: <a href="http://www.foody.vn/ho-chi-minh/vuon-nam-nguyen-van-trang" target="_blank">Click vào đây</a></li>
                                    </ul>
                                </div>
                            </div></div>
                            <div class='slide'><div style="margin-top:20px;">
                                <div class="slide-left"><img src="<?=base_url()?>static/Content/Images/tokyo_town.jpg" /></div>
                                <div class="slide-right">
                                    <h3>Tokyo Town - Thị trấn ẩm thực Nhật bản</h3>
                                    <p>Thị trấn Nhật Bản thu nhỏ nhộn nhịp giữa lòng Sài Gòn với đa dạng các món ăn Nhật. Nhà hàng với không gian rộng rãi được bày trí như dẫn bạn lạc vào một thị trấn ẩm thực nhiều màu sắc của xứ Hoa Đào. Nhà hàng phục vụ da dạng các món ăn từ món mặn đến các món tráng miệng độc đáo của Nhật Bản</p>
                                    <ul>
                                        <li>Số cửa hàng: 1 cửa hàng</li>
                                        <li>Trên 27+ bình luận đánh giá, 220+ hình ảnh từ người dùng</li>
                                        <li>Tổng lượt view trên 7.000</li>
                                        <li>Links: <a href="http://www.foody.vn/ho-chi-minh/tokyo-town" target="_blank">Click vào đây</a></li>
                                    </ul>
                                </div>
                            </div></div>
                            <div class='slide'><div style="margin-top:20px;">
                                <div class="slide-left"><img src="<?=base_url()?>static/Content/Images/an_khue_quan.jpg" /></div>
                                <div class="slide-right">
                                    <h3>An Khu&ecirc; Qu&aacute;n - Ẩm thực Việt Nam</h3>
                                    <p>Nh&agrave; h&agrave;ng phục vụ c&aacute;c m&oacute;n Việt, hương vị d&acirc;n d&atilde; giữa ồn &agrave;o phố thị. Nh&agrave; h&agrave;ng An Khu&ecirc; nhỏ nhắn nằm n&eacute;p m&igrave;nh tr&ecirc;n con phố d&agrave;i L&ecirc; Lai chuy&ecirc;n phục vụ thực kh&aacute;ch với c&aacute;c m&oacute;n ăn truyền thống v&ugrave;ng miền từ b&uacute;n đậu mắm t&ocirc;m - đặc trưng Bắc bộ đến c&aacute;c m&oacute;n chả c&aacute; Phan Rang nổi tiếng...phong ph&uacute; về thực đơn với mức gi&aacute; hợp l&yacute; l&agrave; lựa chọn của An Khu&ecirc; để đồng h&agrave;nh c&ugrave;ng thực kh&aacute;ch S&agrave;i G&ograve;n</p>
                                    <ul>
                                        <li>Số cửa h&agrave;ng: 1 cửa h&agrave;ng</li>
                                        <li>Tr&ecirc;n 12+ b&igrave;nh luận đ&aacute;nh gi&aacute;, 24+ h&igrave;nh ảnh từ người d&ugrave;ng</li>
                                        <li>Tổng lượt view tr&ecirc;n 10.000</li>
                                        <li>Links: <a href="http://www.foody.vn/ho-chi-minh/an-khue-quan" target="_blank">Click v&agrave;o đ&acirc;y</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lean-modal" id="pricelistContainer">
                <a class="modal_close" href="javascript:void(0)"></a><span class="title">Bảng giá</span>
                <div style="clear: both">
                </div>
                <div class="content">
                    <table class="account-table">
                        <tr>
                            <th>
                                Tính năng
                                <br />
                                Quản lý
                            </th>
                            <th>
                                Mô tả
                            </th>
                            <th>
                                Gói Basic
                            </th>
                            <th>
                                Gói Normal
                            </th>
                            <th>
                                Gói Pro
                            </th>
                            <th>
                                Gói Premium
                            </th>
                            <th>
                                Gói tự chọn
                            </th>
                        </tr>
                        <tr>
                            <td width="10%">
                                <b>SEO</b>
                            </td>
                            <td width="40%">
                                Search từ Google ra kết quả đầu tiên với từ khóa: Tên Quán
                            </td>
                            <td width="60" align="center">
                                x
                            </td>
                            <td width="60" align="center">
                                x
                            </td>
                            <td width="60" align="center">
                                x
                            </td>
                            <td width="60" align="center">
                                x
                            </td>
                            <td width="60" align="center">
                                20.000 đ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Thống kê</b>
                            </td>
                            <td>
                                Theo dõi báo cáo: Lượt click, số lần đưa vào list, check-in, yêu thích… theo lựa
                                chọn thời gian
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                20.000 đ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Thông tin</b>
                            </td>
                            <td>
                                Cập nhật, chỉnh sửa các thông tin cơ bản của địa điểm
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                20.000 đ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Bình luận</b>
                            </td>
                            <td>
                                Theo dõi các bình luận, thảo luận, cho phép "Owner Reply" vào các Review để thể
                                hiện sự quan tâm của nhà hàng với khách hàng
                            </td>
                            <td align="center">
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                20.000 đ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Hình ảnh</b>
                            </td>
                            <td>
                                Cập nhật, chỉnh sửa các hỉnh ảnh về món ăn, không gian…
                            </td>
                            <td align="center">
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                20.000 đ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Thực đơn</b>
                            </td>
                            <td>
                                Đăng tải, cập nhật thực đơn các món ăn
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                20.000 đ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Tin tức</b>
                            </td>
                            <td>
                                Đăng tải, cập nhật các bài viết, tin khuyến mãi, tin mới
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                20.000 đ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Đặt bàn</b>
                            </td>
                            <td>
                                Quản lý các đơn đặt bàn từ thực kháchn
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                20.000 đ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Coupon/Vouchers</b>
                            </td>
                            <td>
                                Cho phép phát hành Vouchers/Coupon cho khách hàng
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                20.000 đ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Khách hàng</b>
                            </td>
                            <td>
                                Quản lý, sử dụng dữ liệu khách hàng liên quan đến địa điểm: đã từng đặt bàn, gọi
                                món, yêu thích, đã đến…
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                x
                            </td>
                            <td align="center">
                                20.000 đ
                            </td>
                        </tr>
                        <tr>
                            <td class="sumary-row" colspan="2" align="right">
                                <b>Giá/tháng</b>
                            </td>
                            <td class="sumary-row" align="center">
                                <b>$19</b>
                            </td>
                            <td class="sumary-row" align="center">
                                <b>$29</b>
                            </td>
                            <td class="sumary-row" align="center">
                                <b>$39</b>
                            </td>
                            <td class="sumary-row" align="center">
                                <b>$49</b>
                            </td>
                            <td class="sumary-row" align="center">
                            </td>
                        </tr>
                        <tr>
                            <td class="sumary-row" colspan="2" align="right">
                                <b>Giá/năm</b>
                            </td>
                            <td class="sumary-row" align="center">
                                <b>$199</b>
                            </td>
                            <td class="sumary-row" align="center">
                                <b>$299</b>
                            </td>
                            <td class="sumary-row" align="center">
                                <b>$399</b>
                            </td>
                            <td class="sumary-row" align="center">
                                <b>$549</b>
                            </td>
                            <td class="sumary-row" align="center">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="ga-heros ga-hero-home">
        <div class="slideShow">
            <ul class="slides">
                <li class="slide">
                    <div>
                        <img alt="" src="<?=base_url()?>static/Content/StartPage/banner1.jpg">
                        <div class="ga-header-testimonial">
                            <div>
                                <div>
                                    <h1>Kênh truyền thông đúng đối tượng
                                    </h1>
                                    <blockquote style="background-color: rgba(0,0,0,0.5);width: 440px;padding: 15px">
                                        “Hàng triệu khách hàng sử dụng Foody là những người đang có nhu cầu tìm kiếm địa điểm để ăn uống. Truyền thông trên Foody sẽ giúp Địa điểm đưa thông điệp đến đúng đối tượng khách hàng, đúng thời điểm”
                                    </blockquote>
                                    <p>
                                    <a class="maia-button maia-button-secondary" href="#">Chi tiết</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="slide">
                    <div>
                        <img alt="" src="<?=base_url()?>static/Content/StartPage/banner2.jpg">
                        <div class="ga-header-testimonial">
                            <div>
                                <div>
                                    <h1>Hiệu quả cao, chi phí thấp</h1>
                                    <blockquote style="background-color: rgba(0,0,0,0.5);width: 440px;padding: 15px">
                                        “Với hàng triệu người dùng, Foody có thể giúp Địa điểm có thêm khách hàng mới và xây dựng kế hoạch giữ chân khách hàng cũ với nhiều cách thức. Hiệu quả cao với chi phí thực hiện thấp hơn so với kênh truyền thông khác.”
                                    </blockquote>
                                    <p>
                                    <a class="maia-button maia-button-secondary" href="#">Chi tiết</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="slide">
                    <div>
                        <img alt="" src="<?=base_url()?>static/Content/StartPage/banner3.jpg">
                        <div class="ga-header-testimonial">
                            <div>
                                <div>
                                    <div>
                                        <h1>Kênh giao tiếp với khách hàng</h1>
                                        <blockquote style="background-color: rgba(0,0,0,0.5);width: 440px;padding: 15px">
                                            “Tương tác thường xuyên với khách hàng sẽ giúp thương hiệu của Địa điểm tốt hơn. Foody cung cấp nền tảng để quản lý kênh tương tác này!”
                                        </blockquote>
                                        <p>
                                        <a class="maia-button maia-button-secondary" href="#">Chi tiết</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ol class="navigation">
                <li><a href="javascript:void(0);" class="page">1</a></li>
                <li><a href="javascript:void(0);" class="page">2</a></li>
                <li><a href="javascript:void(0);" class="page">3</a></li>
            </ol>
        </div>
        <script language="javascript" type="text/javascript">
                    $(document).ready(function () {
                        // simplest example
                        $('.slideShow').slideShow({
                            interval: 6,
                            mousePause: true
                        });
                    });
        </script>
    </div>
    <div class="ga-homepage-body">
        <div class="maia-aux">
            <div class="maia-cols">
                <div class="maia-col-9">
                    <div style="clear:both;height:5px;font-size: 0px"></div>
                    <h2 style="font-size:18px; font-weight:bold; padding:0;margin:0;margin-top:15px;">Khách hàng tiêu biểu</h2>
                    <div style="position: relative;width: 731px;height:85px;overflow: hidden; margin-top:20px;">
                        <div id="popular-customers-container" style="width: 729px;min-height: 1px; position: absolute;">
                            <div class="popular-customer" style="background: url(<?=base_url()?>static/Content/Images/mof.jpg)"></div>
                            <div class="popular-customer" style="background: url(<?=base_url()?>static/Content/Images/DairyQueen.jpg)"></div>
                            <div class="popular-customer" style="background: url(<?=base_url()?>static/Content/Images/Carls.png)"></div>
                            <div class="popular-customer" style="background: url(<?=base_url()?>static/Content/Images/Pizza4P.jpg)"></div>
                            <div class="popular-customer" style="background: url(<?=base_url()?>static/Content/Images/GrandHotel.png)"></div>
                            <div class="popular-customer" style="background: url(<?=base_url()?>static/Content/Images/ThePizzaCompany.png)"></div>
                            <div class="popular-customer" style="background: url(<?=base_url()?>static/Content/Images/BurgerKing.jpg)"></div>
                        </div>
                    </div>
                    <div style="clear:both;height:5px;font-size: 0px; float:right;">
                        <a id="popular-customers-prev" href="javascript:void(0);" class="popular-customers-btn">«</a>
                        <a id="popular-customers-next" href="javascript:void(0);" class="popular-customers-btn">»</a>
                    </div>
                    <script type="text/javascript">
                                            var topReviewOfDayModel = new TopReviewOfDayModel();
                                            $(function() {
                                                topReviewOfDayModel.Init({
                                                    containerId: "popular-customers-container",
                                                    btnAnimationId: "popular-customers",
                                                    itemWidth: 184,
                                                    totalItems: 7,
                                                    displayItems: 4
                                                });
                                            });
                    </script>
                    <div style="clear:both"></div>
                    <div class="spotlight" style="border-top: none !important">
                        <h2>Dịch vụ</h2>
                        <div class="maia-cols">
                            <div class="maia-col-6">
                                <!--
                                <div class="services-title"><a href="/home/buyads">1. Quảng cáo Hiển thị</a></div>
                                <div><img src="<?=base_url()?>static/Content/Images/ads.png" style="border:#ddd 1px solid;"  /></div>
                                <div class="customer-services">
                                    Dịch vụ Quảng cáo hiển thị của Foody trên Web và Mobile sẽ giúp địa điểm tiếp cận và truyền đạt thông điệp của mình đến hàng triệu người truy cập của Foody. Thông qua các hình thức quảng cáo bằng: Đăng tin, Gợi ý địa điểm, Banner, Từ khóa, Bài chuyên đề, Email marketing, Facebook post...
                                </div>
                                <div class="customer-pricelist-link">
                                    <a href="/home/buyads" style="padding-left:10px">Xem bảng giá & Mua dịch vụ »</a>
                                </div>-->
                            </div>
                            <div class="maia-col-6">
                                <div class="services-title"><a href="/home/claimDetail">2. Công cụ Quản lý</a></div>
                                <div><img src="<?=base_url()?>static/Content/Images/traffic.png" style="border:#ddd 1px solid;" /></div>
                                <div class="customer-services">
                                    Công cụ quản lý sẽ giúp bạn cập nhật thông tin, chỉnh sửa nội dung/bài viết/hình ảnh/thực đơn cho địa điểm của mình. Đồng thời có thể theo dõi truy cập, quản lý góp ý/nhận xét của khách hàng để có những phản hồi 1 cách nhanh nhất. Công cụ quản lý cũng sẽ giúp bạn tạo các chương trình khuyến mãi, sự kiện...
                                </div>
                                <div class="customer-pricelist-link">
                                    <a href="/home/claimDetail" style="padding-left:10px">Xem bảng giá & Mua dịch vụ »</a>
                                </div>
                            </div>
                            <div class="maia-col-6">
                                <div class="services-title"><a href="/home/buyCreativeServices">3. Dịch vụ Viết bài - Thiết kế - Sáng tạo</a></div>
                                <div><img src="<?=base_url()?>static/Content/Images/creative.png" style="border:#ddd 1px solid;" /></div>
                                <div class="customer-services">
                                    Foody cung cấp dịch vụ sáng tạo bao gồm: Quay phim quảng cáo, Chụp ảnh, viết bài, thiết kế nhận diện thương hiệu, thiết kế thực đơn... Dịch vụ này được phối hợp với bên thứ 3, đăng ký dịch vụ này sẽ được ưu đãi về dịch vụ khác trên Foody.
                                </div>
                                <div class="customer-pricelist-link">
                                <a href="/home/buyCreativeServices" style="padding-left:10px">Xem bảng giá & Mua dịch vụ »</a></div>
                            </div>
                            <div class="maia-col-6">
                                <div class="services-title"><a href="/home/buyOther">4. Tổ chức Sự kiện cộng đồng Online/Offline</a></div>
                                <div><img src="<?=base_url()?>static/Content/Images/event.png" style="border:#ddd 1px solid;" /></div>
                                <div class="customer-services">
                                    Foody sẽ cùng địa điểm lên ý tưởng, triển khai thực hiện các sự kiện cộng đồng online/offline với các nội dung nhằm: quảng bá thương hiệu, tri ân khách hàng, tạo khách hàng trung thành hoặc giới thiệu chương trình khuyến mãi, thực đơn mới.
                                </div>
                                <div class="customer-pricelist-link">
                                <a href="/home/buyOther" style="padding-left:10px">Liên hệ Mua dịch vụ »</a></div>
                            </div>
                            <div class="customer-request">
                                <a href="/home/buyOther">
                                <img src="<?=base_url()?>static/Content/Images/icons/confused.png" width="50" style="float:left; margin-right:10px;"/>
                                <span style="float:left;padding-top:5px;">Tôi không rõ dịch vụ nào phù hợp với doanh nghiệp của tôi! <br />Hãy giúp tôi lên kế hoạch Marketing để có thêm khách hàng mới và chăm sóc khách hàng cũ</span>
                                <span style="float:right;margin-top:13px;"><img src="<?=base_url()?>static/Content/Images/icons/arrow-right.png" width="25" /></span>
                                </a>
                            </div>
                        </div>
                        <div style="border-bottom:#ccc 1px solid; overflow:hidden;padding-top:15px;"></div>
                        <h2 style="margin-top:20px;">Thống kê hiện tại</h2>
                        <div class="maia-cols">
                            <div class="statistics-item">
                                <div class="statistics-box block1"><span>61.042</span> <br />địa điểm</div>
                                <div>
                                    Foody cung cấp hàng chục ngàn địa điểm (POIs) về nhà hàng, quán ăn, cafe kem, bar... trên 63 tỉnh thành ở Việt Nam. Trong đó TP. HCM chiếm 50%, Hà Nội 25%. Các thông tin về địa điểm được Foody cung cấp rất chi tiết về loại hình, giá cả, mục đích, địa chỉ, bản đồ...
                                </div>
                            </div>
                            <div class="statistics-item">
                                <div class="statistics-box block3"><span>67.442</span> <br /> bình luận</div>
                                <div>
                                    C&#225;c th&#224;nh vi&#234;n của Foody đ&#227; chia sẻ 67.442 b&#236;nh luận nhận x&#233;t, v&#224; 290.960 h&#236;nh ảnh l&#234;n Foody từ Website v&#224; Mobile Apps. C&#225;c b&#236;nh luận nhận x&#233;t n&#224;y gi&#250;p cho cộng đồng t&#236;m được địa điểm ph&#249; hợp với nhu cầu của bạn th&#226;n để đi ăn uống c&#249;ng Gia đ&#236;nh hoặc Bạn b&#232;.
                                </div>
                            </div>
                            <div class="statistics-item">
                                <div class="statistics-box block2"><span>544.205</span> <br /> lượt thăm/tháng</div>
                                <div>
                                    Hơn 2 triệu lượt ghé thăm Website và sử dụng Mobile App hàng tháng. Hơn 5 triệu pageview được tạo ra. Hơn 344.000 fans trên Facebook page.
                                </div>
                            </div>
                            <div class="statistics-item">
                                <div class="statistics-box block4" style="background:#ea08fb"><span>153.799</span> <br /> người sử dụng</div>
                                <div>
                                    Hơn 6 triệu người dùng internet tại Việt Nam, Mỹ, Úc, Canada... và 1 số nước khác đã truy cập vào foody để tìm kiếm địa điểm ăn uống, xem đánh giá/hình ảnh.
                                </div>
                            </div>
                            <div class="statistics-item">
                                <div class="statistics-box block4"><span>593.308</span> <br /> lượt search/tháng</div>
                                <div>
                                    593.308 lượt t&#236;m kiếm địa điểm tr&#234;n hệ thống Search Engine của Foody h&#224;ng th&#225;ng. C&#244;ng cụ Search của Foody cho ph&#233;p người sử dụng t&#236;m kiếm bằng Từ kh&#243;a: t&#234;n địa điểm, m&#243;n ăn, địa chỉ, mục đ&#237;ch, loại m&#243;n...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ga-news maia-col-3">
                    <div style="clear:both; float:left; width:100%;">
                        <div style="margin-top:20px; overflow:hidden; padding-top:5px;">
                            <a href="<?=base_url();?>" style="font-size:18px; font-weight:bold; color:#cc0000;padding-bottom:10px; overflow:hidden;">Có gì mới!</a>
                        </div>
                        <div id="ga-feed" style="overflow:hidden; margin-top:10px;">
                            <div>
                                <div>
                                    <p class="date">15/01/2014</p>
                                    <p>
                                    <a href="#">Ra mắt E-Membership Card chạy trên Foody Mobile App, mang nhiều Ưu Đãi cho các thành viên sử dụng App</a>
                                    </p>
                                </div>
                                <div>
                                    <p class="date">15/12/2013</p>
                                    <p>
                                    <a href="#">Ra mắt giao diện mới cho Công cụ Quản lý, giúp sử dụng dễ dàng hơn và thuận tiện hơn</a>
                                    </p>
                                </div>
                                <div>
                                    <p class="date">10/12/2013</p>
                                    <p>
                                    <a href="#">Ra mắt chức năng Quảng cáo đúng đối tượng trong trang Microsite địa điểm</a>
                                    </p>
                                </div>
                                <div>
                                    <p class="date">01/11/2013</p>
                                    <p>
                                    <a href="#">Ra mắt ứng dụng trên nền tảng Windows Phone: Nokia, HTC, Samsung...</a>
                                    </p>
                                </div>
                                <div>
                                    <p class="date">1/9/2013</p>
                                    <p>
                                    <a href="#">Ra mắt Foody Sticker, giúp các thành viên nhận diện địa điểm chất lượng tốt từ ngoài đường.</a>
                                    </p>
                                </div>
                                <div>
                                    <p class="date">15/8/2013</p>
                                    <p>
                                    <a href="#">Ứng dụng Foody trên iOS và Android đạt 40.000 lượt tải, mức độ sử dụng đạt 70%.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="maia-footer" id="maia-footer">
        <div id="maia-footer-local">
            <div class="maia-aux">
                <div id="suez-footer-univ" class="suez-sitemap">
                    <div class="maia-cols">
                        <div class="maia-col-3">
                            <h3>Cài đặt</h3>
                            <ul>
                                <li><a href="/support/feedback">Góp ý</a></li>
                                <li><a href="http://www.foody.vn/" data-g-event="Footer">Quay về Lục Lam</a></li>
                                <li>
                                    <div class="maia-locales" style="float:left !important;margin-top:5px;">
                                        <label>
                                            <span>Change language or region:</span>
                                            <select onchange="var href=this[this.selectedIndex].value;if(href!=&#39;&#39;){window.location.href=href};">
                                                <option value="/common/changelanguage?code=en&amp;returnUrl=http://manager.foody.vn/">English</option>
                                                <option value="/common/changelanguage?code=vn&amp;returnUrl=http://manager.foody.vn/" selected=&#39;selected&#39;>Vietnamese</option>
                                            </select>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="maia-col-3">
                            <h3>Guide</h3>
                            <ul>
                                <li><a href="/support/guide/buytools">Mua Tool quản lý</a></li>
                                <li><a href="/support/guide/buyads">Mua quảng cáo</a></li>
                                <li><a href="/support/guide/info">Quản lý thông tin</a></li>
                                <li><a href="/support/guide/review">Quản lý bình luận</a></li>
                                <li><a href="/support/guide/picture">Quản lý hình ảnh</a></li>
                                <li><a href="/support/guide/menu">Quản lý thực đơn</a></li>
                                <li><a href="/support/guide/news">Quản lý tin tức</a></li>
                                <li><a href="/support/guide/customer">Quản lý khách hàng</a></li>
                            </ul>
                        </div>
                        <div class="maia-col-3">
                            <h3>Company</h3>
                            <ul>
                                <li><a href="http://www.foody.vn/gioi-thieu">Giới thiệu</a></li>
                                <li><a href="http://www.foody.vn/bao-chi">Báo chí</a></li>
                                <li><a href="http://www.foody.vn/blog">Blogs</a></li>
                                <li><a href="http://www.foody.vn/tro-giup">Trợ giúp</a></li>
                                <li><a href="http://www.foody.vn/viec-lam">Việc làm</a></li>
                                <li><a href="http://www.foody.vn/nha-dau-tu">Nhà đầu tư</a></li>
                                <li><a href="http://www.foody.vn/gop-y">Góp ý</a></li>
                                <li><a href="http://www.foody.vn/lien-he">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="maia-col-3">
                            <h3>Join on</h3>
                            <ul>
                                <li><a href="https://www.facebook.com/pages/Foodyvn/210695369058001">Facebook</a></li>
                                <li><a href="https://plus.google.com/u/0/105147296090324521615?rel=author">Google</a></li>
                                <li><a href="http://www.youtube.com/channel/UCO_PmBWsBWHGY8qBiCu8IIg">Youtube</a></li>
                                <li><a href="https://twitter.com/foodyvn">Twitter</a></li>
                                <li>ICP 85/GP-ICP-STTTT</li>
                                <li>MXH 152/GXN-TTDT</li>
                                <li>© Foody Corporation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
            // lean modal
            $("a[rel*=intro]").leanModal({ top: 48, closeButton: ".modal_close" });
            $("a[rel*=getstarted]").leanModal({ top: 48, closeButton: ".modal_close" });
            $("a[rel*=casestudy]").leanModal({ top: 48, closeButton: ".modal_close" });
            $("a[rel*=pricelist]").leanModal({ top: 48, closeButton: ".modal_close" });
            // slideshow
            $('.slideshow').divSlideShow({
                width: 860,
                arrow: "split",
                loop: 3,
                delay: 3000,
                controlClass: "control",
                leftArrowClass: "control1",
                rightArrowClass: "control1",
                controlActiveClass: "control-active",
                controlHoverClass: "control-hover",
                controlContainerClass: "control-container"
            });
            // invoke intro click
            //if (!readCookie("introSeen")) {
                //    $('#introLnk').trigger('click');
                //    createCookie("introSeen", "1", 1000);
            //}
            // use cookie to know when the intro was read on first time
            function createCookie(name, value, days) {
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    var expires = "; expires=" + date.toGMTString();
                } else var expires = "";
                document.cookie = name + "=" + value + expires + "; path=/";
            }
            function readCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }
            // handle the arrow of paging control will disabled when on the last slide
            $(document).ready(function () {
                // the first arrow always disabled at the beginning
                $(".dssControl").each(function () {
                    var attr = $(this).attr('direction');
                    // first arrow handle
                    if (attr == '-1') {
                        $(this).addClass("slide-page-disabled");
                    }
                });
                $(".dssControl").click(function () {
                    // set the biggest page number
                    var parentContainer = $(this).parent();
                    var pages = [];
                    var item = $('div.dssControl');
                    parentContainer.find(item).each(function () {
                        var attr = $(this).attr('page');
                        if (typeof attr !== 'undefined' && attr !== false) {
                            pages.push($(this).text());
                        }
                    });
                    var smallest = Math.min.apply(null, pages);
                    var biggest = Math.max.apply(null, pages);
                    var current = parentContainer.find(".control-active").text();
                    var first = parentContainer.find(">:first-child");
                    var last = parentContainer.find(">:last-child");
                    // arrow handle
                    if (current == smallest) {
                        first.addClass("slide-page-disabled");
                        last.removeClass("slide-page-disabled");
                    } else if (current == biggest) {
                        first.removeClass("slide-page-disabled");
                        last.addClass("slide-page-disabled");
                    } else {
                        first.removeClass("slide-page-disabled");
                        last.removeClass("slide-page-disabled");
                    }
                });
            });
    </script>
</body>
</html>