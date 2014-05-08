<footer class="footer">
<div class="footer-fixed">
    <div class="footer-min">
        <div class="footer-left-box">
            <div class="footer-titles">Cài đặt</div>
            <ul>
                <li style="width:100%;float:left;margin:3px 0 7px;">
                    <div style="float: left;padding:3px 5px 0 0;color:#666; width:100px;">Tỉnh thành</div>
                    <div style="float: left;">
                        <dl id="f_dropdown" class="drop_seeall">
                            <dt>
                            <a href="javascript:void(0)"><span class="text">TP. HCM</span></a>
                            </dt>
                        </dl>
                    </div>
                </li>
                <li style="width:100%;float:left;margin:3px 0 7px;">
                    <div style="float: left;padding-right:5px;color:#666; width:100px;">Ngôn ngữ</div>
                    <div class="footer-language-chooser">
                        <a onclick="return changeLanguage('en')" rel="nofollow" style="color:#02AAD4" href="/common/changelanguage?code=en&amp;returnUrl=http%3A%2F%2Fwww.foody.vn%2Fbai-viet%2Fhcm-top-10-quan-pizza-duoc-yeu-thich-nhat-sai-gon-230">
                        English</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="footer-middle-box">
            <div class="footer-titles">Khám phá</div>
            <ul>
                <li><a href="/newsletter">Bản tin</a></li>
                <li><a href="/viet-binh-luan">Viết bình luận</a></li>
                <li><a href="/tao-list">Tạo Lists</a></li>
                <li><a href="/moi-ban-be">Kết nối bạn bè</a></li>
                <li><a href="/dieu-khoan-su-dung">Quy định</a></li>
            </ul>
        </div>
        <div class="footer-middle-box" >
            <div class="footer-titles">Doanh nghiệp</div>
            <ul>
                <li><a href="/gioi-thieu">Giới thiệu</a></li>
                <li><a href="/blog">Blogs</a></li>
                <li><a href="/tro-giup">Trợ giúp</a></li>
                <li><a href="/gop-y">Góp ý</a></li>
                <li><a href="/lien-he">Liên hệ</a></li>
            </ul>
        </div>
        <div class="footer-middle-box" style="padding-left:35px; width:200px;">
            <div class="footer-titles">Tham gia trên</div>
            <ul>
                <li><a href="https://www.facebook.com/" target="_blank" rel="nofollow">Facebook</a></li>
                <li><a href="https://plus.google.com/" target="_blank" rel="publisher">Google</a></li>
                <li>© Foody 2013</li>
            </ul>
        </div>
    </div>
</div>
</footer>
<script src="<?=base_url();?>static/scripts/public.home.min.js" type="text/javascript"></script>
<script language="javascript">
                                                    $(function () {
                                                    if ($("#keywords").val().length == 0) {
                                                    $('#keywords').addClass('watermark');
                                                    }
                                                    else {
                                                    $('#keywords').removeClass('watermark');
                                                    }
                                                    $("#keywords").watermark('Tìm theo tên địa điểm, địa chỉ, món ăn, ẩm thực, mục đích...', {
                                                    useNative: true,
                                                    className: 'watermark'
                                                    })
                                                    .focus(function () {
                                                    if ($(this).val().length == 0)
                                                    $(this).addClass('watermark');
                                                    else
                                                    $(this).removeClass('watermark');
                                                    })
                                                    .keyup(function () {
                                                    if ($(this).val().length == 0)
                                                    $(this).addClass('watermark');
                                                    else
                                                    $(this).removeClass('watermark');
                                                    })
                                                    .blur(function () {
                                                    if ($(this).val().length == 0)
                                                    $(this).addClass('watermark');
                                                    else
                                                    $(this).removeClass('watermark');
                                                    });
                                                    bindingUserTooltip();
                                                    });
                                                    $(function () {
                                                    $("#searchFormHome [data-autocomplete-url]").foodyAutocomplete({
                                                    offsetTop: 4,
                                                    offsetLeft: -8,
                                                    offsetWidth: 20,
                                                    minLength: 1,
                                                    showImg: true,
                                                    showAddress: true,
                                                    goDetailsOnSelect: false,
                                                    viewMoreLinkText: 'Xem thêm',
                                                    detailsLinkText: 'Chi tiết',
                                                    onItemSelected: function (data, event) {
                                                    $('#searchFormHome').submit();
                                                    }
                                                    });
                                                    })
