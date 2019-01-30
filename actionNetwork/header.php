<?php require_once($_SERVER['DOCUMENT_ROOT']."/_sanitize/sanitize_input.php");$var_arr = get_defined_vars();sanitize_vars($var_arr);?>
<?php require_once("includes/db_connection.php");?>
<?php require_once("includes/functions.php");?>
<?php
if(empty($search_no)){
   $search_no= 1; 
}


?><?php echo '<!DOCTYPE html><!--needed to refresh() onload to get iscroll to work on pages-->
<style>
.radial{
	border:none;
	text-decoration:none;
	outline:none;	
	}
#slideshow{
	margin:0px 0px 0px 13px;
}.red{color:red;}
    .wrapper{margin:15px;
	}
	.active, .nonactive{position:absolute;top:40px;
	}
	.active{z-index:2;visibility:visible;
	}
	.nonactive{z-index:1;visibility:hidden;
	} 
	.results{position:absolute;top:208px;
	}
	.bio{color:#092C6B;
	}
	.title{color:red;
	}
	img{margin:0px 0px 0px 0px;
	}
	
	div.results{margin:0px 20px 20px 20px;
	}
	#searchId{margin:0px 0px 0px 13px;
	}
	.radios td{padding:0px 20px 0px 20px;text-align:center;
	}
	#searchpage, #results{margin-width:20px;
	}
</style>

<head>
    <title>Promo Only - Music and Music Video POOL Mobile Search</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="description" content="Mobile Search for Promotional music POOL and music video POOL via CD, DVD, MP3 and M4A.  Get High Quality lossless, MPEG4 digital download for pro DJs, VJs, Radio Programmers, Nightclubs, Skating Rinks, Bowling Alleys, and Restaurants.">
        <link rel="author" href="/assets/humans.txt" type="text/plain" />
    <link href="stylesheets/1_2_1/jquery.mobile-1.2.1.min.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/jquery.mobile.iscrollview.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/jquery.mobile.iscrollview-pull.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/demo.css" media="screen" rel="stylesheet" type="text/css" />
    
    <script src="javascripts/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="javascripts/demo.js" type="text/javascript"></script>
    <script src="javascripts/jquery.mobile-1.2.1.min.js" type="text/javascript"></script>
    <script src="javascripts/iscroll.js" type="text/javascript"></script>
    <script src="javascripts/jquery.mobile.iscrollview.js" type="text/javascript"></script>
    <script src="javascripts/pull-example.js" type="text/javascript"></script>
    <script src="javascripts/form.js" type="text/javascript"></script>
 <script type="text/javascript">
	
 $(document).ready(function() { 

  $(\'input\').keypress(function(e) {
        var code = (e.keyCode ? e.keyCode : e.which);
      if ( (code==13) || (code==10))
            {
            //$(this).blur();
            get_initial_list();
            }
			
	
        }
    )
	
//if (Input.GetKeyDown(KeyCode.Escape)) {  alert("unloading"); }



	})



</script>
<!----buttons-->

	<script src="javascripts/jquery.sdb2.js"></script>
	
	
	<script type="text/javascript">
		$(function(){
		
			$(\'input:radio\').screwDefaultButtons({
				image: \'url("img/select.gif")\',
				width: 40,
				height: 40
			});
			
			$(\'input:checkbox\').screwDefaultButtons({
				image: \'url("img/checkboxSmall.jpg")\',
				width: 20,
				height: 20
			});

			
		
		});
	</script>
	
    
    <!--end buttons-->

</script>
    
<script type="text/javascript">
//  $("input[type=\'submit\']").attr("checked",true).checkboxradio("refresh"); 

	$("#artist_new_search").click(function(){
		alert(\'test\');
	});

</script>
<script type="text/javascript"><!--trying to make the first image not visible


$(document).on("pagebeforeshow",function(){ // When entering pagetwo
 //$(\'img\').css("visibility","hidden");
});
$(document).on("pageshow",function(){ 
});
$(document).on("pagebeforehide",function(){ // When leaving pagetwo
 // alert("pagetwo is about to be hidden");
});
$(document).on("pagehide",function(){ // When leaving pagetwo
  //alert("pagetwo is now hidden");
});



</script>
    <script type="text/javascript">

		function cycleImages(){
			
			  var $active = $(\'#slideshow .active\');
			  var $next = ($active.next().length > 0) ? $active.next() : $(\'#slideshow img:first\');
			  $active.fadeOut(650,function(){
				  $next.addClass(\'active\').hide().removeClass(\'nonactive\').fadeIn(450);
				  $active.removeClass(\'active\');
			  });
		}
		
		$(function() {
			$(\'#first\').addClass(\'active\').hide().removeClass(\'nonactive\').fadeIn(450);
			setInterval(\'cycleImages()\', 7500);		
			$(\'.productIconMain\').hover(function(){
				$(\'.productIconMain\').not(this).stop().animate({\'opacity\':\'.35\'},200);
			},function(){
				$(\'.productIconMain\').stop().animate({\'opacity\':\'1\'},200);
			});
		});
</script>
</head>'
?>