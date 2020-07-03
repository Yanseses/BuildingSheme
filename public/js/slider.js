$(document).ready(function(){
    let slideFirst = 1,
    translateWidth = 0,
    slideInterval = 5000,
    wrapperSlide = $('.slider-wraper'),
    vievPort = $('.viewport'),
    sliderBtn = $('.btn-slider'),
    miniVievPort = $('.viewport-outside'),
    navBtnId = 0;
	
	var switchInterval = setInterval(nextSlide, slideInterval);


	function nextSlide() {
		let slideCount = $('.slider-wraper').children().length;
		
        if (slideFirst == slideCount || slideFirst <= 0 || slideFirst > slideCount) {
            wrapperSlide.css('transform', 'translate(0, 0)');
            slideFirst = 1;
        } else {
            translateWidth = -vievPort.width() * slideFirst;
            wrapperSlide.css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideFirst++;
        }
    }

    vievPort.hover(function(){
    	clearInterval(switchInterval);
    },function() {
        switchInterval = setInterval(nextSlide, slideInterval);
    });

    $(document).on('click', '.btn-slider', function() {
        navBtnId = $(this).index();

        if (navBtnId + 1 != slideFirst) {
            translateWidth = -vievPort.width() * (navBtnId);
            wrapperSlide.css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideFirst = navBtnId + 1;
        }
});
});