</script>
<div id="restaurant-reviews-popup" style="display: none; height: 500px;">
<div id="restaurant-popup-dialog">
    <!-- ko if: Current()!=null -->
    <!-- ko with: Current -->
    <div class="pop-review-header">
        <!-- ko with: Summary -->
        <div class="pop-review-titarea" style="position: relative">
            <div style="float: left; width: 500px;">
                <div class="pop-review-tits">
                    <a data-bind="text: Name, attr: { href: Url }"></a>
                </div>
                <div class="pop-review-titaddress">
                    <span class="r-address-info" data-bind="text: Address"></span>
                </div>
            </div>
            <div class="pop-review-write-button">
                <a href="javascript:void(0)" data-bind="click: writeReview">+ Viết bình luận</a>
            </div>
        </div>
        <!-- /ko -->
    </div>
    <div class="pop-review-container">
        <!-- ko with: Summary -->
        <div class="res-info">
            <div style="margin-left: 20px; margin-top: 20px">
                <a data-bind="attr: { href: Url }">
                <img data-bind="attr: { src: PictureUrl }" width="200px" /></a>
            </div>
            <div style="float: left; width: 100%; margin-left: 20px; margin-top: 10px;">
                <div class="micro-home-points" style="margin: 5px 0 0 0px; float: left; width: 70px;">
                    <span data-bind="text: AvgPoint"></span>
                </div>
                <div style="float: left; margin-left: 10px; padding-top: 15px;">
                    từ <b data-bind="text: TotalReviews"></b>&nbsp;bình luận
                </div>
            </div>
            <div class="r-filter" style="clear: both;">
                <div class="r-filter-item">
                    <input type="checkbox" checked data-bind="checked: $parent.isExcellent">
                    Tuyệt vời
                    <div class="r-filter-count">
                        <span style="color: #03AE03" data-bind="text: TotalPerfectReviews"></span>&nbsp;bình luận
                    </div>
                </div>
                <div class="r-filter-item">
                    <input type="checkbox" checked data-bind="checked: $parent.isGood">
                    Khá tốt
                    <div class="r-filter-count">
                        <span style="color: #03AE03" data-bind="text: TotalGoodReviews"></span>&nbsp;bình luận
                    </div>
                </div>
                <div class="r-filter-item">
                    <input type="checkbox" checked data-bind="checked: $parent.isAverage">
                    Trung bình
                    <div class="r-filter-count">
                        <span style="color: #000000" data-bind="text: TotalAverageReviews"></span>&nbsp;bình luận
                    </div>
                </div>
                <div class="r-filter-item">
                    <input type="checkbox" checked data-bind="checked: $parent.isBad">
                    Kém
                    <div class="r-filter-count">
                        <span style="color: #CC0000" data-bind="text: TotalBadReviews"></span>&nbsp;bình luận
                    </div>
                </div>
            </div>
        </div>
        <!-- /ko -->
        <div class="review-list">
            <!-- ko with: ReviewsList-->
            <div style="height: 435px; width: 684px; overflow: auto; margin-bottom: 10px;">
                <!-- ko if: CurrentReview()!=null && !IsLoadMore() -->
                <div class="review-list-cantainer" data-bind="with: CurrentReview">
                    <div data-bind="visible: CanEdit" class="pop-edit-reviews"><a href="javascript:void(0);" data-bind="    click: $parent.editReview" title="Sửa B&#236;nh luận trong v&#242;ng 1h">Sửa</a></div>
                    <div style="clear: both;">
                        <!--ko if: ReviewType == 1 -->
                        <div class="r-point" data-bind="text: AvgRating"></div>
                        <!--/ko-->
                        <a target="_blank" data-bind="attr: { href: OwnerProfileUrl }">
                        <img class="r-ava" data-bind="attr: { src: OwnerAvatarUrl }" /></a>
                        <!-- ko if: VerifyingPercent==100 -->
                        <img src="<?=base_url()?>static/style/images/icons/approved.png" style="float: left; margin-right: 3px;margin-left:10px;" />
                        <!-- /ko-->
                        <div class="r-uname">
                            <a target="_blank" data-bind="text: OwnerDisplayName, attr: { href: OwnerProfileUrl }"></a>
                        </div>
                        <span class="r-time" data-bind="text: $parent.getCreatedTime($data), attr: { utime: CreatedOnTimestamp, title: CreatedOnString }"></span>
                        <!--ko if: ReviewType == 2 -->
                        <span>check-in&nbsp;</span>
                        <!--/ko -->
                        <!-- ko if: (PostedByDeviceName != null && PostedByDeviceName!='')-->
                        <span>
                        <a class="viamobile" data-bind="text: 'via '+ PostedByDeviceName" href="/ung-dung-mobile"></a>
                        <a href="/ung-dung-mobile">
                        <img src="<?=base_url()?>static/style/images/icons/icon-via-mobile.png" class="iphone" /></a>
                        </span>
                        <!-- /ko -->
                        <div class="review-user-level" style="padding-left:10px;overflow:hidden;">
                            <a href="chinh-sach-thuong#user-level-up" target="_blank" class="newbee" data-bind="text: UserLevel"></a>
                            <!-- ko if: PointRank <= 1000 && PointRank>0 -->
                            <span data-bind="text: 'Top '+ PointRank"></span>
                            <!-- /ko -->
                        </div>
                    </div>
                    <!--ko if: ReviewType == 1 -->
                    <div style="width: 600px; margin-top:15px;float:left;clear:both;">
                        <a class="r-header" data-bind="html: Title, attr: { href: $parent.getReviewDetailLink($data) }"></a>
                    </div>
                    <!-- /ko -->
                    <div class="r-content" data-bind="html: Comment">
                    </div>
                    <div data-bind="visible: TotalPictures > 4">
                        <a class="r-totalphoto" data-bind="attr: { href: $parent.getReviewDetailLink($data) }"><span data-bind="    text: TotalPictures"></span>&nbsp;hình ảnh</a>
                    </div>
                    <div class="r-album" data-bind="foreach: Pictures">
                        <img data-bind="attr: { src: Url }" />
                    </div>
                    <!-- ko if:(YoutubeCode!=null && YoutubeCode != '')-->
                    <div style="margin-left:70px;" data-bind="html: $root.getYoutubeEmbed($data)">
                    </div>
                    <!-- /ko -->
                </div>
                <!-- /ko -->
                <div data-bind="visible: TotalReviews() <= 0 && !IsLoadMore()" style="position: absolute; top: 200px; left: 280px;">
                    <p>
                    Chưa có bình luận nào!
                    </p>
                </div>
            </div>
            <div data-bind="visible: IsLoadMore" style="position: absolute; top: 200px; left: 305px;">
                <span>
                <img src="<?=base_url()?>static/style/images/loading.gif" style="float: left;" /></span> <span style="float: left; font-size: 16px; font-weight: bold; padding-top: 10px;">Loading...</span>
            </div>
            <div class="r-paging" data-bind="visible: TotalReviews() > 0">
                <div class="r-paging-pre" data-bind="visible: (CurrentIndex() > 1)">
                    <a href="javascript:void(0);" data-bind="click: back">
                    <img src="<?=base_url()?>static/style/images/icons/ico_previous.png" width="35" /></a>
                </div>
                <div class="r-paging-count">
                    <span data-bind="text: CurrentIndex"></span>/ <span data-bind="    text: TotalReviews"></span>&nbsp;bình luận <span data-bind="visible: TotalCheckin()>0">&amp; check-in</span>
                </div>
                <div class="r-paging-next" data-bind="visible: (CurrentIndex() < TotalReviews())">
                    <a href="javascript:void(0);" data-bind="click: next">
                    <img src="<?=base_url()?>static/style/images/icons/ico_next.png" width="35"/></a>
                </div>
            </div>
            <!-- /ko -->
        </div>
    </div>
    <!-- /ko -->
    <!-- /ko -->
    <!-- ko if: IsLoading -->
    <div style="position: absolute; top: 230px; left: 435px; display: block; text-align: center;">
        <div style="float: left; font-size: 16px; font-weight: bold; padding-bottom: 10px; padding-left: 8px;">
            Loading...
        </div>
        <div>
            <img src="<?=base_url()?>static/style/images/loading-review.gif" style="float: left;" />
        </div>
    </div>
    <!-- /ko -->
