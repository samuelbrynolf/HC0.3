// TOC
//==============================================================================================================

// NAME 										
// NAVIGATION						
// FUNCTIONS CALLS

//==============================================================================================================

(function() {
	$('html').addClass('transitions');
	
	function tappyItems(){	
		$('a.tappilyTap').bind('tap', function(e){
			window.location=e.target.href;
		});
	} // end tappyItems()
	
	function elementToLink(){
		var tapTarget = $('.js-tapTarget');
		if(tapTarget.length){
	 		tapTarget.bind('tap', function(){
	 			var $this = $(this);
	  		window.location=$this.find('a.js-tapSrc').attr('href');
			});
		}
	} // end elementTolink
	
	function smoothScroll(){
  	$('.jumper').bind('tap', function(e){
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
    	&& location.hostname == this.hostname) {
      	var jQuerytarget = $(this.hash);
        jQuerytarget = jQuerytarget.length && jQuerytarget || jQuery('[name=' + this.hash.slice(1) +']');
        if (jQuerytarget.length) {
        	var targetOffset = jQuerytarget.offset().top - 24 ;
          $('html,body').animate({scrollTop: targetOffset}, 400);
          //e.preventDefault(); Eftersom vi kör tappy, dödas default automatiskt
         } 
       }
	 	});	
 	} // end smoothScroll()
	
	function toggleElems(){
    if($('.m-toggled').length){
      var toggled = $('.m-toggled');

      toggled.each(function(){
      	var $this = $(this);
        if($this.is('ul')){
         	var box = $this.clone(true);
          box.find('li').slice(1).wrapAll('<li class="m-toggled__elem s-is-hidden"><ul></ul></li>');
          box.find('li:eq(0) > *').addClass('a-toggled__toggler');
          $this.replaceWith(box);
        }
      });

      var toggler = $('.m-toggled__elem').prev();

      toggler.bind('tap', function(){
     		$this = $(this);
        var thisParent = $this.parent('.m-toggled');
        var thisNext = $this.next('.m-toggled__elem');
        thisParent.toggleClass('s-is-active');
        thisNext.slideToggle('fast').removeClass('s-is-hidden');
      });
  	}
	}

  function expandSection(){
    if($('.m-expand-section').length){
      var expandSection = $('.m-expand-section');
      var fullHeight = expandSection.innerHeight();
      var divideBy = expandSection.attr('data-divide-by');
      var expandText = expandSection.attr('data-expand-text');
      var expandButton = $('<button class="a-expand-section__button">'+expandText+'</button>');

      expandSection.css('max-height', fullHeight/divideBy);
      expandButton.insertAfter(expandSection);

      expandButton.bind('tap', function(){
        $this = $(this);
        $this.prev(expandSection).css('max-height', fullHeight).addClass('s-is-expanded');
        $this.addClass('s-is-hidden');
      });
    }
	}
	
	function formInteractions(){
		if($('.m-form').length){
			function checkedStyles(){
				$('input:checked').parent('.a-label').addClass('s-is-checked');
				$('input:disabled').parent('.a-label').addClass('s-is-disabled');
				$('form[role="form"]').on('click', '.a-label.checkbox, .a-label.radio', function(){
					$this = $(this);
					if($this.children().is(':disabled')) return false;
					
					var $thisCheckbox = $this.children('input:checkbox');
					
					if($thisCheckbox.length){
						if($thisCheckbox.is(':checked')){
							$this.addClass('s-is-checked');
						} else {
							$this.removeClass('s-is-checked');
						}
					} else {
						var siblings = $this.siblings();
						
						siblings.removeClass('s-is-checked');
						$this.addClass('s-is-checked');
					}
				});
			}
			checkedStyles();
		}
	}
	
	function mqConditioned(){
		var size = 0;
	
		window.watchResize = function(callback){
			var resizing;
			function done(){
				clearTimeout( resizing );
				resizing = null;
				callback();
			}
			
			$(window).on('resize',function(){
				if(resizing){
					clearTimeout(resizing);
					resizing = null;
				}
				resizing = setTimeout( done, 50 );
			});
			// init
			callback();
		};
		
		window.watchResize(function(){
			size = getActiveMQ();
			if(size == 'bq'){
			  alert(size);
		  }
		});
		
		function getActiveMQ(){
			var computed = window.getComputedStyle,
		  watcher = document.getElementById('getActiveMQ-watcher');
			
			if('currentStyle' in watcher){
				getActiveMQ = function(){
					return watcher.currentStyle['fontFamily'];
				};
			}
			
			else if (computed){
				getActiveMQ = function(){
		      return computed( watcher, null ).getPropertyValue( 'font-family' ).replace(/['"]/g,'');
				};
			} else {
				getActiveMQ = function(){
					return 'unknown';
				};
			}
			return getActiveMQ();
		}
	}
 	
 	tappyItems();
 	smoothScroll();
 	toggleElems();
 	expandSection();
 	formInteractions();
 	mqConditioned();
 	
 	//setTimeout(function(){
	//	$('.wfl body').css({
	//		'visibility' : 'visible',
	//		'opacity' : '1'
	//	});
	//},2100);
})();