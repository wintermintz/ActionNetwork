<!DOCTYPE html>
<!--http://localhost/lynda/Bootstrap_3_Essential/Ch01/01_03/bootstrap/index.html-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--newest IE renderer-->
        <meta name="viewport" content="width=device-width, initial-scale=1"><!--keeps mobile fonts from shrinking-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css"><!--personal after bootstrap to override-->
        <title>Shein</title>
    </head>
    <body>
<form>
<!--input-->
            <div class="form-group">
                <label for="email">Sign up for SheIn style news</label>
                <input class="form-control" type="text" id="email" placeholder="Your Email Address">
            </div> 
<!--select-->
            <div class="form-group">
                <select class="form-control" aria-label="select options for this"><option>a</option><option>b</option></select>
            </div>
<!--checkbox-->
            <div class="checkbox"><!--or checkbox-inline-->
                <label>
                    <input id="inputaddlist" type="checkbox" aria-label="input add list checkbox">
                    add to email blast
                </label>
            </div>
<!--radio-->
            <div class="radio "><!--or radio-inline-->
                <label>
                    <input name="v" type="radio" disabled>one
                </label>
            </div>
            <div class="radio">
                <label>
                    <input name="v" type="radio" value="two">two
                </label>
            </div>
           
<!--submit-->           
            <div class="form-group">
                <input type="submit" value="submit" class="btn btn-default pull-right">
            </div>
           
           
<!--inline checkbox-->
            <div class="form-group">
                <label class="checkbox-inline">
                    <input name="options" type="checkbox" disabled>one
                </label>
                <label class="checkbox-inline"><input name="options" type="checkbox">two
                </label>
            </div>
 <!--inline radio-->
            <div class="form-group">
                <label class="radio-inline">
                    <input name="options" type="radio" disabled>one
                </label>
                <label class="radio-inline"><input name="options" type="radio">two
                </label>
            </div>
            
            
            
            
            
        </form>

<form class="form-inline"><!--best for small searches and use sr-only-->
    <div class="form-group">
    <label for="a" class="control-label sr-only">inline form</label>
    <input id="a" type="text" placeholder="a" class="form-control">
    </div>
   
    <label for="b" class="control-label">dfsdfdsf</label>
    <input id="b" type="text" placeholder="b" class="form-control">
   
    
