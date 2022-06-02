			$(document).ready(function(){
				$('#mainHamburger').click(function(){
					$('#hamburgerCenter').toggleClass('mainHamburgerActivated')
					setTimeout(function(){ $('#desktopNav').toggleClass('desktopNavActivated') },800)
					$('#airplaneSmoker1').toggleClass('airplaneSmokerActivated')
					setTimeout(function(){ $('#airplaneSmoker2').toggleClass('airplaneSmokerActivated') },200)
					setTimeout(function(){ $('#airplaneSmoker3').toggleClass('airplaneSmokerActivated') },400)
				});
				$('.navButton').click(function(){
					$('#hamburgerCenter').removeClass('mainHamburgerActivated')
					setTimeout(function(){ $('#desktopNav').removeClass('desktopNavActivated') },800)
					$('#airplaneSmoker1').removeClass('airplaneSmokerActivated')
					setTimeout(function(){ $('#airplaneSmoker2').removeClass('airplaneSmokerActivated') },200)
					setTimeout(function(){ $('#airplaneSmoker3').removeClass('airplaneSmokerActivated') },400)
				});
				$('#button1').click(function(){
					$('#serviceContent1').addClass('serviceContentActivated')
					$('#serviceContent2').removeClass('serviceContentActivated')
					$('#serviceContent3').removeClass('serviceContentActivated')
					$('#row3').toggleClass('collapseRowExpanded')
					$('#row4').removeClass('collapseRowExpanded')
					$('#row5').removeClass('collapseRowExpanded')
				});
				$('#button2').click(function(){
					$('#serviceContent2').addClass('serviceContentActivated')
					$('#serviceContent1').removeClass('serviceContentActivated')
					$('#serviceContent3').removeClass('serviceContentActivated')
					$('#row4').toggleClass('collapseRowExpanded')
					$('#row3').removeClass('collapseRowExpanded')
					$('#row5').removeClass('collapseRowExpanded')
				});
				$('#button3').click(function(){
					$('#serviceContent3').addClass('serviceContentActivated')
					$('#serviceContent1').removeClass('serviceContentActivated')
					$('#serviceContent2').removeClass('serviceContentActivated')
					$('#row5').toggleClass('collapseRowExpanded')
					$('#row3').removeClass('collapseRowExpanded')
					$('#row4').removeClass('collapseRowExpanded')
				});
			});