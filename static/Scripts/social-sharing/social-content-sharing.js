window.fbAsyncInit = function () {
    FB.init({
        appId: '395614663835338',//'345842972163893', // App ID
        channelUrl: 'http://www.foody.vn/channel.html', // Channel File
        status: true, // check login status
        cookie: true, // enable cookies to allow the server to access the session
        xfbml: true  // parse XFBML
    });

    // Additional initialization code here
};

// Load the SDK Asynchronously
(function (d) {
    var js, id = "facebook-jssdk", ref = d.getElementsByTagName("script")[0];
    if (d.getElementById(id)) { return; }
    js = d.createElement("script"); js.id = id; js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    ref.parentNode.insertBefore(js, ref);
}(document));

function loadSocialSharingPlugin(link) {
    var facebookTag = '<fb:like send="false" layout="button_count" href="' + link + '" width="120" show_faces="false"></fb:like>';
    var facebookEncodeTag = encodeURIComponent(facebookTag);

    var googleTag = '<div class="g-plusone" data-size="medium" href="' + link + '"></div><script type="text/javascript">(function () {var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);})();</script>';
    var googleEncodeTag = encodeURIComponent(googleTag);

    //var twitterTag = "<a href='https://twitter.com/share' class='twitter-share-button' data-url='" + link + "'>Tweet</a><script>(function () {!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');})();</script>";
    //var twitterEncodeTag = encodeURIComponent(twitterTag);

    var linkedinTag = '<script src="//platform.linkedin.com/in.js" type="text/javascript"></script><script type="IN/Share" data-counter="right" data-url="' + link + '"></script>';
    var linkedinEncodeTag = encodeURIComponent(linkedinTag);
    setTimeout(function () {
        jQuery('#facebook-like').append(decodeURIComponent(facebookEncodeTag));//'%3Cdiv%20class%3D%22fb-like%22%20data-send%3D%22false%22%20data-layout%3D%22button_count%22%20data-width%3D%2270%22%20data-show-faces%3D%22false%22%3E%3C%2Fdiv%3E'));//xfbml//%3Cfb%3Alike%20send%3D%22false%22%20show_faces%3D%22false%22%20width%3D%2270%22%20layout%3D%22button_count%22%3E%3C%2Ffb%3Alike%3E
        jQuery('#google-like').append(decodeURIComponent(googleEncodeTag));//'%3Cdiv%20class%3D%22g-plusone%22%20data-size%3D%22medium%22%3E%3C%2Fdiv%3E%3Cscript%20type%3D%22text%2Fjavascript%22%3E(function%20()%20%7Bvar%20po%20%3D%20document.createElement(%22script%22)%3B%20po.type%20%3D%20%22text%2Fjavascript%22%3B%20po.async%20%3D%20true%3Bpo.src%20%3D%20%22https%3A%2F%2Fapis.google.com%2Fjs%2Fplusone.js%22%3Bvar%20s%20%3D%20document.getElementsByTagName(%22script%22)%5B0%5D%3B%20s.parentNode.insertBefore(po%2C%20s)%3B%7D)()%3B%3C%2Fscript%3E'));
        //jQuery('#twitter-like').append(decodeURIComponent(twitterEncodeTag));//'%3Ca%20href%3D%22https%3A%2F%2Ftwitter.com%2Fshare%22%20class%3D%22twitter-share-button%22%20data-url%3D%22%40Request.Url.AbsoluteUri%22%20data-counturl%3D%22%40Request.Url.AbsoluteUri%22%3ETweet%3C%2Fa%3E%3Cscript%3E!function%20(d%2C%20s%2C%20id)%20%7B%20var%20js%2C%20fjs%20%3D%20d.getElementsByTagName(s)%5B0%5D%3B%20if%20(!d.getElementById(id))%20%7B%20js%20%3D%20d.createElement(s)%3B%20js.id%20%3D%20id%3B%20js.src%20%3D%20%22%2F%2Fplatform.twitter.com%2Fwidgets.js%22%3B%20fjs.parentNode.insertBefore(js%2C%20fjs)%3B%20%7D%20%7D%20(document%2C%20%22script%22%2C%20%22twitter-wjs%22)%3B%3C%2Fscript%3E'));
        jQuery('#linkedin-like').append(decodeURIComponent(linkedinEncodeTag));//'%3Cscript%20src%3D%22%2F%2Fplatform.linkedin.com%2Fin.js%22%20type%3D%22text%2Fjavascript%22%3E%3C%2Fscript%3E%3Cscript%20type%3D%22IN%2FShare%22%20data-counter%3D%22right%22%3E%3C%2Fscript%3E'));
        FB.XFBML.parse();
        //twttr.widgets.load();
    }, 3000);
}

function postToFacebookFeed(e) {

    // calling the API ...
    var obj = {
        method: 'feed',
        link: decodeURIComponent($(e).attr('shareUrl')),
        picture: '',
        name: decodeURIComponent($(e).attr('shareName')),
        caption: ''
    };

    function callback(response) {
        //document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
    }

    FB.ui(obj, null);    
}

// google plus
(function () {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();

function postToGoogleFeed(e) {
    var sharelink = 'https://plus.google.com/share?url=' + $(e).attr('shareUrl');
    window.open(sharelink, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
    return false;    
}

function postToTwitterFeed(e) {
    var title = $(e).attr('shareName');
    var sharelink = 'https://twitter.com/intent/tweet?url=' + $(e).attr('shareUrl')// + '&text=' + encodeURIComponent(reviewcontent);
    window.open(sharelink, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
    return false;
}

function postToLinkedInFeed(e) {
    var title = $(e).attr('shareName');
    var sharelink = 'http://www.linkedin.com/shareArticle?mini=true&url=' + $(e).attr('shareUrl') + '&title=' + title + '&source=Foody.vn'//+'&summary=' + encodeURIComponent(reviewcontent) ;
    window.open(sharelink, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
    return false;
}