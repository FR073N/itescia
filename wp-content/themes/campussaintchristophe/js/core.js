var $jQuery = jQuery.noConflict();

(function(core) {

	core.init = function(){
		
		core.styles.init();

		// core.navigation.init();
		// core.forms.init();

		// if($jQuery(document.body).hasClass('page-template-layoutsalimentation-php')) core.pedagogie.init();

		// if($jQuery(document.body).hasClass('page-template-layoutsnos-projets-php')) core.projets.init();

		// if($jQuery(document.body).hasClass('page-template-layoutsespace-membre-php')) core.espacemembre.init();

		// if($jQuery(document.body).hasClass('page-template-layoutsprojet-cantines-php')) core.projetscantine.init();

		// if($jQuery(document.body).hasClass('page-template-layoutsobjectifs-nutrition-php')) core.objectifsnutrition.init();
		
		// if($jQuery(document.body).hasClass('page-template-layoutsnos-prix-php')) core.nosprix.init();
	
		// $jQuery( window ).resize(function() {
		//   core.styles.parallax();
		//   core.styles.mobileMenu();
		// });
	};

	core.styles = {

		init: function(){

			this.menuMobile();

		},

		setMenuHeight: function(){
			$jQuery('.header-navigation').height($jQuery(document).height() - 68);
		},

		menuMobile: function(){

			var item 	= $jQuery('.header-mobile-button, .mobile-navigation-close');

			item.on('click', function(e){
				e.preventDefault();
				
				$jQuery('body').toggleClass('menu-on');
				$jQuery('.header-navigation').toggleClass('header-navigation--on');
				core.styles.setMenuHeight();
			});

			var menuParent = $jQuery('.header-navigation ul li:has(>ul)');

			menuParent.on('click', function(e){
				e.preventDefault();
				$jQuery(this).children('ul').slideToggle("slow",function(){
					core.styles.setMenuHeight();	
				});
				$jQuery(this).toggleClass('active');
			});
		}

	};

})(window.core = window.core || {});

jQuery(document).ready(function($){core.init();}); 