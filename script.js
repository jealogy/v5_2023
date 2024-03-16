const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
  
    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
    }
}

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }
    else {        document.documentElement.setAttribute('data-theme', 'light');
          localStorage.setItem('theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);

/*
 * Hide switch on scroll
 *
 */
 
 $(window).bind('scroll', function() {
     if ($(window).scrollTop() > 100) {
         $('.logo-wrap').hide();
     }
     else {
         $('.logo-wrap').show();
     }
});

/*
 * Navigation
 *
 */
 
const toggler = document.querySelector('.menu__toggler');
const menu    = document.querySelector('.menu');

/*
 * Toggles on and off the 'active' class on the menu
 * and the toggler button.
 */
toggler.addEventListener('click', () => {
  toggler.classList.toggle('active');
  menu.classList.toggle('active');
})


	var app = function () {
		var body = undefined;
		var menu = undefined;
		var menuItems = undefined;
		var init = function init() {
			body = document.querySelector('body');
			menu = document.querySelector('.menu-icon');
			menuItems = document.querySelectorAll('.nav__list-item');
			applyListeners();
		};
		var applyListeners = function applyListeners() {
			menu.addEventListener('click', function () {
				return toggleClass(body, 'nav-active');
			});
		};
		var toggleClass = function toggleClass(element, stringClass) {
			if (element.classList.contains(stringClass)) element.classList.remove(stringClass);else element.classList.add(stringClass);
		};
		init();
	}();

/*
 * Form
 *
 */
 
 function checkValue(element) {
  // check if the input has any value (if we've typed into it)
  if ($(element).val())
    $(element).addClass('has-value');
  else
    $(element).removeClass('has-value');
}

$(document).ready(function() {
  // Run on page load
  $('.form-control').each(function() {
    checkValue(this);
  })
  // Run on input exit
  $('.form-control').blur(function() {
    checkValue(this);
  });

});

/*
Search
*/

     $("#btn-search").click(function(){
        $("#dim-screen").toggleClass("hidden").delay(800);;
        $("#menu-search").toggleClass("hidden");
    });

    $("#dim-screen").click(function(e){
        $("#dim-screen").toggleClass("hidden");
        $("#menu-search").addClass("hidden");
    });

    $("#dim-screen *").click(function(e){
        e.stopPropagation();
    });

    $(document).mousemove(function(event){
        var x = (event.clientX / $(window).width()) * 100;
        $('#gradient').css({'background': ' linear-gradient(to right, #594687 ' + (x-50) + '%, rgb(248, 201, 72) ' + x + '%, rgb(22, 190, 112) ' + (x+50) + '%)'});
    });

const checkpoint = 300;
window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= checkpoint) {
    opacity = 1 - currentScroll / checkpoint;
  } else {
    opacity = 0.25;
  }
  document.querySelector("#search").style.opacity = opacity;
});



