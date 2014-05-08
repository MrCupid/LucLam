
function SwitchToSection(section) {
    $('section.switchable').hide();
    $(section).show();
}
function DisableBody(showloader, loader, container) {
    var msgDiv;
    var loaderId = loader ? loader : "disableBody";
    if ($('#' + loaderId).length > 0) {
        msgDiv = $('#' + loaderId);
    }
    else {
        msgDiv = $('<div id="' + loaderId + '" class="disableBody disable-section overlay" />');
        if (showloader)
            msgDiv.append('<img src="/Content/images/icons/ajax-loader.gif" alt="loading..." style="position:absolute; left:180px;top:12px;"/>');
        var containerId = container ? container : 'body';

        $('#' + containerId).append(msgDiv);
    }
    msgDiv.show();
}
function EnableBody(loader) {
    var loaderId = loader ? loader : "disableBody";
    var msgDiv = $('#' + loaderId);
    msgDiv.hide();
}

function ShowErrorMessage(message) {
    var msgDiv;
    if ($('.fodMsgContainer').length > 0) {
        msgDiv = $('#fodMsgContainer');
    }
    else {
        msgDiv = $('<div id="fodMsgContainer" class="fodMsgContainer" />');
        $('body').append(msgDiv);
    }
    msgDiv.html('<div id="fodMsgContent" class="msg-error"><p>' + message + '</p></div>');

    HideErrorMessage();
    msgDiv.fadeIn('fast', function() {
        $(document).bind('click.Message', function() {
            HideErrorMessage();
            $(document).unbind('click.Message');
        });
        $('#fodMsgContent').on('click', function() {
            msgDiv.fadeOut('fast');
        });

    });
    //msgDiv.slideDown('fast', function () {

    //    $(document).bind('click.Message', function () {
    //        HideErrorMessage();
    //        $(document).unbind('click.Message');
    //    });

    //    $('#fodMsgContent').on('click', function() {
    //        msgDiv.slideUp('fast', function() {
    //        });
    //        return false;
    //    });
    //    return false;
    //});
    return false;
}

function HideErrorMessage() {
    $(document).unbind('click.Message');
    var msgDiv = $('#fodMsgContainer');
    msgDiv.hide();
    return false;
}
function ShowCustomErrorMessage(message) {
    var msgDiv = $('#msgErrorContainer');
    msgDiv.show().html(message);
    return false;
}
function HideCustomErrorMessage() {
    var msgDiv = $('#msgErrorContainer');
    msgDiv.hide().html('');
}

Number.prototype.ToMoney = function (decimals, decimal_sep, thousands_sep) {

    var n = this,
        c = isNaN(decimals) ? 0 : Math.abs(decimals), //if decimal is zero we must take it, it means user does not want to show any decimal
        d = decimal_sep || '.', //if no decimal separator is passed we use the dot as default decimal separator (we MUST use a decimal separator)

        /*
   according to [http://stackoverflow.com/questions/411352/how-best-to-determine-if-an-argument-is-not-sent-to-the-javascript-function]
   the fastest way to check for not defined parameter is to use typeof value === 'undefined' 
   rather than doing value === undefined.
   */
        t = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep, //if you don't want to use a thousands separator you can pass empty string as thousands_sep value

        sign = (n < 0) ? '-' : '',
        //extracting the absolute value of the integer part of the number and converting to string
        i = parseInt(n = Math.abs(n).toFixed(c)) + '',
        j = ((j = i.length) > 3) ? j % 3 : 0;
    return sign + (j ? i.substr(0, j) + t : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : '');
};

Number.prototype.toFormatTime = function () {

    var n = this;
    var hour = Math.floor(n / 3600);

    var min = hour > 0 ? Math.floor((n % 3600) / 60) : Math.floor(n / 60);
    var sec = min > 0 ? Math.floor(((n % 3600) % 60)) : Math.floor(n);
    return (hour > 9 ? hour : "0" + hour) + ":" + (min > 9 ? min : "0" + min) + ":" + (sec > 9 ? sec : "0" + sec);
};
Number.prototype.toDecimal = function (digit) {
    var n = this;
    var module = parseInt(n);
    if (n % module == 0)
        return n + ".0";
    return n;
};

function ResizeWindow() {
        var $w2 = $(window).width();
        var $viewW = $("#body").width();
        var limitInterval =700;
        if ($w2 <= limitInterval) {
            $("#navPanelContainer").hide();
            $('#navToggle').toggleClass("min", true);
        }
}

$(function () {
    ResizeWindow();
    $('#navToggle').on("click", function () {
        $(this).toggleClass("min");
        $("#navPanelContainer").toggle();
    });
    $(window).bind("resize.panel", ResizeWindow);

});
String.prototype.toLocaleDateString = function () {
    var d = this;
    if (d != null && d.length < 6)
        return "";
    var date = new Date(parseInt(d.substr(6)));
    return date.getDate() + "/" + ((date.getMonth() + 1) > 9 ? (date.getMonth() + 1) : "0" + (date.getMonth() + 1)) + "/" + date.getFullYear() + " " + date.getHours() + ":" + date.getMinutes();
};
String.prototype.toLocaleShortDateString = function () {
    var d = this;
    if (d!=null&&d.length < 6)
        return "";
    var date = new Date(parseInt(d.substr(6)));
    return date.getDate() + "/" + ((date.getMonth() + 1) > 9 ? (date.getMonth() + 1) : "0" + (date.getMonth() + 1)) + "/" + date.getFullYear();
};
// Utilities

function ValidUrl(str) {
    var pattern = new RegExp('^(https?:\\/\\/)?' + // protocol
    '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
    '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
    '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
    '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator
    if (!pattern.test(str)) {
        return false;
    } else {
        return true;
    }
}

// cookies
function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
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

function eraseCookie(name) {
    createCookie(name, "", -1);
}