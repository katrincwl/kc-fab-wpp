jQuery(document).ready(function(){
    var the_url = window.location.href;

    var default_json;
    var fb_json;
    var google_json;
    var twitter_json;

    default_json = new Object();
    default_json.bgcolor = '#03A9F4';
    default_json.icon = '+';

    var links = new Array();
    links.push(default_json);

    /*go to social page*/
    if (social_links.social_action == 'my_social_page') {
        if (social_links.fb_url){
            fb_json = new Object();
            fb_json.url = social_links.fb_url;
            fb_json.bgcolor = '#3B5998';
            fb_json.color = '#fff';
            fb_json.icon = "<i class='fa fa-facebook'></i>";
            fb_json.target = "_blank";
            links.push(fb_json);
        }
        if (social_links.google_url){
            google_json = new Object();
            google_json.url = social_links.google_url;
            google_json.bgcolor = '#DB4A39';
            google_json.color = '#fff';
            google_json.icon = "<i class='fa fa-google-plus'></i>";
            google_json.target = "_blank";
            links.push(google_json);
        }
        if (social_links.twitter_url){
            twitter_json = new Object();
            twitter_json.url = social_links.twitter_url;
            twitter_json.bgcolor = '#00ACEE';
            twitter_json.color = '#fff';
            twitter_json.icon = "<i class='fa fa-twitter'></i>";
            twitter_json.target = "_blank";
            links.push(twitter_json);
        }
    }
    /*share to social network*/
    else{
        /*fb*/
        fb_json = new Object();
        fb_json.url = "http://www.facebook.com/sharer/sharer.php?s=100&p[url]="+the_url;
        fb_json.bgcolor = '#3B5998';
        fb_json.color = '#fff';
        fb_json.icon = "<i class='fa fa-facebook'></i>";
        fb_json.target = "_blank";
        links.push(fb_json);
        /*google*/
        google_json = new Object();
        google_json.url = "https://plus.google.com/share?url="+the_url;
        google_json.bgcolor = '#DB4A39';
        google_json.color = '#fff';
        google_json.icon = "<i class='fa fa-google-plus'></i>";
        google_json.target = "_blank";
        links.push(google_json);
        /*twitter*/
        twitter_json = new Object();
        twitter_json.url = "https://twitter.com/intent/tweet?url="+the_url;
        twitter_json.bgcolor = '#00ACEE';
        twitter_json.color = '#fff';
        twitter_json.icon = "<i class='fa fa-twitter'></i>";
        twitter_json.target = "_blank";
        links.push(twitter_json);
    }


    var linkArray = JSON.parse(JSON.stringify(links));
    jQuery('.kc_fab_wrapper').kc_fab(linkArray);
});