</div>
</div>
<div id="suggest-restaurant-reviews-popup" style="display: none; height: 500px;">
<div class="pop-write-review-right-header">Tìm địa điểm</div>
<div id="selected-restaurant-to-review" style="float:left;margin-top:50px;width:100%;">
    <h3 style="border-bottom:none;padding-bottom:0px;" class="oes">Nhập tên địa điểm mà bạn muốn viết Bình luận</h3>
    <div style="padding-bottom:15px;">Nếu không tìm thấy, bạn vui lòng sử dụng công cụ tìm kiếm thông minh hơn <a href="/ho-chi-minh/dia-diem" style="text-decoration:underline;">tại đây</a></div>
    <div style="position:relative;">
        <div>
            <input type="text" data-bind="value: searchText" id="txtResSearch" style="float: left; padding: 8px; border: 0; border: #aaa 1px solid;font-size:14px; border-radius: 3px; width: 566px" />
        </div>
        <div data-bind="visible: loading" style="position:absolute;top:7px; left:590px;">
            <img src="<?=base_url()?>static/style/images/icons/loading.gif" alt=""/>
        </div>
    </div>
    <!-- ko if: data!=null-->
    <!-- ko with: data-->
    <div class="pop-write-review-right-selection">
        <div>
            <div class="lists-items-img" style="float:left; width:100px;">
                <img data-bind="attr:{'src':PhotoUrl}" width="80" />
            </div>
            <div class="lists-items-link" style="font-weight:bold; font-size:18px;padding-top:5px;">
                <a href="#" data-bind="text: Name,attr:{'href':Url}"></a>
            </div>
            <div class="lists-items-address" style="padding-top:10px;" data-bind="text:Address">
            </div>
        </div>
    </div>
    <div class="pop-write-review-right-conbut">
        <span data-bind="click: $root.writereview" class="pop-write-review-right-continue">Tiếp tục để viết Bình luận</span>
    </div>
    <div style="clear: both;float: left;margin-top: 10px;">Không tìm thấy địa điểm? Bạn thử nhập tên chính xác của địa điểm 1 lần nữa nhé.
        <br />
    Có thể Foody chưa có địa điểm này. <a href="/them-dia-diem" style="text-decoration:underline;">Click vào đây</a> để gửi thông tin địa điểm cho Foody, sau đó Foody sẽ gửi email cho bạn khi đăng hoàn tất.</div>
    <!-- /ko -->
    <!-- /ko -->
