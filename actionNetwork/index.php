<?php require_once($_SERVER['DOCUMENT_ROOT']."/_sanitize/sanitize_input.php");
$var_arr = get_defined_vars();
sanitize_vars($var_arr);?>
<?php require_once("includes/db_connection.php");?>
<?php require_once("includes/functions.php");?>

<?php
if(empty($search_no)){
   $search_no= 1; 
}


?>


<!DOCTYPE html><!--needed to refresh() onload to get iscroll to work on pages-->
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
    <title>po - Music and Music Video POOL Mobile Search</title>
    
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
    <!--<script src="javascripts/demo.js" type="text/javascript"></script>-->
    <script src="javascripts/jquery.mobile-1.2.1.min.js" type="text/javascript"></script>
    <script src="javascripts/iscroll.js" type="text/javascript"></script>
    <script src="javascripts/jquery.mobile.iscrollview.js" type="text/javascript"></script>
    <script src="javascripts/pull-example.js" type="text/javascript"></script>
    <script src="javascripts/form.js" type="text/javascript"></script>
 <script type="text/javascript">
	
 $(document).ready(function() { 

  $('input').keypress(function(e) {
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
		
			$('input:radio').screwDefaultButtons({
				image: 'url("img/select.gif")',
				width: 40,
				height: 40
			});
			
			$('input:checkbox').screwDefaultButtons({
				image: 'url("img/checkboxSmall.jpg")',
				width: 20,
				height: 20
			});

			
		
		});
	</script>
	
    
    <!--end buttons-->

</script>
    
<script type="text/javascript">
//  $("input[type='submit']").attr("checked",true).checkboxradio("refresh"); 

	$("#artist_new_search").click(function(){
		alert('test');
	});

</script>
<script type="text/javascript"><!--trying to make the first image not visible


$(document).on("pagebeforeshow",function(){ // When entering pagetwo
 //$('img').css("visibility","hidden");
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
			
			  var $active = $('#slideshow .active');
			  var $next = ($active.next().length > 0) ? $active.next() : $('#slideshow img:first');
			  $active.fadeOut(650,function(){
				  $next.addClass('active').hide().removeClass('nonactive').fadeIn(450);
				  $active.removeClass('active');
			  });
		}
		
		$(function() {
			$('#first').addClass('active').hide().removeClass('nonactive').fadeIn(450);
			setInterval('cycleImages()', 7500);		
			$('.productIconMain').hover(function(){
				$('.productIconMain').not(this).stop().animate({'opacity':'.35'},200);
			},function(){
				$('.productIconMain').stop().animate({'opacity':'1'},200);
			});
		});
</script>
</head>
  
<body>
  <!--had div id="wrapper here encasing entire page ending in div-->
	<div id="searchpage" class="pull-demo-page" data-role="page"><!--was class form-demo-page-->
      		<div data-id="header" data-position="fixed" data-role="header" data-tap-toggle="false" data-transition="none">
			     &nbsp;
		</div>
           



 <table border="0" style="z-index:9999;text-align:center;margin-left:auto;margin-right:auto;">
  <tbody>
    <tr>
      <td></td>
      <td><table width="" border="0">
        <tbody>
          <tr>
            <td style="height:136px;width:280px;text-align:center;">
            <div id="slideshow">
           <!-- <img src="img/clear.png" alt=" Web Search" class="active"/>-->
                        <img src="img/mArtBanner13.png" id="first" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner14.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner15.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner16.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner17.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner18.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner19.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner20.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner21.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner13.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner14.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner15.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner16.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner17.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner18.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner19.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner20.png" alt="po Artists" class="nonactive" />
                        <img src="img/mArtBanner21.png" alt="po Artists" class="nonactive" />
                        
                        </div>
                  </td>
          </tr>
          <tr>
            <td style="height:40px;"><!--maybe take it out of the tabble--> <!--<form ng-submit="submitLogin()">--> <input type="text" id="searchId" placeholder="Search" style="width:250px;"/></td>
          </tr>
          <tr>
            <td><input type="button" name="submit" id="submitButtonId" value="submit" onclick="get_initial_list()" data-role="button" data-theme="c" data-inline="true">   </td>
          </tr>
          <tr>
            <td><table class="radios" border="0" style="width:100%;">
                            <tr style="margin-left:5px;">
                                <td style="width:33%;text-align:center;">
                                    <input type="radio" name="searchBy" id="searchBy" class="radial" style="position:absolute;top:30px;"checked="checked" value="title" >Title &nbsp;
                                </td>
                                <td style="width:33%;text-align:center;">
                                 <input type="radio" name="searchBy" id="searchBy" class="radial" style="position:absolute;top:30px;" value="artist" >Artist &nbsp;
                                   
                                </td>
                                <td style="width:33%;text-align:center;">
                                    <input type="radio" name="searchBy" id="searchBy" class="radial" style="position:absolute;top:30px;" value="issue" >Issue &nbsp;
                              <!--</form>--> </td>
                            </tr>
                        </table>
                        </td>
          </tr>
        </tbody>
      </table></td>
      <td></td>
    </tr>
  </tbody>
</table>
        <div data-iscroll="" data-role="content" style="position:relative;top:0px;height:40px;">
         
			<ul data-role="listview" id="r" class="ui-listview">
            	
            </ul>  
		</div>
				<div data-id="footer" data-position="fixed" data-role="footer" data-tap-toggle="false" data-transition="none" class="footer">
                <div data-role="navbar">
                  <ul>
                   <li>
                    	<a href="http://www.google.com" class="ui-btn">google</a>
                    </li>  
       
       
                  </ul>
                </div>
			</div>
      
	</div><!--end page 1-->
    <!--begin search results page-->
    <div id="search_results_page" class="pull-demo-page" data-role="page"><!--was class form-demo-page-->
 
		<div data-id="header" data-position="fixed" data-role="header" data-tap-toggle="false" data-transition="none">
			     &nbsp;
		</div>
                  

        <div data-role="content" style="max-height:500px;overflow-y:scroll;">
	 		<ul data-role="listview" id="results" class="ui-listview">
            	
            </ul>

        
		</div>
   				<div data-id="footer" data-position="fixed" data-role="footer" data-tap-toggle="false" data-transition="none" class="footer">
                <div data-role="navbar">
                  <ul> 
                    <li>
                    	<!--<a href="#" class="ui-btn" data-rel="back">Back</a>-->
                        <!--need bind?-->
                          <a class="ui-btn" id="more" onclick="get_list()">More</a>
           
           
          


 
                    </li>   
                      <li>
                    	<!--<a href="#" class="ui-btn" data-rel="back">Back</a>-->
                        <!--need bind?-->
                          <a class="ui-btn" id="back_list" onclick="get_back_list()">Back</a>
           
           
          

 
 
                    </li> 
                    <li>
                       <a class="ui-btn" href="#searchpage" onclick="clear_results()">New Search</a>
                    </li>
                
                    </li>
                  </ul>
                </div>
			</div>
      
	</div>   
    <!--end search results page-->
    <!--beginning loading page--> 
 	<div class="pull-demo-page" data-role="page" id="loading"><!--was data-dialog="true"-->
      
		<div data-id="header" data-position="fixed" data-role="header" data-tap-toggle="false" data-transition="none"><!--do I keep repeating the header on every page?-->&nbsp;
		</div>
		

		<div data-role="content" style="max-height:500px;overflow-y:scroll;">
        <h1>loading page</h1>
	<img src="img/ajax-loader.gif" alt="loading"/>
            
			<ul data-role="listview" id="results_holder" class="ui-listview">
            	
            </ul>
           
        
		</div>
      
      
				<div data-id="footer" data-position="fixed" data-role="footer" data-tap-toggle="false" data-transition="none" class="footer">
                <div data-role="navbar">
                  <ul>
                    <li>
                    	<a href="#" class="ui-btn" data-rel="back">Back</a>
                    </li>    
                    <li>
                       <a class="ui-btn" href="#searchpage" onclick="clear_results()">New Search</a>
                    </li>
                 
                  </ul>
                </div>
			</div>
     
	</div>    
<!--end loading-->
      
 <!--beginning page 2 --> 
 	<div class="pull-demo-page" data-role="page" id="title_page"><!--was data-dialog="true"-->
      
		<div data-id="header" data-position="fixed" data-role="header" data-tap-toggle="false" data-transition="none"><!--do I keep repeating the header on every page?-->&nbsp;
		</div>
		
      <!--<div class="results"> if necessary-->
		<div data-role="content" style="max-height:500px;overflow-y:scroll;">
      
			<ul data-role="listview" id="results_holder" class="ui-listview">
            	
            </ul>
      
        
		</div>
        <!--<div end class="results"> if necessary, maybe position affected by pullup and pulldown-->
      
				<div data-id="footer" data-position="fixed" data-role="footer" data-tap-toggle="false" data-transition="none" class="footer">
                <div data-role="navbar">
                  <ul>
                    <li>
                    	<a href="#" class="ui-btn" data-rel="back">Back</a>
                    </li>    
                    <li>
                       <a class="ui-btn" href="#searchpage" onclick="clear_results()">New Search</a>
                    </li>
        
                  </ul>
                </div>
			</div>
     
	</div>    
<!--end page 2-->

<!--beginning page 3 --> 
 	<div class="pull-demo-page" data-role="page" id="issue_page"><!--was data-dialog="true"-->
      
		<div data-id="header" data-position="fixed" data-role="header" data-tap-toggle="false" data-transition="none"><!--do I keep repeating the header on every page?-->&nbsp;
		</div>
		
      <!--<div class="results"> if necessary-->
		<div data-role="content" style="height:550px;overflow:scroll;">
    
            
			<ul data-role="listview" id="results_holder" class="ui-listview">
            
            </ul>
            
 
        
		</div>
        <!--<div end class="results"> if necessary, maybe position affected by pullup and pulldown-->
      
			<div data-id="footer" data-position="fixed" data-role="footer" data-tap-toggle="false" data-transition="none" class="footer">
                <div data-role="navbar">
                  <ul>
                    <li>
                    	<a href="#" class="ui-btn" data-rel="back">Back</a>
                    </li>    
                    <li>
                       <a class="ui-btn" href="#searchpage" onclick="clear_results()">New Search</a>
                    </li>
      
                  </ul>
                </div>
			</div>
      
	</div>    
<!--end page 3-->


<!--beginning page 4 --> 
 	<div id="artist_page" class="pull-demo-page" data-role="page"><!--was data-dialog="true"-->
      
		<div data-id="header" data-position="fixed" data-role="header" data-tap-toggle="false" data-transition="none"><!--do I keep repeating the header on every page?-->&nbsp;
		</div>
		
  <!-- <div class="results"> if necessary-->
		<div data-role="content" style="max-height:500px;overflow-y:scroll;"><!--  id="results_holder"missing positin:relative to 330px-->
     
            
			<ul data-role="listview" id="results_holder" class="ui-listview">
            
            </ul>
            
      
        
		</div>
        <!--</div> end class="results"> if necessary, maybe position affected by pullup and pulldown-->
      
				<div data-id="footer" data-position="fixed" data-role="footer" data-tap-toggle="false" data-transition="none" class="footer">
                <div data-role="navbar">
                  <ul>
                    <li>
                    	<a href="#" class="ui-btn" data-rel="back">Back</a>
                    </li>    
                    <li>
                       <a class="ui-btn" href="#searchpage" onclick="clear_results()">New Search</a>
                    </li>
       
                  </ul>
                </div>
			</div>
      
	</div>    
<!--end page 4-->
 <!--    <script type="text/javascript">
			$(document).on('pageinit', function()
			{
				//app.initialize();
				
				$(document).on("pagecreate", "#issue_page", function(event)
				{
					$("#results_holder_holder").bind({
						iscroll_onpullup: function(event, data)
						{alert('hello');
							//load_more_releases();
						},
						
						iscroll_onpulldown: function(event, data)
						{
							//refresh_releases(1);
						}
					});
				});
				
                
			/*
				$(document).on("pagecreate", "#searchView", function(event)
				{
					$("#search_scroller").bind({
						iscroll_onpullup: function(event, data)
						{
							if (!$('#search_executing').length)
							{
								$('#search_results_list').append('<li id="search_executing"></li>');
								load_more_search_results();
								
								setTimeout(function ()
									{
										$('#search_executing').remove();
										$("#search_results_list").listview("refresh");
										$("#search_scroller").iscrollview("refresh");
									},
								1500);
							}
						},
						
						iscroll_onpulldown: function(event, data)
						{
							redo_search();
						}
					});
				});
				*/
				
			});
        </script> 
     -->    
    
  </body>
</html>