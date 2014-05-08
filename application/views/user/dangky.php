<!--Start of Main section -->
<section class="register-maincontent">
    <div class="left">
        <img src="<?=base_url()?>static/style/images/test/register-image.png" />
    </div>
    <div class="right">
        <div class="register-form-head">
            <div class="register-title">
                Đăng ký tài khoản</div>
            <div class="register-register-link">
                <a href="/dang-nhap">Đăng nhập</a></div>
        </div>
        <div class="register-inputs">
<form action="/dang-ky" id="registerForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="XFpt_r4n69qus1h5OA941UqkqdcdIQ6avFB2yqoKzUaElfYf2BStaqAu5L6q5kyW8q1QhS4IqZHBKr5kVIQyzIOInO98qvHMWMgTxU3wUs4KX9HJNjkih7mMtu36l08K_sITDilpzWlF2xq8g93u3m481KU_q1g10U1Oe9n3WpM1" />                <table border="0">
                    <tr>
                        <td colspan="3">

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tên:
                        </td>
                        <td>
                            <div class="register_bg">
                                <input data-val="true" data-val-required="Nhập tên" id="FirstName" name="FirstName" type="text" value="" />
                            </div>

                        </td>
                        <td id="firstNameValid">
                            <img style="display:none" alt="icon" class="registerStatus" src="<?=base_url()?>static/style/images/icons/correct-icon.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Họ:
                        </td>
                        <td>
                            <div class="register_bg">
                                <input data-val="true" data-val-required="Nhập họ" id="LastName" name="LastName" type="text" value="" />
                            </div>

                        </td>
                        <td id="lastNameValid">
                            <img style="display:none" alt="icon" class="registerStatus" src="<?=base_url()?>static/style/images/icons/correct-icon.png" />
                        </td>
                    </tr>
                    <tr>
                        <td width="150">
                            Email:
                        </td>
                        <td>
                         <div class="register_bg">
                            <input data-val="true" data-val-email="Email sai định dạng" data-val-required="Nhập email" id="register_email" name="Email" type="text" value="" />
                            </div>

                        </td>
                        <td id='emailValid'>
                            <img style="display:none" alt="icon" class="registerStatus" src="<?=base_url()?>static/style/images/icons/correct-icon.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mật khẩu:
                        </td>
                        <td> <div class="register_bg"><input data-val="true" data-val-equalto="Mật khẩu không khớp" data-val-equalto-other="*.ConfirmPassword" data-val-length="Mật khẩu phải có ít nhất 3 kí tự" data-val-length-max="999" data-val-length-min="3" data-val-required="Nhập mật khẩu" id="register_pass" name="Password" type="password" /></div>

                        </td>
                        <td id="passwordValid">
                            <img style="display:none" alt="icon" class="registerStatus" src="<?=base_url()?>static/style/images/icons/uncorrect-icon.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                             Nhập lại mật khẩu:
                        </td>
                        <td> <div class="register_bg">
                            <input data-val="true" data-val-required="Nhập lại mật khẩu" id="ConfirmPassword" name="ConfirmPassword" type="password" /></div>

                        </td>
                        <td id="confirmPasswordValid">
                            <img style="display:none" alt="icon" class="registerStatus" src="<?=base_url()?>static/style/images/icons/correct-icon.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td align="left">
                            <div style="padding: 8px 0;">
                                <input checked="checked" data-val="true" data-val-required="&#39;Term And Condition&#39; must not be empty." id="TermAndCondition" name="TermAndCondition" style="width:20px; border:none; background:none; height:15px;" type="checkbox" value="true" /><input name="TermAndCondition" type="hidden" value="false" />

                               Tôi đồng ý với các <a href="/dieu-khoan-su-dung" target="_blank">quy định</a> của Lục lam</div>
                               </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <button class="registerbutton" type="submit">Đăng ký
                            </button>
                        </td>
                        <td>
                        </td>
                    </tr>
                </table>
</form>        </div>
    </div>
