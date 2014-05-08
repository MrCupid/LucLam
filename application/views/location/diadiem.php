<script src="<?=base_url();?>static/Scripts/public.core.micro.min.js" type="text/javascript"></script>

<!--Start of Main section -->
<section class="microsite">
    <div class="micro-container">
        <div class="micro-content" itemscope itemtype="http://schema.org/Restaurant">
            <div class="microsite-basic-info">
                <!--Start microsite header-->


    <div id="fb-root">
    </div>
    <!--Start microsite header-->
    <script type="text/javascript">
        var backUrl;
    </script>
    <script type="text/javascript">

        jQuery(document).ready(function () {
            loadSocialSharingPlugin('http://www.foody.vn/ho-chi-minh/highlands-coffee-nguyen-du');
        });

        var backUrl = undefined, loginSuccessCallback, refreshAlbumIntervalId;
        $(function () {
            $('.upload').click(function () {
                //$(".search-div").hide();
                loginSuccessCallback = LoadMultipleUploadPictureForm;
                LoadMultipleUploadPictureForm();
                return false;
            });
            $('.rating').click(function (e) {
                //$(".search-div").hide();
                $('html').scrollTop(1600);
                return false;
            });
        });

        function LoadMultipleUploadPictureForm() {
            var d = new Date();
            $.ajax({
                type: "GET",
                url: '/Review/IsLogin?' + d.getTime(),
                success: function (response) {
                    if (response.success == true) {
                        OpenUploadPictureForm();
                    }
                    else {
                        loginSuccessCallback = function () {
                            $.modal.close();
                            OpenUploadPictureForm();
                        };
                        //$('#loginPopup').modal({ persist: true });
                        LoginPopup.Show();
                    }
                }
            });
        }

        function OpenUploadPictureForm(){
            var d = new Date();
            var link = "/Gallery/NewAlbumPopup?RestaurantID=4085&Name=Highlands%20Coffee%20-%20Nguy%E1%BB%85n%20Du";
            $('#reviewDialog').html('<div style="padding-top:100px; padding-bottom:100px; padding-left:400px;"><img alt="Đang tải ..." src="<?=base_url()?>static/style/images/loading-review.gif" /></div>').modal();
            $('#reviewDialog').load(link + '&t=' + d.getTime(), function() {
                setupAlbumUpload();
            }).modal();
        }

    </script>
    <script type="text/javascript">

        var loginSuccessCallback ;//= LoadAddNewReviewForm;
        var isReviewPage = true;
        var refreshIntervalId;
        $('.reviewLink').live('click',function () {
            // $(".search-div").hide();
            isModifiedMode = false;
            //loginSuccessCallback = OpenWriteReviewForm;
            //LoadAddNewReviewForm();
            var resid = $(this).attr('resid');
            UploadReview.LoadAddNewReviewForm(resid);
            return false;
        });
        $(function () {
            // Dialog Link

            bindTooltip();
            addCommentWatermark();
            bindWriteCommentAutoresize();
            currentTimeStamp = 1399348370;
            CalculatingReviewPostedTime();
        });



        function GetNewReview(reviewId) {
            if (isReviewPage) {
                if (IsFiltering()) {
                    resetFiltering(function () {
                        ScrollToReview(reviewId);
                        bindPostedTime(reviewId);
                        closeNewReviewPopup();
                    });
                    drawChart();
                }
                else {
                    var d = new Date();
                    $.get('/Review/GetReviewById?t='+d.getTime(), { reviewId: reviewId, template:reviewtemplate}, function (response) {
                        if(response.success)
                        {
                            RemoveReviewByIndex(5);
                            if (typeof homeReviewsModel != 'undefined' && homeReviewsModel != null) {
                                homeReviewsModel.addNewReview(response.data);
                            }

                            if (typeof resReviewsModel != 'undefined' && resReviewsModel != null) {
                                resReviewsModel.addNewReview(response.data);
                            }
                            //$('#review-list').prepend('<div id="review-'+reviewId+'">'+html+'</div>');
                            if(typeof(updateReviewTabs)!='undefined'){
                                $('#review-tab div.micro-home-recent-review.review-item.empty').remove();
                                updateReviewTabs($("ul.review-tabs li:first"));
                            }
                            removeUserTooltip(response.userid);
                            bindTooltip();
                            //loadUserTotalReviews(reviewId);
                            bindPostedTime(reviewId);
                            updateTotalUserReviewsAndPictures(reviewId);
                            addCommentWatermark();
                            ScrollToReview(reviewId);
                            bindReviewReportByReviewId(reviewId);
                            IncreaseGlobalTotalReview(1);
                            hideLoadingProcess();
                            closeNewReviewPopup();
                            drawChart();
                        }
                    });
                }

            }
            else {
                var reviewdetaillink = '/ho-chi-minh/highlands-coffee-nguyen-du' + '/binh-luan-' + reviewId;
                var d = new Date();
                $.ajax({
                    type: "GET",
                    url: '/Review/CalculationRestaurantReviewSummary?restaurantId=4085&' + d.getTime(),
                    success: function (response) {
                        if (response) {
                            window.location = reviewdetaillink;
                        }
                    }
                });
            }
        }

    </script>
    <div style="position:relative">
    <div class="micro-inforbox" style="">
        <div class="social-share-icons">
            <div class="total-views">21327 lượt xem </div>
            <div class="foody-like"></div>
            <div id="facebook-like" class="facebook-like"></div>
            <div class="facebook-share fb-share-button" data-href="http://www.foody.vn/ho-chi-minh/highlands-coffee-nguyen-du" data-type="button_count"></div>
            <div id="google-like" class="google-like"></div>
            <div id="twitter-like" class="twitter-like"></div>

            <div class="report-data-error" style="display: block !important;"><a class="report-error resinfo-report" errorkeyname="Thông tin nhà hàng" data-always-show="true">Báo lỗi</a></div>
        </div>
        <div class="breadcrum">
            <div style="margin-left: 5px;">
                    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/ho-chi-minh/dia-diem">
        <span itemprop="title">TP. HCM</span> » </a></span>
    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/ho-chi-minh/khu-vuc-quan-1">
        <span itemprop="title">Quận 1</span> » </a></span>
    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/ho-chi-minh/khu-vuc-nha-tho-duc-ba" style="background:none!important;">
        <span itemprop="title">Khu vực Nh&#224; Thờ Đức B&#224; </span></a></span>

            </div>
            <div style="width:268px;position:relative;float:right">
                <a href="javascript:void(0);" id="btn-micro-res-owner"  class="btn-res-owner">Dành cho Chủ địa điểm</a>
                <script type="text/javascript">
                    var dropDownResOwnerHelper = new DropDownCategoryHelper();

                    $(function () {
                        dropDownResOwnerHelper.Init({
                            categoryId: "micro-res-owner",
                            btnCategoryId: "btn-micro-res-owner"
                        });
                    });
                </script>
                <div id="micro-res-owner" class="dropdown-category" style="top:32px; right:5px;">
                    <div class="dropdown-category-box">
                        <div class="dropdown-category-items">
                            <ul>
                                <li>
                                    <a id="btn-micro-create-event" href="/tao-uu-dai/4085" target="_blank">
                                        <span class="big-head" style="font-size:12px;">+ Tạo Ưu đãi cho thành viên</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://manage.foody.vn" rel="nofollow" target="_blank">
                                        <span class="big-head" style="font-size:12px;">+ Quảng cáo địa điểm</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://manage.foody.vn" rel="nofollow" target="_blank">
                                        <span class="big-head" style="font-size:12px;">+ Quản lý thông tin</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="micro-header">
            <div class="main-image">
                <div class="img">
                    <a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-anh">
                        <img class="pic-place" itemprop="photo" src="<?=base_url()?>static/images/634787639042944000_highlandcoffee2_220.jpg" width="220" height="280" alt="Highlands Coffee - Nguyễn Du" />
                    </a>
                </div>


            </div>
            <div class="main-information disableSection">
                <div class="res-common">
                    <div class="res-common-info">
                        <div class="main-info-bg"></div>
                        <div class="main-info-title">
                            <h1 style="width:410px;" itemprop="name">Highlands Coffee - Nguyễn Du</h1>

                                <div style="clear: both; overflow: hidden;">
                                        <div style="float: left">
                                            <ul>
                                                        <li style="float: left; padding: 2px 5px 0px 0; color: #888; font-size: 12px;" class="list">
                                                            <a class="microsite-cuisine" style="color:#888;" href="/ho-chi-minh/cafe-phong-cach-viet-nam">
                                                                Việt Nam
                                                            </a>
                                                        </li>
                                            </ul>
                                        </div>
                                                                            <h2 style="font-size: 12px; float: left; padding: 2px 5px 0px 0; color: #888;">- <a style="color:#02AAD4;" href="/thuong-hieu/highlands-coffee" class="microsite-brand">Hệ thống Highlands Coffee</a></h2>
                                </div>
                        </div>
                        <div id="res-summary-point" style="margin-top:12px; float:left;">
                                <div style="float:left;width:100%;position:relative" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
            <div class="microsite-top-points">
                <span style="font-weight:normal; color:#555;font-size:12px;padding-right:5px;">Vị tr&#237;</span>
                <span >
                            <span itemprop="ratingValue">8.0</span>
                </span>
            </div>
            <div class="microsite-top-points">
                <span style="font-weight:normal; color:#555;font-size:12px;padding-right:5px;">Kh&#244;ng gian</span>
                <span >
                            <span>7.8</span>
                </span>
            </div>
            <div class="microsite-top-points">
                <span style="font-weight:normal; color:#555;font-size:12px;padding-right:5px;">Chất lượng</span>
                <span >
                            <span>7.4</span>
                </span>
            </div>
            <div class="microsite-top-points">
                <span style="font-weight:normal; color:#555;font-size:12px;padding-right:5px;">Phục vụ</span>
                <span >
                            <span>7.4</span>
                </span>
            </div>
        <div class="microsite-top-points-block" style="margin-right: 0; width: 23px;">
            <div class="microsite-top-points-label"></div>
            <div class="microsite-top-points" style="margin-left: 0px; margin-top: 2px; width: 23px;"><a href="http://www.foody.vn/ho-chi-minh/highlands-coffee-nguyen-du#sumary-point">»</a></div>
        </div>
        <div class="microsite-top-points-block rich-snippet-total-review">
            <meta itemprop="bestRating" content="10" />
            <span itemprop="reviewCount">51</span> bình luận
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $(".rich-snippet-total-review span").hover(function () {
                $(this).css("text-decoration", "underline");
                $(this).css("cursor", "pointer");
            }, function () {
                $(this).css("text-decoration", "none");
                $(this).css("cursor", "normal");
            });

            $(".rich-snippet-total-review span").click(function () {
                window.location.href = "/ho-chi-minh/highlands-coffee-nguyen-du/binh-luan";
            });
        });
    </script>

                        </div>
                        <div class="disableSection">
                            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <div>
                                    <div class="res-common-add">
                                        <span itemprop="streetAddress">75 Nguyễn Du, P. Bến Ngh&#233;,</span> <span itemprop="addressLocality">
                                            <a href="/ho-chi-minh/khu-vuc-quan-1" title="Quận 1" style="color:#23B3D6">Quận 1</a>

                                        </span>
                                    </div>


                                </div>
                            </div>




                            <div class="res-common-phone">
                                <span itemprop="telephone" style="float:left; ">(08) 3512 7355</span>
                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Th&#244;ng tin nh&#224; h&#224;ng" href="javascript:void(0);">[báo lỗi]</a></div>

                            </div>

                            <div class="res-common-price">
                                <span style="float:left;padding-right:5px;">
                                </span>
                                Giá:
                                    <span itemprop="priceRange">
                                        <span>60.000 <sub><b>đ</b></sub> - <span>132.000</span> <sub><b>đ</b></sub></span>
                                    </span>
                            </div>


                            <!--Begin feature gallery-->
                            <div class="feature-gallery">

    <script type="text/javascript">
        var totalPics = 91;
    $(function() {
        $(".main-gallery").foodybox();
        if (totalPics > 5) {
        };
    });

    </script>
    <div class="res-common-smallgal" style="position: relative;">
        <!--  start gallery-->
        <div id="gallery" style="height: 70px; overflow: hidden;clear: both">
            <div id="gallery_list" style="overflow: hidden">
                <ul>
                        <li style="float: left; margin-right: 2px"><a href="http://media.foody.vn/album/foody-highlands-coffee-nguyen-du-49144-635268521798062500.JPG" class="main-gallery" title="Highlands Coffee - Nguyễn Du" data-id="219644" data-size="640x960" data-group="1" onclick="return false;">
                            <img src="<?=base_url()?>static/images/foody-highlands-coffee-nguyen-du-49144-635268521798062500_cropped_7070.JPG" border="0" alt=""/>
                        </a></li>
                        <li style="float: left; margin-right: 2px"><a href="http://media.foody.vn/album/foody-highlands-coffee-nguyen-du-49144-635268521775093750.JPG" class="main-gallery" title="Highlands Coffee - Nguyễn Du" data-id="219643" data-size="640x960" data-group="1" onclick="return false;">
                            <img src="<?=base_url()?>static/images/foody-highlands-coffee-nguyen-du-49144-635268521775093750_cropped_7070.JPG" border="0" alt=""/>
                        </a></li>
                        <li style="float: left; margin-right: 2px"><a href="http://media.foody.vn/album/foody-highlands-coffee-nguyen-du-49144-635268521752593750.JPG" class="main-gallery" title="Highlands Coffee - Nguyễn Du" data-id="219642" data-size="640x960" data-group="1" onclick="return false;">
                            <img src="<?=base_url()?>static/images/foody-highlands-coffee-nguyen-du-49144-635268521752593750_cropped_7070.JPG" border="0" alt=""/>
                        </a></li>
                        <li style="float: left; margin-right: 2px"><a href="http://media.foody.vn/album/foody-highlands-coffee-nguyen-du-49144-635268521643218750.JPG" class="main-gallery" title="Highlands Coffee - Nguyễn Du" data-id="219638" data-size="960x640" data-group="1" onclick="return false;">
                            <img src="<?=base_url()?>static/images/foody-highlands-coffee-nguyen-du-49144-635268521643218750_cropped_7070.JPG" border="0" alt=""/>
                        </a></li>
                        <li style="float: left; margin-right: 2px"><a href="http://media.foody.vn/album/foody-highlands-coffee-nguyen-du-49144-635268521575093750.JPG" class="main-gallery" title="Highlands Coffee - Nguyễn Du" data-id="219637" data-size="960x640" data-group="1" onclick="return false;">
                            <img src="<?=base_url()?>static/images/foody-highlands-coffee-nguyen-du-49144-635268521575093750_cropped_7070.JPG" border="0" alt=""/>
                        </a></li>
                                            <li style="z-index: 10;float:left; width:70px;">
                            <a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-anh" style="
                            width: 70px;display: table-cell;height: 68px;border: #e6e6e6 1px solid;font-size: 11px;text-align: center;background: #eee;vertical-align: middle;color:#999">

                                Xem tất cả <br />91 ảnh »
                            </a>
                        </li>
                </ul>
            </div>
        </div>
        <!--  end gallery-->
    </div>

                            </div>
                            <!--Begin feature gallery-->

                        </div>

                    </div>
                    <div class="res-common-ratings">

                        <div class="res-common-ratingpoints">
                            <div class="reward-notify-msg" style="width:268px;padding:0 0 10px 0;margin:0;float:left">
                                <span style="float:left;">Bình luận để</span>
                                <a href="/chinh-sach-thuong" target="_blank" style="float: left;"><span>+5
                                </span>
                                </a>
                                <span style="float: left;">Điểm thưởng</span>
                            </div>
                            <div style="clear:both;">
                                <div class="title-left">
                                    <div class="from-review">
                                        <div id="basic-info-total-review" style="display:none">
                                            <a href="/ho-chi-minh/highlands-coffee-nguyen-du/binh-luan"><span style="color: #CC0000">51</span></a> bình luận
                                        </div>
                                    </div>
                                </div>
                                <div class="title-right" style="position: relative;">
                                    <a href="#" class="review reviewLink" resid="4085"><span>Bình luận</span></a>

                                </div>
                            </div>
                            <div style="clear:both;">
                                <div class="title-left">
                                    <div class="from-review" style="margin-top: 4px;">
                                        <a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-anh" class="pics-countable">91</a> hình ảnh
                                    </div>
                                </div>
                                <div class="title-right">
                                    <div>
                                        <a href="#" class="upload btn-upload"><span>Đăng ảnh</span></a>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both">

<div style="clear:both">
        <div class="title-left">
            <div class="from-review" style="margin-top: 4px;">
                <a class="favouriteusers-link" href="javascript:void(0);" resId="4085"><span class="count-like" style="color: #C00;">19</span></a> yêu thích
            </div>
        </div>
    <div style="float: left; margin-top: 12px; display: none" class="favourite-restaurant-waiting">
        <img src="<?=base_url()?>static/style/images/icons/ajax-loader.gif" />
    </div>
    <div class="title-right">
        <a href="javascript:void(0)" class="favouriteRestaurant" resId="4085">
                <dd class="favourite"><span>Yêu thích</span></dd>
                <dd class="favourite_act" style="display: none"><span>Yêu thích</span></dd>
        </a>
    </div>
</div>
<div style="clear:both">
        <div class="title-left">
            <div class="from-review" style="margin-top: 4px;">
                <a class="wanted-link" href="javascript:void(0);" resId="4085"><span class="count-wanted" style="color: #C00;">2</span></a> Muốn đến
            </div>
        </div>
    <div style="float: left; margin-top: 12px; display: none" class="wanted-restaurant-waiting">
        <img src="<?=base_url()?>static/style/images/icons/ajax-loader.gif" />
    </div>
    <div class="title-right">
        <a href="javascript:void(0)" class="wantedRestaurant" resId="4085">
                <dd class="wanted"><span>Muốn đến</span></dd>
                <dd class="wanted_act" style="display: none"><span>Muốn đến</span></dd>
        </a>
    </div>
