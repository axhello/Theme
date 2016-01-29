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
       // console.log(scrollHeight+"--"+contentHeight);
        if(scrollHeight > 1000 && scrollHeight < contentHeight){
            lnSider.css({
                position:"fixed",
                width:"302px"
            });
            lnSider.stop().animate({
                top: "10px"
            });
        }else if(scrollHeight<= 1000){
            lnSider.css({
                position:"static",
                width:"302px"
            });
            lnSider.stop().animate({
                top: "-200px"
            });
        }
})