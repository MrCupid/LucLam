<link type="text/css" rel="stylesheet" media="all" href="<?=base_url()?>static/style/css/ui-lightness/jquery-ui-micro.css"/>

<link rel="stylesheet" type="text/css" href="<?=base_url()?>static/Scripts/selectList/css/selectlist.css" />
<script src="<?=base_url()?>static/Scripts/public.restaurant.suggest.min.js?20140429" type="text/javascript"></script>

<section class="static-page">
    <div class="static-container">
        <div class="static-content">
            <div class="static-area" style="background: none; border: none;">
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('select#restype').selectList({ sort: true });
                        $('select#activeon').selectList({ sort: true });
                        $('select#facilities').selectList({ sort: true });
                        $('select#purpose').selectList({ sort: true });
                        $('select#dish').selectList({ sort: true });
                        $('select#cuisine').selectList({ sort: true });
                        $('select#LanguageIds').selectList({ sort: true });
                    });

                </script>

<form action="/them-dia-diem?Length=10" data-ajax="true" enctype="multipart/form-data" id="suggestRestaurantForm" method="post">                    <h1 class="static-headers">Thêm địa điểm</h1>
                    <div class="feedback-form">
                        <div class="feedback-notes">Những địa điểm yêu thích của bạn chưa có trên Lục lam? Chia sẻ với cộng đồng ngay!</div>
                        <div class="feedback-table" style="width:1000px;">
                            <div>
                                <section style="padding-top:0;">
                                    <div href="#" class="information-box">
                                        <div class="information-name">Thông tin cơ bản</div>
                                        <div class="information-content">
                                            <div class="box-information-normal">
                                                <div class="label">Tên địa điểm <span>*</span></div>
                                                <div class="details">
                                                    <input data-val="true" data-val-required="Nhập tên địa điểm" id="Name" name="Name" type="text" value="" />
                                                    <div style="padding:5px 0;">
                                                    <span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-information-normal">
                                                <div class="label">Địa chỉ <span>*</span></div>
                                                <div class="details">
                                                    <input data-val="true" data-val-required="Nhập địa chỉ" id="Address" name="Address" type="text" value="" />
                                                     <div style="padding:5px 0;">
                                                    <span class="field-validation-valid" data-valmsg-for="Address" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="box-information-normal">
                                                <div class="label">Tỉnh thành <span>*</span></div>
                                                <div class="details">

                                                    <select data-val="true" data-val-number="The field ProvinceId must be a number." data-val-required="&#39;Province Id&#39; must not be empty." id="ddlProvinces" name="ProvinceId"><option selected="selected" value="217">TP. HCM</option>
                                                                <option value="218">H&#224; Nội</option>
                                                                <option value="219">Đ&#224; Nẵng</option>
                                                                <option value="220">Hải Ph&#242;ng</option>
                                                                <option value="221">Cần Thơ</option>
                                                                <option value="222">Đồng Nai</option>
                                                                <option value="223">Vũng T&#224;u</option>
                                                                <option value="224">An Giang</option>
                                                                <option value="225">Bạc Li&#234;u</option>
                                                                <option value="226">Bắc Kạn</option>
                                                                <option value="227">Bắc Giang</option>
                                                                <option value="228">Bắc Ninh</option>
                                                                <option value="229">Bến Tre</option>
                                                                <option value="230">B&#236;nh Dương</option>
                                                                <option value="231">B&#236;nh Định</option>
                                                                <option value="232">B&#236;nh Phước</option>
                                                                <option value="233">B&#236;nh Thuận</option>
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
                                                                <option value="248">Kh&#225;nh Ho&#224;</option>
                                                                <option value="249">Ki&#234;n Giang</option>
                                                                <option value="250">Kon Tum</option>
                                                                <option value="251">Lai Ch&#226;u</option>
                                                                <option value="252">Lạng Sơn</option>
                                                                <option value="253">L&#224;o Cai</option>
                                                                <option value="254">L&#226;m Đồng</option>
                                                                <option value="255">Long An</option>
                                                                <option value="256">Nam Định</option>
                                                                <option value="257">Nghệ An</option>
                                                                <option value="258">Ninh B&#236;nh</option>
                                                                <option value="259">Ninh Thuận</option>
                                                                <option value="260">Ph&#250; Thọ</option>
                                                                <option value="261">Ph&#250; Y&#234;n</option>
                                                                <option value="262">Quảng B&#236;nh</option>
                                                                <option value="263">Quảng Nam</option>
                                                                <option value="264">Quảng Ng&#227;i</option>
                                                                <option value="265">Quảng Ninh</option>
                                                                <option value="266">Quảng Trị</option>
                                                                <option value="267">S&#243;c Trăng</option>
                                                                <option value="268">Sơn La</option>
                                                                <option value="269">T&#226;y Ninh</option>
                                                                <option value="270">Th&#225;i B&#236;nh</option>
                                                                <option value="271">Th&#225;i Nguy&#234;n</option>
                                                                <option value="272">Thanh Ho&#225;</option>
                                                                <option value="273">Huế</option>
                                                                <option value="274">Tiền Giang</option>
                                                                <option value="275">Tr&#224; Vinh</option>
                                                                <option value="276">Tuy&#234;n Quang</option>
                                                                <option value="277">Vĩnh Long</option>
                                                                <option value="278">Vĩnh Ph&#250;c</option>
                                                                <option value="279">Y&#234;n B&#225;i</option>
                                                                <option value="280">To&#224;n Quốc</option>
                                                                <option value="281">Đ&#224; Lạt</option>
                                                                </select>
                                                    <select data-val="true" data-val-number="The field DistrictId must be a number." data-val-required="&#39;District Id&#39; must not be empty." id="ddlDistricts" name="DistrictId"><option value="1">Quận 1</option>
