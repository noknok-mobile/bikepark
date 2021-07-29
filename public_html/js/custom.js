$(document).ready(function(){
	$(".chosen-select").chosen({
		disable_search: true,
		width: "100%",
	});
	
	/********************************Календарь*********************************/
	if($("div").is("#two-inputs")) {
		$('#two-inputs').dateRangePicker({
			separator: ' to ',
			format: 'DD.MM.YYYY HH:mm',
			startOfWeek: 'monday',
			language: 'ru',
			hoveringTooltip: false,
			monthSelect: true,
			yearSelect: false,
			singleMonth: false,
			time: {
				enabled: true
			},
			swapTime: true,
			getValue: function() {
				if ($('#date-range200').val() && $('#date-range201').val() )
					return $('#date-range200').val() + ' to ' + $('#date-range201').val();
				else
					return '';
			},
			setValue: function(s,s1,s2)	{
				$('#date-range200').val(s1);
				$('#date-range201').val(s2);
			},
			beforeShowDay: function(t) {
				var valid = (moment().isBefore(t));
				var _class = valid ? '' : 'disabled';
				return [valid, _class];
			}
		});
	}
	
	if($("div").is("#two-inputs_inline")) {
		$('#two-inputs_inline').dateRangePicker({
			separator: ' to ',
			format: 'DD.MM.YYYY HH:mm',
			startOfWeek: 'monday',
			language: 'ru',
			hoveringTooltip: false,
			monthSelect: true,
			yearSelect: false,
			singleMonth: false,
			inline:true,
			container: '#date-range-container',
			alwaysOpen:true,
			time: {
				enabled: true
			},
			getValue: function() {
				if ($('#date-range100').val() && $('#date-range101').val() )
					return $('#date-range100').val() + ' to ' + $('#date-range101').val();
				else
					return '';
			},
			setValue: function(s,s1,s2)	{
				$('#date-range100').val(s1);
				$('#date-range101').val(s2);
			},
			beforeShowDay: function(t) {
				var valid = (moment().isBefore(t));
				var _class = valid ? '' : 'disabled';
				return [valid, _class];
			}
		});
	}
	
	/*$('#inputssingle').dateRangePicker(
	{
		autoClose: true,
		singleDate : true,
		showShortcuts: false,
		singleMonth: true
	});*/
	
	if($("*").is("#inputssingle")) {
		$('#inputssingle').dateRangePicker({
			format: 'DD.MM.YYYY HH:mm',
			startOfWeek: 'monday',
			language: 'ru',
			hoveringTooltip: false,
			monthSelect: true,
			yearSelect: false,
			alwaysOpen:false,

			autoClose: false,
			singleDate : true,
			singleMonth: true,
	
			time: {
				enabled: true
			}
		});
	}
	
	
			
	/********************************Показ моб меню*********************************/
	$(".mobile-menu").click(function() {
		if($('body').hasClass('b-page_menu')) {
			$('body').removeClass('b-page_menu');
		} else {
			$('body').addClass('b-page_menu');
		}
	});
		
	/********************************Показ меню в лк*********************************/
	$(".lk-burger").click(function() {
		if($(this).hasClass('lk-burger_down')) $(this).removeClass('lk-burger_down');
		else $(this).addClass('lk-burger_down');
	});
			
			/********************************Подсказка для типа велосипеда*********************************/
			/*$('.question').click(function() {
				if($(this).hasClass('question_active')) $(this).removeClass('question_active');
				else {
					$('.question').removeClass('question_active');
					$(this).addClass('question_active');
				}
				return false;
			});*/
			
			/********************************Показ пользовательского меню*********************************/
			$('.b-user__ico').click(function() {
				if($('.b-user').hasClass('b-user_active')) $('.b-user').removeClass('b-user_active');
				else $('.b-user').addClass('b-user_active');
				return false;
			});
			
			/********************************Слайдер для типа велосипеда*********************************/
			/*$(".fbike").slick({
				arrows: true,
				prevArrow: '<img class="prev" src="">',
				nextArrow: '<div class="fbike-next"><img class="next" src="img/arrow-right.svg"></div>',
				slidesToShow: 3,
				slidesToScroll: 1,
				speed: 300,
				swipeToSlide: true,
				dots: false,
				variableWidth: true,
				infinite: true,
			});*/
			
	/********************************Слайдер для О нас*********************************/
	$(".about-slide").slick({
		arrows: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		swipeToSlide: true,
		dots: true,
		infinite: true,
		responsive: [{
			breakpoint: 992,
			settings: {
				slidesToShow: 2
			}
		},
		{
			breakpoint: 640,
			settings: {
				slidesToShow: 1
			}
		}]
	});
		
	/********************************Скролл для заказов*********************************/
	$(".order-table_check").smoothDivScroll({
		mousewheelScrolling: "horisontal",
		hotSpotScrolling: true,
		manualContinuousScrolling: false,
		touchScrolling:true,
		visibleHotSpotBackgrounds:"always",
		hotSpotsVisibleTime: 2000,
	});
	
	/********************************Скролл для лк*********************************/
	/*$(".lk-slide").smoothDivScroll({
		mousewheelScrolling: "",
		hotSpotScrolling: true,
		manualContinuousScrolling: true,
		hotSpotScrolling:true,
		visibleHotSpotBackgrounds:"always",
		hotSpotsVisibleTime: 2000,
	});*/
	
	$('.masc-phone').inputmask({
		"mask": "9(999) 999-99-99"
	});
	
	
	/********************************Текущее время*********************************/
	var timeNode = document.getElementById('b-time');
 
	function getCurrentTimeString2(dots) {
		var timeString = new Date().toTimeString().replace(/:[0-9]{2,2} .*/, '');
		return timeString;
	}
	
	timeNode.innerHTML = getCurrentTimeString2(Math.round(Date.now() / 1000) % 2);
	
	setInterval(
		function() { 
			timeNode.innerHTML = getCurrentTimeString2(Math.round(Date.now() / 1000) % 2);
		},
		30000
	);
	
		
	/********************************Показ пароля*********************************/
	$('body').on('click', '.password-control', function(){
		if ($(this).prev().attr('type') == 'password'){
			$(this).addClass('password-control_active');
			$(this).prev().attr('type', 'text');
		} else {
			$(this).removeClass('password-control_active');
			$(this).prev().attr('type', 'password');
		}
		return false;
	}); 
		
		
	/********************************Всплывающие окна*********************************/
    $('a[name=modal]').click(function(e) {
		e.preventDefault();
		var id = $(this).attr('href');
		$(id).addClass('popup-window_active');
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		$('.popup-mask').css({'width':maskWidth,'height':maskHeight});
		//$('.popup-mask').fadeIn(500); 
		$('.popup-mask').fadeTo("normal",0.8); 
		var winH = $(window).height();
		var winW = $(window).width();
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
		$(id).fadeIn(1000); 
    });
    $('.popup-window .popup-close').click(function (e) { 
		e.preventDefault();
		$('.popup-window').removeClass('popup-window_active');
		$('.popup-mask, .popup-window').hide();
    }); 
    $('.popup-mask').click(function () {
		$('.popup-window').removeClass('popup-window_active');
		$(this).hide();
		$('.popup-window').hide();
    }); 
	
	
	/********************************Всплывающие табы авторизация*********************************/
	$('.pop-login__link').click(function(e) {
		e.preventDefault();
		var ids = $(this).attr('href');
		var id = '#popup-lk';
		$('.pop-login__link').removeClass('pop-login_active');
		$(this).addClass('pop-login_active');
		$('.login-tab').fadeOut(500);
		$(ids).fadeIn(500);

		function tabl() {
			var winH = $(window).height();
			var winW = $(window).width();
			$(id).css('top',  winH/2-$(id).height()/2);
			$(id).css('left', winW/2-$(id).width()/2);
		}
		setTimeout(tabl, 600);
    });
	
	$(window).resize(function() {
		var id = '#'+$('.popup-window_active').attr('id');
		var winH = $(window).height();
		var winW = $(window).width();
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
		
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		$('.popup-mask').css({'width':maskWidth,'height':maskHeight});
	});
	
	/********************************аккардеон*********************************/
	$('.accord-item__title').click(function() {
		if($(this).parent().hasClass('accord-item_active')) {
			$(this).parent().removeClass('accord-item_active');
			$(this).next().fadeOut(500);
		}else {
			$(this).parent().addClass('accord-item_active');
			$(this).next().fadeIn(500);
		}
    });
	
	
	
	
}); 