</div>
<div style="clear:both">
        <div class="title-left">
            <div class="from-review" style="margin-top: 4px;">
                <a href="javascript:void(0)" resId="4085" class="count-checkedin">31</a> Check-in
            </div>
        </div>
    <div style="float: left; margin-top: 12px; display: none" class="checkin-restaurant-waiting">
        <img src="<?=base_url()?>static/style/images/icons/ajax-loader.gif" />
    </div>
    <div class="title-right">
        <div>

            <a href="javascript:void(0)" class="restaurant_checkin checkin" resId="4085"><span>Check-in</span></a>
        </div>
            <div id="restaurant-basic-div">
                <div id="checkedInUsersDialog" data-bind="with: checkedInUsersModel" style="display: none">
                    <div data-bind="visible: loading" style="padding-top: 100px; padding-bottom: 100px; padding-left: 200px;">
                        <img alt="Đang tải ..." src="<?=base_url()?>static/style/images/loading-review.gif" />
                    </div>
                    <div data-bind="visible: !loading()">
                        <span class="oes" style="margin-bottom: 5px; line-height: 1.4em;" data-bind="text: resName"></span>
                        <div style="padding-bottom: 10px; border-bottom: #ccc 1px solid; font-size: 12px;"><b data-bind="text: users().length+' '"></b>thành viên check-in </div>
                        <div style="overflow: auto; height: 340px; margin-top: 10px;" data-bind="foreach: users">
                            <div class="microsite-lovers-item-popup">
                                <div class="popup-image">
                                    <a data-bind="attr:{href: ProfileUrl}">
                                        <img data-bind="attr:{src: AvatarUrl}"></a>
                                </div>
                                <div class="popup-content">
                                    <div><a data-bind="attr: { href: ProfileUrl }, text: $root.getUserDisplayName($data)"></a></div>
                                    <div><span data-bind="text: TotalUserReviews+' '"></span>bình luận</div>
                                    <div><span data-bind="text: TotalUserPictures+' '"></span>hình ảnh</div>
                                    <div><span data-bind="text: TotalCheckedIns+' '"></span>check-in</div>
                                    <div style="position: absolute; right: 0; top: 16px; font-weight: bold">
                                        <div data-bind="if: FriendStatusId()==3">
                                            <div class="add-friend" data-bind="click: $root.addFriend">Kết bạn</div>
                                        </div>
                                        <div data-bind="if: FriendStatusId()==1" style="position: relative; float: right;">
                                            <span class="request-friendlist">Đã gửi kết bạn  </span>
                                            <span class="remove-friends" data-bind="click: $root.cancelAddFriend">
                                                <img src="<?=base_url()?>static/style/images/icons/cancel-request.png" /></span>
                                        </div>

                                        <div data-bind="if: FriendStatusId()==5">
                                            <span><b>Kết bạn?</b></span><br />
                                            <span class="accept-request" data-bind="click: $root.acceptFriendRequest"><b>Đồng ý</b></span>
                                            <span>|</span> <span data-bind="click: $root.cancelAddFriend"><b>Hủy</b></span>
                                        </div>


                                        <div class="friend-status" data-bind="if: FriendStatusId()==2" style="position: relative; float: right;">
                                            <div data-bind="click: $root.removeFriend" style="display: none" class="remove-friends">
                                                <img src="<?=base_url()?>static/style/images/icons/cancel-request.png" />
                                            </div>
                                            <div class="isfriends">
                                                <img src="<?=base_url()?>static/style/images/icons/approved.png" />
                                            </div>
                                            <div class="friend">Là bạn bè</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="favouriteUsersDialog" style="display: none" data-bind="with: favouriteUsersModel">
                    <div data-bind="visible: loading" style="padding-top: 100px; padding-bottom: 100px; padding-left: 200px;">
                        <img alt="Đang tải ..." src="<?=base_url()?>static/style/images/loading-review.gif" />
                    </div>
                    <div data-bind="visible: !loading()">
                        <span class="oes" style="margin-bottom: 5px; line-height: 1.4em;" data-bind="text: resName"></span>
                        <div style="padding-bottom: 10px; border-bottom: #ccc 1px solid; font-size: 12px;"><b data-bind="text: users().length+' '"></b>thành viên yêu thích </div>
                        <div style="overflow: auto; height: 340px; margin-top: 10px;" data-bind="foreach: users">
                            <div class="microsite-lovers-item-popup">
                                <div class="popup-image">
                                    <a data-bind="attr:{href: ProfileUrl}">
                                        <img data-bind="attr:{src: AvatarUrl}"></a>
                                </div>
                                <div class="popup-content">
                                    <div><a data-bind="attr: { href: ProfileUrl }, text: $root.getUserDisplayName($data)"></a></div>
                                    <div><span data-bind="text: TotalUserReviews+' '"></span>bình luận</div>
                                    <div><span data-bind="text: TotalUserPictures+' '"></span>hình ảnh</div>
                                    <div style="position: absolute; right: 0; top: 16px; font-weight: bold">
                                        <div data-bind="if: FriendStatusId()==3">
                                            <div class="add-friend" data-bind="click: $root.addFriend">Kết bạn</div>
                                        </div>
                                        <div data-bind="if: FriendStatusId()==1" style="position: relative; float: right;">
                                            <span class="request-friendlist">Đã gửi kết bạn  </span>
                                            <span class="remove-friends" data-bind="click: $root.cancelAddFriend">
                                                <img src="<?=base_url()?>static/style/images/icons/cancel-request.png" /></span>
                                        </div>

                                        <div data-bind="if: FriendStatusId()==5">
                                            <span><b>Kết bạn?</b></span><br />
                                            <span class="accept-request" data-bind="click: $root.acceptFriendRequest"><b>Đồng ý</b></span>
                                            <span>|</span> <span data-bind="click: $root.cancelAddFriend"><b>Hủy</b></span>
                                        </div>


                                        <div class="friend-status" data-bind="if: FriendStatusId()==2" style="position: relative; float: right;">
                                            <div data-bind="click: $root.removeFriend" style="display: none" class="remove-friends">
                                                <img src="<?=base_url()?>static/style/images/icons/cancel-request.png" />
                                            </div>
                                            <div class="isfriends">
                                                <img src="<?=base_url()?>static/style/images/icons/approved.png" />
                                            </div>
                                            <div class="friend">Là bạn bè</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wantedUsersDialog" style="display: none" data-bind="with: favouriteUsersModel">
                    <div data-bind="visible: loading" style="padding-top: 100px; padding-bottom: 100px; padding-left: 200px;">
                        <img alt="Đang tải ..." src="<?=base_url()?>static/style/images/loading-review.gif" />
                    </div>
                    <div data-bind="visible: !loading()">
                        <span style="margin-bottom: 5px; line-height: 1.4em;" data-bind="text: resName"></span>
                        <div style="padding-bottom: 10px; border-bottom: #ccc 1px solid; font-size: 12px;"><b data-bind="text: users().length+' '"></b> Muốn đến </div>
                        <div style="overflow: auto; height: 340px; margin-top: 10px;" data-bind="foreach: users">
                            <div class="microsite-lovers-item-popup">
                                <div class="popup-image">
                                    <a data-bind="attr:{href: ProfileUrl}">
                                        <img data-bind="attr:{src: AvatarUrl}"></a>
                                </div>
                                <div class="popup-content">
                                    <div><a data-bind="attr: { href: ProfileUrl }, text: $root.getUserDisplayName($data)"></a></div>
                                    <div><span data-bind="text: TotalUserReviews+' '"></span>bình luận</div>
                                    <div><span data-bind="text: TotalUserPictures+' '"></span>hình ảnh</div>
                                    <div style="position: absolute; right: 0; top: 16px; font-weight: bold">
                                        <div data-bind="if: FriendStatusId()==3">
                                            <div class="add-friend" data-bind="click: $root.addFriend">Kết bạn</div>
                                        </div>
                                        <div data-bind="if: FriendStatusId()==1" style="position: relative; float: right;">
                                            <span class="request-friendlist">Đã gửi kết bạn  </span>
                                            <span class="remove-friends" data-bind="click: $root.cancelAddFriend">
                                                <img src="<?=base_url()?>static/style/images/icons/cancel-request.png" /></span>
                                        </div>

                                        <div data-bind="if: FriendStatusId()==5">
                                            <span><b>Kết bạn?</b></span><br />
                                            <span class="accept-request" data-bind="click: $root.acceptFriendRequest"><b>Đồng ý</b></span>
                                            <span>|</span> <span data-bind="click: $root.cancelAddFriend"><b>Hủy</b></span>
                                        </div>


                                        <div class="friend-status" data-bind="if: FriendStatusId()==2" style="position: relative; float: right;">
                                            <div data-bind="click: $root.removeFriend" style="display: none" class="remove-friends">
                                                <img src="<?=base_url()?>static/style/images/icons/cancel-request.png" />
                                            </div>
                                            <div class="isfriends">
                                                <img src="<?=base_url()?>static/style/images/icons/approved.png" />
                                            </div>
                                            <div class="friend">Là bạn bè</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<div style="clear:both">
    <div class="title-left">
        <div class="from-review" style="margin-top: 4px;">

        </div>
    </div>
    <div class="title-right">
        <a href="javascript:void(0)" class="social-email-sharing">
            <dd class="share"><span>Chia sẻ</span></dd>
            <dd class="share_act" style="display: none"><span>Chia sẻ</span></dd>
        </a>
    </div>
</div>
<div style="padding-top:10px;clear:both;border-top:#eee 1px solid; margin-top:10px;float:left; width:100%;">
    <div class="clearfix" style="font-size:11px; float:left;width:100px;margin-top:10px;">Đã được lưu
    <a href="javascript:void(0)" resid="4085" class="list-counter" style="color:#cc0000;font-weight:bold">19</a><span>&nbsp;list</span>
</div>
    <div class="title-right" style="float:right; width:117px;">
       <a class="tool-custom-list-add otherlist" data-id="4085" data-core="false"><span class="save-icons"></span><span>Lưu địa điểm</span> </a>
    </div>
</div>

                            </div>
                            <div style="clear:both"></div>
                        </div>
                        <div id="reviewDialog" style="display: none">

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
    <!--begin navbar -->
<script>
    $(window).scroll(function () {
        if ($(window).scrollTop() + $('#float-header').height() > $('#float-menu-container').offset().top) {
            $('#float-menu').css({ 'z-index': 99, position: 'fixed', top: $('#float-header').height() - 23 });
        }
        else {
            $('#float-menu').css({ 'z-index': 'auto', position: '', top: 'auto' });
        }
    });
</script>
<div id="float-menu-container" class="main-menu" style="clear:both;width:1000px;">
    <ul id="float-menu">

        <li><a href="/ho-chi-minh/highlands-coffee-nguyen-du" class=current>
            Trang chủ</a></li>
        <li><a href="http://www.foody.vn/ho-chi-minh/highlands-coffee-nguyen-du#res-info">
            Thông tin</a></li>
        <li><a href="/ho-chi-minh/highlands-coffee-nguyen-du/binh-luan" >
            Bình luận <span>51</span></a></li>
        <li onmouseover="$('.sub-menu', this).show()" onmouseout="$('.sub-menu', this).hide()" style="position: relative;">

            <a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-anh" >
                Hình ảnh <span class="pics-countable">91</span>&nbsp;&nbsp;&nbsp&nbsp;

            <span class="arrow_w"></span>
            </a>
                <dl class="sub-menu">
                        <dt><a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-mon-an">M&#243;n ăn <span class="pics-album-mon-an-countable1">58</span></a></dt>
                        <dt><a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-khong-gian">Kh&#244;ng gian <span class="pics-album-khong-gian-countable1">21</span></a></dt>
                        <dt><a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-tong-hop">Tổng hợp <span class="pics-album-tong-hop-countable1">8</span></a></dt>
                        <dt><a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-thuc-don">Thực đơn <span class="pics-album-thuc-don-countable1">4</span></a></dt>
                </dl>
        </li>
        <li><a href="/ho-chi-minh/highlands-coffee-nguyen-du/thuc-don" >
            Thực đơn
             </a> </li>

        <li><a class="linkmap" style="position: static; margin: 0;">Bản đồ</a> </li>

            <div class="status verified-status">
                <span style="float: left; margin-top: 15px; font-size: 12px;">Hoạt động</span>
                <span style="float: right;position:absolute;right:5px;">
                    <img src="<?=base_url()?>static/style/images/icons/blue-verified.png" /></span>
                <div class="report-data-error" style="float: left; position: absolute; bottom: 0;"><a class="resinfo-report" errorkeyname="Th&#244;ng tin x&#225;c thực" href="javascript:void(0);">[báo lỗi]</a></div>
            </div>
    </ul>

</div>
    <!--End nav bar-->
    <div id="report-info-dialog" style="display: none" class="reporterrortooltip">
        <div>
    <div style="padding-bottom:5px;"><span class="errorkeyname"></span></div>
    <div style="padding-top:3px;">
        <textarea class="correctinfotextbox" spellcheck="false"></textarea>
    </div>
         <div class="top-arrow">
        <img alt="" src="<?=base_url()?>static/style/images/icons/arrow-top.png"></div>
        <div><a class="send-resinfo-error" reporttype="1">Gửi thông tin</a></div>
    <div class="report-wating" style="display:none"><img src="<?=base_url()?>static/style/images/loading.gif" /></div>
    <div class="report-success"></div>
    <div class="report-fail"></div>
</div>

    </div>
    <div id="report-properties-dialog" style="display: none; height: 120px;" class="reporterrortooltip">
        <div>
    <div style="padding-bottom:5px;"><span class="errorkeyname"></span></div>
         <div class="left-arrow">
        <img alt="" src="<?=base_url()?>static/style/images/icons/arrow-left.png"></div>
        <div>
            <label><input type="radio" value="true" name="property-truth" />Có</label>
            <label><input type="radio" value="false" name="property-truth" />Không</label>
        </div>
    <div style="padding-top:3px;">
        <textarea class="correctinfotextbox" spellcheck="false"></textarea>
    </div>
        <div><a class="send-resproperties-error" reporttype="2">Gửi thông tin</a></div>
    <div class="report-wating" style="display:none"><img src="<?=base_url()?>static/style/images/loading.gif" /></div>
    <div class="report-success"></div>
    <div class="report-fail"></div>
</div>

    </div>

<script type="text/ecmascript">
    $(function () {
            bindReviewReportErrorWithoutLogined();
        //$('.correctinfotextbox').watermark('Thông tin...', { className: 'comment-watermark' });
    });
</script>

<div id="review-report-dialog">
    <div class="top-arrow">
        <img src="<?=base_url()?>static/style/images/icons/arrow-top.png" alt=""></div>
    <div>
        <input type="hidden" id="review-error-hd" />
        <input type="hidden" id="review-error-type" />
        <div style="padding-bottom: 5px;"><span class="errorkeyname">Báo lỗi bình luận</span></div>

        <div>
            <textarea class="correctinfotextbox" spellcheck="false"></textarea>
        </div>
        <div><a class="send-resinfo-error">Gửi thông tin</a></div>
        <div class="report-wating" style="display:none"><img src="<?=base_url()?>static/style/images/loading.gif" /></div>
        <div class="report-success"></div>
        <div class="report-fail"></div>
    </div>
</div>
    <script type="text/javascript">
        var errorReport = new ErrorReport('4085');
        $(function () {

            $('.send-resproperties-error').click(function () {
                errorReport.sendResPropertiesReport();
            });

            propertiesWattermark = 'Ghi chú';
            infoWattermark = 'Nhập thông tin chính xác';
            reportErrorEmptyMsg = 'Vui lòng nhập thông tin';
            reportErrorSuccessMsg = 'Cám ơn bạn';

            $('.linkmap').click(function () {
                if(typeof loadMicroMap !== 'undefined' && $.isFunction(loadMicroMap))
                    loadMicroMap();
                else{
                    window.location.href='/ho-chi-minh/highlands-coffee-nguyen-du#map';
                }
            });
        });
        $('.send-resinfo-error').live('click',function () {
            errorReport.sendResInfoReport();
        });


        $(function () {
            $('a.resinfo-report').click(function () {
                var container = $(this).closest('tr');
                if (container.length == 0) {
                    container = $(this).closest('.res-common-info');
                }
                loginForReportSuccess(container, this);
            });
            $('a.resproperties-report').click(function () {
                loginForReportSuccess($(this).closest('li'), this);
            });
            errorReport.InitWithoutLogin();
        });

        function loginForReportSuccess(container, e) {
            loginSuccessCallback = function () {
                $.modal.close();
                $('a.resinfo-report').unbind('click');
                $('a.resproperties-report').unbind('click');
                errorReport.InitWithLogined();
                $('body,html').animate({
                    scrollTop: $(container).position().top
                }, 800);
                $(container).effect("highlight", {}, 3000);
                $(container).find('.report-data-error').show();
                $(container).find('.resproperties-report').show();
                setTimeout(function () { $(e).click(); }, 1000);
            };
            //$('#loginPopup').modal({ persist: true });
            LoginPopup.Show();
        }


    </script>
    <div>

<style type="text/css">

</style>
<script type="text/javascript">
    function AddWishlistModel(initData) {
        var self = this;
        self.IncludeCore=true;
        self.UserId = ko.observable(initData.UserId);
        self.UserName=ko.observable(initData.UserName);
        self.ControlId=ko.observable('');
        self.TargetControl=ko.observable();
        self.ContextClass=ko.observable('tool-custom-list-add');
        self.WishlistContextId=ko.observable('#toolAddWishlist');
        self.WishlistContext=ko.observable(false);
        self.BaseUrl=ko.observable(initData.BaseUrl);
        self.RestaurantId = ko.observable(initData.RestaurantId);
        self.Lists = ko.observableArray([]);
        self.AppendList = function (item) {
            if (item != null) {
                self.Lists.push({
                    Title: item.Title,
                    Id: item.Id,
                    IsCore: false,
                    Name: item.Name,
                    RestaurantId:ko.observable(item.RestaurantId),
                    Url:ko.computed(function() {
                        return self.BaseUrl() + "#" + item.Name;
                    })
                });
            }
        };

        self.Processing=ko.observable(false);
        self.OnceLoaded=ko.observable(false);
        self.LoadList = function (e) {
            if(self.OnceLoaded())
            {
                self.Lists.removeAll();
            }
            if(!self.Processing())
            {
                self.Processing(true);
                var url = '/list/getcustomlistbyrestaurant/';
                $.getJSON(url, { userId: self.UserId(),restaurantId:self.RestaurantId(),includeCore:self.IncludeCore },
                        function (response) {
                            if (response.success) {
                                for (var i = 0; i < response.data.length; i++) {
                                    self.AppendList(response.data[i]);
                                }
                                self.OnceLoaded(true);
                                self.Processing(false);
                            }
                        });
            }
        };
        self.PrevRestaurantId=ko.observable(0);
        self.SetCurrentRestaurant = function(id) {
            self.RestaurantId(id);

        };
        self.PreloadList=function(){
            if(self.PrevRestaurantId()!=self.RestaurantId())
            {
                self.LoadList();
                self.PrevRestaurantId(self.RestaurantId());
            }
            else
                return false;
        };
        self.AppendAfterSaving = function(item) {
            if (item != null) {
                self.Lists.push({
                    Title: item.Title,
                    Id: item.Id,
                    IsCore: false,
                    Name: item.Name,
                    RestaurantId: ko.observable(self.RestaurantId()),
                    Url: ko.computed(function() {
                        return self.BaseUrl() + "#" + item.Name;
                    })
                });
            }
        };

        self.Logged=ko.observable(false);
        self.Login = function (callback) {
            //do normal action
            var d = new Date();
            $.ajax({
                type: "GET",
                url: '/Review/IsLogin?' + d.getTime(),
                success: function (response) {
                    if (response.success) {
                        self.Logged(true);
                        self.Processing(false);
                        callback();
                    }
                    else {
                        loginSuccessCallback = function() {
                            $.ajax({
                                type: "GET",
                                url: '/Review/IsLogin?' + d.getTime(),
                                success: function(data) {
                                    if (data.success) {
                                        $.modal.close();
                                        self.Logged(true);
                                        self.Processing(false);
                                        callback();
                                    }
                                }
                            });
                        };
                        //$('#loginPopup').modal({ persist: true });
                        LoginPopup.Show();
                    }
                }
            });
        };
        self.ListAction = function() {
            if (self.Logged()) {
                self.PrepareCreateForm();
            } else {
                self.Login(self.ListAction);
            }
        };
        self.EndSavingList=function(item){
            if(item!=null)
            {
                postWishlistCallback=null;
                self.AppendAfterSaving(item);
                var content=$('#wishListFormWrapper');
                content.hide();
                $.modal.close();
                self.TargetControl().addClass('added');
                if ($('.list-counter').length > 0) {
                    var counter = parseInt( $('.list-counter').first().text());
                    if(!counter)
                        counter=0;
                    counter++;
                    $('.list-counter').text(counter);
                }
            }
        };
        self.ClearExitTimer = function() {
            $(document).unbind('click.wishlistTool');
            if (exitTimer)
                clearTimeout(exitTimer);
            if (!self.WishlistContext()) {
                //$(self.WishlistContext()).unbind('mouseleave.wishlistTool');
                //$(self.WishlistContext()).unbind('mouseover.wishlistTool');
            }
        };
        self.PrepareCreateForm = function() {
            self.Processing(true);
            var content = $('#wishListFormWrapper');
            content.show();
            content.modal({ maxWidth: 600, minHeight: 300, autoResize: true, overlayClose: true });
            $.ajax({
                type: "POST",
                url: '/List/WishlistForm',
                data: { restaurantId: self.RestaurantId() },
                success: function(response) {
                    content.html(response);
                    postWishlistCallback = self.EndSavingList;

                    self.Processing(false);
                }
            });
        };

        self.ToggleSelection = function(data, event) {
            event.preventDefault();
            var type = data.Name,
                action = '';
            if (data.RestaurantId() == self.RestaurantId()) {
                type = 'remove';
                data.RestaurantId(null);
            } else {
                data.RestaurantId(self.RestaurantId());
            }
            //auto post data
            $.post('/List/WishlistItemAction', { listId: data.Id, restaurantId: self.RestaurantId(), type: type, action: action },
                function() {
                    //update list-counter
                    if ($('.list-counter').length > 0) {
                        var counter = $('.list-counter').first().text();
                        if (type == 'remove') {
                            counter--;
                        } else
                            counter++;
                        $('.list-counter').text(counter);
                    }
                    if (exitTimer) {
                        window.clearTimeout(exitTimer);
                        var control = self.TargetControl();
                        var wishlistContext = $(self.WishlistContextId()); //self.WishlistContext();
                        $(document).bind('click.wishlistTool', function(e) {
                            e.preventDefault();
                            self.HideWishlistTool(control, wishlistContext);
                            $(document).unbind('click.wishlistTool');
                        });
                    }
                    var hasadded = false;
                    for (var i = 0; i < self.Lists().length; i++) {
                        if(self.Lists()[i].RestaurantId() == self.RestaurantId()){
                            hasadded = true;
                            break;
                        }
                    }
                    if(hasadded){
                        self.TargetControl().addClass('added');
                    }
                    else{
                        self.TargetControl().removeClass('added');
                    }
            });
        };
        self.HideWishlistTool = function(control, target) {
            exitTimer = setTimeout(function() {
                $(target).hide();
                //$(control).parent().parent().css({display:''});
                //$(target).unbind('mouseleave.wishlistTool');
                //$(target).unbind('mouseover.wishlistTool');
                $(document).unbind('click.wishlistTool');
            }, 500);
        };

        self.WishlistContextEventHandler = function() {

            var wishlistContext = $(self.WishlistContextId()); //self.WishlistContext();
            self.WishlistContext(wishlistContext); //cache context object
            self.ClearExitTimer();
            var control = self.TargetControl();
            var id = control.attr('data-id');
            var offSet = control.offset();
            var offX = offSet.left,
                offY = offSet.top;
            //var extHeight=typeof($('#topNo'))!='undefined'?$('#topNo').height():0;
            //offY=offY- extHeight;
            wishlistContext.css({ top: offY, left: offX, width: 200, zIndex: 99 });
            if (id != self.PrevRestaurantId()) {
                self.SetCurrentRestaurant(id);
                self.PreloadList();
                wishlistContext.show();

            } else {
                if (wishlistContext.css('display') == 'none') {
                    wishlistContext.show();
                    //control.parent().parent().css({display:'block'})
                } else {
                    wishlistContext.hide();
                    //control.parent().parent().css({display:''})
                }
            }

            //wishlistContext.bind('mouseover.wishlistTool',function(e){
            //    e.preventDefault();
            //    self.ClearExitTimer();
            //});
            //wishlistContext.bind('mouseleave.wishlistTool',function(e){
            //    e.preventDefault();
            //    self.HideWishlistTool(control,wishlistContext);});
            $(document).bind('click.wishlistTool', function(e) {
                e.preventDefault();
                self.HideWishlistTool(control, wishlistContext);
                $(document).unbind('click.wishlistTool');
            });
        };
        $('a.tool-custom-list-add').live('click',function(e){
            e.preventDefault();
            self.TargetControl($(this));
            self.IncludeCore=$(this).attr("data-core")?$(this).attr("data-core"):true;
            if(!self.Logged())
            {
                self.Login(self.WishlistContextEventHandler);
            }
            else{self.WishlistContextEventHandler();}
        });
        $(self.WishlistContextId()).find("a").on("click", function(e) {
            e.preventDefault();
            if (exitTimer) {
                window.clearTimeout(exitTimer);
            }
        });

    }

    var postWishlistCallback,exitTimer;
    var initAddWishlistModelData={"UserId":0,"RestaurantId":4085,"UserName":null,"BaseUrl":null};
    var addWishlistModel=new AddWishlistModel(initAddWishlistModelData);
    $(function() {
        $('#toolAddWishlist').appendTo('body');
        ko.applyBindings(addWishlistModel, document.getElementById("toolAddWishlist"));

    });

</script>
<div id="toolAddWishlist" style="display: none; position: absolute; z-index: 99;">
    <ul>
        <li class="tool-custom-list">


            <div class="custom-list-wrapper">
                <div class="list-addmore-but">
                    <span style="float: left; margin-right: 10px;">Chọn danh sách để lưu lại </span>
                    <span data-bind="visible:Processing" style="float: left; margin-top: 2px;">
                        <img src="<?=base_url()?>static/style/images/icons/ajax-loader.gif" alt="loading..."/></span>
                </div>
                <ul data-bind="foreach:Lists" style="max-height: 150px; overflow: auto;">
                    <li style="position: relative; overflow: hidden;">
                        <a data-bind="attr:{'data-name':Name}, css:{'checked':RestaurantId()==$parent.RestaurantId()}, click:$parent.ToggleSelection">
                            <span class="list-label" data-bind="text:Title"></span>
                        </a>
                        <a data-bind="attr:{href:Url}" class="custom-list-link" title="Go to list" style="float: right; padding: 4px 2px; text-align: center; width: 30px; position: absolute; right: 0px; top: 0px;"></a>
                    </li>
                </ul>
                <ul>
                    <li style="background: #d0ecfd; border-top: #ccc 1px solid;">
                        <a href="#" data-bind="click:ListAction" style="font-style: italic; color: #0074D9; border-bottom: none;">+ Tạo danh sách mới</a></li>
                </ul>
            </div>

        </li>
    </ul>
    <div id="wishListFormWrapper" style="display: none;"></div>
