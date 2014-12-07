var skrollrObj;

function preInitSkrollr() {
	//http://detectmobilebrowsers.com/ + tablets
	(function(a) {
		if(/android|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(ad|hone|od)|iris|kindle|lge |maemo|meego.+mobile|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))
		{
			//Add skrollr mobile on mobile devices.
			document.write('<script type="text/javascript" src="/assets/vendors/skrollr/skrollr.mobile.min.js"><\/script>');
		}
	})(navigator.userAgent||navigator.vendor||window.opera);

	//document.write('<!--[if lt IE 9]><script type="text/javascript" src="/assets/vendors/skrollr/skrollr.ie.min.js"></script><![endif]-->');

	$('#skrollr-inner').css({
		position: 'fixed',
		width: '100%',
		height: '100%'
	});

}

function initSkrollr() {
	skrollrObj = skrollr.init({
		//smoothScrolling: false,
		forceHeight: false,
		easing: {
			manualcontent: function(p) {return p;},
			manualbackground: function(p) {return p;},
			manualframe: function(p) {return p;},

			spline2: function(p) {
				var power = 2;
				if (Math.round(p)) return 1-(Math.pow(2-(p*2), power)/2);
				else return Math.pow(p*2, power)/2;
			},
			spline3: function(p) {
				var power = 3;
				if (Math.round(p)) return 1-(Math.pow(2-(p*2), power)/2);
				else return Math.pow(p*2, power)/2;
			}				
		}
	});	

	//The options (second parameter) are all optional. The values shown are the default values.
	skrollr.menu.init(skrollrObj, {
	    animate: true, //skrollr will smoothly animate to the new position using `animateTo`.
	    duration: 1000, //How long the animation should take in ms.
	    easing: 'spline2' //The easing function to use.
	});

	//if (window.location.hash)
		//skrollrObj.setScrollTop($(window.location.hash).offset().top);
}


var TomarqEasing = {
	spline: function(power, p) {
		if (Math.round(p)) return 1-(Math.pow(2-(p*2), power)/2);
		else return Math.pow(p*2, power)/2;
	}
};


function wheelDelta(e)
{
	if (e.wheelDelta)   return e.wheelDelta;
	if (e.detail)       return e.detail * -40;
	if (e.originalEvent) {
		if (e.originalEvent.wheelDelta)
			return e.originalEvent.wheelDelta;
		if (e.originalEvent.detail)
			return e.originalEvent.detail * -40;
	}
	return false;
}

var scrollLock = false;

function setHeights(headerHeight, idList) {
	var windowHeight = $(window).height() - 10;


	$('div.fullscreen-frame').each(function(idx, item){
		// If an idList is provided and this element isn't named in that list, bail out.
		var id = $(this).attr('id');
		
		if (idList !== undefined && $.inArray(id, idList) === -1) {
			return;
		}
		
		$(this).height('auto');
		$('.inner', this).height('auto');
		
		var currentHeight = $('.inner', this).height();
		
		$(this).height(Math.max(currentHeight, windowHeight - headerHeight));
		$('.inner', this).height(Math.max(currentHeight, windowHeight - headerHeight));
		if(id == 'blog') {
			$(this).height('auto');
			$('.inner', this).height('auto');
			//alert(currentHeight);
			//alert(windowHeight);
			//alert(headerHeight);
		} 
	});

	homepageCopyPadding = (windowHeight/2) - headerHeight - ($('#homepage .copy').height()/2);
	
	homepageCopyPadding = ($('#homepage .inner').height() - $('#homepage .copy').height() - headerHeight) / 2;
	
	$('#homepage .copy').css('paddingTop', Math.max(0, homepageCopyPadding));
	
	
	// Don't set body height if we've provided a list of IDs 
	if (idList !== undefined) {
		return;
	}
	

	var bodyHeight = $('#skrollr-content').height();
	var bodyHeightTO = setTimeout(function(){
		$('body').height(bodyHeight);
	}, 50);
	//$('#skrollr-body').width('100%');

	$('#skrollr-content').attr('data-0', 'margin-top: 0px;');
	$('#skrollr-content').attr('data-' + (bodyHeight - $(window).height()), 'margin-top: -' + (bodyHeight -$(window).height()) + 'px;');

}

var reloadTimeout;
function doSkrollr() {
	preInitSkrollr();
	initSkrollr();
}