</div>
<style>
                                                    .ui-autocomplete {
                                                    max-height: 500px;
                                                    overflow-y: auto;
                                                    /* prevent horizontal scrollbar */
                                                    overflow-x: hidden;
                                                    }
</style>
<script type="text/javascript">
                                                    var currentlocationid = 217
</script>
</div>
<div id="facebookFriendsPopup" style="display: none; height: 100px">
<div class="pop-review-header" style="width:584px;">
    <div>
        Bạn bè
    </div>
</div>
<div class="writereview-loginform" style="padding-top:20px;">
    <div class="loading">Loading...</div>
    <div class="content"></div>
    <div class="pop-bottom"><a class="btn_invite facebook-invite-friend">Mời bạn</a></div>
</div>
</div>
<div id="popup-create-question" style="display:none" class="fod-form">
<form action="/" method="post">    <table>
    <tr>
        <td class="fod-label">
            Tiêu đề
        </td>
        <td class="fod-input">
            <input class="fod-textbox" data-val="true" data-val-required="The Title field is required." id="Title" name="Title" placeholder="Nhập tiêu đề câu hỏi..." style="width:540px" type="text" value="" />
        </td>
    </tr>
    <tr>
        <td class="fod-label" style="vertical-align: top">
            Nội dung
        </td>
        <td class="fod-input">
            <textarea class="fod-textarea" cols="20" data-val="true" data-val-required="The Content field is required." id="Content" name="Content" rows="2" style="height:200px">
            </textarea>
        </td>
    </tr>
    <tr>
        <td class="fod-label">
            Danh mục
        </td>
        <td class="fod-input">
            <select class="fod-cbo" data-val="true" data-val-number="The field CategoryId must be a number." id="CategoryId" name="CategoryId"><option value="1">Nh&#224; h&#224;ng</option>
            <option value="2">Caf&#233;/Kem</option>
            <option value="3">Qu&#225;n ăn</option>
            <option value="4">Bar/Pub</option>
            <option value="5">Karaoke</option>
            <option value="6">Tiệm b&#225;nh</option>
            <option value="7">Khu du lịch</option>
            <option value="8">Billiards</option>
            <option value="9">Tiệc cưới/Hội nghị</option>
            <option value="10">Cửa h&#224;ng</option>
            <option value="11">Tổng hợp</option>
            <option value="12">Rao vặt</option>
        </select>
    </td>
