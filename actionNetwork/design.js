/* JavaScript Document */

var windowSize='';
var windowWidth=0;
var actualSize=0;
var firstRun = true;/* so animation only runs once */
var isIE=false;

$(document).ready(function(){
	if(!$.support.leadingWhitespace){isIE=true}
	
	//alert('this is working');
	checkBrowserSize();
	setInterval('checkBrowserSize()',100);
	//loadHero();
	$('header').css();//take out css background images for animation);
	
	$('a.mobile_menu').on('click',function(){
		var navHeight = $('nav').height();
		var newNavHeight = $('nav div').height();
		
		if(navHeight == 0){
			$('nav').animate({'height':newNavHeight+'px'},500);
			$(this).addClass('selected');
			}else{
				$('nav').animate({'height':'0px'},500);
				$(this).removeClass('selected');
				}
		
		
		});
	});
function animateHero(){
	if(firstRun){
		firstRun = false;
		//$('#hero img').imgpreload(function(){alert('images loaded')});//
		$('#hero img').imgpreload(function(){
			$('#hero .panel img').css({'opacity':0,'right':'-100px'}).animate({opacity:1,'right':'0px'},2000);
			$('#hero .panel .caption').css({'opacity':0,'left':'-75%'}).animate({opacity:1,'left':'0px'},2000);
			var logoPosition=$('header a.logo').position();
			$('header a.logo').css({'opacity':0,'top':'0px'}).delay(500).animate({opacity:1,'top':logoPosition.top+'px'},1000
			/*resizing causes logo to be in wrong place */, function(){
				/*so remove syleatribute after animation runs on that logo*/
				$(this).removeAttr('style');
				});

		});
	}
	}
function checkBrowserSize(){
if(isIE){
	windowWidth = $('body').width() +33;/*ie7n8*/
	}else{
		windowWidth = window.outerWidth;/*ie9*/	
		}



var contentWidth = $('body').width();
var sizeDiff = windowWidth - contentWidth;
actualSize = windowWidth-sizeDiff;

if(actualSize > 800){newWindowSize = 'large';}
if(actualSize <= 800 && actualSize > 500){newWindowSize='medium'}
if(actualSize <= 500){newWindowSize = 'small';}

/*hiding sizing one of two $('h1').html(windowWidth+' ('+contentWidth+'+'+sizeDiff+')'+' is '+newWindowSize);*/

/*constantly check but don't reload unless change*/

if(windowSize != newWindowSize){
	windowSize = newWindowSize;
	loadHero();
}else{
/*hiding sizing two of two	$('h1').append(' -- no change');*/
	}
}
function loadHero(){
if(windowSize=='large'){
	$('nav').css('height','100%');/*let div determine height bc is gone in small*/
	$('#hero').load('content/hero_content_large.html',function (){ animateHero();});
	}
if(windowSize=='medium'){
	if(actualSize > 500){ $('nav').css('height','100%');
	}             
	$('#hero').load('content/hero_content_medium.html',function (){ animateHero();});
	}
if(windowSize=='small'){
	if(actualSize <= 500){
		if(isIE){
				$('nav').css('height','auto');/*ie7n8 just have menu show at all times*/
			}else{	$('nav').css('height','100%');/*div collapses to 0 and overflow is hidden*/
				}
	
	
	 } 
	$('#hero').html('');
	$('a.mobile_menu').removeClass('selected');
	firstRun = false;/*so if start on small screen, once med screen images load it doesn't trigger animation*/
	}
	}
