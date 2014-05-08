<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?=lang($page)?> | Lục lam</title>

        <link rel="SHORTCUT ICON" href="<?=base_url();?>static/style/images/icons/favicon.ico" />
        <link href="<?=base_url();?>static/style/css/public.main.min.css" rel="stylesheet" />
        <link href="<?=base_url();?>static/style/css/public.micro.min.css" rel="stylesheet" />
        <!--[if IE]><link href="style/css/public.main.ie.min.css?" rel="stylesheet" /><![endif]-->
        <!--[if IE 7]><link href="style/css/ie7.css" rel="stylesheet" /><![endif]-->

        <link href="<?=base_url();?>static/style/css/public.home.min.css" rel="stylesheet" />
        <!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0023_vietnamese.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
        <!--[if IE]><script type="text/javascript" language="javascript" src="scripts/html5.js"></script><![endif]-->

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="<?=base_url();?>static/Scripts/public.resources.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>static/Scripts/public.core.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>static/Scripts/public.review.micro.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>static/Scripts/wishlist/public.foody.wishlist.context.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function () {
            $('.disableSection').live('cut copy paste', function (event) {
            // event.preventDefault();
            });
            CommonHelper.GetSelectedTopMenu("Home", "Index");
            });
        </script>
    </head>