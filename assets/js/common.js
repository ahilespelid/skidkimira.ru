var initview = true;
var theHeight = 170;
jQuery(document).ready(function(){window.onload = function () {  

    var open_catalog = $('.open-catalog'), resizing_container = $('.resizing-container');
    theHeight = open_catalog.height()-40;
    
    console.log(open_catalog.height()); 
    console.log(resizing_container.height());
    
    
    open_catalog.bind('DOMSubtreeModified', function () {
        var $this = this;
        var updateHeight = function () {
            theHeight = $($this).height() -40;
            resizing_container.attr('style', 'height: '+theHeight+'px!important');
            console.log(theHeight);
        };
        setTimeout(updateHeight, 1000);
    });
    
    
    

	//resizing_container.attr('style', 'height: '+open_catalog.height()+'px!important');    
    console.log(theHeight);
	$('#city').selectmenu();

	var accordionsMenu = $('.cd-accordion-menu');

	$('.view-all a, .view-all-home a').not('.href').on('click', function (e) {
			var parentContainer = $(this).parents().eq(1),
				container = parentContainer.find('.resizing-container'),
				hiddenLi, positionTop;

			
			e.preventDefault();
			
			positionTop = parentContainer.offset().top;
			

			if(container.hasClass('small')){
				container.removeClass('small').removeAttr('style');			
			} else if(parentContainer.hasClass('content-box')){
				hiddenLi = parentContainer.find('.hiddenLI');
				hiddenLi.toggle();
			}else {
				if(!initview){
					$('body').animate({
						scrollTop: positionTop
					}, 500);
				}			
				initview = false;	
				container.addClass('small').height(theHeight);
			}
					
			//showHide($(this).parent());
	});
		

	if( accordionsMenu.length > 0 ) {

		

		accordionsMenu.each(function(){

			var accordion = $(this);

			//detect change in the input[type="checkbox"] value

			accordion.on('change', 'input[type="checkbox"]', function(){

				var checkbox = $(this);

				console.log(checkbox.prop('checked'));

				( checkbox.prop('checked') ) ? checkbox.siblings('ul').attr('style', 'display:none;').slideDown(300) : checkbox.siblings('ul').attr('style', 'display:block;').slideUp(300);

			});

		});

	}
	$('.showmorebrand > a').click(function(e){
		e.preventDefault();
		$(e.target).parent().parent().children('ul').children('li:nth-child(n+8)').slideToggle();
		$(e.target).parent().parent().children('inner-ul').children('ul').children('li:nth-child(n+4)').slideToggle();
		
		});
	$('a.showmore').click(function(e){
		e.preventDefault();
		$('.opisanie-marki p:nth-child(n+2)').slideToggle();
		$('.opisanie-marki div:nth-child(n+2)').slideToggle();
		$('.opisanie-marki2 p:nth-child(n+2)').slideToggle();
		$('.opisanie-marki2 div:nth-child(n+2)').slideToggle();		
		});		
	$('a.click-otzuv').click(function(e){
		e.preventDefault();
		$('.form-otzuv').slideToggle();
		});
	$('#form-otzuv').submit(function(e){
		e.preventDefault();
		if($("#g-recaptcha-response").val() == ''){
			$('.captcha').effect( "shake" );
		}
		else if($('#form-otzuv-name').val() == ''){
			$('#form-otzuv-name').effect( "shake" );	
		}
		else if($('#form-otzuv-text').val() == ''){
			$('#form-otzuv-text').effect( "shake" );
		}

		else{
			//$('.form-otzuv input[type="submit"]').attr('disabled','disabled');
			$.ajax({
				method: "POST",
				url: "/companies/addcomment",
				data:$('#form-otzuv').serialize() 
			}).done(function() {
				$('#form-otzuv').append('<strong>Ваш отзыв добавлен, спасибо!</strong>');
			//	console.log('lets post');
				console.log($(e.target).serialize());
			});
		}
		
		
	});
	$('.branchphone a').click(function(e){
		
		e.preventDefault();
	
		$(e.target).parent().removeClass('branchphone');
		$(e.target).hide();
		});		

/*	$( ".cityselector" ).selectmenu({
		change: function( event, ui ) {
			changeCity();
		}
		});
*/
	$('.showmoreaddr>td>a').click(function(e){
		
		e.preventDefault();
		$('.hidemoreaddr').slideToggle();
		});				
	setTimeout(function(){
	$('.view-all a, .view-all-home a').not('.href').click();	
	}, 1000);

	$( '.skidka' ).matchHeight({ byRow: true })
}});
function changeCity(selector){
	
	$.ajax({
		method: "POST",
		dataType: 'JSON',
		url: "/city/change",
		data:{city:$(selector).val()} 
	}).done(function(data) {
		console.log(data);
		if(!data.nochange){
			document.location.href = data.url; 
		}
		
	
	});
}

function showInFrame(link){
	var url = link.dataset.url || link.href;
	console.log(url);
	$('<div><div class="scroll-wrapper"><iframe src="'+url+'" width="100%" height="100%"></iframe></div></div>').modal();
	return false;
}

function zoomlogo(url){
	
	//console.log(url);
	$('<div><img src="'+url+'"/></div>').modal();
	return false;
}
