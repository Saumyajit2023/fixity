<script type="text/javascript">

    $(document).ready(function() {
		    $("#news-slider").owlCarousel({
		        items : 3,
		        itemsDesktop:[1199,3],
		        itemsDesktopSmall:[980,2],
		        itemsMobile : [600,1],
		        navigation:true,
		        navigationText:["",""],
		        pagination:true,
		        autoPlay:false
		    });
		});
    
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

	 	$('.slider').each(function() {              // For every slider
		  var $this   = $(this);                    // Current slider
		  var $group  = $this.find('.slide-group'); // Get the slide-group (container)
		  var $slides = $this.find('.slide');       // Create jQuery object to hold all slides
		  var buttonArray  = [];                    // Create array to hold navigation buttons
		  var currentIndex = 0;                     // Hold index number of the current slide
		  var timeout;                              // Sets gap between auto-sliding

		  function move(newIndex) {          // Creates the slide from old to new one
		    var animateLeft, slideLeft;      // Declare variables

		    advance();                       // When slide moves, call advance() again

		    // If it is the current slide / animating do nothing
		    if ($group.is(':animated') || currentIndex === newIndex) {  
		      return;
		    }

		    buttonArray[currentIndex].removeClass('active'); // Remove class from item
		    buttonArray[newIndex].addClass('active');        // Add class to new item

		    if (newIndex > currentIndex) {   // If new item > current
		      slideLeft = '100%';            // Sit the new slide to the right
		      animateLeft = '-100%';         // Animate the current group to the left
		    } else {                         // Otherwise
		      slideLeft = '-100%';           // Sit the new slide to the left
		      animateLeft = '100%';          // Animate the current group to the right
		    }
		    // Position new slide to left (if less) or right (if more) of current
		    $slides.eq(newIndex).css( {left: slideLeft, display: 'block'} );

		    $group.animate( {left: animateLeft}, function() {    // Animate slides and
		      $slides.eq(currentIndex).css( {display: 'none'} ); // Hide previous slide      
		      $slides.eq(newIndex).css( {left: 0} ); // Set position of the new item
		      $group.css( {left: 0} );               // Set position of group of slides
		      currentIndex = newIndex;               // Set currentIndex to the new image
		    });
		  }

		  function advance() {                     // Used to set 
		    clearTimeout(timeout);                 // Clear previous timeout
		    timeout = setTimeout(function() {      // Set new timer
		      if (currentIndex < ($slides.length - 1)) { // If slide < total slides
		        move(currentIndex + 1);            // Move to next slide
		      } else {                             // Otherwise
		        move(0);                           // Move to the first slide
		      }
		    }, 4000);                              // Milliseconds timer will wait
		  }

		  $.each($slides, function(index) {
		    // Create a button element for the button
		    var $button = $('<button type="button" class="slide-btn">&bull;</button>');
		    if (index === currentIndex) {    // If index is the current item
		      $button.addClass('active');    // Add the active class
		    }
		    $button.on('click', function() { // Create event handler for the button
		      move(index);                   // It calls the move() function
		    }).appendTo('.slide-buttons');   // Add to the buttons holder
		    buttonArray.push($button);       // Add it to the button array
		  });

		  advance();                          // Script is set up, advance() to move it


		});

		
  </script>
  