<option value="4">Quận 2</option>
<option value="5">Quận 3</option>
<option value="6">Quận 4</option>
<option value="7">Quận 5</option>
<option value="8">Quận 6</option>
<option value="9">Quận 7</option>
<option value="10">Quận 8</option>
<option value="11">Quận 9</option>
<option value="12">Quận 10</option>
<option value="13">Quận 11</option>
<option value="14">Quận 12</option>
<option value="15">Quận B&#236;nh Thạnh</option>
<option value="16">Quận T&#226;n B&#236;nh</option>
<option value="17">Quận Ph&#250; Nhuận</option>
<option value="19">Quận T&#226;n Ph&#250;</option>
<option value="2">Quận G&#242; Vấp</option>
<option value="18">Quận B&#236;nh T&#226;n</option>
<option value="693">Quận Thủ Đức</option>
<option value="696">B&#236;nh Ch&#225;nh</option>
<option value="699">Nh&#224; B&#232;</option>
<option value="695">H&#243;c M&#244;n</option>
<option value="694">Củ Chi</option>
<option value="698">Cần Giờ</option>
</select>
                                                    <span class="field-validation-valid" data-valmsg-for="ProvinceId" data-valmsg-replace="true"></span>
                                                    <span class="field-validation-valid" data-valmsg-for="DistrictId" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="box-information-normal">
                                                <div class="label">Điện thoại</div>
                                                <div class="details">
                                                    <input id="Phone" name="Phone" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="box-information-normal">
                                                <div class="label">Email</div>
                                                <div class="details">
                                                    <input id="Email" name="Email" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="box-information-normal">
                                                <div class="label">Website</div>
                                                <div class="details">
                                                    <input id="Website" name="Website" type="text" value="" />
                                                </div>

                                            </div>
                                            <div class="box-information-normal">
                                                <div class="label">Mô tả địa điểm</div>
                                                <div class="details">
                                                    <textarea cols="20" id="Description" name="Description" rows="2">
