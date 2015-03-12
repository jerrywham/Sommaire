$("aside[role=complementary]").prepend("<ul class=\"sommaire\"><li class=\"titre-sommaire\">Sommaire</li></ul>");
$(".article-content h1, .article-content h2").each(function(i) {
    $(".sommaire").css({"display":"block","margin-top":"10px"});
    var current = $(this);
    current.attr("id", "title" + i);
    $(".sommaire").append("<li><a id='link" + i + "' href='#title" +
        i + "' title='" + current.html() + "'>" +
        current.html() + "</a></li>");
});
$(".sommaire li a").click(function(event){
    event.preventDefault();
    var full_url = this.href;
    var parts = full_url.split("#");
    var trgt = parts[1];
    var target_offset = $("#"+trgt).offset();
    var target_top = target_offset.top;
    $('html, body').animate({scrollTop:target_top}, 500);
});
$(window).scroll(function(){
    var scrolltop = $(document).scrollTop();
    scrolltop = scrolltop + 250;
    if(scrolltop > 500){
        $('.sommaire').addClass('sommaire-fixed');
    }
    if(scrolltop < 500){
        $('.sommaire').removeClass('sommaire-fixed');
    }
});