</div>


    </div>


<!--End of microsite header-->

                <!--End of microsite header-->
            </div>
            <!--Start Micro content-->
            <div class="micro-main-content">
                <!--Start Left content -->
                <table>
                    <tr>
                        <td class="leftbox">
                        <div class="micro-left">


<script type="text/javascript">
    var eventTrackingLabel = "Microsite Home";
    backUrl = '/ho-chi-minh/highlands-coffee-nguyen-du/album-anh';
</script>



<!-- Start Popular Pic -->

    <div class="microsite-box">
        <div class="microsite-box-heading">
            <div class="title">
                Món ăn phổ biến
                <div class="icocollapse" affectedclass="microsite-box-popular-pic"></div>
            </div>
        </div>
        <div class="microsite-box-popular-pic">
            <div class="microsite-box-content fod-slide-container" style="width:640px;height:145px;padding-bottom:45px">
                <!-- start fod slide -->
                <div id="top-popular-pic-container" class="microsite-box-content predefine-album-box fod-slide-list" style="width:640px;padding:10px 14px">
                    <div class="micro-home-album" style="height:150px;">
                        <div>
                            <a href="/photo/detail/211600" title="Hazenut Jelly Coffee">
                                <img src="<?=base_url()?>static/images/foody-highlands-coffee-nguyen-du-47263-635259233994192500_cropped_145145.jpg" alt="Hazenut Jelly Coffee" title="Hazenut Jelly Coffee" width="145" height="145" />
                            </a>
                        </div>
                        <div class="by" style="text-overflow:ellipsis;white-space:nowrap;overflow:hidden;padding-top:3px">
                            <span>Hazenut Jelly Coffee</span>
                        </div>
                    </div>
                    <div class="micro-home-album" style="height:150px;">
                        <div>
                            <a href="/photo/detail/254779" title="Jelly Freeze
">
                                <img src="<?=base_url()?>static/images/foody-highlands-coffee-nguyen-du-6fe75022-ce50-4872-a659-9a472f88d192-635294554948946250_cropped_145145.jpg" alt="Jelly Freeze
" title="Jelly Freeze
" width="145" height="145" />
                            </a>
                        </div>
                        <div class="by" style="text-overflow:ellipsis;white-space:nowrap;overflow:hidden;padding-top:3px">
                            <span>Jelly Freeze
</span>
                        </div>
                    </div>
                    <div class="micro-home-album" style="height:150px;">
                        <div>
                            <a href="/photo/detail/16732" title="">
                                <img src="<?=base_url()?>static/images/634787678527636000-highland_nguyendu2_cropped_145145.jpg" alt="" title="" width="145" height="145" />
                            </a>
                        </div>
                        <div class="by" style="text-overflow:ellipsis;white-space:nowrap;overflow:hidden;padding-top:3px">
                            <span></span>
                        </div>
                    </div>
                    <div class="micro-home-album" style="height:150px;">
                        <div>
                            <a href="/photo/detail/16733" title="">
                                <img src="<?=base_url()?>static/images/634787678529352000-highland_nguyendu3_cropped_145145.jpg" alt="" title="" width="145" height="145" />
                            </a>
                        </div>
                        <div class="by" style="text-overflow:ellipsis;white-space:nowrap;overflow:hidden;padding-top:3px">
                            <span></span>
                        </div>
                    </div>
                </div>
                <!-- end fod slide -->
                <!-- start fod slide navigation -->
                <div class="fod-slide-navigation" style="top:180px;right:-1px;width:100%;border-top:1px solid #EEEEEE;padding:5px 0;font-size:11px;">
                    <a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-mon-an" class="fod-slide-navigation-btn-view-all" style="padding-left:15px">Xem tất cả</a>
                    <a href="javascript:void(0);" class="fod-slide-navigation-btn-view-all upload" style="padding-left:15px">+ Đăng món mới</a>
                </div>
                <!-- end fod slide navigation -->
            </div>
        </div>
    </div>

<!-- End Popular Pic -->
<!--Start Microsite Intro box -->



<div>

<div class="microsite-box">
    <div class="microsite-box-heading">
            Bình luận gần đây
        <div class="icocollapse" affectedClass="microsite-box2"></div>
    </div>
    <div class="microsite-box2">
        <div>
                <div id="resreviews">
            <!-- ko if: false -->
    <div>
<div id="review-70701">
    <div class="micro-home-recent-review review-item" style="width:640px;padding:15px;" reviewid="70701">
        <article class="micro-home-review-item">
            <div class="leftimage">

                <div class="microsite-review-new-avatar">
                    <a href="/thanh-vien/acquaintance10" class="user-link" refid="137761" tooltip="userTooltip_137761" style="">
                        <img src="<?=base_url()?>static/images/user-default-female_60.png" width="60" height="60">
                    </a>
                </div>

            </div>
            <div class="rightdesc" itemscope itemtype="http://data-vocabulary.org/Review">
                <div class="user">
                    <a href="/thanh-vien/acquaintance10" tooltip="userTooltip_137761" refId="137761" class="user-link">
                        <span style="float:left;padding-right:4px;" itemprop="reviewer">phan lan</span></a>

                    <span class="timerow">
                        -
                        <span class="address" data-utime="1398098316" title="21/04/2014 23:38" itemprop="dtreviewed">21/04/2014 23:38</span>
                    </span>
                    <div class="review-user-level" style="clear:both;">
                        <a href="http://www.foody.vn/chinh-sach-thuong#user-level-up" target="_blank" class="newbee">Newbee</a>
                    </div>
                    <div style="position: absolute; right: 0px; top: 0px;">
                            <div class="review-point">
                                <meta itemprop="best" content="10" />
                                <meta itemprop="worst" content="0" />
                                    <span itemprop="rating">7.0</span>
                            </div>
                    </div>
                </div>
                <div style="position: relative">
                    <div class="title">
                        <span itemprop="itemreviewed">Highlands Coffee - Nguyễn Du</span>
                    </div>
                </div>
                <div class="desc disableSection" style="white-space: pre-line;" itemprop="description">Mình rất thích khi uống cafe ở đây, đặc biệt là khi ở trên lầu nhìn xuống cảnh Bến Thành, vào ban đêm lại càng đẹp. Giá cả tương đối, không gian đẹp, tương đối yên tĩnh, thích hợp để làm việc. Cà phê của Highland rất thơm . Phục vụ sẽ nhanh hơn nếu ở trên lầu, còn ở tầng dưới thì chờ hơi lâu, có người phục vụ tốt, có người làm khá cẩu thả. Mạng wifi hôm vào được, hôm thì không. Nhưng nhìn chung không gian và thức uống ở highland rất được, tuy ở trung tâm quận 1 nhưng giá cả rất hợp lý, sẽ quay lại thường xuyên.</div>
                    <div style="float: left; width: 500px; margin-top: 5px;">

                    </div>

            </div>
        </article>
    </div>
</div>
<div id="review-68360">
    <div class="micro-home-recent-review review-item" style="width:640px;padding:15px;" reviewid="68360">
        <article class="micro-home-review-item">
            <div class="leftimage">

                <div class="microsite-review-new-avatar">
                    <a href="/thanh-vien/phamhoangviet4" class="user-link" refid="124780" tooltip="userTooltip_124780" style="">
                        <img src="<?=base_url()?>static/images/370328_100002816149486_466457557_q_635321309376280525_m_cropped_60.jpeg" width="60" height="60">
                    </a>
                </div>

            </div>
            <div class="rightdesc" itemscope itemtype="http://data-vocabulary.org/Review">
                <div class="user">
                    <a href="/thanh-vien/phamhoangviet4" tooltip="userTooltip_124780" refId="124780" class="user-link">
                        <span style="float:left;padding-right:4px;" itemprop="reviewer">Phạm Ho&#224;ng Việt</span></a>

                    <span class="timerow">
                        -
                        <span class="address" data-utime="1397555947" title="15/04/2014 16:59" itemprop="dtreviewed">15/04/2014 16:59</span>
                    </span>
                    <div class="review-user-level" style="clear:both;">
                        <a href="http://www.foody.vn/chinh-sach-thuong#user-level-up" target="_blank" class="newbee">Newbee</a>
                        <span>857</span>
                    </div>
                    <div style="position: absolute; right: 0px; top: 0px;">
                            <div class="review-point">
                                <meta itemprop="best" content="10" />
                                <meta itemprop="worst" content="0" />
                                    <span itemprop="rating">7.6</span>
                            </div>
                    </div>
                </div>
                <div style="position: relative">
                    <div class="title">
                        <span itemprop="itemreviewed">Kh&#244;ng gian tốt, gi&#225; cả hợp l&#253;, c&#224; ph&#234; ngon</span>
                    </div>
                </div>
                <div class="desc disableSection" style="white-space: pre-line;" itemprop="description">Mình rất thích khi uống cafe ở đây, đặc biệt là khi ở trên lầu nhìn xuống cảnh Bến Thành, vào ban đêm lại càng đẹp. Giá cả tương đối, không gian đẹp, tương đối yên tĩnh, thích hợp để làm việc.
 Cà phê của Highland rất thơm nhưng mình có một số điểm không thích ở đây. Phục vụ sẽ nhanh hơn nếu ở trên lầu, còn ở tầng dưới thì chờ hơi lâu, đào tạo nhân viên chưa đều, có người phục vụ tốt, có người làm khá cẩu thả. Mạng wifi hôm vào được, hôm thì không.
Nhưng nhìn chung không gian và thức uống ở highland rất được, tuy ở trung tâm quận 1 nhưng giá cả rất hợp lý, sẽ quay lại thường xuyên.</div>
                    <div style="float: left; width: 500px; margin-top: 5px;">

                    </div>

            </div>
        </article>
    </div>
</div>
<div id="review-65798">
    <div class="micro-home-recent-review review-item" style="width:640px;padding:15px;" reviewid="65798">
        <article class="micro-home-review-item">
            <div class="leftimage">

                <div class="microsite-review-new-avatar">
                    <a href="/thanh-vien/thieuminhquan2412" class="user-link" refid="121509" tooltip="userTooltip_121509" style="">
                        <img src="<?=base_url()?>static/images/1017155_606726842757763_2076499598_n_635319441305000000_m_cropped_60.jpg" width="60" height="60">
                    </a>
                </div>

            </div>
            <div class="rightdesc" itemscope itemtype="http://data-vocabulary.org/Review">
                <div class="user">
                    <a href="/thanh-vien/thieuminhquan2412" tooltip="userTooltip_121509" refId="121509" class="user-link">
                            <img src="<?=base_url()?>static/style/images/icons/approved.png" style="float: left; margin-right: 3px;" />
                        <span style="float:left;padding-right:4px;" itemprop="reviewer">Minh Qu&#226;n Thiều</span></a>

                    <span class="timerow">
                        -
                        <span class="address" data-utime="1396856400" title="07/04/2014 14:40" itemprop="dtreviewed">07/04/2014 14:40</span>
                    </span>
                    <div class="review-user-level" style="clear:both;">
                        <a href="http://www.foody.vn/chinh-sach-thuong#user-level-up" target="_blank" class="newbee">Newbee</a>
                        <span>412</span>
                    </div>
                    <div style="position: absolute; right: 0px; top: 0px;">
                            <div class="review-point">
                                <meta itemprop="best" content="10" />
                                <meta itemprop="worst" content="0" />
                                    <span itemprop="rating">7.4</span>
                            </div>
                    </div>
                </div>
                <div style="position: relative">
                    <div class="title">
                        <span itemprop="itemreviewed">Nh&#224; h&#224;ng sang trọng</span>
                    </div>
                </div>
                <div class="desc disableSection" style="white-space: pre-line;" itemprop="description">không gian rộng rãi, thoải mái. phục vụ thân thiện. chất lượng thức uống tốt, giá cả cũng hợp lý. rất thích jelly coffee</div>
                    <div style="float: left; width: 500px; margin-top: 5px;">

                    </div>

            </div>
        </article>
    </div>
</div>
    </div>
            <!-- /ko -->
            <!-- ko if: true -->
    <div id="review-list" style="display:none" data-bind="visible: true">
        <!-- ko foreach: reviews-->
            <!-- ko if: type!=4 && type!=5 -->
                <!-- ko foreach: {data: items, afterRender: $root.aferRenderReviewItemCallback} -->
                    <div data-bind="attr:{id: 'review-'+Id}, visible: true" style="display:none" >
    <div class="micro-home-recent-review review-item" style="width:640px;padding:15px;" data-bind="attr:{reviewid:Id}" reviewid="">
        <article class="micro-home-review-item">
            <div class="leftimage">
                <div class="microsite-review-new-avatar">
                    <a data-bind="attr:{href: OwnerProfileUrl, tooltip: 'userTooltip_'+OwnerId, refId: OwnerId}" href="" class="user-link" refid="" tooltip="" style="">
                        <img data-bind="attr:{src:OwnerAvatarUrl}" width="60" height="60" src="http://image.foody.vn/content/images/user-default-male_60.png">
                    </a>
                    <div class="trust-percent">
                        <div>Độ tin tưởng</div>
                        <div class="trust-percent-bar" data-bind="attr:{ style: 'width: ' + OwnerTrustPercent + '%' }"></div>
                        <div class="trust-percent-container"></div>
                        <div class="trust-percent-number"><span data-bind="text: OwnerTrustPercent"></span>%</div>
                    </div>
                </div>

                <!-- ko if:CanEdit -->
                <a href="javascript:void(0);" class="review-modified" data-bind="attr:{restaurantId: RestaurantID, reviewId: Id, returnUrl: $root.resUrl}" restaurantId="" reviewId="" title="Sửa B&#236;nh luận trong v&#242;ng 1h"></a>
                <a href="javascript:void(0);" class="review-deleted" data-bind="attr:{restaurantId: RestaurantID, reviewId: Id, returnUrl: $root.resUrl}" restaurantid="" reviewid="" returnurl="" title="Xóa Bình luận trong vòng 1h"></a>
                <!-- /ko -->
                <div data-bind="foreach: Banners" style="width:60px;height:60px;margin-top:20px;clear:both">
                    <!-- ko if: Type == 1-->
                    <a class="brand-view-page" data-bind="attr:{href: Link}">
                        <img data-bind="attr:{src: FilePath}" />
                    </a>
                    <!-- /ko -->
                    <!-- ko if: Type == 2-->
                    <a class="brand-reward" href="javascript:void(0)" data-bind=" attr:{refid: ReferenceId}">
                        <img data-bind="attr:{src: FilePath}" />
                    </a>
                    <!-- /ko -->
                </div>
            </div>
            <div class="rightdesc">
                <div class="user">
                    <a data-bind="attr:{href: OwnerProfileUrl, tooltip: 'userTooltip_'+OwnerId, refId: OwnerId}" class="user-link" tooltip="" refid="" href="" style="float:left;">
                        <!-- ko if: VerifyingPercent==100 --><img src="<?=base_url()?>static/style/images/icons/approved.png" style="float:left; margin-right:3px;" /> <!-- /ko --><span data-bind="text: OwnerDisplayName" style="float:left;padding-right:4px;"></span>
                    </a>
                    <span class="timerow">
                         -
                        <span data-bind="attr:{'data-utime': CreatedOnTimestamp, title: CreatedOnString}, text: CreatedOnString" class="address" data-utime="1366627055" title="22/04/2013">2 phút trước</span>
                        <!-- ko if: (PostedByDeviceName != null && PostedByDeviceName!='')-->
                        <a class="viamobile" tooltip="mobileapptooltip" data-bind="text: 'via '+ PostedByDeviceName" href="/ung-dung-mobile"></a>
                        <a href="/ung-dung-mobile"><img src="<?=base_url()?>static/style/images/icons/icon-via-mobile.png" class="iphone" /></a>
                        <!-- /ko -->
                    </span>
                    <div class="review-user-level" style="clear:both;">
                        <a href="http://www.foody.vn/chinh-sach-thuong#user-level-up" target="_blank" class="newbee" data-bind="text: UserLevel"></a>
                        <!-- ko if: PointRank <= 1000 && PointRank>0 -->
                        <span data-bind="text: $root.getTopByRank($data)"></span>
                        <!-- /ko -->
                        <span style="background-color:#eee">2014</span>
                    </div>
                    <div style="position:absolute;right:0px;top:0px;">
                        <!-- ko if: ReviewType==1 -->
                        <div class="review-point">
                             <meta content="10">
                            <!-- ko if: AvgRating!='0.0' -->
                            <a data-bind="attr:{reviewid:Id, tooltip:'ratingTooltip_'+Id}, text: AvgRating" onclick="return false;" href="javascript:void(0);" reviewid="5796" tooltip="ratingTooltip_5796">8.6</a>
                            <!-- /ko -->
                            <!-- ko if: AvgRating=='0.0' -->
                            <a href="javascript:void(0);" tooltip="none">--</a>
                            <!-- /ko -->
                        </div>
                        <!-- /ko -->
                        <!-- ko if: ReviewType==2 -->
                        <div class="review-pr" title="Quảng c&#225;o"></div>
                        <!-- /ko -->
                        <!-- ko if: ReviewType==3 -->
                        <div class="review-qa" title="Hỏi đ&#225;p"></div>
                        <!-- /ko -->
                    </div>
                </div>
                <div style="position:relative">
                    <div class="title">
                        <a data-bind="attr:{href: $root.resUrl+'/binh-luan-'+Id}, html: Title" href=""></a>
                    </div>
                </div>

                <div class="desc disableSection" data-bind="html: Comment" style="white-space: pre-line;"></div>
                <!-- ko if:(TranslateSource!=null && TranslateSource != '')-->
                <div style="font-style:italic;clear:both;float:right;margin-top:5px;font-size:11px;" data-bind="text:TranslateSource">
                </div>
                <!-- /ko -->
                <!-- ko if:(YoutubeCode!=null && YoutubeCode != '')-->
                <div style="float: left; width: 550px; margin-top: 5px;" data-bind="html:$root.getYoutubeEmbed($data)">
                </div>
                <!-- /ko -->
                <div class="optionals">
                        <!-- ko if: Guest!=null && Guest!='' -->
                        Số người: <span data-bind="text: Guest"></span>
                        <!-- /ko -->
                        <!-- ko if: MoneySpend!=null && MoneySpend!='' -->
                        | Chi phí:  <span data-bind="text: MoneySpend"></span>
                        <!-- /ko -->
                        <!-- ko if: VisitAgain!=null && VisitAgain!='' -->
                        | Sẽ quay lại: <span data-bind="text: VisitAgain"></span>
                        <!-- /ko -->
                </div>

                <!--begin review-photos-->
                <!-- ko if: PicturesWithTemplate.TotalPictures >0 -->
                <div data-bind="template: { name: PicturesWithTemplate.Template, data: PicturesWithTemplate, afterRender: $root.afterRenderPicturesCallback }">
                </div>
                <!-- /ko -->
                <!--end review-photos-->



<div class="share">
    <div class="share-left">
        <a href="javascript:void(0);" data-bind="attr:{onclick:'showCommentTextBox('+Id+',2); return false;'}" onclick="">
            <span class="icocomment"></span>
            <span>Thảo luận</span>
        </a>

        <a data-bind="attr:{reviewid:Id,tooltip:'#likeTooltip_2_'+Id,class:'review-helpful-link review-like-dislike-link'+(HasLiked?' active':'')}" onclick="addLikeDislike(this,true,2);return false;" href="javascript:void(0);" data-is-liked="true" data-media-type="2">
            <span class="icolike"></span><span>Thích (<span data-bind="attr:{id:'totalLikes_id_2_'+Id},text:TotalLikes" style="float:none"></span>)</span>
        </a>
        <a data-bind="attr:{reviewid:Id,tooltip:'#dislikeTooltip_2_'+Id,class:'review-helpful-link review-like-dislike-link'+(HasDisliked?' active':'')}" onclick="addLikeDislike(this,false,2);return false;" href="javascript:void(0);" data-is-liked="false" data-media-type="2">
            <span class="icodislike"></span><span> (<span data-bind="attr:{id:'totalDislikes_id_2_'+Id},text:TotalDislikes" style="float:none"></span>)</span>
        </a>
        <a class="review-report-error" data-bind="attr:{reviewid:Id}" reviewid="" data-media-type="2"><span class="icoreport"></span>Báo tin xấu</a>
        <div data-bind="attr:{id:'helpfulTooltip_'+Id}" id="" class="helpfultooltip"></div>
        <div data-bind="attr:{id:'likeTooltip_2_'+Id}" id="" class="helpfultooltip"></div>
        <div data-bind="attr:{id:'dislikeTooltip_2_'+Id}" id="" class="helpfultooltip"></div>
    </div>

</div>