</form>
            <form class="form-horizontal"><!--best for mobile as zoon cuts off label-->
                <div class="control-group">
                <label for="c" class="col-md-6 control-label">make a c selection</label>
                <div class="col-md-6"><select id="c" class="form-control"><option>c</option><option>b</option><option>c</option></select>
                </div>
                </div>
            </form>
        
                    <form class="form-inline">
                <div class="checkbox-inline">
                    <label>
                    <input type="checkbox" name="a" value="12">    a
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                    <input type="checkbox" name="b" value="13">   b
                    </label>
                </div>
                <div class="form-group">
                <input type="submit" value="sdsf" class="button">
                </div>
                
                <div class="radio "><!--or radio-inline-->
                <label>
                    <input name="v" type="radio" disabled>one
                </label>
            </div>
            <div class="radio">
                <label>
                    <input name="v" type="radio" value="two">two
                </label>
            </div>
            </form>
        
        <!--form control with has-warning, has-success has-error-->
        
        <form class="form-horizontal">
                <div class="form-group has-feedback has-success">
                    <label for="firstName" class="col-sm-4 control-label">Label</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="enter Name" id="firstName" aria-describedby="FN">
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span class="sr-only" id="FN">(success)</span>
                    
                    </div>
                </div>
                
            </form>
        
        <!-- input groups-->
        <div class="form-group">
           <div class="input-group">
               <span class="input-group-addon">$</span>
               <input id="fn" class="form-control" placeholder="type here"type="text" aria-label="input dollar amount">
                              <span class="input-group-addon">.00</span>

           </div>
           
       </div>
        
        <!--input group with check boxes and feedback-->
        
        <div class="container">
            <form class="form-horizontal">
                <div class="form-group has-success has-feedback">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input id="inputaddlist" type="checkbox" checked aria-label="input add list checkbox" aria-describedby="fn">
                            add to email blast
                        </span>
                        <input class="form-control" type="text" id="one" placeholder="Enter Amount in Dollars" aria-label="enter amount in dollars" aria-describedby="first">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-ok form-control-success" aria-hidden="true"></span>
                            <span id="fn" class="sr-only">(success)</span>
                        </span>

                    </div>
                </div>
            </form>
        </div>
        <form>
        <div class="fieldset"><legend> hi</legend>
            <div class="form-group"></div>
        </div>
        </form>
        <!--input group like search button-->
        <form>    
            <div class="form-group">
                <div class="input-group">
                    <input type ="text" class="form-control" placeholder="search terms">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Search</button>
                    </span>        
                </div>
            </div>
        </form>
        
        <!--read only-->
        <input class="form-control" type="text" id="inputName" placeholder="texttobeseen" value="texttobeseen" readonly>
         <!--read only full version-->
        <form class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label" for="inputName">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control input-lg" type="text" id="inputName" placeholder="texttobeseen" value="texttobeseen" readonly>

                    </div>
                </div>
            </form>
        <!--end read only-->
         <!--give elements the styling of form control with p class=form control static-->
                 <div class="container">
            
            <hr>
            <form class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label" for="inputName">Name</label>
                    <div class="col-sm-10"> 
                        <p id="inputName" class="form-control-static">hi</p>
                    </div>
                </div>
            </form>


        </div>
         
         <!-- form group sizing form-group-sm overrides .input-lg Change size of form-->
         <form class="form-horizontal">
                <div class="form-group form-group-sm "><label class="col-sm-2 control-label" for="inputName">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control input-sm" type="text" id="inputName" placeholder="texttobeseen" value="texttobeseen" readonly>

                    </div>
                </div>
            </form>
         
         <!--icons-->
         
         <h1><span class="glyphicon-print" aria-hidden="true"></span>Print</h1>
         
         <!--icons inside of buttons-->
         
         <button type="button" class="btn btn-default">
             <span class="flyphicon glyphicon-print"
                   aria-hidden="true"></span>Print
         </button>
         
         <!--no words for that button? Let screen readers know-->
         
          <button type="button" class="btn btn-default"  aria-label="print">
             <span class="glyphicon glyphicon-print"
                   aria-hidden="true"></span>
         </button>
         
         <!--dropdown with screen reader too-->
        
         
         <div class="btn-group">
    <button type="button" class="btn btn-danger" >Action</button>
    <button type="button" class="btn btn-warning dropdown-toggle" 
            aria-expanded="false" aria-haspopup="true" id="action" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only"  aria-label="toggle"></span>
    </button>
    <ul class="dropdown-menu " aria-labeledby="action">
        <li class="disabled">hello</li>
        <li role="separator" class="divider"></li>
        <li>dog</li>
    </ul>
