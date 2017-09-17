$(document).ready(function() {
   // MagnificPopup
	var magnifPopup = function() {
		$('.gd-cell-link , .gd-cell-link-name, .gd-cell-line-viewmore').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
		});

		$('.popup_media').magnificPopup({
			disableOn: 700,
			type: 'image',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
		});

		
	};

	

	var magnifVideo = function() {
		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        //fixedContentPos: false
    });
	};

	// Call the functions 
	magnifPopup();
	magnifVideo();

});