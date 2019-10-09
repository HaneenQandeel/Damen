<link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript" src="assets/js/plugins/swiper.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {

    // for mobile menu
    $( document ).on( 'keydown', function ( e ) {
      if ( e.keyCode === 27 ) { // ESC
        $('body').removeClass('_aty_menu_open')
      }
    });
    $('._aty_mobile_menu_button').on('click', function () {
      $('body').toggleClass('_aty_menu_open')
    });
    $('._aty_mobile_menu_light').on('click', function () {
      $('body').removeClass('_aty_menu_open')
    });
    $('._aty_mobile_menu ul.links li > ul').each(function(){
      var $parent = $(this).parent('li');
      $(this).addClass('submenu');
      $parent.addClass('submenu').find('>a').append('<i class="fa fa-angle-left arrow"></i>');
    });
    $('._aty_mobile_menu ul.links li.submenu > a').on('click', function(e){
      e.preventDefault();
      var $parent = $(this).parent('li.submenu');
      if($parent.hasClass('_active')){
        $parent.removeClass('_active').find('ul.submenu').slideUp();
        $parent.find('li.submenu._active').removeClass('_active').find('ul.submenu').slideUp();
      }else{
        $parent.addClass('_active').find('>ul.submenu').slideDown();
      }
    });

		// check input, textarea no empty
		$("input, textarea").on('focusout change submit blur', function () {
			if (!$(this).val()) {
				$(this).removeClass('not-empty');
			}else{
				$(this).addClass('not-empty');
			}
		});
		$('button[type="reset"]').on('click', function(){
			$(this).parents('form').find('input, textarea').removeClass('not-empty')
		});

    Swiper('.big-slider .swiper-container', {
      slidesPerView: 1,
      centeredSlides: true,
      paginationClickable: true,
      spaceBetween: 30,
      grabCursor: true,
      autoplay: 4500,
      loop: true,
      autoHeight: true,
      onInit: function(){
      },
      onSlideChangeEnd:function(swipe){
        console.log(swipe.realIndex);
        if(swipe.realIndex > 0){
          $('.big-slider .slide-1 img').addClass('opacity');
          $('.big-slider .slide-1 .img-1').removeClass('jackInTheBox');
          $('.big-slider .slide-1 .img-2').removeClass('zoomInDown');
          $('.big-slider .slide-1 .img-3').removeClass('zoomInUp');
          $('.big-slider .slide-1 .img-4').removeClass('lightSpeedIn');
        }
      },
      onSlideChangeStart:function(swipe){
        if(swipe.realIndex === 0){
          $('.big-slider .slide-1 img').removeClass('opacity');
          $('.big-slider .slide-1 .img-1').addClass('jackInTheBox');
          $('.big-slider .slide-1 .img-2').addClass('zoomInDown');
          $('.big-slider .slide-1 .img-3').addClass('zoomInUp');
          $('.big-slider .slide-1 .img-4').addClass('lightSpeedIn');
        }
      }
    });
    Swiper('.section-news .swiper-container', {
      pagination: '.section-news .swiper-pagination',
      nextButton: '.section-news .swiper-button-next',
      prevButton: '.section-news .swiper-button-prev',
      slidesPerView: 3,
      loop: true,
      autoplay: 3000,
      centeredSlides: true,
      paginationClickable: true,
      spaceBetween: 30,
      grabCursor: true,
      onInit: function(){
        $('.section-news .loader').remove();
        $('.section-news .swiper-wrapper.opacity').removeClass('opacity');
        $('.section-news .swiper-slide').addClass('tran');
      }
    });
    Swiper('.section-programs .swiper-container', {
      slidesPerView: 4,
      loop: true,
      autoplay: 3500,
      paginationClickable: true,
      spaceBetween: 30,
      grabCursor: true,
      onInit: function(){
        setTimeout(function(){
          $('.section-programs .loader').remove();
          $('.section-programs .swiper-wrapper.opacity').removeClass('opacity');
        })
      }
    });
	});

	// hide div on body clicked
	$(document).on('mouseup', function (e) {
		var container = $(".hal-container");
		if (!container.is(e.target)
			&& container.has(e.target).length === 0) {
			container.removeClass('active');
		}
	});
</script>