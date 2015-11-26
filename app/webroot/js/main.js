$( document ).ready(function() {

	var pathName = window.location.pathname;


	//pre - loader

	setTimeout(function(){
		$('body').addClass('loaded');
	}, 3000);


	// Apply binding
	bindEvents();
	function bindEvents(){
		$("#student-register").click(function(){
			$(".landing-page.selection-container").hide();
			$(".element-register").fadeIn()
			$(".mentors-dd").hide();
			$("#UserUserTypesId").val(2);
		});
		$("#mentor-register").click(function(){
			$(".landing-page.selection-container").hide();
			$(".element-register").fadeIn()
			$(".mentors-dd").fadeIn();
			$("#UserUserTypesId").val(1);
		});
		$("#back-register").click(function(){
			$(".landing-page.selection-container").show();
			$(".element-register").hide()
		});
		$(".book-mentor").click(function(){
			window.location.href = "/mymentors";
		});

	}

	if(pathName === "/cakephp/carerott/users/landing" || pathName === "/cakephp/carerott/"){
		$('#flashMessage').css('display','none');
		$('body').addClass('body-bg');
	}

	$('.form').find('input, textarea').on('keyup blur focus', function (e) {

		var $this = $(this),
		label = $this.prev('label');

		if (e.type === 'keyup') {
			if ($this.val() === '') {
				label.removeClass('active highlight');
			} else {
				label.addClass('active highlight');
			}
		} else if (e.type === 'blur') {
			if( $this.val() === '' ) {
				label.removeClass('active highlight');
			} else {
				label.removeClass('highlight');
			}
		} else if (e.type === 'focus') {

			if( $this.val() === '' ) {
				label.removeClass('highlight');
			}
			else if( $this.val() !== '' ) {
				label.addClass('highlight');
			}
		}

	});

	$('.tab a').on('click', function (e) {

		e.preventDefault();

		$(this).parent().addClass('active');
		$(this).parent().siblings().removeClass('active');

		target = $(this).attr('href');

		$('.tab-content > div').not(target).hide();

		$(target).fadeIn(600);

	});

	// Click event for chat
	$('#message-mentor').click(function() {
		var host = window.location.host;
		window.location.href = host;
	});


});