<div class="review-reply">
    <!-- ko if: TotalComments>3 -->
    <div class="view-all-comments">
        <a href="javascript:void(0);" data-bind="attr:{id:'view_all_comment_2_'+Id}, click:$parent.showAllComments">Hiện tất cả (<span data-bind="text: TotalComments, attr:{id:'comment_count_2_'+Id}" id=""></span>)</a>
    </div>
    <!-- /ko -->
    <div id="" data-bind="attr:{id: 'commentBox_'+Id}">
        <!-- ko foreach:{data:Comments, afterRender: $root.afterRenderCommentCallback} -->
        <div class="review-reply-item" data-bind="css: { 'owner-reply': (IsOwnerResponse != null && IsOwnerResponse == true) }" >
            <div class="review-reply-item-avatar">
                <a href="" data-bind="attr:{href: OwnerUrl}">
                    <img src="" data-bind="attr:{src: AvatarUrl}" width="30" /></a>
            </div>
            <div class="review-reply-item-content">
                <!-- ko if: CanDelete -->
                <span><a href="javascript:void(0);" data-bind="attr:{commentId: CommentId}" commentid="" class="btn-close-small remove-review-comment">x </a></span>
                <!-- /ko -->
                <a href="" data-bind="attr:{href: OwnerUrl, tooltip: 'userToolTip_'+ OwnerId , refId:OwnerId}, text: OwnerDisplayName" class="user-link" tooltip=""></a>
                <span class="comment" data-bind="html: Comment" style="white-space: pre-line;"></span>
                <br />
                <span data-bind="attr:{'data-utime': CreatedOnTimestamp, title:CreatedOnString}" class="address" style="float: left; border: none; font-size: 11px;width:auto;" data-utime="" title=""></span>
                <a class="userlike" href="javascript:void(0)" data-bind="text:$root.getCommentLikeText($data),click:function(){$root.commentLike($data,3);}"></a>
                <span class="icolike"></span>
                <a class="totaluserlike" data-bind="text: TotalLike, visible: TotalLike()>0, attr:{refId: CommentId}" reftype="3"></a>
            </div>
        </div>
        <!-- /ko -->
    </div>
    <div class="review-reply-item addcomment" data-bind="attr:{id: 'review_comment_id_2_'+Id}, style:{display: ShowCommentTextBox?'':'none'} " id="">
        <div class="review-reply-item-avatar">
            <a data-bind="attr:{href: $root.currentUserUrl}" href="">
                <img data-bind="attr:{src: $root.currentUserAvatar}" src="" width="30">
            </a>
        </div>
        <div class="review-reply-item-content">

            <textarea data-bind="attr:{id:'write_comment_2_'+Id, reviewid:Id}, event:{keypress: $parent.addComment}" type="text" title="Thảo luận ... " class="write_comment comment-watermark" spellcheck="false" id="" style="overflow-y: hidden;"></textarea>
        </div>
    </div>
</div>


            </div>
        </article>
    </div>
</div>

                <!-- /ko -->
            <!-- /ko -->
            <!-- ko if: type==4-->
                <!-- ko foreach: {data: items, afterRender: $root.aferRenderReviewItemCallback} -->
                    <div data-bind="attr: { id: 'checkin-' + Id }, visible: true" style="display:none">
    <div class="micro-home-recent-review checkin-item" data-bind="attr:{checkinid:Id}" reviewid="">
        <article class="micro-home-review-item">
            <div class="leftimage">
                <div class="microsite-review-new-avatar">
                    <a data-bind="attr:{href: OwnerProfileUrl, tooltip: 'userTooltip_'+OwnerId, refId: OwnerId}" href="" class="user-link" refid="" tooltip="" style="">
                        <img data-bind="attr:{src:OwnerAvatarUrl}" width="60px" height="60px" src="">
                    </a>
                    <div class="trust-percent">
                        <div>Độ tin tưởng</div>
                        <div class="trust-percent-bar" data-bind="attr:{ style: 'width: ' + OwnerTrustPercent + '%' }"></div>
                        <div class="trust-percent-container"></div>
                        <div class="trust-percent-number"><span data-bind="text: OwnerTrustPercent"></span>%</div>
                    </div>
                </div>


                <!-- ko if:CanEdit -->
                <a href="javascript:void(0);" class="review-modified" data-bind="attr:{restaurantId: RestaurantID, reviewId: Id, returnUrl: $root.resUrl}" restaurantId="" reviewId="" title="Sửa B&#236;nh luận trong v&#242;ng 1h"></a>
                <a href="javascript:void(0);" class="review-deleted" data-bind="attr:{restaurantId: RestaurantID, reviewId: Id, returnUrl: $root.resUrl}" restaurantid="" reviewid="" returnurl="" title="Xóa Bình luận trong vòng 1h"></a>
                <!-- /ko -->
            </div>
            <div class="rightdesc">
                 <span class="user" style="padding:0;width:auto;height:auto;">
                    <a data-bind="attr:{href: OwnerProfileUrl, tooltip: 'userTooltip_'+OwnerId, refId: OwnerId}" class="user-link" tooltip="" refid="" href="">
                        <!-- ko if: VerifyingPercent==100 --><img src="<?=base_url()?>static/style/images/icons/approved.png" style="float:left; margin-right:3px;" /> <!-- /ko --><span data-bind="text: OwnerDisplayName" style="float:left;padding-right:4px;">Username</span></a>
                </span> <span style="float:left;padding-left:3px;padding-right:3px">&nbsp;đã <a data-bind="attr:{href: ResUrl+'/checkin-'+Id}">check-in</a> - </span>
                <span class="timerow">
                    <span data-bind="attr:{'data-utime': CreatedOnTimestamp, title: CreatedOnString}, text: CreatedOnString" class="address" data-utime="" title=""></span>
                    <!-- ko if: (PostedByDeviceName != null && PostedByDeviceName!='')-->
                    <a class="viamobile" tooltip="mobileapptooltip" data-bind="text: 'via '+ PostedByDeviceName" href="/ung-dung-mobile">
                        via
                        <img src="<?=base_url()?>static/style/images/icons/icon-via-mobile.png" class="iphone" />
                    </a>
                    <!-- /ko -->
                </span>
                <div class="review-user-level" style="clear:both;">
                    <a href="http://www.foody.vn/chinh-sach-thuong#user-level-up" target="_blank" class="newbee" data-bind="text: UserLevel"></a>
                    <!-- ko if: PointRank <= 1000 && PointRank>0 -->
                    <span data-bind="text: $root.getTopByRank($data)"></span>
                    <!-- /ko -->
                    <span style="background-color:#eee">2014</span>
                </div>
                <div class="desc disableSection" data-bind="html: Comment" style="white-space: pre-line;"></div>
                <!--begin review-photos-->
                <!-- ko if: PicturesWithTemplate.TotalPictures >0 -->
                <div data-bind="template: { name: PicturesWithTemplate.Template, data: PicturesWithTemplate, afterRender: $root.afterRenderPicturesCallback }">
                </div>
                <!-- /ko -->
                <!--end review-photos-->
                <!-- ko if:(Comment!=null&&Comment!="")||(PicturesWithTemplate.TotalPictures>0)-->



<div class="share">
    <div class="share-left">
        <a href="javascript:void(0);" data-bind="attr:{onclick:'showCommentTextBox('+Id+',11); return false;'}" onclick="">
            <span class="icocomment"></span>
            <span>Thảo luận</span>
        </a>
        <a data-bind="attr:{reviewid:Id,tooltip:'#likeTooltip_11_'+Id,class:'review-helpful-link review-like-dislike-link'+(HasLiked?' active':'')}" onclick="addLikeDislike(this,true,11);return false;" href="javascript:void(0);" data-is-liked="true" data-media-type="11">
            <span class="icolike"></span><span>Thích (<span data-bind="attr:{id:'totalLikes_id_11_'+Id},text:TotalLikes" style="float:none"></span>)</span>
        </a>
        <a data-bind="attr:{reviewid:Id,tooltip:'#dislikeTooltip_11_'+Id,class:'review-helpful-link review-like-dislike-link'+(HasDisliked?' active':'')}" onclick="addLikeDislike(this,false,11);return false;" href="javascript:void(0);" data-is-liked="false" data-media-type="11">
            <span class="icodislike"></span><span> (<span data-bind="attr:{id:'totalDislikes_id_11_'+Id},text:TotalDislikes" style="float:none"></span>)</span>
        </a>
        <a class="review-report-error" data-bind="attr:{reviewid:Id}" reviewid="" data-media-type="11"><span class="icoreport"></span>Báo tin xấu</a>
        <div data-bind="attr:{id:'helpfulTooltip_'+Id}" id="" class="helpfultooltip"></div>
        <div data-bind="attr:{id:'likeTooltip_11_'+Id}" id="" class="helpfultooltip"></div>
        <div data-bind="attr:{id:'dislikeTooltip_11_'+Id}" id="" class="helpfultooltip"></div>
    </div>
</div>




<div class="review-reply">
    <!-- ko if: TotalComments>3 -->
    <div class="view-all-comments">
        <a href="javascript:void(0);" data-bind="attr:{id:'view_all_comment_11_'+Id}, click:$parent.showAllComments">Hiện tất cả (<span data-bind="text: TotalComments, attr:{id:'comment_count_11_'+Id}" id=""></span>)</a>
    </div>
    <!-- /ko -->
    <div id="" data-bind="attr:{id: 'commentBox_'+Id}">
        <!-- ko foreach:{data:Comments, afterRender: $root.afterRenderCommentCallback} -->
        <div class="review-reply-item" data-bind="css: { 'owner-reply': (IsOwnerResponse != null && IsOwnerResponse == true) }">
            <div class="review-reply-item-avatar">
                <a href="" data-bind="attr:{href: OwnerUrl}">
                    <img src="" data-bind="attr:{src: AvatarUrl}" width="30" />
                </a>
            </div>
            <div class="review-reply-item-content">
                <!-- ko if: CanDelete -->
                <span><a href="javascript:void(0);" data-bind="attr:{commentId: CommentId}" commentid="" class="btn-close-small remove-review-comment">x </a></span>
                <!-- /ko -->
                <a href="" data-bind="attr:{href: OwnerUrl, tooltip: 'userToolTip_'+ OwnerId , refId:OwnerId}, text: OwnerDisplayName" class="user-link" tooltip=""></a>
                <span data-bind="html: Comment" style="white-space: pre-line;"></span>
                <br />
                <span data-bind="attr:{'data-utime': CreatedOnTimestamp, title:CreatedOnString}" class="address" style="float: left; border: none; font-size: 11px;width:auto;" data-utime="" title=""></span>
                <a class="userlike" href="javascript:void(0)" data-bind="text:$root.getCommentLikeText($data),click:function(){$root.commentLike($data,12);}"></a>
                <span class="icolike"></span>
                <a class="totaluserlike" data-bind="text: TotalLike, visible: TotalLike()>0, attr:{refId: CommentId}" reftype="12"></a>
            </div>
        </div>
        <!-- /ko -->
    </div>
    <div class="review-reply-item addcomment" data-bind="attr:{id: 'review_comment_id_11_'+Id}, style:{display: ShowCommentTextBox?'':'none'} " id="">
        <div class="review-reply-item-avatar">
            <a data-bind="attr:{href: $root.currentUserUrl}" href="">
                <img data-bind="attr:{src: $root.currentUserAvatar}" src="" width="30">
            </a>
        </div>
        <div class="review-reply-item-content">

            <textarea data-bind="attr:{id:'write_comment_11_'+Id, reviewid:Id}, event:{keypress: $parent.addComment}" type="text" title="Thảo luận ... " class="write_comment comment-watermark" spellcheck="false" id="" style="overflow-y: hidden;"></textarea>
        </div>
    </div>
</div>
                <!-- /ko -->
            </div>
        </article>
    </div>
</div>

                <!-- /ko -->
            <!-- /ko -->
            <!-- ko if: type==5-->
                <div class="checkin-group">
    <div class="checkin-group-icons"></div>
    <div class="checkin-group-titles"><a href="#" data-bind="attr: { href: items[0].OwnerProfileUrl, tooltip: 'userTooltip_v_' + items[0].OwnerId, refId: items[0].OwnerId }, text: items[0].OwnerDisplayName" class="user-link-v">Quang Cao</a> và <a href="javascript:void(0)" data-bind="click: $root.showCheckinDetails,text: (items.length-1) + ' người khác'">6 người khác</a> vừa check-in</div>
    <!-- ko foreach: {data: items, afterRender: $root.aferRenderReviewItemCallback} -->
    <div class="micro-home-recent-checkin checkin-group-item" data-bind="attr: { checkinid: Id }" reviewid="">
        <article class="micro-home-review-item" style="width:70px;float:left;">
            <div class="leftimage">

                <div class="microsite-review-new-avatar">
                    <a data-bind="attr: { href: OwnerProfileUrl, tooltip: 'userTooltip_v_' + OwnerId, refId: OwnerId }" href="" class="user-link-v" refid="" tooltip="" style="">
                        <img style="border: 1px solid #eee;" data-bind="attr: { src: OwnerAvatarUrl }" width="60px" height="60px" src="http://image.foody.vn/content/images/user-default-male_60.png">
                    </a>
                </div>


                <!-- ko if:CanEdit -->
                <a href="javascript:void(0);" class="review-modified" data-bind="attr: { restaurantId: RestaurantID, reviewId: Id, returnUrl: $root.resUrl }" restaurantId="" reviewId="" title="Sửa B&#236;nh luận trong v&#242;ng 1h"></a>
                <a href="javascript:void(0);" class="review-deleted" data-bind="attr: { restaurantId: RestaurantID, reviewId: Id, returnUrl: $root.resUrl }" restaurantid="" reviewid="" returnurl="" title="Xóa Bình luận trong vòng 1h"></a>
                <!-- /ko -->
            </div>
            <div class="rightdesc" style="display:none;">
                <div class="user" style="padding: 0; width: auto;">
                    <a data-bind="attr: { href: OwnerProfileUrl, tooltip: 'userTooltip_v_' + OwnerId, refId: OwnerId }" class="user-link-v" tooltip="" refid="" href="">
                        <span data-bind="text: OwnerDisplayName">Thiện Quang</span></a>
                </div>
                <div class="timerow">
                    <span data-bind="attr: { 'data-utime': CreatedOnTimestamp, title: CreatedOnString }, text: CreatedOnString" class="address" data-utime="1366627055" title="22/04/2013">2 phút trước</span>
                    <!-- ko if: (PostedByDeviceName != null && PostedByDeviceName!='')-->
                    <a class="viamobile" data-bind="text: 'via ' + PostedByDeviceName" href="/ung-dung-mobile">via
                            <img src="<?=base_url()?>static/style/images/icons/icon-via-mobile.png" class="iphone" /></a>
                    <!-- /ko -->
                </div>

            </div>
        </article>
    </div>
    <!-- /ko -->
</div>


            <!-- /ko -->
        <!-- /ko -->
    </div>
            <!-- /ko -->
        <div class="microsite-box-content" id="microNoReview" data-bind="visible: (total()<=0 && isReview() && !isPR() && !isQA())">
            <p>Hãy là người đầu tiên đóng góp bình luận & đánh giá về địa điểm này để
                <b style="color: #000;">+ 5 Điểm thưởng</b>
                <div class="writereview-button" style="float: left">
                    <a href="#" class="reviewLink" resid="4085">Bình luận</a>
                </div>
            </p>
        </div>
            <div id="checkin-group-dialog" style="display: none">
    <div id="checkin-group">
        <div data-bind="visible: isLoadingCheckinDetail" style="padding-top: 100px; padding-bottom: 100px; padding-left: 200px;">
            <img alt="Đang tải ..." src="<?=base_url()?>static/style/images/loading-review.gif" />
        </div>
        <div data-bind="visible: !isLoadingCheckinDetail()">
            <h2 style="margin-bottom: 5px; line-height: 1.4em;" data-bind="text: resName"></h2>
            <div style="padding-bottom: 10px; border-bottom: #ccc 1px solid; font-size: 12px;"><b data-bind="text: checkinGroupDetails().length + ' '"></b>thành viên check-in </div>
            <div style="overflow: auto; height: 340px; margin-top: 10px;" data-bind="foreach: { data: checkinGroupDetails, afterRender: afterGenderCheckinGroupItem }">
                <div class="microsite-lovers-item-popup">
                    <div class="popup-image">
                        <a data-bind="attr: { href: OwnerProfileUrl }">
                            <img data-bind="attr: { src: OwnerAvatarUrl }"></a>
                    </div>
                    <div class="popup-content">
                        <div><a data-bind="attr: { href: OwnerProfileUrl }, text: OwnerDisplayName"></a></div>
                        <div><span data-bind="text: TotalCheckedIns + ' '"></span>check-in</div>
                    </div>
                    <div class="checkin-info">
                        <div>
                            <span class="address" data-bind="attr: { id: Id, 'data-utime': CreatedOnTimestamp, title: CreatedOnString }, text: CreatedOnString"></span>
                            <!-- ko if: PostedByDeviceName!=null && PostedByDeviceName!='' -->
                             - via <a data-bind="text: PostedByDeviceName" href="http://www.foody.vn/ung-dung-mobile" target="_blank"></a>
                            <!-- /ko -->
                        </div>
                        <!-- ko foreach: SubInfos -->
                            <!-- ko if: $index() >0 -->
                                <div>
                                    <span class="checkin-time" data-bind="attr: {id:Id, 'data-utime': CreatedOnTimestamp, title: CreatedOnString }, text: CreatedOnString"></span>
                                    <!-- ko if: PostedByDeviceName!=null && PostedByDeviceName!='' -->
                                     - via <a data-bind="text: PostedByDeviceName" href="http://www.foody.vn/ung-dung-mobile" target="_blank"></a>
                                    <!-- /ko -->
                                </div>
                            <!-- /ko -->
                        <!-- /ko -->
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>

<script type="text/html" id="SinglePictureView">
    <!-- ko with:Pictures -->
    <div class="review-photo review-single-photo">
        <ul class="list">
            <!-- ko foreach: Items -->
            <li>
                <a data-bind="attr:{href: FullImagePath, class:'review-img-'+ReviewID, 'data-id': RestaurantPictureID, 'data-size': Size, 'data-group' : $parent.Group, title:PictureName}" href="" class="" data-id="" data-size="" data-group="" title="">
                    <img data-bind="attr:{alt: PictureName, src: FileName}" alt="" src="" />
                </a>
            </li>
            <!-- /ko -->
        </ul>
    </div>
    <!-- /ko -->
</script>

<script type="text/html" id="DoublePictureView">
    <!-- ko with:Pictures -->
    <div class="review-photo review-single-photo">
        <ul class="list">
            <!-- ko foreach: Items -->
            <li>
                <a data-bind="attr:{href: FullImagePath, class:'review-img-'+ReviewID, 'data-id': RestaurantPictureID, 'data-size': Size, 'data-group' : $parent.Group, title:PictureName}" href="" class="" data-id="" data-size="" data-group="" title="">
                    <img data-bind="attr:{alt: PictureName, src: FileName}" alt="" src="" />
                </a>
            </li>
            <!-- /ko -->
        </ul>
    </div>
    <!-- /ko -->
</script>

<script type="text/html" id="TriplePictureView">
    <!-- ko with:Pictures -->
    <div class="review-photo review-triple-photo">
        <ul class="list">
            <!-- ko foreach: Items -->
            <li>
                <a data-bind="attr:{href: FullImagePath, class:'review-img-'+ReviewID, 'data-id': RestaurantPictureID, 'data-size': Size, 'data-group' : $parent.Group, title:PictureName}" href="" class="" data-id="" data-size="" data-group="" title="">
                    <img data-bind="attr:{alt: PictureName, src: FileName}" alt="" src="" />
                </a>
            </li>
            <!-- /ko -->
        </ul>
    </div>
    <!-- /ko -->
</script>

<script type="text/html" id="NormalPictureView">
    <!-- ko with:Pictures -->

    <div class="photos thumb review-photo">
        <ul class="list">
            <!-- ko foreach: Items -->
            <!-- ko if: ($index() <= $root.pictureNormalMaxIndex) -->
            <li>
                <a data-bind="attr:{href: FullImagePath, class:'review-img-'+ReviewID, 'data-id': RestaurantPictureID, 'data-size': Size, 'data-group' : $parent.Group, title:PictureName}" href="" class="" data-id="" data-size="" data-group="" title="">
                    <img style="position:relative;" data-bind="attr:{alt: PictureName, src: FileName}" alt="" src="" />
                    <span style="position:absolute;bottom:0; left:0; background:#333; color:#fff;opacity:.8;width:125px;white-space:nowrap; text-overflow:ellipsis;">
                        <span data-bind="text: PictureName" style="font-size:11px;float:left;"></span>
                    </span>
                </a>
            </li>
            <!-- /ko -->
            <!-- /ko -->
        </ul>

    </div>
    <div style="clear: both">
        <!-- ko if: TotalCount > $root.pictureNormalMaxIndex + 1 -->
        <div class="picturecounts">
                <a href="javascript:void(0)" data-bind="attr:{href: Items[0].FullImagePath, class:'review-img-'+Items[0].ReviewID, 'data-id': Items[0].RestaurantPictureID, 'data-size': Items[0].Size, 'data-group' : Group}" class="" data-id="" data-size="" data-group="">
                    <b data-bind="text: TotalCount"></b>
                    hình ảnh
                </a>
        </div>
        <!-- /ko -->
    </div>
    <!-- /ko -->
</script>

<script type="text/html" id="PortraitPictureView">
    <!-- ko with:Pictures -->
    <div class="photo-portrait-view">
        <table>
            <tr>
                <!-- ko if: $parent.TotalPictures > $root.picturePortraitMaxIndex + 2 -->
                <td colspan="2">
                    <div class="picturecounts">
                        <a href="javascript:void(0)" data-bind="attr:{href: Items[0].FullImagePath, class:'review-img-'+Items[0].ReviewID, 'data-id': Items[0].RestaurantPictureID, 'data-size': Items[0].Size, 'data-group' : $parent.Group}" class="" data-id="" data-size="" data-group=""><b data-bind="text: $parent.TotalPictures+' '"></b>hình ảnh</a>
                    </div>
                </td>
                <!-- /ko -->
            </tr>
            <!-- ko foreach: Items -->
            <!-- ko if: ($index() <= $root.picturePortraitMaxIndex + 1) && $index()>0 -->
            <tr>
                <!-- ko if: $index() == 1 -->
                <td data-bind="attr:{rowspan: (($root.picturePortraitMaxIndex > $parent.Items.length - 1) ? $parent.Items.length - 1 : $root.picturePortraitMaxIndex + 1)}" rowspan="">
                    <a data-bind="attr:{href: $parent.Items[0].FullImagePath, class:'review-img-'+ $parent.Items[0].ReviewID, 'data-id': $parent.Items[0].RestaurantPictureID, 'data-size': $parent.Items[0].Size, 'data-group' : $parent.Group, title: $parent.Items[0].PictureName}" href="" class="" data-id="" data-size="" data-group="" title="">
                        <img data-bind="attr:{alt: $parent.Items[0].PictureName, src: $parent.Items[0].FileName}" alt="" src="">
                    </a>
                </td>
                <!-- /ko -->
                <td>
                    <a data-bind="attr:{href: FullImagePath, class:'review-img-'+ReviewID, 'data-id': RestaurantPictureID, 'data-size': Size, 'data-group' : $parent.Group, title:PictureName}" href="" class="" data-id="" data-size="" data-group="" title="">
                        <img data-bind="attr:{alt: PictureName, src: FileName}" alt="" src="" />
                    </a>
                </td>
            </tr>
            <!-- /ko -->
            <!-- /ko -->
        </table>
    </div>
    <!-- /ko -->
</script>