if($('*').is('.fbike-wrap')) {
	const fbike_scrol = document.querySelector('.fbike-wrap');
	let isDown2 = false;
	let startX2;
	let scrollLeft2;

	fbike_scrol.addEventListener('mousedown', (e) => {
	  isDown2 = true;
	  fbike_scrol.classList.add('active');
	  startX2 = e.pageX - fbike_scrol.offsetLeft;
	  scrollLeft2 = fbike_scrol.scrollLeft;
	});
	fbike_scrol.addEventListener('mouseleave', () => {
	  isDown2 = false;
	  fbike_scrol.classList.remove('active');
	});
	fbike_scrol.addEventListener('mouseup', () => {
	  isDown2 = false;
	  fbike_scrol.classList.remove('active');
	});
	fbike_scrol.addEventListener('mousemove', (e) => {
	  if(!isDown2) return;
	  e.preventDefault();
	  const x = e.pageX - fbike_scrol.offsetLeft;
	  const walk = (x - startX2) * 3; //scroll-fast
	  fbike_scrol.scrollLeft = scrollLeft2 - walk;
	});
}

/*if($('*').is('.lk-slide_wrap')) {
	const slider = document.querySelector('.lk-slide_wrap');
	let isDown = false;
	let startX;
	let scrollLeft;

	slider.addEventListener('mousedown', (e) => {
	  isDown = true;
	  slider.classList.add('active');
	  startX = e.pageX - slider.offsetLeft;
	  scrollLeft = slider.scrollLeft;
	});
	slider.addEventListener('mouseleave', () => {
	  isDown = false;
	  slider.classList.remove('active');
	});
	slider.addEventListener('mouseup', () => {
	  isDown = false;
	  slider.classList.remove('active');
	});
	slider.addEventListener('mousemove', (e) => {
	  if(!isDown) return;
	  e.preventDefault();
	  const x = e.pageX - slider.offsetLeft;
	  const walk = (x - startX) * 3; //scroll-fast
	  slider.scrollLeft = scrollLeft - walk;
	});

	var placefix = document.querySelectorAll('.placefix'),
		touchsurface = document.querySelector('.lk-slide_wrap'),

        startY, // get start vertical position
        distX, // get horizontal distance
        distY, // get vertical distance
        positionX,
        newPositionX;

    touchsurface.addEventListener("touchstart", function(e) {



        var touchobj = e.changedTouches[0];

        positionX = -touchsurface.scrollLeft;
        startX = touchobj.pageX;

    });

    touchsurface.addEventListener("touchmove", function(e) {

        var touchobj = e.changedTouches[0];

        distX = touchobj.pageX - startX;

  
			
			for (let elem of placefix) {
				elem.style.left = touchsurface.scrollLeft+'px';
			}
	
	});
}*/