</textarea>
                                                </div>

                                            </div> 
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div href="/Home/Dashboard" class="information-box">
                                        <div class="information-name">Thông tin khác</div>
                                        <div class="information-content">
                                            <div class="box-information-normal">
                                                <div class="label">Sức chứa</div>
                                                <div class="details">
                                                    <input data-val="true" data-val-number="The field CapacityAdult must be a number." id="CapacityAdult" name="CapacityAdult" onkeypress="return isNumberKey(event)" type="text" value="" />
                                                </div>

                                            </div>
                                            <div class="box-information-normal">
                                                <div class="label">Giờ mở cửa</div>
                                                <div class="details">
                                                    <input id="OpenTime" name="OpenTime" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="box-information-normal">
                                                <div class="label">Giờ đóng cửa</div>
                                                <div class="details">
                                                    <input id="CloseTime" name="CloseTime" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="box-information-normal">
                                                <div class="label">Giá thấp nhất</div>
                                                <div class="details">
                                                    <input data-val="true" data-val-number="The field PriceMin must be a number." id="PriceMin" name="PriceMin" onkeypress="return isNumberKey(event)" type="text" value="" />
                                                </div>

                                            </div>
                                            <div class="box-information-normal">
                                                <div class="label">Giá cao nhất</div>
                                                <div class="details">
                                                    <input data-val="true" data-val-number="The field PriceMax must be a number." id="PriceMax" name="PriceMax" onkeypress="return isNumberKey(event)" type="text" value="" />
                                                </div>

                                            </div>
                                        </div>
                                </section>

                                <section>
                                    <div href="/Home/Dashboard" class="information-box">
                                        <div class="information-name">Phân loại danh mục</div>
                                        <div class="information-content">
                                            <div class="box-information-normal">
                                                <div class="label">Loại hình</div>
                                                <div class="details">
                                                    <select id="restype" name="CategoryIds" multiple="multiple">
                                                        <option value="11">Ăn vặt</option>
                                                        <option value="1">Nh&#224; h&#224;ng</option>
                                                        <option value="2">Caf&#233;/Kem</option>
                                                        <option value="3">Qu&#225;n ăn</option>
                                                        <option value="4">Bar/Pub</option>
                                                        <option value="5">Karaoke</option>
                                                        <option value="8">Billiards</option>
                                                        <option value="9">Tiệc cưới/Hội nghị</option>
                                                        <option value="10">Si&#234;u thị/Cửa h&#224;ng</option>
                                                        <option value="13">Giải tr&#237;</option>
                                                        <option value="15">Kh&#225;ch sạn</option>
                                                        </select>
                                                </div>

                                            </div>
                                            <div class="box-information-normal">
                                                <div class="label">Hoạt động</div>
                                                <div class="details">
                                                    <select id="activeon" name="DiningIds" multiple="multiple"><option value="1">Buổi s&#225;ng</option>
                                                    <option value="2">Buổi  trưa</option>
                                                    <option value="3">Buổi xế</option>
                                                    <option value="4">Buổi  tối</option>
                                                    <option value="5">Buổi  khuya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="box-information-normal">
                                                <div class="label">Tiện nghi</div>
                                                <div class="details">
                                                    <select id="facilities" name="PropertyIds" multiple="multiple"><option value="2">N&#234;n đặt trước</option>
                                                        <option value="23">C&#243; hồ bơi</option>
                                                        <option value="3">C&#243; giao h&#224;ng</option>
                                                        <option value="4">Cho mua về</option>
                                                        <option value="6">C&#243; wifi</option>
                                                        <option value="7">C&#243; ph&#242;ng ri&#234;ng</option>
                                                        <option value="5">C&#243; b&#224;n ngo&#224;i trời</option>
                                                        <option value="1">C&#243; chỗ chơi cho trẻ em</option>
                                                        <option value="10">C&#243; m&#225;y lạnh</option>
                                                        <option value="11">Trả bằng thẻ</option>
                                                        <option value="15">Giữ xe m&#225;y miễn ph&#237;</option>
                                                        <option value="8">C&#243; karaoke</option>
                                                        <option value="9">Tip cho nh&#226;n vi&#234;n</option>
                                                        <option value="14">C&#243; chỗ đậu &#244;t&#244;</option>
                                                        <option value="13">C&#243; khu vực h&#250;t thuốc</option>
                                                        <option value="19">C&#243; thẻ th&#224;nh vi&#234;n</option>
                                                        <option value="20">C&#243; xuất h&#243;a đơn đỏ</option>
                                                        <option value="22">C&#243; l&#242; sưởi</option>
                                                        <option value="18">C&#243; hỗ trợ hội thảo</option>
                                                        <option value="17">C&#243; hỗ trợ người khuyết tật</option>
                                                        <option value="16">C&#243; chiếu b&#243;ng đ&#225;?</option>
                                                        <option value="12">C&#243; nhạc sống</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="box-information-normal">
                                                <div class="label">Phù hợp mục đích</div>
                                                <div class="details">
                                                    <select id="purpose" name="PurposeIds" multiple="multiple"><option value="14">Tổ chức tiệc cưới</option>
                                                        <option value="1">Đ&#227;i tiệc</option>
                                                        <option value="2">Ăn gia đ&#236;nh</option>
                                                        <option value="3">Hẹn h&#242;</option>
                                                        <option value="4">Uống bia - Nhậu</option>
                                                        <option value="5">Họp nh&#243;m</option>
                                                        <option value="6">Tiếp kh&#225;ch</option>
                                                        <option value="7">H&#225;t h&#242;</option>
                                                        <option value="8">Ăn chay</option>
                                                        <option value="9">Buffet</option>
                                                        <option value="10">Giao tận nơi</option>
                                                        <option value="11">Tiệc ngo&#224;i trời</option>
                                                        <option value="12">Thư gi&#227;n</option>
                                                        <option value="13">Xem phim HD</option>
                                                        <option value="15">BBQ - M&#243;n Nướng</option>
                                                        <option value="16">Ăn vặt</option>
                                                        <option value="17">Tiệc tận nơi</option>
                                                        <option value="18">Ngắm cảnh</option>
                                                        <option value="19">Takeaway - Mang về</option>
                                                        <option value="20">Du lịch</option>
                                                        <option value="21">Nghe nhạc</option>
                                                        <option value="22">Đọc s&#225;ch - học b&#224;i</option>
                                                        <option value="23">Tiếp kh&#225;ch sang trọng</option>
                                                        <option value="24">D&#224;nh cho Nam giới</option>
                                                        <option value="26">Ăn b&#236;nh d&#226;n - Qu&#225;n C&#243;c</option>
                                                        <option value="27">Ăn Fastfood</option>
                                                        <option value="28">Tổ chức hội thảo</option>
                                                        <option value="29">Chụp h&#236;nh - Quay phim</option>
                                                        <option value="34">D&#227; Ngoại</option>
                                                        <option value="35">Mua sắm</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="box-information-normal">
                                                <div class="label">Món đặc trưng</div>
                                                <div class="details">
                                                    <select id="dish" name="DishCategoryIds" multiple="multiple"><option value="1">Thịt G&#224;</option>
                                                <option value="2">Thịt B&#242;</option>
                                                <option value="3">Hải sản</option>
                                                <option value="4">M&#243;n nước</option>
                                                <option value="5">Lẩu</option>
                                                <option value="6">Sushi &amp; Sashimi</option>
                                                <option value="7">Pizza &amp; Pasta</option>
                                                <option value="8">B&#225;nh - Kẹo</option>
                                                <option value="9">Caf&#233; - Kem</option>
                                                <option value="10">Sinh tố - Nước &#233;p</option>
                                                <option value="11">Dimsum</option>
                                                <option value="12">M&#243;n chay</option>
                                                <option value="13">Đặc sản rừng</option>
                                                <option value="14">M&#243;n Huế</option>
                                                <option value="15">Đặc sản v&#249;ng</option>
                                                <option value="16">Cơm văn ph&#242;ng</option>
                                                <option value="17">Home-made</option>
                                                <option value="18">Ăn vặt - Ăn nhẹ</option>
                                                <option value="19">Cơm</option>
                                                <option value="20">B&#225;nh x&#232;o</option>
                                                <option value="21">Phở</option>
                                                <option value="22">B&#250;n</option>
                                                <option value="23">Hủ tiếu</option>
                                                <option value="24">M&#236;</option>
                                                <option value="25">B&#225;nh canh</option>
                                                <option value="26">Miến</option>
                                                <option value="27">B&#225;nh m&#236;</option>
                                                <option value="28">X&#244;i</option>
                                                <option value="29">Ch&#232;</option>
                                                <option value="30">B&#225;nh bao</option>
                                                <option value="31">Thịt Heo</option>
                                                <option value="32">Ch&#225;o</option>
                                                <option value="33">S&#250;p</option>
                                                <option value="35">Rượu vang</option>
                                                <option value="36">Thức uống</option>
                                                <option value="37">Bia</option>
                                                <option value="38">Nước ngọt</option>
                                                <option value="39">Tr&#225;i c&#226;y</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div id="suggest-success" class="submit-success"
                                    style="float: left; margin-top: 27px; font-weight: bold; display: none;">
                                    <span style="color: Green">Thêm địa điểm thành công</span><br />
                                    <span style="color: Green">Địa điểm sẽ được Admin duyệt trước khi đăng lên, thời gian duyệt trong vòng 48 giờ!</span>
                                </div>
                                <div id="suggest-fail" class="submit-fail"
                                    style="float: left; margin-top: 36px; font-weight: bold; display: none;">
                                    <span style="color: red">Thêm địa điểm thất bại, vui lòng thử lại</span>
                                </div>
                                <div style="clear: both; float: left; margin-top: 20px;">
                                    <button style="width: 660px; font-size: 20px; padding: 10px; color: #333; text-shadow: 0 1px 1px #FFFFFF; border: #F4890E 1px solid;">+ thêm địa điểm</button>
                                    <div id="restaurant-saving" style="display: none; float: left; margin-top: 27px;">
                                        <img src="<?=base_url();?>static/Style/images/icons/loading.gif" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
</form>            </div>
        </div>
    </div>
    </div>
    </section>