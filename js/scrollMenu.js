	$(window).bind('scroll', function (appearMenu) {
		if ($(window).scrollTop() > 200) {
			$('#mainHamburger').addClass('mainHamburgerScrolled', {duration:1000});
			$('#hamburgerCenter').addClass('hamburgerCenterScrolled', {duration:1000});
			$('#header').addClass('headerScrolled', {duration:1000});
			$('#logo').addClass('logoScrolled', {duration:1000});
			$('#oldFashioned').addClass('disappear', {duration:1000});
		} else {
			$('#mainHamburger').removeClass('mainHamburgerScrolled', {duration:1000});
			$('#hamburgerCenter').removeClass('hamburgerCenterScrolled', {duration:1000});
			$('#header').removeClass('headerScrolled', {duration:1000});
			$('#logo').removeClass('logoScrolled', {duration:1000});
			$('#oldFashioned').removeClass('disappear', {duration:1000});
		}
	});