</div>
         
         <!--button group-->
          <div class="btn-group" role="group" aria-label="..."><!--role is group for screen readers when more than one functioning button-->
                <button type="button" class="btn btn-default" >cat</button>
                <button type="button" class="btn btn-default" >dog</button>
                <button type="button" class="btn btn-default" >mouse</button>

            </div>
         
         <!--toolbars are groups of btn-groups-->
        <div class="btn-toolbar" role="toolbar" aria-label="...">
            <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default" >cat</button>
                <button type="button" class="btn btn-default" >dog</button>
                <button type="button" class="btn btn-default" >mouse</button>

            </div>

            <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default" >cat</button>
                <button type="button" class="btn btn-default" >dog</button>
                <button type="button" class="btn btn-default" >mouse</button>

            </div>
        </div>
         
         
         <!--Justified button groups expand to be the full width of their container-->
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <div class="btn-group" role="group" aria-label="..."><!--role is group for screen readers when more than one functioning button-->
                <button type="button" class="btn btn-default" >cat</button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" >dog</button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" >mouse</button>
            </div>    
        </div>
         
         
         <!--navigation-->
         <ul class="nav nav-tabs">
             <li role="presentation" class="active"><a href="#">aardvark</a></li> 
             <li role="presentation"><a href="#">home</a></li>
         </ul>
         <ul class="nav nav-pills">
             <li role="presentation" class="active"><a href="#">ab</a></li> 
             <li role="presentation"><a href="#">home</a></li>
         </ul>
         <ul class="nav nav-default">
             <li role="presentation" class="active"><a href="#">ac</a></li> 
             <li role="presentation"><a href="#">home</a></li>
         </ul>

         <!---navigation stacked-->
         <ul class="nav nav-default nav-stacked">
             <li role="presentation" class="active"><a href="#">ad</a></li> 
             <li role="presentation"><a href="#">home</a></li>
         </ul>
         <ul class="nav nav-pills nav-stacked">
             <li role="presentation" class="active"><a href="#">hae</a></li> 
             <li role="presentation"><a href="#">home</a></li>
         </ul>
         <!--navigation justified-->
         
         <ul class="nav nav-default nav-justified">
             <li role="presentation" class="active"><a href="#">af</a></li> 
             <li role="presentation"><a href="#">home</a></li>
         </ul>
         <ul class="nav nav-pills nav-justified">
             <li role="presentation" class="active"><a href="#">ag</a></li> 
             <li role="presentation"><a href="#">home</a></li>
         </ul>
         
         <!-- --------navigation with a navbar --------------   -->
         <!--buttons class add navbar-btn 
         <!--forms class add navbar-form with optional navbar-lefthand
         <!-- <p> text class add navbar-text-->
         
        <nav class="navbar navbar-inverse"><!--dont need role=presentation on lis inside nav tag-->
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">b</a></li> 
                <li ><a href="#">cc</a></li>
            </ul>
        </nav>
        <nav class="navbar navbar-default"><!--dont need role=presentation on lis inside nav tag-->
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">h</a></li> 
                <li ><a href="#">ho</a></li>
            </ul>
        </nav>
        
        <!--navigation fixed on top or bottom-->
           <nav class="navbar navbar-default navbar-fixed-top">
       <!--put everything below it in a container and style that container to have a top padding of 50-70px-->
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">11</a></li> 
                <li ><a href="#">22</a></li>
            </ul>
        </nav>
            
         <nav class="navbar navbar-default navbar-fixed-bottom"><!--dont need role=presentation on lis inside nav tag-->
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">11</a></li> 
                <li ><a href="#">22</a></li>
            </ul>
        </nav>
        
        <!--navbar in a container-->
        <nav class="navbar navbar-default">
            <div class="container"><!--put in a div to align better with other coneten-->
                <!--dont need role=presentation on lis inside-->
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">gt</a></li> 
                    <li ><a href="#">tg</a></li>
                </ul>

            </div>
        </nav>
        <!--logo with surrounding code-->
        <nav class="navbar navbar-default">
            <div class="container">
                <!--logo only-->
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">wisdom pets<!-- could've been an img instead of an a-->
                    </a>
                </div>
                <!--end logo only-->
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">gt</a></li> 
                    <li ><a href="#">tg</a></li>
                </ul>
            </div>
        </nav>
        
        <!--dropdownmenuin a navbar with logo-->
        <nav class="navbar navbar-default">
            <div class="container">
                <!--logo only-->
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">wisdom pets<!-- could've been an img instead of an a-->
                    </a>
                </div>-
                <!--end logo only-->
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#"
                            class="dropdown-toggle"
                            data-toggle="dropdown"
                            role="button"
                            aria-haspopup="true"
                            aria-expanded="false">Services
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu"><li><a href="#">r</a></li><li>fg</li>
                        </ul>

                    </li> 
                    <li ><a href="#">tg</a></li>
                </ul>
            </div>
        </nav>
        


           <div class="container">
            <form class="form-horizontal">
                <div class="form-group form-group-sm "><label class="col-sm-2 control-label" for="inputName">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control input-sm" type="text" id="inputName" placeholder="texttobeseen" value="texttobeseen" readonly>

                    </div>
                </div>
            </form>
            <hr>
            <form class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label" for="inputName">Name</label>
                    <div class="col-sm-10"> 
                        <p id="inputName" class="form-control-static">hi</p>
                    </div>
                </div>
            </form>


        </div>


    </div>
    <div class="topmost" >
        <div class="container">
            <div class="row">
                <div class="col-sm-6"><h5>Not Ship to <span class="text-danger">United States </span><a href="#">Visit International Ship</a></h5>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-3">
                            <h5> Register/Sign In</h5>
                        </div>
                        <div class="col-sm-3">
                            <h5>Online Help</h5>
                        </div>
                        <div class="col-sm-3">
                            <h5>USA</h5>
                        </div>
                        <div class="col-sm-3">
                            <h5>Shopping Bag</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

    </div>




    <!--logo and navigation here-->
    <div class="greybox container marginbottom">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-9 filtercolumn">
                <form class="form-horizontal" id="filterform">
                    <div class="form-group">
                        <label for="filter1">Sort By:</label>
                        <select id="filter1" >
                            <option value="lth">Low To High</option>
                            <option>High To Low</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container highlights "><!-- three highlights-->
        <div class="row ">
            <div class="col-sm-4  bg-info  ">
                <a href="#" role="button" class="btn btn-default form-control greybox  "><span class="text-danger">FREE</span> standard shipping<br/> no minimum</a>
            </div>
            <div class="col-sm-4  bg-info scrunch ">
                <a href="#" role="button" class="btn btn-default form-control greybox"><span class="text-danger">40%</span> OFF YOUR FIRST ORDER</a>
            </div>
            <div class="col-sm-4  bg-info scrunch ">
                <a class="btn btn-default form-control greybox">the <span class="text-danger">new arrivals</span> you can't<br/>stop raving about. <span class="text-danger">CLICK HERE</span></a>
            </div>

        </div>
    </div>

    <div class="container padtop">
        <div class="row">
            <div class="col-sm-3">

                <div class="row">
                    <div class="col-sm-12"> 
                        <img class="product img-responsive" src="img/1.jpg"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12"> 
                        <h6  class="nobottommargin">Army Green Mock Neck Shift Tshirt Dress</h6>
                    </div>
                </div>
                <div class="row pricesandicons">
                    <div class="col-sm-6"> 
                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="nobottommargin"><span class="price">US $5.85 &nbsp;</span>(Sale)</h6>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="del nobottommargin smalltopmargin">US $12.85</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 detailiconsdiv ">
                        <img src="img/color.jpg" alt="alt"  class="tinyimg pull-right" />
                        <img src="img/time.jpg" alt="alt"  class="tinyimg pull-right" />
                        <img src="img/star.jpg" alt="alt"  class="tinyimg pull-right" /> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12"><img src="img/flag.jpg" class="flag">Stock in US</div>
                </div>
            </div>
            <div class="col-sm-9"> here are the other three images</div>
        </div>
    </div>
    <hr>JOIN US
    <div class="container">
        <div class="row">
            <div class="col-sm-6 ">
                <div class="row"> 
                    <div class="col-xs-1 col-sm-2 col-md-1"><a href="#"><img src="img/fb.jpg" alt="facebook"></a></div>
                    <div class="col-xs-1 col-sm-2 col-md-1"><a href="#"><img src="img/tw.jpg" alt="twitter"></a></div>
                    <div class="col-xs-1 col-sm-2 col-md-1"><a href="#"><img src="img/p.jpg" alt="pintrest"></a></div>
                    <div class="col-xs-1 col-sm-2 col-md-1"><a href="#"><img src="img/p2.jpg" alt=""></a></div>
                    <div class="col-xs-1 col-sm-2 col-md-1"><a href="#"><img src="img/p3.jpg" alt=""></a></div>
                    <div class="col-xs-1 col-sm-2 col-md-1"><a href="#"><img src="img/p4.jpg" alt=""></a></div>
                    <div class="col-xs-1 col-sm-2 col-md-1"><a href="#"><img src="img/p5.jpg" alt=""></a></div>
                    <div class="col-xs-1 col-sm-2 col-md-1"><a href="#"><img src="img/p6.jpg" alt=""></a></div>
                    <div class="col-xs-1 col-sm-2 col-md-1"><a href="#"><img src="img/p7.jpg" alt="google"></a></div>
                    <div class="col-xs-3 hidden-sm">&nbsp;</div>      
                </div>
            </div>
            <div class="col-sm-6">
                <form class="form-inline">
                    <div class="form-group">
                        <label for="target" >Sign up for SheIn style news</label>
                        <input id="target" type="text" class="form-control" placeholder="Your Email Address">            
                    </div>
                    <div class="form-group">
                        <input type="submit" value="submit" class="btn btn-default">
                    </div>
                </form>

            </div>
        </div>

    </div>
    <div class="greybox bottommost">
        <div class="container">
            <div class="col-sm-2 multilinks">
                <ul><li><h5>TRENDING</h5></li>
                    <li><h6><a href="#">Vintage Dresses</a></h6></li>
                    <li><h6><a href="#">Maxi Dresses</a></h6></li>
                    <li><h6><a href="#">Party Dresses</a></h6></li>
                    <li><h6><a href="#">Floral Dresses</a></h6></li>
                    <li><h6><a href="#">Bodycon Dresses</a></h6></li>
            </div>
            <div class="col-sm-2 multilinks">
                <ul><li><h5>SHOPPING GUIDE</h5></li>
                    <li><h6><a href="#">How to Order</a></h6></li>
                    <li><h6><a href="#">How to Measure</a></h6></li>
                    <li><h6><a href="#">How to Pay</a></h6></li>
                    <li><h6><a href="#">FAQ</a></h6></li>
            </div>
            <div class="col-sm-2 multilinks">
                <ul><li><h5>help Center</h5></li>
                    <li><h6><a href="#">Shipping Info</a></h6></li>
                    <li><h6><a href="#">Return Policy</a></h6></li>
                    <li><h6><a href="#">Copyright Notice</a></h6></li>
                    <li><h6><a href="#">Help & Support</a></h6></li>
                    <li><h6><a href="#">Bodycon Dresses</a></h6></li>
            </div>
            <div class="col-sm-2 multilinks">
                <ul><li><h5>customer service</h5></li>
                    <li><h6><a href="#">Contact Us</a></h6></li>
                    <li><h6><a href="#">My Account</a></h6></li>
                    <li><h6><a href="#">Online Help</a></h6></li>
                    <li><h6><a href="#">Track Your Order</a></h6></li>
            </div>
            <div class="col-sm-2 multilinks">
                <ul><li><h5>Shein program</h5></li>
                    <li><h6><a href="#">Bonus Point Program</a></h6></li>
                    <li><h6><a href="#">Fashion Blogger Program</a></h6></li>
                    <li><h6><a href="#">SheIn Publisher Program</a></h6></li>
                    <li><h6><a href="#">Trial Report Guide</a></h6></li>
                    <li><h6><a href="#">Bodycon Dresses</a></h6></li>
            </div>
            <div class="col-sm-2 multilinks">
                <ul><li><h5>More info</h5></li>
                    <li><h6><a href="#">About Us</a></h6></li>
                    <li><h6><a href="#">Wholesale</a></h6></li>
                    <li><h6><a href="#">Official Blog</a></h6></li>
                    <li><h6><a href="#">Become our affiliate</a></h6></li>
                    <li><h6><a href="#">SheIn apps<span class="icon glyphicon glyphicon-heart"></span></a></h6></li>
            </div>
        </div>

    </div>

    <div class="greybox">
        <div class="container bordertop bottomsectionspacing">
            <div class="row">
                <div class="col-sm-10">
                    <p>SheIn is a registered trademark of SheIn Group Limited. All Rights Reserved</p>
                </div> 
                <div class="col-sm-2">
                    <img src="img/trustware.jpg"><img src="img/dmca.jpg">  
                </div>
            </div>
        </div>
    </div>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>