$.prototype.Concertina = function(){
	var Concertina = function(){
		var _lock = false;
		var base;
		var elements;
		
		var options = {
			speed: 200
		}

		function init(baseElement){
			base = baseElement;
			elements = $('.concertina-element', base);
			fixHeight();
			$('.concertina-content', elements.not('.concertina-open')).hide();
			$('.concertina-header', elements).prepend($('<div class="concertina-arrow">'));
			$('.concertina-header', elements).click(clicked);
		}

		function fixHeight() {
			var tallestContent = 0;
			var totalContent = 0;
			var totalHeight = 0;

			elements.each(function(){
				element = $(this);
				totalHeight += $(element).height();
				totalContent += $('.concertina-content', element).height();

				tallestContent = Math.max(tallestContent, $('.concertina-content', element).height());
			});

			base.height(totalHeight + tallestContent - totalContent);
		}

		function clicked() {
			if (!_lock) {
				_lock = true;
				var element = $(this).parent();

				// if this one is not already open
				if (!element.hasClass('concertina-open')) {
					// close all others
					$('.concertina-content', elements.filter('.concertina-open')).slideUp(options.speed, function(){
						elements.removeClass('concertina-open');
						element.addClass('concertina-open');
					});
					// open this one
					$('.concertina-content', element).slideDown(options.speed, function(){
						_lock = false;
					});
				} else {
					_lock = false;
				}
			}
		}

		return {
			init: init
		}
	}();
	
	$(this).each(function(idx, item){
		Concertina.init($(item));
	});
}


var MapLocations = function(){
	var base = $('#contact-us #map');
	var elements = $('#map-locations > div', base);
	var points;
	var speed = 200;

	
	elements.each(function(idx, elem){
		setupLocation($(elem));
	});
	points = $('.point', base);

	function setupLocation(elem) {
		point = $('<div class="point">');
		base.append(point);
		point.css({
			top: elem.data('y') - 10,
			left: elem.data('x') - 10
		});
		if (elem.hasClass('address-above')) elem.css({ top: elem.data('y') - elem.height() - 20});
		else elem.css({ top: elem.data('y') + 10 });

		if (elem.hasClass('address-left')) elem.css({ left: elem.data('x') - elem.width() + 30 });
		else elem.css({ left: elem.data('x') - 30 });

		point.click(function(){
			showLocation($(this), elem);
		})
	}
	
	function showLocation(point, elem) {
		if (!elem.hasClass('active')) {
			points.removeClass('active');
			point.addClass('active');
			elements.hide(speed).removeClass('active');
			elem.show(speed).addClass('active');
		} else {
			points.removeClass('active');
			elements.hide(speed).removeClass('active');
		}
	}
};