<script type="text/html" id="LandscapePictureView">
    <!-- ko with:Pictures -->
    <div class="photo-landscape-view">
        <table>
            <tr>
                <!-- ko if: $parent.TotalPictures > $root.pictureLandscapeMaxIndex + 2 -->
                <td data-bind="attr:{colspan: (($root.pictureLandscapeMaxIndex > Items.length - 1) ? Items.length - 1 : $root.pictureLandscapeMaxIndex + 1)}" colspan="2">
                    <div class="picturecounts">
                        <a href="javascript:void(0)" data-bind="attr:{href: Items[0].FullImagePath, class:'review-img-'+Items[0].ReviewID, 'data-id': Items[0].RestaurantPictureID, 'data-size': Items[0].Size, 'data-group' : $parent.Group}" class="" data-id="" data-size="" data-group=""><b data-bind="text: $parent.TotalPictures+' '"></b>hình ảnh</a>
                    </div>
                </td>
                <!-- /ko -->
            </tr>
            <tr>
                <td data-bind="attr:{colspan: (($root.pictureLandscapeMaxIndex > Items.length - 1) ? Items.length - 1 : $root.pictureLandscapeMaxIndex + 1)}" colspan="2">
                    <a data-bind="attr:{href: Items[0].FullImagePath, class:'review-img-'+Items[0].ReviewID, 'data-id': Items[0].RestaurantPictureID, 'data-size': Items[0].Size, 'data-group' : Group, title: Items[0].PictureName}" href="" class="" data-id="" data-size="" data-group="" title="">
                        <img data-bind="attr:{alt: Items[0].PictureName, src: Items[0].FileName}" alt="" src="">
                    </a>
                </td>
            </tr>
            <tr>
                <!-- ko foreach: Items -->
                <!-- ko if: $index()!=0 && $index() <= $root.pictureLandscapeMaxIndex + 1-->
                <td>
                    <a data-bind="attr:{href: FullImagePath, class:'review-img-'+ReviewID, 'data-id': RestaurantPictureID, 'data-size': Size, 'data-group' : $parent.Group, title:PictureName}" href="" class="" data-id="" data-size="" data-group="" title="">
                        <img data-bind="attr:{alt: PictureName, src: FileName}" alt="" src="" />
                    </a>
                </td>
                <!-- /ko -->
                <!-- /ko -->
            </tr>
        </table>
    </div>
    <!-- /ko -->
