$(".js-search").focus(function() {
        $(this).parent().addClass("active");
            }).blur(function() {
    $(this).parent().removeClass("active");
});

var JWindow = $(window);
    JWindow.scroll(function(){
        var scrollHeight = JWindow.scrollTop();
        var lnSider = $(".box-art");
        var contentHeight = $(".main").height() - lnSider.height();
//        console.log(scrollHeight+"--"+contentHeight);
        if(scrollHeight > 700 && scrollHeight < contentHeight){
            lnSider.css({
                position:"fixed",
                width:"262px"
            });
            lnSider.stop().animate({
                top: "10px"
            });
        }else if(scrollHeight<= 700){
            lnSider.css({
                position:"static",
                width:"262px"
            });
            lnSider.stop().animate({
                top: "-200px"
            });
        }
})