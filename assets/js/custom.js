$(function() {
  	$('.grid').isotope({
		itemSelector: '.grid-item',
	});

// filter items on button click
$('.filter-button-group').on( 'click', 'li', function() {
	var filterValue = $(this).attr('data-filter');
	$('.grid').isotope({ filter: filterValue });
	$('.filter-button-group li').removeClass('active');
	$(this).addClass('active');
});
$( '.main-menu ul li' ).addClass( 'list-inline-item' );

//===== Testimonial Slied

    $('.testimonial-text').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots:true,
        autoplay:true,
        asNavFor: '.testimonial-image',
        responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
            dots: false,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            dots: false,
          }
        }
      ]
    });

    $('.testimonial-image').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.testimonial-text',
        dots: false,
        arrows: false,
        autoplay: true,
        fade: true,
    });

      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay:true,
        dots: false,
        prevArrow: false,
        nextArrow: false
      });

});