$(document).ready(function(){
	
	$('.concertina').Concertina();
	MapLocations();
	
	var isMobile = false;
	(function(a) {
		if(/android|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(ad|hone|od)|iris|kindle|lge |maemo|meego.+mobile|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))
		{
			isMobile = true;
		}
	})(navigator.userAgent||navigator.vendor||window.opera);

	var bitsActivated = false;
	
	if (isMobile) {
		$('body').addClass('mobile');
	}
	
	function isFullsize() {
		return (parseInt($(window).width()) > 900);
	}
	
	if (!isFullsize()) {
		setHeights($('#header').height(), ['homepage']);
	} else {
		if (isMobile) {
			setHeights($('#header').height());
		} else {
			setHeights(50);
		}
		

		bitsActivated = true;
		
		$('#ca-container').contentcarousel({scroll: 3});

		if (!isMobile) {
			doSkrollr();
		}
	}
	
	$(window).resize(function(){
		// No need to reload if we haven't turned on skrollr/other bits and still don't need to.
		if (!isFullsize() && !bitsActivated) {
			return;
		}
		
		clearTimeout(reloadTimeout);
		reloadTimeout = setTimeout(function(){
			location.reload();
		}, 100);
	});

	var e=$(document).height();
	$(window).on("scroll",function(){$("#popout")[$(window).scrollTop()>1.7*e&&!isMobile?"addClass":"removeClass"]("popping"),$("#top")[$(window).scrollTop()>$(window).height()&&!isMobile?"addClass":"removeClass"]("shrink")})

	/*$('.xmore').click(function(){
      $.ajax({
       url: 'include/get_blog_items.php',
       success: function(html) {
          $container.append(html);
          msnry.bindResize();
	      msnry.layout();
	      msnry.reloadItems();
       }
   	  });
      
      //$container.append( boxes ).masonry( 'appended', boxes );
    });*/
//msnry.layout();
	var vague = $('#skrollr-body').Vague({
    intensity:      3,      // Blur Intensity
    forceSVGUrl:    false,   // Force absolute path to the SVG filter,
    // default animation options
    animationOptions: {
      duration: 1000,
      easing: 'linear' // here you can use also custom jQuery easing functions
    }
});
$('.xitem, .item').on( "click", function() {
	document.body.style.overflow = "hidden";
	var post_id = $(this).attr('id');
	$('#post_'+post_id+'.individual').css('display', 'block');
	//msnry.layout();
	//$('#post_'+post_id).prepend('<link rel="stylesheet" href="./assets/vendors/normalize/normalize.css"><link rel="stylesheet" href="./assets/css/main.css?20130408"><link rel="stylesheet" href="./assets/css/bootstrap.css"><link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"><link rel="stylesheet" href="http://fast.fonts.com/cssapi/6ddf9258-8826-4e4e-aa04-8e1fb88b29fb.css">');
	$('#post_'+post_id).dialog({
	   modal: true,
	   open: function(){
	      jQuery('.individual .close').bind('click',function(){
		 	$('#post_'+post_id).dialog('close');
		 	document.body.style.overflow = "visible";
		 		var vague = $('#skrollr-body').Vague({
			    intensity:      3,      // Blur Intensity
			    forceSVGUrl:    false,   // Force absolute path to the SVG filter,
			    // default animation options
			    animationOptions: {
			      duration: 1000,
			      easing: 'linear' // here you can use also custom jQuery easing functions
			    }
			});
		 	vague.destroy();
		 	//$('#skrollr-body').foggy(false);
	      });
	      //$('#skrollr-body').foggy();
	      vague.blur();
	   },
	   width: "auto",
	   maxWidth: "1024px"
	});
	$(".ui-dialog-titlebar").hide();

	//msnry.layout();
	//$(".overlay").toggle();
});



//$('.individual .close').on( "click", function() {
	//dialogopen.dialog('close');
	//msnry.layout();
//});

/* no need for it - just remove /* keep //
$('.close-bottom, .ui-widget-overlay, #stwrapper, #stOverlay, .ui-front').on( "click", function() {
	var post_id = $(this).attr('id');
	$('#post_'+post_id).dialog('close');
	document.body.style.overflow = "visible";
	var vague = $('#skrollr-body').Vague({
			    intensity:      3,      // Blur Intensity
			    forceSVGUrl:    false,   // Force absolute path to the SVG filter,
			    // default animation options
			    animationOptions: {
			      duration: 1000,
			      easing: 'linear' // here you can use also custom jQuery easing functions
			    }
			});
		 	vague.destroy();
	//$('#skrollr-body').foggy(false);
	//msnry.layout();
	
			vague.blur();
			
});
*/


$('.navbar-default').on( "click", function() {
	$('#navbar1').slideToggle();
});



});
	//for blog masonry layout
	//var $container = $('#xcontainer');
	/*var msnry = new Masonry( '#zzzzzzz', {
	  // options
	  columnWidth: 280,
	  itemSelector: '.xitem',
	  transitionDuration: '0.3s',
	  isAnimated: true,
	  isResizable: true,
	  isFitWidth: true
	});



msnry.layout();*/

jQuery(function() {



  jQuery.support.cors = true;

  window.SilverTrackExample = {
    defaults: {easing: "easeInOutQuad", duration: 600},
    echoServerHost: "http://echo-server.herokuapp.com",
    urlAjax: function(opts) {
      var json = this.jsonCreator(opts.page, opts.perPage);
      return this.urlCreator(json, opts.page, opts.totalPages);
    },

    urlCreator: function(obj, page, totalPages) {
      var jsonText = escape(JSON.stringify(obj));
      return this.echoServerHost + "/echo/json/" + page + "?json=" + jsonText + "&total_pages=" + totalPages;
    },

    jsonCreator: function(page, perPage) {
      var photoTypes = ["food", "people", "nature", "sports"];
      var items = [];
      for (var i = 0; i < perPage; i++) {
        items.push({
          img_url: "http://lorempixel.com/224/128/" + photoTypes[i],
          title: "Page " + page + " item  " + i
        });
      }

      return items;
    }
  }

  $(".slider-container").each(function() {
    var example = $(this);
    $("a.reload", example.parents(".track")).click(function(e) {
      e.preventDefault();
      example.silverTrack().restart();
    });
  });
});


