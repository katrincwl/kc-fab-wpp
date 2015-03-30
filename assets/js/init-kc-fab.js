jQuery(document).ready(function(){
    var the_url = window.location.href;
    var links = [
        {
            "bgcolor":"#03A9F4",
            "icon":"+"
        },
        {
            "url":"https://plus.google.com/share?url="+the_url,
            "bgcolor":"#DB4A39",
            "color":"#fffff",
            "icon":"<i class='fa fa-google-plus'></i>",
            "target":"_blank"
        },
        {
            "url":"https://twitter.com/intent/tweet?url="+the_url,
            "bgcolor":"#00ACEE",
            "color":"#fffff",
            "icon":"<i class='fa fa-twitter'></i>",
            "target":"_blank"
        },
        {
            "url":"http://www.facebook.com/sharer/sharer.php?s=100&p[url]="+the_url,
            "bgcolor":"#3B5998",
            "color":"#fffff",
            "icon":"<i class='fa fa-facebook'></i>",
            "target":"_blank"
        }
    ]
    jQuery('.kc_fab_wrapper').kc_fab(links);
});