</section>
<script type="text/javascript">
    $(function () {
        $('img.registerStatus').tipsy({ gravity: 'w' });
    });

    $('#register_email').blur(function () {
        checkEmail(this.value);
    });

    $('#FirstName').blur(function () {
        checkFirstName(this.value);
    });

    $('#LastName').blur(function () {
        checkLastName(this.value);
    });

    $('#register_pass').blur(function () {
        checkPassword(this.value);
        checkConfirmPassword($('#ConfirmPassword').val(), $('#register_pass').val());
    });

    $('#ConfirmPassword').blur(function () {
        checkConfirmPassword(this.value, $('#register_pass').val());
    });

    function checkFirstName(input) {
        if (!input || input.length == 0 || $.trim(input) == '') {
            updateValid('firstName', false, 'Nhập tên');
            return false;
        }
        if ($.trim(input).length < 2) {
            updateValid('firstName', false, 'Tên phải có ít nhất 2 kí tự');
            return false;
        }

        if (!/^([a-zA-Z ]|[\u00C0-\u1EF9])+([\w\d-_]|[\u00C0-\u1EF9]|[\s]+)*$/.test(input)) {//
            updateValid('firstName', false, 'Tên không được chứa kí tự đặc biệt');
            return false;
        }

        updateValid('firstName', true, 'Tên hợp lệ');
        return true;
    }

    function checkLastName(input) {
        if (!input || input.length == 0 || $.trim(input) == '') {
            updateValid('lastName', false, 'Nhập họ');
            return false;
        }

        if ($.trim(input).length < 2) {
            updateValid('lastName', false, 'Họ phải có ít nhất 2 kí tự');
            return false;
        }

        if (!/^([a-zA-Z ]|[\u00C0-\u1EF9])+([\w\d-_]|[\u00C0-\u1EF9]|[\s]+)*$/.test(input)) {
            updateValid('lastName', false, 'Họ không được chứa kí tự đặc biệt');
            return false;
        }

        updateValid('lastName', true, 'Họ hợp lệ');
        return true;

    }

    function checkPassword(input) {
        if (!input || input.length == 0) {
            updateValid('password', false, 'Nhập mật khẩu');
            return false;
        }

        if (input.length < 4 || input.length > 20) {
            updateValid('password', false, 'Mật khẩu phải từ 4 đến 20 kí tự');
            return false;
        }

        updateValid('password', true, 'Mật khẩu hợp lệ');
        checkConfirmPassword($('#ConfirmPassword').val(), $('#Password').val());
        return true;
    }

    function checkConfirmPassword(input, password) {
        if (!input || input.length == 0) {
            updateValid('confirmPassword', false, 'Nhập lại mật khẩu');
            return false;
        }

        if (input !== password) {
            updateValid('confirmPassword', false, 'Mật khẩu không khớp');
            return false;
        }

        updateValid('confirmPassword', true, 'Xác nhận mật khẩu hợp lệ');
        return true;
    }

    function checkTermAndCondition() {
        if ($('#TermAndCondition').is(':checked'))
            return true;
        return false;
    }

    var isValidMail = false;
    function checkEmail(input) {
        if (!input || input.length == 0 || $.trim(input) == '') {
            updateValid('email', false, 'Nhập email');
            isValidMail = false;
            return false;
        }
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; ///^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/;
        if (!(emailPattern.test(input))) {
            updateValid('email', false, 'Email không hợp lệ');
            isValidMail = false;
            return false;
        }

        showWaiting('email');
        $.post(
                '/Account/IsValidField',
                {
                    fieldType: 'email',
                    fieldName: 'Email',
                    fieldValue: input
                },
                function (data) {
                    hideWaiting('email');
                    updateValid('email', data.isValid, data.message);
                    isValidMail = data.isValid;
                }
            );
    }

    function hideWaiting() {

    }

    function showWaiting(fieldType) {

    }

    function updateValid(fieldType, isValid, message) {
        var correctIconSrc = '<?=base_url()?>static/style/images/icons/correct-icon.png';
        var incorrectIconSrc = '<?=base_url()?>static/style/images/icons/uncorrect-icon.png';
        var validElement = '';
        switch (fieldType) {
            case 'email':
                validElement = 'emailValid';
                break;
            case 'firstName':
                validElement = 'firstNameValid';
                break;
            case 'lastName':
                validElement = 'lastNameValid';
                break;
            case 'password':
                validElement = 'passwordValid';
                break;
            case 'confirmPassword':
                validElement = 'confirmPasswordValid';
                break;
        }
        var validImg = $('#' + validElement + ' img');
        //validImg.attr('title', message);
        validImg.attr('original-title', message);
        if (isValid)
            validImg.attr('src', correctIconSrc);
        else
            validImg.attr('src', incorrectIconSrc);
        validImg.fadeIn();
    }

    $('#registerForm').submit(function (e) {
        var isValidFirstName = checkFirstName($('#FirstName').val())
        var isValidLastName = checkLastName($('#LastName').val())
        var isValidEmail = checkEmail($('#register_email').val())
        var isValidPassword = checkPassword($('#register_pass').val())
        var isValidConfirmPassword = checkConfirmPassword($('#register_pass').val(), $('#ConfirmPassword').val())

        if (isValidFirstName && isValidLastName && isValidMail && isValidPassword && isValidConfirmPassword) {
            if (!checkTermAndCondition()) {
                alert('Bạn phải đồng ý với điều khoản sử dụng')
                return false;
            }
        }
        else
            return false;

        return true;
    })
</script>
<!--End of Main section -->
