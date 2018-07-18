$(document).ready(function () {

	$('nav > ul > li > a').click(function() {
		$('nav > ul > li > ul, nav > ul > li > ul > li > ul').slideUp();
		$(this).next().slideDown();
		$(this).parent().addClass("on").siblings().removeClass("on");
    });
	
	$('nav > ul > li > ul > li a').click(function() {
		$('nav > ul > li > ul > li > ul').slideUp();
		$(this).next().slideDown();
		$(this).parent().addClass("on").siblings().removeClass("on");
    });
	
	
	//햄버거메뉴부분
	$('nav > .utility > .menu').click(function() {
        $('nav > ul').slideToggle();
		$('nav > ul > li > ul, nav > ul > li > ul > li > ul').slideUp();
    });
	

	//가로 사이트 인식, 브라우저 리사이즈하는 경우 인라인 style 삭제 처리
	$(window).resize(function() { 
		$('nav > ul, nav > ul > li > ul, nav > ul > li > ul > li > ul').removeAttr("style"); 

	});

	if($('nav > ul > li > ul > li > ul').find('li')) {
		$('nav > ul > li > ul > li > ul > li').addClass('down');
	}
	

});
