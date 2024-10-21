(function($) {
	"use strict";
    var HT = {};
    var countdown = $('.countdown-time')
    
    HT.openCategoryDropdown = () => {
        $('.categories-dropdown').slideUp()
        $('.deparment-wrapper').click(function(){
            let _this = $(this)
            let isOpen = _this.attr('data-open') 
            if(isOpen == 0){
                $('.deparment-wrapper > span .uk-icon').css({
                    'rotate' : '-180deg',
                    'transition': 'all 0.4s ease'
                })
                _this.attr('data-open', 1)
            }else{
                $('.deparment-wrapper > span .uk-icon').css({
                    'rotate' : '0deg',
                    'transition': 'all 0.4s ease'
                })
                _this.attr('data-open', 0)
            }
            $('.categories-dropdown').slideToggle()
        })
    } 

    HT.swiper = () => {
        var swiper = new Swiper(".panel-slide .swiper-container", {
			loop: true,
			pagination: {
				el: '.swiper-pagination',
			},
			slidesPerView: 1,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
    }


    HT.specialSwiper = () => {
        var swiper = new Swiper(".special-offer .swiper-container", {
			loop: true,
			pagination: {
				el: '.swiper-pagination',
			},
			slidesPerView: 1,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
    }

    HT.categorieslSwiper = () => {
        var swiper = new Swiper(".panel-categories .swiper-container", {
			loop: true,
			pagination: {
				el: '.swiper-pagination',
			},
            slidesPerView: 2,
            spaceBetween: 0,
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2.5,
                    spaceBetween: 0
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 3,
                    spaceBetween: 0
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 6,
                    spaceBetween: 0
                }
            },
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
    }

    HT.brandlSwiper = () => {
        var swiper = new Swiper(".panel-brand .swiper-container", {
			loop: true,
			pagination: {
				el: '.swiper-pagination',
			},
            slidesPerView: 2,
            spaceBetween: 10,
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 5,
                    spaceBetween: 10
                }
            },
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
    }


    HT.countdown = () => {
        if(countdown.length){
            countdown.each(function(){
                let _this = $(this)
                let countdownValue = _this.attr('data-countdown')

                let second = 1000
                let minute = second*60
                let hour = minute * 60
                let day = hour * 24
                let countDownTime = new Date(countdownValue).getTime()
                setInterval(function(){

                    let now = new Date().getTime() // --> thời điểm hiện tại
                    let distance = countDownTime - now

                    if(distance > 0){
                        let days = (Math.floor(distance / (day)))
					    let hours = Math.floor((distance % (day)) / (hour))

                        let minutes = Math.floor((distance % (hour)) / (minute))
					    let seconds = Math.floor((distance % (minute)) / second)


                        _this.find('.days').html(days)
                        _this.find('.hours').html(hours)
                        _this.find('.minutes').html(minutes)
                        _this.find('.seconds').html(seconds)

                    }
                    

                }, second)
                
            })
        }
    }


    HT.setupPriceRange = () => {
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 75, 300 ],
            slide: function( event, ui ) {
              $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
          });
          $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    }


    HT.chooseColor = () => {
        $(document).on('click', '.color-item', function(){
            let _this = $(this)
            _this.toggleClass('active')
        })
    }

    HT.popupSwiperSlide = () => {
		document.querySelectorAll(".popup-gallery").forEach(popup => {
			var swiper = new Swiper(popup.querySelector(".swiper-container"), {
				loop: true,
				// autoplay: {
				// 	delay: 2000,
				// 	disableOnInteraction: false,
				// },
				pagination: {
					el: '.swiper-pagination',
				},
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				thumbs: {
					swiper: {
						el: popup.querySelector('.swiper-container-thumbs'),
						slidesPerView: 3,
						spaceBetween: 10,
						slideToClickedSlide: true,
					}
				}
			});
		});
	}


	$(document).ready(function(){ 
        HT.popupSwiperSlide()
        HT.openCategoryDropdown()
        HT.swiper()
        HT.specialSwiper()
        HT.countdown()
        HT.categorieslSwiper()
        HT.brandlSwiper()
        HT.setupPriceRange()
        HT.chooseColor()

	});

})(jQuery);




