$(document).ready(function(){
    const namefloor = $('.description-floor'),
        mainPage = $('.first-pade-container'),
        windowRentPage = $('.js-popup-rent'),
        fiveFloorPage = $('.five_floor-container'),
        forFloorPage = $('.for_floor-container'),
        threeFloorPage = $('.three_floor-container'),
        twoFloorPage = $('.two_floor-container'),
        firstFloorPage = $('.first_floor-container');

    $('.first-pade-container').find('path').hover(
        function() {
            if ($(window).width() > 1024 ) {
            namefloor.html($(this).attr('description-data'));
            namefloor.fadeToggle('fast');
            }
        }
    )

    mainPage.on('click', '.js-first-page', firstLink);

        function firstLink(event) {
            event.preventDefault();

            var floorAttr = $(this).children('.border-plane').attr('description-data');

            if (floorAttr == 'Пятый этаж') {
                mainPage.hide();
                fiveFloorPage.show();
            } else if (floorAttr == 'Четвертый этаж') {
                mainPage.hide();
                forFloorPage.show();
            } else if (floorAttr == 'Третий этаж') {
                mainPage.hide();
                threeFloorPage.show();
            } else if (floorAttr == 'Второй этаж') {
                mainPage.hide();
                twoFloorPage.show(100);
            } else if (floorAttr == 'Первый этаж') {
                mainPage.hide();
                firstFloorPage.show();
            }
        }
    
    $(this).on('click', '.js-back-button', linkBackToFirst);

        function linkBackToFirst(event) {
            event.preventDefault();

            var numFloorAttr = $(this).attr('id');

            if (numFloorAttr == '500') {
                fiveFloorPage.hide();
                mainPage.show();
            } else if (numFloorAttr == '400') {
                forFloorPage.hide();
                mainPage.show();
            } else if (numFloorAttr == '300') {
                threeFloorPage.hide();
                mainPage.show();
            } else if (numFloorAttr == '200') {
                twoFloorPage.hide();
                mainPage.show();
            } else if (numFloorAttr == '100') {
                firstFloorPage.hide();
                mainPage.show();
            }
        }

    $(this).on('click', '.js_rent-form', clickRentForm);

        function clickRentForm(event) {
            event.preventDefault();

            var numRoomAttr = $(this).attr('id');

            if (numRoomAttr > '500') {
                fiveFloorPage.hide();
                windowRentPage.css('display', 'flex');
            } else if (numRoomAttr > '400' && numRoomAttr < '500') {
                forFloorPage.hide();
                windowRentPage.css('display', 'flex');
            } else if (numRoomAttr > '300' && numRoomAttr < '400') {
                threeFloorPage.hide();
                windowRentPage.css('display', 'flex');
            } else if (numRoomAttr > '200' && numRoomAttr < '300') {
                twoFloorPage.hide();
                windowRentPage.css('display', 'flex');
            } else if (numRoomAttr > '100' && numRoomAttr < '200') {
                firstFloorPage.hide();
                windowRentPage.css('display', 'flex');
            }
        }

    $(this).on('click', '.js-button-back', clickBackBtn);

        function clickBackBtn(event) {
            event.preventDefault();

            windowRentPage.hide();

            mainPage.show();
        }
});