</tr>
<tr>
    <td class="fod-label">
        Tỉnh thành
    </td>
    <td class="fod-input">
        <select class="fod-cbo" data-val="true" data-val-number="The field StateProvinceId must be a number." id="StateProvinceId" name="StateProvinceId"><option value="217">TP. HCM</option>
        <option value="218">H&#224; Nội</option>
        <option value="219">Đ&#224; Nẵng</option>
        <option value="223">Vũng T&#224;u</option>
        <option value="221">Cần Thơ</option>
        <option value="248">Kh&#225;nh Ho&#224;</option>
        <option value="220">Hải Ph&#242;ng</option>
        <option value="233">B&#236;nh Thuận</option>
        <option value="254">L&#226;m Đồng</option>
        <option value="256">Nam Định</option>
        <option value="274">Tiền Giang</option>
        <option value="250">Kon Tum</option>
        <option value="222">Đồng Nai</option>
        <option value="265">Quảng Ninh</option>
        <option value="273">Huế</option>
        <option value="263">Quảng Nam</option>
        <option value="253">L&#224;o Cai</option>
        <option value="257">Nghệ An</option>
        <option value="230">B&#236;nh Dương</option>
        <option value="255">Long An</option>
        <option value="264">Quảng Ng&#227;i</option>
        <option value="258">Ninh B&#236;nh</option>
        <option value="259">Ninh Thuận</option>
        <option value="260">Ph&#250; Thọ</option>
        <option value="261">Ph&#250; Y&#234;n</option>
        <option value="262">Quảng B&#236;nh</option>
        <option value="231">B&#236;nh Định</option>
        <option value="232">B&#236;nh Phước</option>
        <option value="251">Lai Ch&#226;u</option>
        <option value="252">Lạng Sơn</option>
        <option value="249">Ki&#234;n Giang</option>
        <option value="234">C&#224; Mau</option>
        <option value="235">Cao Bằng</option>
        <option value="236">Đắk Lắk</option>
        <option value="237">Đắk N&#244;ng</option>
        <option value="238">Điện Bi&#234;n</option>
        <option value="239">Đồng Th&#225;p</option>
        <option value="240">Gia Lai</option>
        <option value="241">H&#224; Giang</option>
        <option value="242">H&#224; Nam</option>
        <option value="243">H&#224; Tĩnh</option>
        <option value="244">Hải Dương</option>
        <option value="245">Hậu Giang</option>
        <option value="246">H&#242;a B&#236;nh</option>
        <option value="247">Hưng Y&#234;n</option>
        <option value="224">An Giang</option>
        <option value="225">Bạc Li&#234;u</option>
        <option value="226">Bắc Kạn</option>
        <option value="227">Bắc Giang</option>
        <option value="228">Bắc Ninh</option>
        <option value="229">Bến Tre</option>
        <option value="266">Quảng Trị</option>
        <option value="267">S&#243;c Trăng</option>
        <option value="268">Sơn La</option>
        <option value="269">T&#226;y Ninh</option>
        <option value="270">Th&#225;i B&#236;nh</option>
        <option value="271">Th&#225;i Nguy&#234;n</option>
        <option value="272">Thanh Ho&#225;</option>
        <option value="275">Tr&#224; Vinh</option>
        <option value="276">Tuy&#234;n Quang</option>
        <option value="277">Vĩnh Long</option>
        <option value="278">Vĩnh Ph&#250;c</option>
        <option value="279">Y&#234;n B&#225;i</option>
        <option value="280">To&#224;n Quốc</option>
        <option value="281">Đ&#224; Lạt</option>
    </select>
</td>
</tr>
<tr>
<td class="fod-label">
    &nbsp;
