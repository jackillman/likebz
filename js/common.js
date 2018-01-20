$(".aboutus").slideUp();
$(document).ready(function() {
 
    function screen_check(){
        if ($(window).width() <= 768) { 
		$('input#myphone').attr("type","tel");
		}else{
      $('input#myphone').attr("type","number");
        }
	}
    
	screen_check();
	$(window).resize (function(){
		screen_check();
	});
    
    
    $(".toDetails").on("click", function(){
        $(".aboutus").slideDown(1500);
        $(this).parent().hide();
    });
    
     $(".header-mid-buttons-box").on("click","a", function (event) {
      //отменяем стандартную обработку нажатия по ссылке
      event.preventDefault();
      //забираем идентификатор бока с атрибута href
      var id  = $(this).attr('href'),
      //узнаем высоту от начала страницы до блока на который ссылается якорь
        top = $(id).offset().top;
      //анимируем переход на расстояние - top за 1500 мс
      $('body,html').animate({scrollTop: top}, 1000);
    });
});