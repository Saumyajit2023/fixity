


    const toggleBtn = document.querySelector(".toggle_btn")
    const toggleBtnIcon = document.querySelector(".toggle_btn i")
    const dropDownMenu = document.querySelector(".dropdown_menu")

    toggleBtn.onclick = function () {
      dropDownMenu.classList.toggle("open")
      const isOpen = dropDownMenu.classList.contains("open")

      toggleBtnIcon.classList = isOpen 
        ? "fa-solid fa-xmark" : 
      "fa-solid fa-bars";
    }

    $('[name=tab]').each(function(i,d){
      var p = $(this).prop('checked');
        //   console.log(p);
          if(p){
            $('article').eq(i)
              .addClass('on');
          }    
        });  

        $('[name=tab]').on('change', function(){
          var p = $(this).prop('checked');
          
          // $(type).index(this) == nth-of-type
          var i = $('[name=tab]').index(this);
          
          $('article').removeClass('on');
          $('article').eq(i).addClass('on');
        });


        var $slider = $('.slider-banner');
        var $progressBar = $('.progress');
      var $status = $('.pagingInfo');
      var $progressBarLabel = $( '.slider__label' );

        $slider.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
          //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
          if(!slick.$dots){
            return;
          }
          
          // if(currentSlide >= 4){
          //   $('#exampleModal').modal('show');    
          //   setTimeout(function(){
          //     $slider.slick('slickGoTo',3,true)
          //   },1)    
          // }
          
          var i = (currentSlide ? currentSlide : 0) + 1;
          $status.text(i  + '/' + slick.slideCount);
        });

          //   Progress Bar
          $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
            var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
            
            $progressBar
              .css('background-size', calc + '% 100%')
              .attr('aria-valuenow', calc );
            
            $progressBarLabel.text( calc + '% completed' );
          });

        $('.slider-banner').slick({
            // arrows: false,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: "<button class='arrowBannerLeft'><i class='fas fa-chevron-left'></i></button>",
            nextArrow: "<button class='arrowBannerRight'><i class='fas fa-chevron-right'></i></button>",
        });

        $(document).ready(function(){
            $('.rtl-slider').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              fade: true,
              asNavFor: '.rtl-slider-nav'
            });
            $('.rtl-slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                vertical: true,
               asNavFor: '.rtl-slider',
               centerMode: false,
               focusOnSelect: true,
                prevArrow: ".thumb-prev",
            nextArrow: ".thumb-next",
            });
        });
