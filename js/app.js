$('a[href^="#"]').on('click',function(e){
    var target= $(this.hash);
    if($(window).width() < 800){
        var pos=50;
    }else{
        pos=65;
    }
    if(target.length){
        $('html , body').stop().animate({
            scrollTop: target.offset().top - pos
        },500);
    }
});

$("a").on('click',function(){
    $('#navbarSupportedContent').removeClass('show');
});