</td>
<td class="fod-input">
    <a id="btn-popup-create-question" href="javascript:void(0);" class="fod-submit" title="Tạo c&#226;u hỏi">Tạo câu hỏi</a>
    <a id="btn-popup-update-question" href="javascript:void(0);" class="fod-submit" title="Lưu">Lưu</a>
</td>
</tr>
</table>
</form></div>
<script type="text/javascript">
                                                    $(function () {
                                                    $(".social-email-sharing").click(function () {
                                                    $("#popup-social-email-sharing").popupSocialEmailSharing({
                                                    link: ""
                                                    });
                                                    });
                                                    });
</script>
<div id="popup-social-email-sharing" style="display:none" class="fod-form">
<form action="/" method="post">    <table>
<tr>
<td class="fod-heading" colspan="2">
    Chia sẻ cùng bạn bè
</td>
</tr>
<tr>
<td class="fod-label">
    Liên kết
</td>
<td class="fod-input">
    <input type="text" class="fod-textbox" style="width:260px" value="" />
</td>
</tr>
<tr>
<td class="fod-label">
    &nbsp;
</td>
<td class="fod-input">
    <div class="facebook-sharing">
        <div class="fb-share-button" data-href="" data-type="button_count"></div>
    </div>
    <div class="google-sharing">
        <div class="g-plus" data-href="" data-action="share" data-annotation="bubble"></div>
    </div>
</td>
</tr>
<tr>
<td colspan="2">
    <div style="border-bottom:1px dashed #ccc;padding-top:10px;margin-bottom:10px"></div>
</td>
</tr>
<tr>
<td class="fod-heading" colspan="2">
    Hoặc gửi qua Email
</td>
</tr>
<tr>
<td class="fod-label">
    Tên của bạn
</td>
<td class="fod-input">
    <input class="fod-textbox" data-val="true" data-val-required="The FromName field is required." id="FromName" name="FromName" style="width:260px" type="text" value="" />
</td>
</tr>
<tr>
<td class="fod-label">
    Gửi đến email
</td>
<td class="fod-input">
    <input class="fod-textbox" data-val="true" data-val-required="The ToEmail field is required." id="ToEmail" name="ToEmail" style="width:260px" type="text" value="" />
</td>
</tr>
<tr>
<td class="fod-label" style="vertical-align:top">
    Nội dung
</td>
<td class="fod-input">
    <textarea class="fod-textbox" cols="20" data-val="true" data-val-required="The Content field is required." id="PopupSocialEmailSharing_Content" name="Content" rows="2" spellcheck="false" style="width:260px;height:100px;padding:5px">
    </textarea>
</td>
</tr>
<tr>
<td class="fod-label">
    &nbsp;
</td>
<td class="fod-input">
    <a href="javascript:void(0);" class="fod-submit btn-email-sharing" title="Chia sẻ">Chia sẻ</a>
</td>
</tr>
</table>
</form></div>
<input type="hidden" id="currentProvince"  value="217" />
<div id="brand-reward-popup" style="display: none;">
<div id="get-reward-proccess">
<div data-bind="visible: isLoading" style="margin-left: 410px; margin-top: 180px;">
<span style="float: left; margin-right: 10px;">
<img src="<?=base_url()?>static/style/images/icons/loading.gif"  /></span>
<span style="float: left; padding-top: 3px;">Loading...</span>
</div>
<!-- ko if: isShowSelectedBanner -->
<div data-bind="foreach: banners">
<div>
    <a data-bind="attr:{refid: Id}, click: $root.bannerClick" href="javascript:void(0)">
    <img data-bind="attr:{src: BannerFilePath}" style="width: 300px; height: 250px;" />
    </a>
    <a data-bind="attr:{refid: Id}, click: $root.bannerClick, text: BannerName" href="javascript:void(0)">
    </a>
</div>
</div>
<!-- /ko -->
<!-- ko if: !isShowSelectedBanner() -->
<div id="brand-reward-submit" data-bind="visible: !isLoading()" style="clear: both; display: none">
<div data-bind="template: { name: 'submit' + template() }"></div>
</div>
<div id="brand-reward-result" data-bind="visible: !isLoading()" style="display: none;">
<div data-bind="template: { name: 'result' + template() }"></div>
</div>
<div data-bind="template: { name: 'maxtries' + template() }"></div>
<div data-bind="template: { name: 'intro' + template() }"></div>
<!-- /ko -->
</div>
</div>
                </body>
            </html>