</script>    <script type="text/javascript">
        var userNameUrlPart = "";

        var numberScrollablePage = 0;
        var resreviewsjson = {"Reviews":[{"Id":70701,"RestaurantID":4085,"UserID":137761,"Title":"Highlands Coffee - Nguyễn Du","Comment":"Mình rất thích khi uống cafe ở đây, đặc biệt là khi ở trên lầu nhìn xuống cảnh Bến Thành, vào ban đêm lại càng đẹp. Giá cả tương đối, không gian đẹp, tương đối yên tĩnh, thích hợp để làm việc. Cà phê của Highland rất thơm . Phục vụ sẽ nhanh hơn nếu ở trên lầu, còn ở tầng dưới thì chờ hơi lâu, có người phục vụ tốt, có người làm khá cẩu thả. Mạng wifi hôm vào được, hôm thì không. Nhưng nhìn chung không gian và thức uống ở highland rất được, tuy ở trung tâm quận 1 nhưng giá cả rất hợp lý, sẽ quay lại thường xuyên.","Guest":null,"MoneySpend":null,"VisitAgain":null,"SelectMenu":null,"CreatedOn":"\/Date(1398098316330)\/","AvgRating":"7.0","OwnerId":137761,"OwnerUserName":"acquaintance10","OwnerProfileUrl":"/thanh-vien/acquaintance10","OwnerDisplayName":"phan lan","OwnerAvatarUrl":<?=base_url()?>static/images/user-default-female_60.png","OwnerTrustPercent":24,"CreatedOnString":"21/04/2014 23:38","CreatedOnTimestamp":1398098316,"TotalPictures":0,"CanEdit":false,"PostedByDevice":null,"PostedByDeviceName":"","ReviewType":1,"ShowCommentTextBox":false,"YoutubeCode":null,"Comments":[],"PicturesWithTemplate":{"Pictures":{"Group":2,"TotalCount":0,"Items":[],"PictureTemplate":0},"Template":"NormalPictureView","TotalPictures":0},"TotalComments":0,"TotalLikes":0,"HasLiked":false,"TotalDislikes":0,"HasDisliked":false,"TotalHelpfuls":0,"VerifyingPercent":0,"UserLevel":"Newbee","PointRank":1034,"Banners":[],"ResUrl":null,"TranslateSource":null},{"Id":32949,"RestaurantID":4085,"UserID":67135,"Title":"","Comment":"Highland ở đây không gian khá rộng, khung nhin toàn cảnh phía ngoài. Không gian có nhiều so fa ngồi thoãi mái, nhưng vào buổi tối và những ngày cuối tuần thì rất ồn ào, ở đây không phân biệt khu hút thuốc lá, nên hơi khó chịu, nhân viên thì bình thường, tuỳ bữa tuỳ người ha, hôm nay tới mà cái cô phục vụ nhìn khó chịu quá. Thỉnh thoảng cafe một mình thì khá lí tưởng.\n","Guest":null,"MoneySpend":null,"VisitAgain":null,"SelectMenu":null,"CreatedOn":"\/Date(1397712741970)\/","AvgRating":".0","OwnerId":67135,"OwnerUserName":"luciathuyduong9x","OwnerProfileUrl":"/thanh-vien/luciathuyduong9x","OwnerDisplayName":"Thuy Duong Lucia","OwnerAvatarUrl":<?=base_url()?>static/images/foody-avatar-635349045473482358_f_cropped_60.jpg","OwnerTrustPercent":100,"CreatedOnString":"17/04/2014 12:32","CreatedOnTimestamp":1397712741,"TotalPictures":3,"CanEdit":false,"PostedByDevice":"iPhone_iOS7","PostedByDeviceName":"iPhone","ReviewType":4,"ShowCommentTextBox":false,"YoutubeCode":null,"Comments":[],"PicturesWithTemplate":{"Pictures":{"Group":2,"TotalCount":3,"Items":[{"RestaurantPictureID":316897,"ReviewID":32949,"PredefineAlbumID":2,"PredefineAlbumDisplayOrder":1,"FileName":<?=base_url()?>static/images/foody-checkin-highlands-coffee-nguyen-du-32949-635333347430497500_cropped_125125.jpg","PictureName":"","FullImagePath":null,"OnwerFullName":"Thuy Duong Lucia","IsExist":false,"OriginalWidth":640,"OriginalHeight":960,"Size":null,"WebPictureUrl":"http://www.foody.vn/photo/detail/316897"},{"RestaurantPictureID":316896,"ReviewID":32949,"PredefineAlbumID":2,"PredefineAlbumDisplayOrder":1,"FileName":<?=base_url()?>static/images/foody-checkin-highlands-coffee-nguyen-du-32949-635333347429560000_cropped_125125.jpg","PictureName":"","FullImagePath":null,"OnwerFullName":"Thuy Duong Lucia","IsExist":false,"OriginalWidth":640,"OriginalHeight":960,"Size":null,"WebPictureUrl":"http://www.foody.vn/photo/detail/316896"},{"RestaurantPictureID":316898,"ReviewID":32949,"PredefineAlbumID":1,"PredefineAlbumDisplayOrder":2,"FileName":<?=base_url()?>static/images/foody-checkin-highlands-coffee-nguyen-du-32949-217840635333347430497500_cropped_125125.jpg","PictureName":"","FullImagePath":null,"OnwerFullName":"Thuy Duong Lucia","IsExist":false,"OriginalWidth":960,"OriginalHeight":640,"Size":null,"WebPictureUrl":"http://www.foody.vn/photo/detail/316898"}],"PictureTemplate":0},"Template":"NormalPictureView","TotalPictures":3},"TotalComments":0,"TotalLikes":0,"HasLiked":false,"TotalDislikes":0,"HasDisliked":false,"TotalHelpfuls":0,"VerifyingPercent":100,"UserLevel":"Hotee","PointRank":19,"Banners":[],"ResUrl":"/ho-chi-minh/highlands-coffee-nguyen-du","TranslateSource":null},{"Id":68360,"RestaurantID":4085,"UserID":124780,"Title":"Kh\u0026#244;ng gian tốt, gi\u0026#225; cả hợp l\u0026#253;, c\u0026#224; ph\u0026#234; ngon","Comment":"Mình rất thích khi uống cafe ở đây, đặc biệt là khi ở trên lầu nhìn xuống cảnh Bến Thành, vào ban đêm lại càng đẹp. Giá cả tương đối, không gian đẹp, tương đối yên tĩnh, thích hợp để làm việc.\n Cà phê của Highland rất thơm nhưng mình có một số điểm không thích ở đây. Phục vụ sẽ nhanh hơn nếu ở trên lầu, còn ở tầng dưới thì chờ hơi lâu, đào tạo nhân viên chưa đều, có người phục vụ tốt, có người làm khá cẩu thả. Mạng wifi hôm vào được, hôm thì không. \nNhưng nhìn chung không gian và thức uống ở highland rất được, tuy ở trung tâm quận 1 nhưng giá cả rất hợp lý, sẽ quay lại thường xuyên.","Guest":null,"MoneySpend":"50,000 đ +","VisitAgain":"Chắc chắn !","SelectMenu":null,"CreatedOn":"\/Date(1397555947883)\/","AvgRating":"7.6","OwnerId":124780,"OwnerUserName":"phamhoangviet4","OwnerProfileUrl":"/thanh-vien/phamhoangviet4","OwnerDisplayName":"Phạm Hoàng Việt","OwnerAvatarUrl":<?=base_url()?>static/images/370328_100002816149486_466457557_q_635321309376280525_m_cropped_60.jpeg","OwnerTrustPercent":30,"CreatedOnString":"15/04/2014 16:59","CreatedOnTimestamp":1397555947,"TotalPictures":0,"CanEdit":false,"PostedByDevice":null,"PostedByDeviceName":"","ReviewType":1,"ShowCommentTextBox":false,"YoutubeCode":null,"Comments":[],"PicturesWithTemplate":{"Pictures":{"Group":2,"TotalCount":0,"Items":[],"PictureTemplate":0},"Template":"NormalPictureView","TotalPictures":0},"TotalComments":0,"TotalLikes":0,"HasLiked":false,"TotalDislikes":0,"HasDisliked":false,"TotalHelpfuls":0,"VerifyingPercent":30,"UserLevel":"Newbee","PointRank":857,"Banners":[],"ResUrl":null,"TranslateSource":null},{"Id":65798,"RestaurantID":4085,"UserID":121509,"Title":"Nh\u0026#224; h\u0026#224;ng sang trọng","Comment":"không gian rộng rãi, thoải mái. phục vụ thân thiện. chất lượng thức uống tốt, giá cả cũng hợp lý. rất thích jelly coffee","Guest":null,"MoneySpend":null,"VisitAgain":null,"SelectMenu":null,"CreatedOn":"\/Date(1396856400373)\/","AvgRating":"7.4","OwnerId":121509,"OwnerUserName":"thieuminhquan2412","OwnerProfileUrl":"/thanh-vien/thieuminhquan2412","OwnerDisplayName":"Minh Quân Thiều","OwnerAvatarUrl":<?=base_url()?>static/images/1017155_606726842757763_2076499598_n_635319441305000000_m_cropped_60.jpg","OwnerTrustPercent":72,"CreatedOnString":"07/04/2014 14:40","CreatedOnTimestamp":1396856400,"TotalPictures":1,"CanEdit":false,"PostedByDevice":null,"PostedByDeviceName":"","ReviewType":1,"ShowCommentTextBox":false,"YoutubeCode":null,"Comments":[],"PicturesWithTemplate":{"Pictures":{"Group":2,"TotalCount":1,"Items":[{"RestaurantPictureID":302017,"ReviewID":65798,"PredefineAlbumID":2,"PredefineAlbumDisplayOrder":1,"FileName":<?=base_url()?>static/images/foody-highlands-coffee-nguyen-du-89c5d3fb-4580-4968-9b85-2f172e883406-635324783499678750_cropped_125125.jpg","PictureName":"","FullImagePath":null,"OnwerFullName":"Minh Quân Thiều","IsExist":false,"OriginalWidth":720,"OriginalHeight":960,"Size":null,"WebPictureUrl":"http://www.foody.vn/photo/detail/302017"}],"PictureTemplate":0},"Template":"NormalPictureView","TotalPictures":1},"TotalComments":0,"TotalLikes":0,"HasLiked":false,"TotalDislikes":0,"HasDisliked":false,"TotalHelpfuls":0,"VerifyingPercent":100,"UserLevel":"Newbee","PointRank":412,"Banners":[],"ResUrl":null,"TranslateSource":null}],"CurrentTimestamp":1399348370,"ProvinceId":217,"CurrentUserProfileUrl":"","CurrentUserAvatar":"","IsLogin":false,"ResId":4085,"ResUrl":"/ho-chi-minh/highlands-coffee-nguyen-du","HasFiltered":false,"ReviewMaxPoints":5.00,"TotalPRReviews":0,"TotalQAReviews":0,"TotalCheckins":0,"ReviewType":"review","ResName":"Highlands Coffee - Nguyễn Du","IsRecommended":false,"FullTotal":51,"Total":51,"LastId":65798,"Count":3};
        var resReviewsModel = null;
        var isReviewPage = true;
        var reviewtemplate = 1; // restaurant review
        $(function () {
            resReviewsModel = new ListReviewsModel(resreviewsjson);
            ko.applyBindings(resReviewsModel, document.getElementById('resreviews'));

            setTimeout(function(){ $('ul.review-tabs li[data-tabcontent="#review-tab"]').click();}, 500);

        });
    </script>


        </div>

    </div>
</div>
<div id="reviewSummaryDiv">

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("visualization", "1", { packages: ["corechart"] });
        google.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
          ['Đánh giá', 'Số lượng'],
          ['Tuyệt vời', 1],
          ['Khá tốt', 44],
          ['Trung bình', 6],
          ['Kém', 0],
        ]);

            var options = {
                title: '',
                legend: 'none',
                chartArea: {left:10,top:8,width:"180",height:"180"},
                colors: ['#1F9B0C','#28C60F','#66635F','#C9C9BD'],
                textStyle: {color: '#333', fontSize: 12}
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript">
        $(function () {
            var positionPoint = Math.round(parseFloat(parseLocalNum('8,00')) * 10);
        var pricePoint = Math.round(parseFloat(parseLocalNum('7,20')) * 10);
        var foodPoint = Math.round(parseFloat(parseLocalNum('7,40')) * 10);
        var servicePoint = Math.round(parseFloat(parseLocalNum('7,40')) * 10);
        var atmospherePoint = Math.round(parseFloat(parseLocalNum('7,80')) * 10);

        $("#positionPointBar").progressbar({
            value: positionPoint
        });
        $("#pricePointBar").progressbar({
            value: pricePoint
        });
        $("#foodPointBar").progressbar({
            value: foodPoint
        });
        $("#servicePointBar").progressbar({
            value: servicePoint
        });
        $("#atmospherePointBar").progressbar({
            value: atmospherePoint
        });

        $('.reviewCounter').text(51);

        $('div.from-review > a[property="v:count"]').text('51');

        //$('.micro-home-staticask').tipsy({ gravity: 's' });
        var totalreviewsummary = 51;
        if(typeof(totalReviews)!='undefined'){
            totalReviews = totalreviewsummary;
        }
        var totalPRs = 1;
        var totalQAs = 0;

        if(totalreviewsummary <= 0){
            $('#reviewSummaryDiv').hide();
            $('.mico-reviews-home').hide();
            $('#microNoReview').show();
        }
        else{
            $('#reviewSummaryDiv').parent().show();
            $('#microNoReview').hide();
        }

    });

        function parseLocalNum(num) {
            return (num.replace(",", "."));
        }
    </script>
    <div class="microsite-sumary-new">

        <div class="microsite-box-heading" style="position:relative;">
            <a name="sumary-point"></a>
            Thống kê
            <div class="icocollapse" affectedclass="microsite-box-rating-new"></div>
        </div>
        <div class="microsite-box-rating-new" style="">

            <div style="width:100%;float:left;margin-left:4px;border-bottom:#eee 1px solid; padding-bottom:10px; margin-bottom:10px;">
                <div class="micro-home-points">7.6</div>
                <div class="micro-home-pointlevel">

                                    Kh&#225; tốt
                </div>
                <div class="micro-home-pointsource">
                    từ <b style="color: #0086DF">51</b> bình luận đã chia sẻ
                </div>
            </div>
            <div style="clear:both; width:100%;">
                <div class="micro-home-point">
                <div class="micro-home-static">
                    <table>
                    <tr>
                        <td>
                            <strong>Tiêu chí</strong>
                        </td>
                        <td colspan="2">
                            <strong>Điểm trung bình</strong>
                        </td>
                    </tr>
                    <tr>
                        <td width="150"></td>
                        <td width="140">
                            <img src="<?=base_url()?>static/style/images/icons/ratin-rank.png" />
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            Vị trí
                        </td>
                        <td>

                            <div id="positionPointBar" class="reviewPointBar">
                            </div>
                        </td>
                        <td>
                            <b>8.0</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Giá cả
                        </td>
                        <td>

                            <div id="pricePointBar" class="reviewPointBar">
                            </div>
                        </td>
                        <td>
                            <b>7.2</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Chất lượng
                        </td>
                        <td>

                            <div id="foodPointBar" class="reviewPointBar">
                            </div>
                        </td>
                        <td>
                            <b>7.4</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phục vụ
                        </td>
                        <td>

                            <div id="servicePointBar" class="reviewPointBar">
                            </div>
                        </td>
                        <td>
                            <b>7.4</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Không gian
                        </td>
                        <td>

                            <div id="atmospherePointBar" class="reviewPointBar">
                            </div>
                        </td>
                        <td>
                            <b>7.8</b>
                        </td>
                    </tr>
                </table>

                </div>
            </div>
                <div class="micro-home-recent-review-right" style="margin-top:0;">
                <div id="chart_div" style="height:200px;float:right;width:200px;margin-top:0px;"></div>

                <div style="float:left;margin-top:18px;">
                    <div style="font-weight:bold; font-size:12px;border-bottom:#ddd 1px solid; margin-bottom: 10px;padding-bottom: 5px;">Chi tiết thống kê</div>
                    <table border="0" width="140" >
                        <tr>
                            <td width="250">
                                <span class="green-legend"></span>
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-du/binh-luan#tuyet-voi" class="micro-home-staticask" original-title="Từ 9.0 - 10 điểm"> Tuyệt vời</a>
                            </td>
                            <td width="100" align="right">
                                <span><b style="color: #03ae03">1</b></span>
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <span class="green-legend-light"></span>
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-du/binh-luan#kha-tot" class="micro-home-staticask" original-title="Từ 7.0 - 8.9 điểm"> Khá tốt</a>
                            </td>
                            <td width="100" align="right">
                                <span><b style="color: #03ae03">44</b></span>
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <span class="grey-legend"></span>
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-du/binh-luan#trung-binh" class="micro-home-staticask" original-title="Từ 5.0 - 6.9 điểm">Trung bình</a>
                            </td>
                            <td width="100" align="right">
                                <span><b style="color: #000">6</b></span>
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <span class="grey-legend-light"></span>
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-du/binh-luan#kem" class="micro-home-staticask" original-title="Từ 0 - 4.9 điểm">Kém</a>
                            </td>
                            <td width="100" align="right">
                                <span><b style="color: #cc0000;">0</b></span>
                            </td>
                        </tr>
                    </table>
                </div>


            </div>
            </div>
        </div>
    </div>

</div>
</div>
<!--Box heading -->
    <div class="microsite-box">
        <div class="microsite-box-heading">
            <div class="title">
                Hình ảnh
                <div class="icocollapse" affectedclass="microsite-box-album"></div>
            </div>
        </div>
        <!--End of box heading -->
        <div class="microsite-box-album">
            <div class="microsite-box-content">
                <div class="microsite-box-content predefine-album-box" style="padding: 0 0;">
                        <div class="micro-home-album">
                            <div class="img-album-mon-an">
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-mon-an">
                                    <img src="<?=base_url()?>static/images/foody-album-highlands-coffee-nguyen-du-21a964d1-96a6-4d6e-803b-20f36de4915a-635344874598676604_cropped_145145.jpg"/>
                                </a>
                            </div>
                            <div class="album">
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-mon-an">M&#243;n ăn</a>
                            </div>
                            <div class="by">
                                <span class="pics-album-mon-an-countable">58</span> ảnh
                            </div>
                        </div>
                        <div class="micro-home-album">
                            <div class="img-album-khong-gian">
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-khong-gian">
                                    <img src="<?=base_url()?>static/images/foody-checkin-highlands-coffee-nguyen-du-32949-217840635333347430497500_cropped_145145.jpg"/>
                                </a>
                            </div>
                            <div class="album">
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-khong-gian">Kh&#244;ng gian</a>
                            </div>
                            <div class="by">
                                <span class="pics-album-khong-gian-countable">21</span> ảnh
                            </div>
                        </div>
                        <div class="micro-home-album">
                            <div class="img-album-tong-hop">
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-tong-hop">
                                    <img src="<?=base_url()?>static/images/foody-highlands-coffee-nguyen-du-49144-635268521968375000_cropped_145145.jpg"/>
                                </a>
                            </div>
                            <div class="album">
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-tong-hop">Tổng hợp</a>
                            </div>
                            <div class="by">
                                <span class="pics-album-tong-hop-countable">8</span> ảnh
                            </div>
                        </div>
                        <div class="micro-home-album">
                            <div class="img-album-thuc-don">
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-thuc-don">
                                    <img src="<?=base_url()?>static/images/foody-highlands-coffee-nguyen-du-49144-635268522020875000_cropped_145145.jpg"/>
                                </a>
                            </div>
                            <div class="album">
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-du/album-thuc-don">Thực đơn</a>
                            </div>
                            <div class="by">
                                <span class="pics-album-thuc-don-countable">4</span> ảnh
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
<!--Box heading -->

<div class="microsite-box">
    <!--Box heading -->
    <a name="res-info"></a>
    <div class="microsite-box-heading">
        <div class="title">
            Thông tin địa điểm
            <div class="icocollapse" affectedclass="microsite-box-info"></div>
        </div>
    </div>
    <div class="microsite-box-info">
        <!--End of box heading -->
        <div class="microsite-box-content">
            <!--Begin restaurant detail info-->
            <div class="micro-home-intro disableSection">
                    <script type="text/javascript">

        var map;
        var infowindow;
        function InitializeMap() {
            var ltlng = new google.maps.LatLng('10.8084253000000', '106.7125189000000');

            var myOptions =
            {
                zoom: 15,
                center: ltlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false
            };
            map = new google.maps.Map(document.getElementById("map"), myOptions);

            map.setCenter(ltlng);
            marker = new google.maps.Marker({
                map: map,
                position: ltlng
            });

            (function (marker) {

                google.maps.event.addListener(marker, 'click', function () {

                    if (!infowindow) {
                        infowindow = new google.maps.InfoWindow();
                    }

                    infowindow.setContent("Highlands Coffee - Nguyễn Du");

                    infowindow.open(map, marker);

                });

            })(marker);
        }
        var mapModel;
        function InitializeMapLarge() {
            if(!mapModel){
                mapModel = new RestaurantListModel({
                    provinceId: provinceId,
                    searchUrl: '/directory/restaurantinrange',
                    loadingElementId: '#loading-img',
                    mapId: 'mapLarge',
                    zoomLevel: 16,
                    defaultLat: 0,
                    defaultLon: 0,
                    mapType: 'large',
                    mainRestaurantId: 4085,
                    mainCategoryId: 2
                    });


                mapModel.lat(10.8084253000000);
                mapModel.long(106.7125189000000);
            }
            if(mapModel.restaurants().length==0){
                mapModel.loadData(1, false, function(){
                    //mapModel.showMap(true);
                    ko.applyBindings(mapModel, document.getElementById('mapDialog'));
                });
            }
        }

        $(function () {
            //InitializeMap();

            //$('.linkmap').click(function () {
            //    if(window.location.hash!="#map")
            //    {
            //        window.location.hash="#map";
            //    }
            //    loadMicroMap();
            //    return false;
            //});

            if(window.location.hash=="#map")
            {
                loadMicroMap();
            }
        });

        function loadMicroMap(){
            $('#mapDialog').modal({persist: true, onClose:function(){
                window.location.hash="";
                $.modal.close();
            } });
            InitializeMapLarge();
        }
        // edit map
        var editmap, editInfoWindow;

        function InitializeEditMap() {
            var latlng;
            var myOptions =
            {
                zoom: 15,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            editmap = new google.maps.Map(document.getElementById("edit-map"), myOptions);
        }
        var editmarker;
        var oldltlng;
        function markediticons() {

            InitializeEditMap();

            oldltlng = new google.maps.LatLng(parseFloat(parseLocalNum('10,8084253000000')), parseFloat(parseLocalNum('106,7125189000000')));

            editmap.setCenter(oldltlng);
            editmarker = new google.maps.Marker({
                map: editmap,
                position: oldltlng,
                draggable: true
            });

            google.maps.event.addListener(editmarker, 'click', function () {

                if (!editInfoWindow) {
                    editInfoWindow = new google.maps.InfoWindow();
                }

                editInfoWindow.setContent("Highlands Coffee - Nguyễn Du");

                editInfoWindow.open(mapedit, editmarker);

            });
        }
    </script>
    <script type="text/javascript">
        function openMapReport(){
            $.modal.close();
            $('#edit-map-dialog').modal();
            $('#simplemodal-container').css('height', '400px');
            $('#simplemodal-container').css('width', '620px');
            $(window).resize();

            markediticons();
        }
    $(function () {

        $('.map-report').click(function () {
            LoginPopup.RequiredLogin(openMapReport);
            return false;
        });

        $('#map-report-button').click(function(){
            var newlatitude = editmarker.getPosition().lat();
            var newlongitude = editmarker.getPosition().lng();
            if(oldltlng.lat() != newlatitude || oldltlng.lng() != newlongitude)
            {
                var data = {
                    restaurantId: '4085',
                    errorkeyname: 'restaurant map',
                    correctinfo: 'Lat: '+newlatitude +'; Long: '+newlongitude,
                    type: '3',
                    istrue: false,
                    reporturl: window.location.href
                };
                $.post("/Restaurant/AddReportError", data, function (response) {
                    if (response.success) {
                        $('.report-map-success').show();
                        $('.report-map-fail').hide();
                        //oldltlng.kb = newlatitude;
                        //oldltlng.jb = newlongitude;
                        oldltlng = new google.maps.LatLng(newlatitude, newlongitude, true);
                    }
                    else {
                        $('.report-map-success').hide();
                        $('.report-map-fail').show();
                    }
                });
            }
        });
    });


    </script>
    <div id="mapDialog" style="display: none;">
        <div class="linkmap-title">
            <span>Bản đồ</span> <span data-bind="text: mainRestaurant().Name"></span>
            <a href="javascript:void(0)" class="map-report" style="float:right;color:#029FC6;font-size:13px;">Báo lỗi vị trí</a>
            <img id="loading-img" src="<?=base_url()?>static/style/images/icons/loading.gif" alt="Loading..." style="float: right; margin-right: 20px; display: none;">
        </div>
        <div style="border: #ddd 1px solid; clear: both; width: 100%; height: 440px; margin-bottom: 15px;">
            <div id="mapLarge" class="larger-map">
            </div>
            <div class="map-filters">
                <div style="display: none">
                    <h3>Hướng dẫn đường đi</h3>
                    <div style="color: #777;">
                        Bạn đang ở đâu?
                    </div>
                    <div>
                        <input type="text" style="border: #ccc 1px solid; padding: 4px; width: 155px; margin-top: 3px;" />
                    </div>
                    <div>
                        <input type="button" value="Chỉ đường" class="map-rout" />
                    </div>
                </div>
                <h3 style="margin-top: 10px;">Địa điểm xung quanh</h3>
                <div style="width:182px;height:400px;overflow:auto;padding-right:5px">
                    <div class="map-filter-nhahang">
                        <div class="title">
                            Nhà Hàng (<span data-bind="text: nhaHangCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: nhaHangShowText, click:function(){handleRestaurantDisplay(category.NHAHANG)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-cafe">
                        <div class="title">
                            Cafe/Kem (<span data-bind="text: cafeCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: cafeShowText, click:function(){handleRestaurantDisplay(category.CAFE)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-quanan">
                        <div class="title">
                            Quán Ăn (<span data-bind="text: quanAnCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: quanAnShowText, click:function(){handleRestaurantDisplay(category.QUANAN)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-anvat-viahe">
                        <div class="title">
                            Ăn vặt/Vỉa hè (<span data-bind="text: anVatViaHeCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: anVatViaHeShowText, click:function(){handleRestaurantDisplay(category.ANVAT_VIAHE)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-bar">
                        <div class="title">
                            Bar/Pub (<span data-bind="text: barpubCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: barpubShowText, click:function(){handleRestaurantDisplay(category.BARPUB)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-tiembanh">
                        <div class="title">
                            Tiệm Bánh (<span data-bind="text: tiemBanhCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: tiemBanhShowText, click:function(){handleRestaurantDisplay(category.TIEMBANH)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-karaoke">
                        <div class="title">
                            Karaoke (<span data-bind="text: karaokeCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: karaokeShowText, click:function(){handleRestaurantDisplay(category.KARAOKE)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-resort">
                        <div class="title">
                            Khu du lịch (<span data-bind="text: resortCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: resortShowText, click:function(){handleRestaurantDisplay(category.RESORT)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-billiards">
                        <div class="title">
                            Billiards (<span data-bind="text: billiardsCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: billiardsShowText, click:function(){handleRestaurantDisplay(category.BILLIARDS)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-tiec-cuoi-hoi-nghi">
                        <div class="title">
                            Tiệc cưới - hội nghị (<span data-bind="text: tiecCuoiHoiNghiCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: tiecCuoiHoiNghiShowText, click:function(){handleRestaurantDisplay(category.TIECCUOI_HOINGHI)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-store">
                        <div class="title">
                            Cửa hàng (<span data-bind="text: storeCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: storeShowText, click:function(){handleRestaurantDisplay(category.STORE)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-sang-trong">
                        <div class="title">
                            Sang trọng (<span data-bind="text: sangTrongCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: sangTrongShowText, click:function(){handleRestaurantDisplay(category.SANG_TRONG)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-giai-tri">
                        <div class="title">
                            Giải trí (<span data-bind="text: giaiTriCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: giaiTriShowText, click:function(){handleRestaurantDisplay(category.GIAI_TRI)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-spa-massage">
                        <div class="title">
                            Spa/Massage (<span data-bind="text: spaMassageCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: spaMassageShowText, click:function(){handleRestaurantDisplay(category.SPA_MASSAGE)}">ẩn</a>
                        </div>
                    </div>
                    <div class="map-filter-hotel">
                        <div class="title">
                            Hotel (<span data-bind="text: hotelCount">0</span>)
                        </div>
                        <div class="control">
                            <a data-bind="text: hotelShowText, click:function(){handleRestaurantDisplay(category.HOTEL)}">ẩn</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="microsite-map">
         <a href="javascript:void(0)" id="map-report-error" class="map-report">Báo lỗi vị trí</a>

        <div><a class="linkmap"><img src="<?=base_url()?>static/images/4085.jpg" /></a></div>
        <div class="microsite-map-link" >
            <a class="linkmap" title="Xem bản đồ lớn">Xem bản đồ lớn</a>
        </div>
    </div>
     <div>

            <div id="edit-map-dialog" style="display:none">
                 <div class="linkmap-title">
                    <span style="border:0px;">Cập nhật lại vị trí</span>
                </div>
                <div id="edit-map" style="width: 600px; height: 330px;"></div>
                <div>
                    <a href="javascript:void(0)" id="map-report-button">Gửi thông tin </a>
                </div>
                <span class="map-tip">Rê chuột lên nắm vào icon đánh dấu, kéo và thả vào vị trí đúng của địa điểm</span>
                <span class="report-map-success" style="display:none">Gửi thông tin thành công</span>
                <span class="report-map-fail" style="display:none">Vui lòng chọn lại vị trí</span>
            </div>
        </div>

                <table cellpadding="5" cellspacing="5">

                        <tr>
                            <td>
                                <label>
                                    Vị trí khu vực</label>
                            </td>
                            <td>
                                <span><a href="/ho-chi-minh/cafe-tai-nha-tho-duc-ba,quan-1">Nh&#224; Thờ Đức B&#224; </a></span>
                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Vị tr&#237; khu vực" href="javascript:void(0);">[báo lỗi]</a></div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <label>
                                    Ở gần</label>
                            </td>
                            <td>
                                <span>Ng&#227; 4 Nguyễn Du &amp; Pasteur</span>
                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Ở gần" href="javascript:void(0);">[báo lỗi]</a></div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <label>
                                    Chỉ đường</label>
                            </td>
                            <td>
                                <span>Từ nh&#224; thờ Đức B&#224; đi xuống Nguyễn Du khoảng 100m, Highland Coffee nằm ph&#237;a b&#234;n tay tr&#225;i, ngay ng&#227; 4</span>
                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Chỉ đường" href="javascript:void(0);">[báo lỗi]</a></div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>
                                    Website</label>
                            </td>
                            <td>

                                <a style="float:left;margin-right:5px;" rel="nofollow" href="http://www.highlandcoffee.com.vn" target="_blank">
                                    <img src="<?=base_url()?>static/style/images/icons/external_link_icon.gif" /></a>
                                <span>www.highlandcoffee.com.vn</span>

                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Chỉ đường" href="javascript:void(0);">[báo lỗi]</a></div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <label>
                                    Sức chứa</label>
                            </td>
                            <td>
                                    <span>40 người lớn</span>
                                                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Sức chứa" href="javascript:void(0);">[báo lỗi]</a></div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <label>
                                    Thời gian hoạt động</label>
                            </td>
                            <td>
                                    <span>Đang cập nhật</span>
                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Thời gian hoạt động" href="javascript:void(0);">[báo lỗi]</a></div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <label>
                                    Giờ nhận khách cuối</label>
                            </td>
                            <td>
                                <span>10:00 PM</span>
                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Giờ nhận kh&#225;ch cuối" href="javascript:void(0);">[báo lỗi]</a></div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <label>
                                    Thời gian chuẩn bị</label>
                            </td>
                            <td>
                                    <span>
                                        Khoảng 10 - 15 ph&#250;t
                                    </span>
                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Thời gian chuẩn bị" href="javascript:void(0);">[báo lỗi]</a></div>
                            </td>
                        </tr>
                                        <tr>
                        <td>
                            <label>
                                Nghỉ lễ</label>
                        </td>
                        <td>
                                <span>Các ngày lễ trong năm</span>
                            <div class="report-data-error"><a class="resinfo-report" errorkeyname="Nghỉ lễ" href="javascript:void(0);">[báo lỗi]</a></div>
                        </td>
                    </tr>
                        <tr>
                            <td>
                                <label>
                                    Năm thành lập</label>
                            </td>
                            <td>
                                <span>2008</span><div class="report-data-error"><a class="resinfo-report" errorkeyname="Năm th&#224;nh lập" href="javascript:void(0);">[báo lỗi]</a></div>
                            </td>
                        </tr>
                    <tr>
                        <td width="150">
                            <label>
                                Thể loại</label>
                        </td>
                        <td>
                                <span>
                                    <ul>
                                            <li class="list"><a href="/ho-chi-minh/cafe">Caf&#233;/Kem </a></li>                                    </ul>
                                </span>
                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Thể loại" href="javascript:void(0);">[báo lỗi]</a></div>
                        </td>
                    </tr>
                        <tr>
                            <td>
                                <label>
                                    Thích hợp</label>
                            </td>
                            <td>
                                <span>
                                    <ul>
                                            <li class="list"><a href="/ho-chi-minh/cafe-phuc-vu-vao-buoi-sang" title="Buổi s&#225;ng">Buổi s&#225;ng</a></li>
                                            <li class="list"><a href="/ho-chi-minh/cafe-phuc-vu-vao-buoi-trua" title="Buổi  trưa">Buổi  trưa</a></li>
                                            <li class="list"><a href="/ho-chi-minh/cafe-phuc-vu-vao-buoi-xe" title="Buổi xế">Buổi xế</a></li>
                                            <li class="list"><a href="/ho-chi-minh/cafe-phuc-vu-vao-buoi-toi" title="Buổi  tối">Buổi  tối</a></li>
                                    </ul>
                                </span>
                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Th&#237;ch hợp" href="javascript:void(0);">[báo lỗi]</a></div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <label width="100">
                                    Phong cách ẩm thực</label>
                            </td>
                            <td>
                                <span>
                                    <ul>
<li class="list"><a href="/ho-chi-minh/cafe-phong-cach-viet-nam">Việt Nam</a></li>                                    </ul>
                                </span>
                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Phong c&#225;ch ẩm thực" href="javascript:void(0);">[báo lỗi]</a></div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <label>
                                    Phù hợp với mục đích</label>
                            </td>
                            <td>
                                <span>
                                    <ul>
<li class="list"><a href="/ho-chi-minh/cafe-phu-hop-hen-ho">Hẹn h&#242;</a></li><li class="list"><a href="/ho-chi-minh/cafe-phu-hop-hop-nhom">Họp nh&#243;m</a></li><li class="list highlight-text"><a href="/ho-chi-minh/cafe-phu-hop-tiep-khach">Tiếp kh&#225;ch</a></li><li class="list"><a href="/ho-chi-minh/cafe-phu-hop-thu-gian">Thư gi&#227;n</a></li><li class="list"><a href="/ho-chi-minh/cafe-phu-hop-ngam-canh">Ngắm cảnh</a></li><li class="list"><a href="/ho-chi-minh/cafe-phu-hop-takeaway-mang-ve">Takeaway - Mang về</a></li><li class="list"><a href="/ho-chi-minh/cafe-phu-hop-tiep-khach-sang-trong">Tiếp kh&#225;ch sang trọng</a></li>                                    </ul>
                                </span>
                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Ph&#249; hợp với mục đ&#237;ch" href="javascript:void(0);">[báo lỗi]</a></div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <label>
                                    Phục vụ các món</label>
                            </td>
                            <td>
                                <span>
                                    <ul>
<li class="list"><a href="/ho-chi-minh/cafe-phuc-vu-cafe-kem">Caf&#233; - Kem</a></li><li class="list"><a href="/ho-chi-minh/cafe-phuc-vu-sinh-to-nuoc-ep">Sinh tố - Nước &#233;p</a></li><li class="list highlight-text"><a href="/ho-chi-minh/cafe-phuc-vu-com-van-phong">Cơm văn ph&#242;ng</a></li><li class="list"><a href="/ho-chi-minh/cafe-phuc-vu-an-vat-an-nhe">Ăn vặt - Ăn nhẹ</a></li>                                    </ul>
                                </span>
                                <div class="report-data-error"><a class="resinfo-report" errorkeyname="Phục vụ c&#225;c m&#243;n" href="javascript:void(0);">[báo lỗi]</a></div>
                            </td>
                        </tr>
                </table>
            </div>
            <!--End restaurant detail info-->
        </div>
    </div>
    <div class="microsite-box-heading">
        <div class="title">
            Các tiện ích
            <div class="icocollapse" affectedclass="microsite-box-property"></div>
        </div>
    </div>
    <!--End of box heading -->
    <div class="microsite-box-property">
        <div class="microsite-box-content">
            <ul class="micro-property">
                    <li><a href="/ho-chi-minh/cafe-co-dat-ban-truoc">N&#234;n đặt trước</a>                        <a class="resproperties-report" istrue="true" errorkeyname="N&#234;n đặt trước" href="javascript:void(0);">[báo lỗi]</a>
                    </li>
                    <li class="none">C&#243; hồ bơi <a class="resproperties-report" istrue="false" errorkeyname="C&#243; hồ bơi" href="javascript:void(0);">[báo lỗi]</a></li>
                    <li class="none">C&#243; giao h&#224;ng <a class="resproperties-report" istrue="false" errorkeyname="C&#243; giao h&#224;ng" href="javascript:void(0);">[báo lỗi]</a></li>
                    <li><a href="/ho-chi-minh/cafe-co-cho-mua-ve">Cho mua về</a>                        <a class="resproperties-report" istrue="true" errorkeyname="Cho mua về" href="javascript:void(0);">[báo lỗi]</a>
                    </li>
                    <li><a href="/ho-chi-minh/cafe-co-wifi">C&#243; wifi</a>                        <a class="resproperties-report" istrue="true" errorkeyname="C&#243; wifi" href="javascript:void(0);">[báo lỗi]</a>
                    </li>
                    <li class="none">C&#243; ph&#242;ng ri&#234;ng <a class="resproperties-report" istrue="false" errorkeyname="C&#243; ph&#242;ng ri&#234;ng" href="javascript:void(0);">[báo lỗi]</a></li>
                    <li><a href="/ho-chi-minh/cafe-co-ban-ngoai-troi">C&#243; b&#224;n ngo&#224;i trời</a>                        <a class="resproperties-report" istrue="true" errorkeyname="C&#243; b&#224;n ngo&#224;i trời" href="javascript:void(0);">[báo lỗi]</a>
                    </li>
                    <li class="none">C&#243; chỗ chơi cho trẻ em <a class="resproperties-report" istrue="false" errorkeyname="C&#243; chỗ chơi cho trẻ em" href="javascript:void(0);">[báo lỗi]</a></li>
                    <li><a href="/ho-chi-minh/cafe-co-may-lanh">C&#243; m&#225;y lạnh</a>                        <a class="resproperties-report" istrue="true" errorkeyname="C&#243; m&#225;y lạnh" href="javascript:void(0);">[báo lỗi]</a>
                    </li>
                    <li><a href="/ho-chi-minh/cafe-co-tra-bang-the">Trả bằng thẻ</a>                        <a class="resproperties-report" istrue="true" errorkeyname="Trả bằng thẻ" href="javascript:void(0);">[báo lỗi]</a>
                    </li>
                    <li><a href="/ho-chi-minh/cafe-co-giu-xe-may-mien-phi">Giữ xe m&#225;y miễn ph&#237;</a>                        <a class="resproperties-report" istrue="true" errorkeyname="Giữ xe m&#225;y miễn ph&#237;" href="javascript:void(0);">[báo lỗi]</a>
                    </li>
                    <li class="none">C&#243; karaoke <a class="resproperties-report" istrue="false" errorkeyname="C&#243; karaoke" href="javascript:void(0);">[báo lỗi]</a></li>
                    <li class="none">Tip cho nh&#226;n vi&#234;n <a class="resproperties-report" istrue="false" errorkeyname="Tip cho nh&#226;n vi&#234;n" href="javascript:void(0);">[báo lỗi]</a></li>
                    <li class="none">C&#243; chỗ đậu &#244;t&#244; <a class="resproperties-report" istrue="false" errorkeyname="C&#243; chỗ đậu &#244;t&#244;" href="javascript:void(0);">[báo lỗi]</a></li>
                    <li><a href="/ho-chi-minh/cafe-co-khu-vuc-hut-thuoc">C&#243; khu vực h&#250;t thuốc</a>                        <a class="resproperties-report" istrue="true" errorkeyname="C&#243; khu vực h&#250;t thuốc" href="javascript:void(0);">[báo lỗi]</a>
                    </li>
                    <li class="none">C&#243; thẻ th&#224;nh vi&#234;n <a class="resproperties-report" istrue="false" errorkeyname="C&#243; thẻ th&#224;nh vi&#234;n" href="javascript:void(0);">[báo lỗi]</a></li>
                    <li><a href="/ho-chi-minh/cafe-co-xuat-hoa-don-do">C&#243; xuất h&#243;a đơn đỏ</a>                        <a class="resproperties-report" istrue="true" errorkeyname="C&#243; xuất h&#243;a đơn đỏ" href="javascript:void(0);">[báo lỗi]</a>
                    </li>
                    <li class="none">C&#243; l&#242; sưởi <a class="resproperties-report" istrue="false" errorkeyname="C&#243; l&#242; sưởi" href="javascript:void(0);">[báo lỗi]</a></li>
                    <li class="none">C&#243; hỗ trợ hội thảo <a class="resproperties-report" istrue="false" errorkeyname="C&#243; hỗ trợ hội thảo" href="javascript:void(0);">[báo lỗi]</a></li>
                    <li class="none">C&#243; hỗ trợ người khuyết tật <a class="resproperties-report" istrue="false" errorkeyname="C&#243; hỗ trợ người khuyết tật" href="javascript:void(0);">[báo lỗi]</a></li>
                    <li class="none">C&#243; chiếu b&#243;ng đ&#225;? <a class="resproperties-report" istrue="false" errorkeyname="C&#243; chiếu b&#243;ng đ&#225;?" href="javascript:void(0);">[báo lỗi]</a></li>
                    <li class="none">C&#243; nhạc sống <a class="resproperties-report" istrue="false" errorkeyname="C&#243; nhạc sống" href="javascript:void(0);">[báo lỗi]</a></li>
            </ul>
        </div>
    </div>


    <!--End of Micro Intro Box -->
    <!--Start Microsite Intro box -->

</div>






<!--End of Microsite Intro Box -->
                        </div>
                        </td>
                        <!--End of Left content -->
                        <!--Start Right content -->
                        <td style="background:#f9f9f9;" class="rightbox">

    <div class="micro-right">


            <div class="microsite-box-right" style="">
        <div class="microsite-box-heading-right">
            <div class="title">
                Đặc điểm nổi bật
            </div>
        </div>
        <div class="microsite-box-content-right special-content disableSelection">
            <div><ul>
	<li>
		Thể hiện đẳng cấp của Cafe Vietnam</li>
	<li>
		Kh&ocirc;ng gian đẹp, c&oacute; ph&ograve;ng lạnh v&agrave; ngo&agrave;i trời</li>
	<li>
		Vị tr&iacute; thuận tiện, nằm tại khu vực m&aacute;t mẻ của TP</li>
	<li>
		Phụ vụ nhanh ch&oacute;ng v&agrave; chu đ&aacute;o</li>
</ul>
</div>
        </div>
    </div>


        <style>
    .special-menus { width: 270px; float: left; padding: 10px 0 10px 15px !important; font-size: 12px;}
    .special-menus ul li { background: url(../../Style/images/icons/special-menu2.png) no-repeat; padding-bottom:2px; padding-left: 20px; line-height: 1.7em; background-position: 0px 2px; }
</style>






        <!--latest review box -->
            <div class="microsite-box-right" style="border-top:none;">
        <div class="microsite-box-heading-right" style="background:#fff;">
            <div class="title">
                Cùng hệ thống</div>
        </div>
        <div class="microsite-box-content-right">

                <div class="microsite-brand-right-item">
                    <div class="img">
                        <a href="/ho-chi-minh/highlands-coffee-12-le-thanh-ton">
                            <img src="<?=base_url()?>static/images/foody-highlands-coffee-12-le-thanh-ton-tp-hcm-140307015342_100.jpg" alt="Highlands Coffee - 12 L&#234; Th&#225;nh T&#244;n" /></a></div>
                    <div class="micro-related-content">
                        <div class="title">
                            <h2><a href="/ho-chi-minh/highlands-coffee-12-le-thanh-ton">Highlands Coffee - 12 L&#234; Th&#225;nh T&#244;n </a></h2>
                        </div>
                        <div class="address">
                            <span>12 L&#234; Th&#225;nh T&#244;n</span>, <span>
                                Quận 1</span>
                        </div>
                        <div>
                            <div class="point">
                                <span>8.7</span>
                            </div>
                            <div class="review">
                                <a href="/ho-chi-minh/highlands-coffee-12-le-thanh-ton/binh-luan"><span>3</span> bình luận</a></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="microsite-brand-right-item">
                    <div class="img">
                        <a href="/ho-chi-minh/highland-coffee-rmit-university">
                            <img src="<?=base_url()?>static/images/foody-highland-coffee-rmit-university-tp-hcm-131120101359_100.jpg" alt="Highland Coffee - RMIT University" /></a></div>
                    <div class="micro-related-content">
                        <div class="title">
                            <h2><a href="/ho-chi-minh/highland-coffee-rmit-university">Highland Coffee - RMIT University </a></h2>
                        </div>
                        <div class="address">
                            <span>RMIT University, 702 Nguyễn Văn Linh</span>, <span>
                                Quận 7</span>
                        </div>
                        <div>
                            <div class="point">
                                <span>8.0</span>
                            </div>
                            <div class="review">
                                <a href="/ho-chi-minh/highland-coffee-rmit-university/binh-luan"><span>1</span> bình luận</a></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="microsite-brand-right-item">
                    <div class="img">
                        <a href="/ho-chi-minh/highlands-coffee-parkson-le-thanh-ton">
                            <img src="<?=base_url()?>static/images/634788095272896000_q1_parkson_100.jpg" alt="Highlands Coffee - Parkson L&#234; Th&#225;nh T&#244;n" /></a></div>
                    <div class="micro-related-content">
                        <div class="title">
                            <h2><a href="/ho-chi-minh/highlands-coffee-parkson-le-thanh-ton">Highlands Coffee - Parkson L&#234; Th&#225;nh T&#244;n </a></h2>
                        </div>
                        <div class="address">
                            <span>35 Bis - 45 L&#234; Th&#225;nh T&#244;n, P. Bến Ngh&#233;</span>, <span>
                                Quận 1</span>
                        </div>
                        <div>
                            <div class="point">
                                <span>8.0</span>
                            </div>
                            <div class="review">
                                <a href="/ho-chi-minh/highlands-coffee-parkson-le-thanh-ton/binh-luan"><span>1</span> bình luận</a></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="microsite-brand-right-item">
                    <div class="img">
                        <a href="/ho-chi-minh/highlands-coffee-an-dong-plaza">
                            <img src="<?=base_url()?>static/images/634788262312860000_highland_logo_100.jpg" alt="Highlands Coffee - An Đ&#244;ng Plaza" /></a></div>
                    <div class="micro-related-content">
                        <div class="title">
                            <h2><a href="/ho-chi-minh/highlands-coffee-an-dong-plaza">Highlands Coffee - An Đ&#244;ng Plaza </a></h2>
                        </div>
                        <div class="address">
                            <span>18 An Dương Vương, P. 9</span>, <span>
                                Quận 5</span>
                        </div>
                        <div>
                            <div class="point">
                                <span>8.0</span>
                            </div>
                            <div class="review">
                                <a href="/ho-chi-minh/highlands-coffee-an-dong-plaza/binh-luan"><span>1</span> bình luận</a></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="microsite-brand-right-item">
                    <div class="img">
                        <a href="/ho-chi-minh/highlands-coffee-nam-sai-gon">
                            <img src="<?=base_url()?>static/images/634788289125204000_highland_logo_100.jpg" alt="Highlands Coffee - Nam S&#224;i G&#242;n" /></a></div>
                    <div class="micro-related-content">
                        <div class="title">
                            <h2><a href="/ho-chi-minh/highlands-coffee-nam-sai-gon">Highlands Coffee - Nam S&#224;i G&#242;n </a></h2>
                        </div>
                        <div class="address">
                            <span>152 Nguyễn Lương Bằng, P. T&#226;n Ph&#250;. </span>, <span>
                                Quận 7</span>
                        </div>
                        <div>
                            <div class="point">
                                <span>8.0</span>
                            </div>
                            <div class="review">
                                <a href="/ho-chi-minh/highlands-coffee-nam-sai-gon/binh-luan"><span>1</span> bình luận</a></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                            <script type="text/javascript">
                    $(function () {
                        $('#brandViewMore').click(function () {
                            //$(".search-div").hide();
                            $('#allBrandsDialog').modal();
                            $('#simplemodal-container').css('height', '380px');
                            $('#simplemodal-container').css('width', '500px');
                            $(window).resize();
                        });
                    });

                </script>
                <div class="viewmore">
                    <a id="brandViewMore" href="#">Xem tất cả 32 chi nhánh</a>
                </div>
                <div id="allBrandsDialog" style="display:none; ">
                    <h3 style="border-bottom:#eee 1px solid; padding-bottom:8px; margin-bottom:10px; width:100%; font-size: 18px;"><span style="color:#cc0000;">32</span> Chi nhánh của Highlands Coffee</h3>
                    <div style="height:345px;overflow:auto;width:480px;">
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-12-le-thanh-ton">
                                    <img src="<?=base_url()?>static/images/foody-highlands-coffee-12-le-thanh-ton-tp-hcm-140307015342_100.jpg" alt="foody-highlands-coffee-12-le-thanh-ton-tp-hcm-140307015342.JPG" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-12-le-thanh-ton">Highlands Coffee - 12 L&#234; Th&#225;nh T&#244;n </a>
                                </div>
                                <div class="address">
                                    <span>12 L&#234; Th&#225;nh T&#244;n</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>8.7</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-12-le-thanh-ton/binh-luan"><span>3</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highland-coffee-rmit-university">
                                    <img src="<?=base_url()?>static/images/foody-highland-coffee-rmit-university-tp-hcm-131120101359_100.jpg" alt="foody-highland-coffee-rmit-university-tp-hcm-131120101359.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highland-coffee-rmit-university">Highland Coffee - RMIT University </a>
                                </div>
                                <div class="address">
                                    <span>RMIT University, 702 Nguyễn Văn Linh</span>, <span>
                                        Quận 7</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>8.0</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highland-coffee-rmit-university/binh-luan"><span>1</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-parkson-le-thanh-ton">
                                    <img src="<?=base_url()?>static/images/634788095272896000_q1_parkson_100.jpg" alt="634788095272896000_Q1_parkson.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-parkson-le-thanh-ton">Highlands Coffee - Parkson L&#234; Th&#225;nh T&#244;n </a>
                                </div>
                                <div class="address">
                                    <span>35 Bis - 45 L&#234; Th&#225;nh T&#244;n, P. Bến Ngh&#233;</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>8.0</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-parkson-le-thanh-ton/binh-luan"><span>1</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-an-dong-plaza">
                                    <img src="<?=base_url()?>static/images/634788262312860000_highland_logo_100.jpg" alt="634788262312860000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-an-dong-plaza">Highlands Coffee - An Đ&#244;ng Plaza </a>
                                </div>
                                <div class="address">
                                    <span>18 An Dương Vương, P. 9</span>, <span>
                                        Quận 5</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>8.0</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-an-dong-plaza/binh-luan"><span>1</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-nam-sai-gon">
                                    <img src="<?=base_url()?>static/images/634788289125204000_highland_logo_100.jpg" alt="634788289125204000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-nam-sai-gon">Highlands Coffee - Nam S&#224;i G&#242;n </a>
                                </div>
                                <div class="address">
                                    <span>152 Nguyễn Lương Bằng, P. T&#226;n Ph&#250;. </span>, <span>
                                        Quận 7</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>8.0</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-nam-sai-gon/binh-luan"><span>1</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-lotte-mart-nguyen-huu-tho">
                                    <img src="<?=base_url()?>static/images/634788278727180000_highland_logo_100.jpg" alt="634788278727180000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-lotte-mart-nguyen-huu-tho">Highlands Coffee - Food Court Lotte Mart Nguyễn Hữu Thọ </a>
                                </div>
                                <div class="address">
                                    <span>Food Court Lotte Mart Nguyễn Hữu Thọ, 469 Nguyễn Hữu Thọ</span>, <span>
                                        Quận 7</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.9</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-lotte-mart-nguyen-huu-tho/binh-luan"><span>4</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-le-thanh-ton">
                                    <img src="<?=base_url()?>static/images/634788096510600000_q1_100.jpg" alt="634788096510600000_q1.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-le-thanh-ton">Highlands Coffee - L&#234; Th&#225;nh T&#244;n </a>
                                </div>
                                <div class="address">
                                    <span>96B L&#234; Th&#225;nh T&#244;n, P. Bến Th&#224;nh</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.8</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-le-thanh-ton/binh-luan"><span>5</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-thuong-xa-tax">
                                    <img src="<?=base_url()?>static/images/634788227636556000_q1_100.jpg" alt="634788227636556000_q1.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-thuong-xa-tax">Highlands Coffee - Thương x&#225; Tax </a>
                                </div>
                                <div class="address">
                                    <span>135 Nguyễn Huệ, P. Bến Ngh&#233;</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.8</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-thuong-xa-tax/binh-luan"><span>9</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-huu-canh">
                                    <img src="<?=base_url()?>static/images/634788926096760000_highland_logo_100.jpg" alt="634788926096760000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-nguyen-huu-canh">Highlands Coffee - The Manor Nguyễn Hữu Cảnh </a>
                                </div>
                                <div class="address">
                                    <span>91 Nguyễn Hữu Cảnh, P. 22</span>, <span>
                                        Quận B&#236;nh Thạnh</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.7</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-nguyen-huu-canh/binh-luan"><span>8</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-mac-dinh-chi">
                                    <img src="<?=base_url()?>static/images/634787969630712000_highlandcoffee1_100.jpg" alt="634787969630712000_highlandcoffee1.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-mac-dinh-chi">Highlands Coffee - Mạc Đĩnh Chi </a>
                                </div>
                                <div class="address">
                                    <span>39 Mạc Đĩnh Chi, P. Đakao</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.5</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-mac-dinh-chi/binh-luan"><span>17</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-big-c-hoang-van-thu">
                                    <img src="<?=base_url()?>static/images/634788916706028000_highland_logo_100.jpg" alt="634788916706028000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-big-c-hoang-van-thu">Highlands Coffee - Big C Ho&#224;ng Văn Thụ </a>
                                </div>
                                <div class="address">
                                    <span>202B Ho&#224;ng Văn Thụ, P. 9</span>, <span>
                                        Quận Ph&#250; Nhuận</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.5</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-big-c-hoang-van-thu/binh-luan"><span>4</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-garden-plaza">
                                    <img src="<?=base_url()?>static/images/634788306252912000_highland_logo_100.jpg" alt="634788306252912000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-garden-plaza">Highlands Coffee - Garden Plaza </a>
                                </div>
                                <div class="address">
                                    <span>SB-01, Garden Plaza 1, 22 T&#244;n Dật Ti&#234;n, P. T&#226;n Phong</span>, <span>
                                        Quận 7</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.5</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-garden-plaza/binh-luan"><span>3</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-nha-hat-thanh-pho">
                                    <img src="<?=base_url()?>static/images/634788112187196000_highland_100.jpg" alt="634788112187196000_highland.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-nha-hat-thanh-pho">Highlands Coffee - Nh&#224; H&#225;t Th&#224;nh Phố </a>
                                </div>
                                <div class="address">
                                    <span>7 C&#244;ng Trường Lam Sơn, P. Bến Ngh&#233;</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.5</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-nha-hat-thanh-pho/binh-luan"><span>5</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-ton-duc-thang">
                                    <img src="<?=base_url()?>static/images/634787667627604000_highland_tdt_100.jpg" alt="634787667627604000_highland_tdt.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-ton-duc-thang">Highlands Coffee - T&#244;n Đức Thắng </a>
                                </div>
                                <div class="address">
                                    <span>37 T&#244;n Đức Thắng, P. Bến Ngh&#233;</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.5</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-ton-duc-thang/binh-luan"><span>4</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-vincom">
                                    <img src="<?=base_url()?>static/images/634787645850784000_highlandcoffee3_100.jpg" alt="634787645850784000_highlandcoffee3.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-vincom">Highlands Coffee - Vincom </a>
                                </div>
                                <div class="address">
                                    <span>B3, Vincom Center, 72 L&#234; Th&#225;nh T&#244;n</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.5</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-vincom/binh-luan"><span>19</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-diamond-plaza">
                                    <img src="<?=base_url()?>static/images/634788217323708000_highland_logo_100.jpg" alt="634788217323708000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-diamond-plaza">Highlands Coffee - Diamond Plaza </a>
                                </div>
                                <div class="address">
                                    <span>34 L&#234; Duẩn, P. Bến Ngh&#233;</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.4</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-diamond-plaza/binh-luan"><span>18</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-food-court-parkson-hung-vuong">
                                    <img src="<?=base_url()?>static/images/634788254755752000_q1_parkson_100.jpg" alt="634788254755752000_Q1_parkson.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-food-court-parkson-hung-vuong">Highlands Coffee - Food Court Parkson H&#249;ng Vương </a>
                                </div>
                                <div class="address">
                                    <span>Food Court Parkson H&#249;ng Vương,126 Hồng B&#224;ng, P. 12</span>, <span>
                                        Quận 5</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.4</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-food-court-parkson-hung-vuong/binh-luan"><span>16</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-hai-ba-trung">
                                    <img src="<?=base_url()?>static/images/foody-highlands-coffee-hai-ba-trung-tp-hcm-131108042355_100.jpg" alt="foody-highlands-coffee-hai-ba-trung-tp-hcm-131108042355.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-hai-ba-trung">Highlands Coffee - Hai B&#224; Trưng </a>
                                </div>
                                <div class="address">
                                    <span>265 Hai B&#224; Trưng</span>, <span>
                                        Quận 3</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.4</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-hai-ba-trung/binh-luan"><span>1</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-parkson-ct-plaza">
                                    <img src="<?=base_url()?>static/images/634788367575732000_highland_logo_100.jpg" alt="634788367575732000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-parkson-ct-plaza">Highlands Coffee - Parkson CT Plaza </a>
                                </div>
                                <div class="address">
                                    <span>Parkson CT Plaza, 60A Trường Sơn, P. 2</span>, <span>
                                        Quận T&#226;n B&#236;nh</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.3</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-parkson-ct-plaza/binh-luan"><span>13</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-ham-nghi">
                                    <img src="<?=base_url()?>static/images/634788204215652000_highland_logo_100.jpg" alt="634788204215652000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-ham-nghi">Highlands Coffee - H&#224;m Nghi </a>
                                </div>
                                <div class="address">
                                    <span>181 H&#224;m Nghi, P. Nguyễn Th&#225;i B&#236;nh</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.3</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-ham-nghi/binh-luan"><span>24</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-maximark-3-2">
                                    <img src="<?=base_url()?>static/images/634788345721224000_highland_logo_100.jpg" alt="634788345721224000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-maximark-3-2">Highlands Coffee - Maximark 3 Th&#225;ng 2 </a>
                                </div>
                                <div class="address">
                                    <span>3C Đường 3 Th&#225;ng 2, P. 11</span>, <span>
                                        Quận 10</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.2</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-maximark-3-2/binh-luan"><span>12</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-unionsquare">
                                    <img src="<?=base_url()?>static/images/foody-highlands-coffee-vincom-center-a-tp-hcm_100.jpg" alt="foody-highlands-coffee-vincom-center-a-tp-hcm.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-unionsquare">Highlands Coffee - UnionSquare </a>
                                </div>
                                <div class="address">
                                    <span>UnionSquare, 171 Đồng Khởi</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.2</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-unionsquare/binh-luan"><span>4</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-parkson-paragon">
                                    <img src="<?=base_url()?>static/images/634788315294516000_highland_logo_100.jpg" alt="634788315294516000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-parkson-paragon">Highlands Coffee - Parkson Paragon </a>
                                </div>
                                <div class="address">
                                    <span>3 Nguyễn Lương Bằng, P. T&#226;n Ph&#250;</span>, <span>
                                        Quận 7</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.2</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-parkson-paragon/binh-luan"><span>5</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-cong-hoa">
                                    <img src="<?=base_url()?>static/images/634788356266824000_highland_logo_100.jpg" alt="634788356266824000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-cong-hoa">Highlands Coffee - Cộng H&#242;a </a>
                                </div>
                                <div class="address">
                                    <span>364 Cộng H&#242;a, P. 13</span>, <span>
                                        Quận T&#226;n B&#236;nh</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.2</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-cong-hoa/binh-luan"><span>13</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-le-loi">
                                    <img src="<?=base_url()?>static/images/634787959072944000_highlandcoffee_100.jpg" alt="634787959072944000_highlandcoffee.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-le-loi">Highlands Coffee - L&#234; Lợi </a>
                                </div>
                                <div class="address">
                                    <span>65 L&#234; Lợi, P. Bến Ngh&#233;</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.1</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-le-loi/binh-luan"><span>10</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-bieu">
                                    <img src="<?=base_url()?>static/images/foody-highlands-coffee-nguyen-bieu-tp-hcm_100.jpg" alt="foody-highlands-coffee-nguyen-bieu-tp-hcm.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-nguyen-bieu">Highlands Coffee - Nguyễn Biểu </a>
                                </div>
                                <div class="address">
                                    <span>Đường Nguyễn Biểu</span>, <span>
                                        Quận 5</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.1</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-nguyen-bieu/binh-luan"><span>8</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-nguyen-thi-minh-khai">
                                    <img src="<?=base_url()?>static/images/634787656695280000_highland5_100.jpg" alt="634787656695280000_highland5.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-nguyen-thi-minh-khai">Highlands Coffee - Nguyễn Thị Minh Khai </a>
                                </div>
                                <div class="address">
                                    <span>21 - 23 Nguyễn Thị Minh Khai, P. Bến Ngh&#233;</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>7.1</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-nguyen-thi-minh-khai/binh-luan"><span>3</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-pham-ngu-lao">
                                    <img src="<?=base_url()?>static/images/634788241224780000_highland_logo_100.jpg" alt="634788241224780000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-pham-ngu-lao">Highlands Coffee - Phạm Ngũ L&#227;o </a>
                                </div>
                                <div class="address">
                                    <span>187 Phạm Ngũ L&#227;o, P. Phạm Ngũ L&#227;o</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>6.9</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-pham-ngu-lao/binh-luan"><span>15</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-parkson-cantavil">
                                    <img src="<?=base_url()?>static/images/foody-highlands-coffee-parkson-cantavil-tp-hcm-140212092522_100.jpg" alt="foody-highlands-coffee-parkson-cantavil-tp-hcm-140212092522.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-parkson-cantavil">Highlands Coffee - Parkson Cantavil </a>
                                </div>
                                <div class="address">
                                    <span>Xa Lộ H&#224; Nội</span>, <span>
                                        Quận 2</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>6.5</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-parkson-cantavil/binh-luan"><span>2</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-intel">
                                    <img src="<?=base_url()?>static/images/foody-highlands-coffee-intel-tp-hcm_100.jpg" alt="foody-highlands-coffee-intel-tp-hcm.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-intel">Highlands Coffee - Intel </a>
                                </div>
                                <div class="address">
                                    <span>L&#244; I1 - I2a - I2b Đường D1, P. T&#226;n Ph&#250;</span>, <span>
                                        Quận 9</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>6.2</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-intel/binh-luan"><span>1</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-sai-gon-tower">
                                    <img src="<?=base_url()?>static/images/634788191733468000_highland_logo_100.jpg" alt="634788191733468000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-sai-gon-tower">Highlands Coffee - S&#224;i G&#242;n Tower </a>
                                </div>
                                <div class="address">
                                    <span>29 L&#234; Duẩn, P. Bến Ngh&#233;</span>, <span>
                                        Quận 1</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>5.9</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-sai-gon-tower/binh-luan"><span>2</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="microsite-brand-right-item" style="">
                            <div class="img">
                                <a href="/ho-chi-minh/highlands-coffee-dai-hoc-rmit">
                                    <img src="<?=base_url()?>static/images/634788334780788000_highland_logo_100.jpg" alt="634788334780788000_highland_logo.jpg" /></a></div>
                            <div class="micro-related-content" style="width:350px;">
                                <div class="ptitle" style="font-size:16px; padding:0 0 10px">
                                    <a href="/ho-chi-minh/highlands-coffee-dai-hoc-rmit">Highlands Coffee - Đại Học RMIT </a>
                                </div>
                                <div class="address">
                                    <span>702 Nguyễn Văn Linh, P. T&#226;n Phong</span>, <span>
                                        Quận 7</span>, <span>TP. HCM</span>
                                </div>
                                <div style="margin-top:5px;">
                                    <div class="point">
                                        <span>--</span>
                                    </div>
                                    <div class="review">
                                        <a href="/ho-chi-minh/highlands-coffee-dai-hoc-rmit/binh-luan"><span>0</span> bình luận</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
        </div>
    </div>




        <!--Lovers-->


        <!--End of Lovers-->




        <div>
                <div class="microsite-box-right" style="border-bottom:#ddd 1px solid;">
        <div class="microsite-box-heading-right" style="background:#f6f6f6;">
            <div class="title">
                Khu vực Q. 1
            </div>
        </div>
        <div class="microsite-box-content-right" style="padding:0;width:328px;">

            <div id="areas-block">
            <ul class="microsite-areas">
                    <li><a href="/ho-chi-minh/khu-vuc-cho-ben-thanh">Chợ Bến Th&#224;nh<span>396</span></a></li>
                    <li><a href="/ho-chi-minh/khu-vuc-pho-tay-pham-ngu-lao">Phố T&#226;y Phạm Ngũ L&#227;o<span>251</span></a></li>
                    <li><a href="/ho-chi-minh/khu-vuc-nha-hat-thanh-pho">Nh&#224; H&#225;t Th&#224;nh Phố<span>233</span></a></li>
                    <li><a href="/ho-chi-minh/khu-vuc-ben-bach-dang">Bến Bạch Đằng<span>209</span></a></li>
                    <li><a href="/ho-chi-minh/khu-vuc-cho-tan-dinh">Chợ T&#226;n Định<span>204</span></a></li>
                    <li><a href="/ho-chi-minh/khu-vuc-dai-truyen-hinh">Đ&#224;i Truyền H&#236;nh<span>190</span></a></li>
                    <li><a href="/ho-chi-minh/khu-vuc-cong-vien-le-van-tam">C&#244;ng vi&#234;n L&#234; Văn T&#225;m<span>150</span></a></li>
                    <li><a href="/ho-chi-minh/khu-vuc-vong-xoay-phu-dong">V&#242;ng Xoay Ph&#249; Đổng<span>143</span></a></li>
                    <li><a href="/ho-chi-minh/khu-vuc-cau-ong-lanh">Cầu &#212;ng L&#227;nh<span>130</span></a></li>
                    <li><a href="/ho-chi-minh/khu-vuc-benh-vien-nhi-dong-2">Bệnh Viện Nhi Đồng 2<span>114</span></a></li>
            </ul>
            </div>
            <div id="areas-show-all-block" class="viewmore">
                <a href="/ho-chi-minh/khu-vuc-quan-1" id="areas-show-all-link" >Xem tất cả</a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#areas-show-all-link').click(function () {
                $('#areas-block').css('height', 'auto');
                $('#areas-show-all-block').remove();
            });
        });
    </script>

        </div>



        <!--Start keywords category box-->

        <!--End of keywords category box-->

        <!-- Start Banner Ads -->
        <div class="clear"></div>
        <div id="microsite-right-banner-container" style="padding-top:14px">

<div style='padding:0 14px 2px 14px'>            <a href="http://www.foody.vn/ho-chi-minh/jj-s-brazilian-bbq/khuyen-mai/1059" title="JJ Brazil" target="_blank" onclick="_gaq.push(['_trackEvent', 'Banner trang MICROSITE_RIGHT', 'Click', 'JJ Brazil']);">
                <img src="<?=base_url()?>static/images/foody-microsite_RightBanner_300x120_JJBrazilian-635279186459341250.jpg" alt="JJ Brazil" title="JJ Brazil" width="300" height="120" />
            </a>
</div><div style='padding:0 14px 2px 14px'>            <a href="http://www.foody.vn/ho-chi-minh/am-thuc-thai-con-voi-vang-food-court-maximark-3-thang-2/khuyen-mai/1150" title="Con Voi Vàng" target="_blank" onclick="_gaq.push(['_trackEvent', 'Banner trang MICROSITE_RIGHT', 'Click', 'Con Voi Vàng']);">
                <img src="<?=base_url()?>static/images/foody-300x120_ConVoiVang-635321222347068750.jpg" alt="Con Voi Vàng" title="Con Voi Vàng" width="300" height="120" />
            </a>
</div><div style='padding:0 14px 2px 14px'>            <a href="http://www.foody.vn/foody-premium-party" title="Foody Event" target="_blank" onclick="_gaq.push(['_trackEvent', 'Banner trang MICROSITE_RIGHT', 'Click', 'Foody Event']);">
                <img src="<?=base_url()?>static/images/foody-300x120_FoodyParty-635331721615197500.jpg" alt="Foody Event" title="Foody Event" width="300" height="120" />
            </a>
</div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#microsite-right-banner-container').fixedAds({
                    top: 80,
                    edgeSelector: ".microsite-banner-edge"
                });
            });
        </script>
        <!-- End Banner Ads -->
    </div>

                            </td>
                        <!--End of Right content -->

                        </tr>
                </table>
                <div style="clear:both;">

<div class="microsite-banner-edge" style="width:1000px; background:#fff; float:left;margin-top:20px;">
        <div class="microsite-box-heading-right" style="width:970px">
            <div class="title">
                Địa điểm lân cận</div>
        </div>
        <div class="microsite-box-content-right" style="width:1000px;">
            <div class="microsite-right-item" style="width:460px;margin-right:10px;padding-top:10px; padding-bottom:10px;">
                <div class="img" style="width:70px;">
                    <a href="/ho-chi-minh/bida-56">
                    <img src="<?=base_url()?>static/images/foody-bida-56-tp-hcm_100.jpg" alt="Billiards 56 - Điện Bi&#234;n Phủ" style="height:89px;"/></a></div>
                <div class="micro-related-content" style="width:380px;position:relative;margin-top:2px;">
                    <div class="title">
                        <h2 ><a href="/ho-chi-minh/bida-56" style="font-size:14px;">Billiards 56 </a></h2></div>
                    <div class="address" style="white-space: nowrap; width: 315px; overflow-x: hidden;">
                        <span>56 Điện Bi&#234;n Phủ, P 17</span>, <span>
                            Quận 1</span>
                    </div>
                    <div style="font-size:11px;padding-bottom:5px;">
                        <a href="/ho-chi-minh/dia-diem-phong-cach-viet-nam">Việt Nam</a>
                    </div>
                    <div>
                        <div class="point" style="position:absolute; top:10px; right:5px;">
                            <span>--</span>
                        </div>
                        <div style="position: absolute;top: 40px;right: 18px;font-size: 11px;color:#777;">
                            1.878 m
                        </div>
                        <div class="review">

                            <a class="restaurant-reviews-link" resid="8422" href="javascript:void(0)"><span>0</span> bình luận</a> |
                            <a href="/ho-chi-minh/bida-56/album-anh">0 hình ảnh</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="microsite-right-item" style="width:460px;margin-right:10px;padding-top:10px; padding-bottom:10px;">
                <div class="img" style="width:70px;">
                    <a href="/ho-chi-minh/t-coffee-and-juice">
                    <img src="<?=base_url()?>static/images/foody-t-coffee-and-juice-tp-hcm-140108101243_100.jpg" alt="T Coffee And Juice - Cống Quỳnh" style="height:89px;"/></a></div>
                <div class="micro-related-content" style="width:380px;position:relative;margin-top:2px;">
                    <div class="title">
                        <h2 ><a href="/ho-chi-minh/t-coffee-and-juice" style="font-size:14px;">T Coffee And Juice </a></h2></div>
                    <div class="address" style="white-space: nowrap; width: 315px; overflow-x: hidden;">
                        <span>138 Cống Quỳnh</span>, <span>
                            Quận 1</span>
                    </div>
                    <div style="font-size:11px;padding-bottom:5px;">
                        <a href="/ho-chi-minh/dia-diem-phong-cach-viet-nam">Việt Nam</a>
                    </div>
                    <div>
                        <div class="point" style="position:absolute; top:10px; right:5px;">
                            <span>--</span>
                        </div>
                        <div style="position: absolute;top: 40px;right: 18px;font-size: 11px;color:#777;">
                            1.991 m
                        </div>
                        <div class="review">

                            <a class="restaurant-reviews-link" resid="47379" href="javascript:void(0)"><span>0</span> bình luận</a> |
                            <a href="/ho-chi-minh/t-coffee-and-juice/album-anh">0 hình ảnh</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="microsite-right-item" style="width:460px;margin-right:10px;padding-top:10px; padding-bottom:10px;">
                <div class="img" style="width:70px;">
                    <a href="/ho-chi-minh/pho-phuong-hoang-sa">
                    <img src="<?=base_url()?>static/images/foody-pho-phuong-hoang-sa-tp-hcm_100.jpg" alt="Phở Phượng - Ho&#224;ng Sa Quận 1" style="height:89px;"/></a></div>
                <div class="micro-related-content" style="width:380px;position:relative;margin-top:2px;">
                    <div class="title">
                        <h2 ><a href="/ho-chi-minh/pho-phuong-hoang-sa" style="font-size:14px;">Phở Phượng - Ho&#224;ng Sa </a></h2></div>
                    <div class="address" style="white-space: nowrap; width: 315px; overflow-x: hidden;">
                        <span>25 Ho&#224;ng Sa, P. Đa Kao</span>, <span>
                            Quận 1</span>
                    </div>
                    <div style="font-size:11px;padding-bottom:5px;">
                        <a href="/ho-chi-minh/dia-diem-phong-cach-viet-nam">Việt Nam</a>
                    </div>
                    <div>
                        <div class="point" style="position:absolute; top:10px; right:5px;">
                            <span>7.6</span>
                        </div>
                        <div style="position: absolute;top: 40px;right: 18px;font-size: 11px;color:#777;">
                            2.016 m
                        </div>
                        <div class="review">

                            <a class="restaurant-reviews-link" resid="20806" href="javascript:void(0)"><span>1</span> bình luận</a> |
                            <a href="/ho-chi-minh/pho-phuong-hoang-sa/album-anh">5 hình ảnh</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="microsite-right-item" style="width:460px;margin-right:10px;padding-top:10px; padding-bottom:10px;">
                <div class="img" style="width:70px;">
                    <a href="/ho-chi-minh/quan-an-3-cai-muong">
                    <img src="<?=base_url()?>static/images/foody-quan-an-3-cai-muong-tp-hcm_100.jpg" alt="Qu&#225;n ăn 3 C&#225;i Muỗng - Ho&#224;ng Sa Quận 1" style="height:89px;"/></a></div>
                <div class="micro-related-content" style="width:380px;position:relative;margin-top:2px;">
                    <div class="title">
                        <h2 ><a href="/ho-chi-minh/quan-an-3-cai-muong" style="font-size:14px;">Qu&#225;n ăn 3 C&#225;i Muỗng </a></h2></div>
                    <div class="address" style="white-space: nowrap; width: 315px; overflow-x: hidden;">
                        <span>9 Ho&#224;ng Sa, P. Đa Kao</span>, <span>
                            Quận 1</span>
                    </div>
                    <div style="font-size:11px;padding-bottom:5px;">
                        <a href="/ho-chi-minh/dia-diem-phong-cach-viet-nam">Việt Nam</a>
                    </div>
                    <div>
                        <div class="point" style="position:absolute; top:10px; right:5px;">
                            <span>--</span>
                        </div>
                        <div style="position: absolute;top: 40px;right: 18px;font-size: 11px;color:#777;">
                            2.016 m
                        </div>
                        <div class="review">

                            <a class="restaurant-reviews-link" resid="20825" href="javascript:void(0)"><span>0</span> bình luận</a> |
                            <a href="/ho-chi-minh/quan-an-3-cai-muong/album-anh">0 hình ảnh</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="microsite-right-item" style="width:460px;margin-right:10px;padding-top:10px; padding-bottom:10px;">
                <div class="img" style="width:70px;">
                    <a href="/ho-chi-minh/quan-thuan-an">
                    <img src="<?=base_url()?>static/images/foody-quan-thuan-an-tp-hcm_100.jpg" alt="Qu&#225;n Thuận An - Ho&#224;ng Sa Quận 1" style="height:89px;"/></a></div>
                <div class="micro-related-content" style="width:380px;position:relative;margin-top:2px;">
                    <div class="title">
                        <h2 ><a href="/ho-chi-minh/quan-thuan-an" style="font-size:14px;">Qu&#225;n Thuận An - Ho&#224;ng Sa </a></h2></div>
                    <div class="address" style="white-space: nowrap; width: 315px; overflow-x: hidden;">
                        <span>39 - 41 Ho&#224;ng Sa, P. Đa Kao</span>, <span>
                            Quận 1</span>
                    </div>
                    <div style="font-size:11px;padding-bottom:5px;">
                        <a href="/ho-chi-minh/dia-diem-phong-cach-viet-nam">Việt Nam</a>
                    </div>
                    <div>
                        <div class="point" style="position:absolute; top:10px; right:5px;">
                            <span>--</span>
                        </div>
                        <div style="position: absolute;top: 40px;right: 18px;font-size: 11px;color:#777;">
                            2.020 m
                        </div>
                        <div class="review">

                            <a class="restaurant-reviews-link" resid="20966" href="javascript:void(0)"><span>0</span> bình luận</a> |
                            <a href="/ho-chi-minh/quan-thuan-an/album-anh">0 hình ảnh</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="microsite-right-item" style="width:460px;margin-right:10px;padding-top:10px; padding-bottom:10px;">
                <div class="img" style="width:70px;">
                    <a href="/ho-chi-minh/may-restaurant">
                    <img src="<?=base_url()?>static/images/foody-may-restaurant-tp-hcm_100.jpg" alt="Nh&#224; h&#224;ng May - Tinh Hoa Ẩm Thực" style="height:89px;"/></a></div>
                <div class="micro-related-content" style="width:380px;position:relative;margin-top:2px;">
                    <div class="title">
                        <h2 ><a href="/ho-chi-minh/may-restaurant" style="font-size:14px;">May Restaurant </a></h2></div>
                    <div class="address" style="white-space: nowrap; width: 315px; overflow-x: hidden;">
                        <span>3/5 Ho&#224;ng Sa, P. Đa Kao</span>, <span>
                            Quận 1</span>
                    </div>
                    <div style="font-size:11px;padding-bottom:5px;">
                        <a href="/ho-chi-minh/dia-diem-phong-cach-viet-nam">Việt Nam</a>
                    </div>
                    <div>
                        <div class="point" style="position:absolute; top:10px; right:5px;">
                            <span>--</span>
                        </div>
                        <div style="position: absolute;top: 40px;right: 18px;font-size: 11px;color:#777;">
                            2.021 m
                        </div>
                        <div class="review">

                            <a class="restaurant-reviews-link" resid="8116" href="javascript:void(0)"><span>0</span> bình luận</a> |
                            <a href="/ho-chi-minh/may-restaurant/album-anh">4 hình ảnh</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="microsite-right-item" style="width:460px;margin-right:10px;padding-top:10px; padding-bottom:10px;">
                <div class="img" style="width:70px;">
                    <a href="/ho-chi-minh/the-lunch-lady-am-thuc-vung-mien">
                    <img src="<?=base_url()?>static/images/foody-chuong-gio-ngay-nang-moi-tp-hcm_100.jpg" alt="The Lunch Lady - Ẩm Thực V&#249;ng Miền" style="height:89px;"/></a></div>
                <div class="micro-related-content" style="width:380px;position:relative;margin-top:2px;">
                    <div class="title">
                        <h2 ><a href="/ho-chi-minh/the-lunch-lady-am-thuc-vung-mien" style="font-size:14px;">The Lunch Lady - Ẩm Thực V&#249;ng Miền </a></h2></div>
                    <div class="address" style="white-space: nowrap; width: 315px; overflow-x: hidden;">
                        <span>1A - B, L&#244; C, Chung Cư Nguyễn Đ&#236;nh Chiểu, P. Đa Kao</span>, <span>
                            Quận 1</span>
                    </div>
                    <div style="font-size:11px;padding-bottom:5px;">
                        <a href="/ho-chi-minh/dia-diem-phong-cach-viet-nam">Việt Nam</a>
                    </div>
                    <div>
                        <div class="point" style="position:absolute; top:10px; right:5px;">
                            <span>7.0</span>
                        </div>
                        <div style="position: absolute;top: 40px;right: 18px;font-size: 11px;color:#777;">
                            2.022 m
                        </div>
                        <div class="review">

                            <a class="restaurant-reviews-link" resid="7566" href="javascript:void(0)"><span>4</span> bình luận</a> |
                            <a href="/ho-chi-minh/the-lunch-lady-am-thuc-vung-mien/album-anh">57 hình ảnh</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="microsite-right-item" style="width:460px;margin-right:10px;padding-top:10px; padding-bottom:10px;">
                <div class="img" style="width:70px;">
                    <a href="/ho-chi-minh/quan-an-25">
                    <img src="<?=base_url()?>static/images/foody-quan-an-25-tp-hcm_100.jpg" alt="Qu&#225;n ăn 25 - Ho&#224;ng Sa Quận 1" style="height:89px;"/></a></div>
                <div class="micro-related-content" style="width:380px;position:relative;margin-top:2px;">
                    <div class="title">
                        <h2 ><a href="/ho-chi-minh/quan-an-25" style="font-size:14px;">Qu&#225;n Ăn 25 - Hải Sản Tươi Sống </a></h2></div>
                    <div class="address" style="white-space: nowrap; width: 315px; overflow-x: hidden;">
                        <span>23 Ho&#224;ng Sa, P. Đa Kao</span>, <span>
                            Quận 1</span>
                    </div>
                    <div style="font-size:11px;padding-bottom:5px;">
                        <a href="/ho-chi-minh/dia-diem-phong-cach-viet-nam">Việt Nam</a>
                    </div>
                    <div>
                        <div class="point" style="position:absolute; top:10px; right:5px;">
                            <span>6.7</span>
                        </div>
                        <div style="position: absolute;top: 40px;right: 18px;font-size: 11px;color:#777;">
                            2.022 m
                        </div>
                        <div class="review">

                            <a class="restaurant-reviews-link" resid="20852" href="javascript:void(0)"><span>3</span> bình luận</a> |
                            <a href="/ho-chi-minh/quan-an-25/album-anh">22 hình ảnh</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="microsite-right-item" style="width:460px;margin-right:10px;padding-top:10px; padding-bottom:10px;">
                <div class="img" style="width:70px;">
                    <a href="/ho-chi-minh/so-1-bo-song">
                    <img src="<?=base_url()?>static/images/foody-so-1-bo-song_100.jpg" alt="Số 1 Bờ S&#244;ng - Ẩm thực 3 Miền" style="height:89px;"/></a></div>
                <div class="micro-related-content" style="width:380px;position:relative;margin-top:2px;">
                    <div class="title">
                        <h2 ><a href="/ho-chi-minh/so-1-bo-song" style="font-size:14px;">Số 1 Bờ S&#244;ng - Ẩm thực 3 Miền </a></h2></div>
                    <div class="address" style="white-space: nowrap; width: 315px; overflow-x: hidden;">
                        <span>1 Nguyễn Thị Minh Khai, P. Bến Ngh&#233;</span>, <span>
                            Quận 1</span>
                    </div>
                    <div style="font-size:11px;padding-bottom:5px;">
                        <a href="/ho-chi-minh/dia-diem-phong-cach-viet-nam">Việt Nam</a>
                    </div>
                    <div>
                        <div class="point" style="position:absolute; top:10px; right:5px;">
                            <span>7.7</span>
                        </div>
                        <div style="position: absolute;top: 40px;right: 18px;font-size: 11px;color:#777;">
                            2.033 m
                        </div>
                        <div class="review">

                            <a class="restaurant-reviews-link" resid="1929" href="javascript:void(0)"><span>2</span> bình luận</a> |
                            <a href="/ho-chi-minh/so-1-bo-song/album-anh">12 hình ảnh</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="microsite-right-item" style="width:460px;margin-right:10px;padding-top:10px; padding-bottom:10px;">
                <div class="img" style="width:70px;">
                    <a href="/ho-chi-minh/thuan-tuan-mon-an-viet-nam">
                    <img src="<?=base_url()?>static/images/foody-c-tp-hcm-131021040010_100.jpg" alt="Thuận Tuấn - M&#243;n Ăn Việt Nam" style="height:89px;"/></a></div>
                <div class="micro-related-content" style="width:380px;position:relative;margin-top:2px;">
                    <div class="title">
                        <h2 ><a href="/ho-chi-minh/thuan-tuan-mon-an-viet-nam" style="font-size:14px;">Thuận Tuấn - M&#243;n Ăn Việt Nam </a></h2></div>
                    <div class="address" style="white-space: nowrap; width: 315px; overflow-x: hidden;">
                        <span>67 Ho&#224;ng Sa</span>, <span>
                            Quận 1</span>
                    </div>
                    <div style="font-size:11px;padding-bottom:5px;">
                        <a href="/ho-chi-minh/dia-diem-phong-cach-viet-nam">Việt Nam</a>
                    </div>
                    <div>
                        <div class="point" style="position:absolute; top:10px; right:5px;">
                            <span>7.0</span>
                        </div>
                        <div style="position: absolute;top: 40px;right: 18px;font-size: 11px;color:#777;">
                            2.043 m
                        </div>
                        <div class="review">

                            <a class="restaurant-reviews-link" resid="42356" href="javascript:void(0)"><span>1</span> bình luận</a> |
                            <a href="/ho-chi-minh/thuan-tuan-mon-an-viet-nam/album-anh">4 hình ảnh</a>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

                </div>
            </div>
            <!--End of micro content-->
        </div>
    </div>
</section>

    <!--End of Main section -->
