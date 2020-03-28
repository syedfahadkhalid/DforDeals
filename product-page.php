<?php
include('connection.php');

$deal_id=$_GET['dealid'];

$query='Select * from deals where Deal_Id="'.$deal_id.'"';
$result=mysql_query($query);
$record=mysql_fetch_assoc($result);

$name=$record['Name'];
$price=$record['Price'];
$desc=$record['Description'];

$img=$record['Img_main'];
$img2=$record['Img2'];
$img3=$record['Img3'];
$img4=$record['Img4'];
$img5=$record['Img5'];
?>
<!DOCTYPE html>
<html lang="en">

<head>   
<title>D for Deals</title>
<link rel="icon" href="images/Screenshot (53).png" type="image" />	
<meta charset="utf-8">	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
    
<!-- CSS STYLES -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/mystyle.css" rel="stylesheet" type="text/css" />  
<!-- FONTS -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    
<!-- SCRIPTS -->
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
<script src='jquery.zoom.js' type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/jquery.twitter.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>  
<script src="js/superfish.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="js/animate.js" type="text/javascript"></script>
<script src="js/myscript.js" type="text/javascript"></script>	


    </head>

<body>
 <script type="text/javascript">
document.oncontextmenu = function(e) {
    e = e || window.event;
    if (/^img$/i.test((e.target || e.srcElement).nodeName)) return false;
};
</script>  
    
    <div class="strip">
        <div class="container"><?php 
								$query4='Select * from info';
								$result4=mysql_query($query4);
								$record4=mysql_fetch_assoc($result4);
								
								$mobile4=$record4['mobile'];
								?>
           <span class="glyphicon glyphicon-phone p"><?php echo ' '.$mobile4?></span>
            <div class="pull-right">
                <span class="glyphicon glyphicon-shopping-cart p"> </span>&nbsp;
                <span class="hidden-small-desktop p">Online Shopping in Pakistan !! &nbsp;&nbsp;</span>
            </div>
          </div>
        
    </div>
<!-- PRELOADER -->
<img id="preloader" src="images/preloader.gif" alt="" />
<!-- //PRELOADER -->
	<!-- PAGE -->
	<div id="page">
		
		<!-- CONTAINER -->
		<div class="container page_block">
			
			<!-- WRAPPER -->
			<div class="wrapper">
				
				<!-- HEADER -->
				<header>
					
					<!-- LOGO -->
					<div class="logo">
						<a href="index.php" alt=""><img src="images/logo.png" alt="" /></a>
					</div><!-- LOGO -->
					
					<!-- MENU -->
				
				</header><!-- //HEADER -->
				
				
				<!-- BREADCRUMBS -->
				<section class="full_width breadcrumbs_block clearfix">
					<div class="breadcrumbs_content">
						<h2 class="pull-left">Deal  Page</h2>
					</div>
						<ol class="pull-right breadcrumb">
						<li><a href="index.php">Daily Deals</a></li>
						<li><a href="product-page.php?dealid=<?php echo $deal_id?>">Product-Page</a></li>

							</ol>
					<div class="overlay"></div>
					<div class="overlay_black"></div>
				</section><!-- //BREADCRUMBS -->
				
				<!-- Product Details -->
				<section class="product_details type2">
					<div class="row ">
                        <div class="col-lg-12">             
						<div class="col-lg-4 col-md-4 col-sm-4 padbot40  ">
                             <div class=" line"> <h3>D For Deals <?php echo $name ?></h3></div>
							<div class="product_item_details">
								<div id="slider2" class="flexslider">
									<ul class="slides">
                                    
     									        <li><a href="javascript:void(0);"><img src="<?php echo $img?>" alt="" /></a></li>
										<li><a href="javascript:void(0);"><img src="<?php echo $img2?>" alt="" /></a></li>
										<li><a href="javascript:void(0);"><img src="<?php echo $img3?>" alt="" /></a></li>
										<li><a href="javascript:void(0);"><img src="<?php echo $img4?>" alt="" /></a></li>
										<li><a href="javascript:void(0);"><img src="<?php echo $img5?>" alt="" /></a></li>
									</ul>
								</div>
								<div id="carousel2" class="flexslider">
									<ul class="slides">
                                    	                                        <li><a href="javascript:void(0);"><img src="<?php echo $img?>" alt="" /></a></li>
										<li><a href="javascript:void(0);"><img src="<?php echo $img2?>" alt="" /></a></li>
										<li><a href="javascript:void(0);"><img src="<?php echo $img3?>" alt="" /></a></li>
										<li><a href="javascript:void(0);"><img src="<?php echo $img4?>" alt="" /></a></li>
                                                                                <li><a href="javascript:void(0);"><img src="<?php echo $img5?>" alt="" /></a></li>
										
									</ul>
								</div>
							</div>
							<div class="clear"></div>
                                                        <div class="defination">
                                                         <!-- Tab -->
							
							<div class="tab_block">
								<ul id="myTab" class="nav nav-tabs">
									<li class="active"><a href="#flexibility" data-toggle="tab" style="color:#000; background:white;"><b>Description</b></a></li>
									
								</ul>
								<div id="myTabContent" class="tab-content">
									<div class="tab-pane fade in active clearfix" id="flexibility">
                                                                                <h3><b>Price: <?php echo $price ?></b></h3>
										<p style="color:#000"><?php echo $desc?></p>
									</div>
									
								</div>
							</div><!-- /Tab -->
                                                        </div>
						</div>
                      
<div class="col-lg-4 col-md-4 col-sm-4">   
      <div class=" line"><h3>Order Form</h3></div>

    <div  style="padding-top:5px; padding-right:10px;"" >
    
      
        <form class="form-horizontal " action="order.php?dealid=<?php echo $deal_id?>" method="post">
        
							
		<fieldset class="scheduler-border" style="color:#999;box-shadow:#999;">
                <br>
                  <div class="alert alert-danger alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  <strong>Message!</strong> Every Field is Mandatory!
		  </div>
                <div class="form-group"><label for="" style="color:#000">First Name:</label><input type="text" class="form-control" id="fn" placeholder="First Name" name="firstname"></div><br>
                <div class="form-group"><label for=""style="color:#000">Last Name:</label><input type="text" class="form-control" id="ln" placeholder="Last Name" name="lastname"></div><br>
                <div class="form-group"><label for=""style="color:#000">Email address:</label><input type="email" class="form-control" id="email" placeholder="Email" name="email"></div><br>
                <div class="form-group"><label for=""style="color:#000">Phone Number:</label><input type="text" class="form-control" id="number" placeholder="0321-2343133" name="phone"></div><br>             
                <div class="form-group"><label for=""style="color:#000">Address:</label><input type="text" class="form-control" id="add" placeholder="Address" name="address"></div><br>
                <div class="form-group"><label for=""style="color:#000">City:</label><input type="text" class="form-control" id="pwd" placeholder="City-Name" name="city"></div><br>
                <div class="form-group"><label for=""style="color:#000">Size:</label><input type="text" class="form-control" id="pwd" placeholder="Sizes" name="size"></div><br>
                <div class="form-group">
                <label for=""style="color:#000">Enter Colors:</label><input type="text" class="form-control" id="fn" placeholder="red, yellow, green" name="color"></div>
                <div class="form-group"><label style="color:#000">Comment</label><textarea name="comment" class="form-control" row="5" ></textarea></div>
                <br><br>
               <div class="center"> <button type="submit" class="btn btn-default btn-lg margbot5" name="submit" ><span style="font-size: 1em" class="glyphicon glyphicon-shopping-cart"></span> Place Order</button></div>
            </fieldset>
        </form>   
    <br>
   
</div>
                            </div>
                          
    
  <div class="col-lg-4 col-md-4 col-sm-3 pull-8 ">
                    <div class="line"><h3>Recent Deals</h2></div>     
               <div class="jcarousel-wrapper">
						<div class="jcarousel">
                        <ol style="padding-left:0px;">
                        <?php
							$query2='Select * from deals LIMIT 0,4';
							$result2=mysql_query($query2);
							
							while($record2=mysql_fetch_assoc($result2))
							{
								 $recent_deal_id=$record2['Deal_Id'];
								 $recnt_deal_img=$record2['Img_main'];
						?>
							
								<li style="width:250px;">
                                    <div class="product_item2 paddi">
				<a id="carousel6" href="product-page.php?dealid=<?php echo $recent_deal_id ?>" alt=""><img class="img-responsive" width="240px" height="200px" src="<?php echo $recnt_deal_img?>" alt="" /></a>
                                    </div>
								</li>
                                <?php } ?>
							</ol>
						</div>
					</div><!-- //JCAROUSEL -->
		</div>
                           
                                
                            </div><!--large 12-->
                        
</div>
                    
				</section><!-- //Product Details -->

				<!-- Related Production -->
    <section class="product_page">
					<h3 class="line">Other Deals</h3>
                  
					
					<div class="jcarousel-wrapper">
                        <div class="flexslider">
  <ul class="slides">
  <?php
  	$query3='SELECT * FROM deals order by RAND() LIMIT 0,12';
	$result3=mysql_query($query3);
	
	while($record3=mysql_fetch_assoc($result3))
	{ 
		$other_deal_id=$record3['Deal_Id'];
		$other_deal_img=$record3['Img_main'];
  ?>
    <li>
      <a href="product-page.php?dealid=<?php echo $other_deal_id?>"><img src="<?php echo $other_deal_img ?>" /></a>
    </li>
    <?php } ?>
    
    <!-- items mirrored twice, total of 12 -->
  </ul>
</div
        ></div>
				</section>
				
				<!-- FOOTER -->
				<footer class="full_width footer_block">
					
					<!-- ROW -->
					<div class="row" data-animated="fadeInUp">
						
						<!-- RECENT TWEETS -->
						<div class="col-lg-4 col-md-3 col-sm-6 padbot20"><br>
							<h2>Useful Links</h2>
                                                           <ul class="foot_links">
								<li><span><a href="https://www.facebook.com/Df0rdeals.pk"><img  src="images/facebook.png"></a></span><a href="https://www.facebook.com/Df0rdeals.pk">www.facebook.com/Df0rdeals.pk</a></li>
								<li><span><a href="https://www.twitter.com/Df0rdeals.pk"><img  src="images/t.png"></a></span><a href="https://www.twitter.com/Df0rdeals.pk">www.twitter.com/Df0rdeals.pk</a></li>
				
							</ul>
                            
                            
						</div><!-- //USEFUL LINKS -->
                                                <div class="respon_clear"></div>
						<div class="col-lg-4 col-md-3 col-sm-6 padbot20"><br>
							
                                                              <br> <ul class="foot_links">
								<li><span class="glyphicon glyphicon-plane" style="font-size: 3.5em;"> </span><img src="images/ICONSa.png" alt="" /></li></ul>
								<ul class="foot_links">
                                                                <li><span class="glyphicon glyphicon-time" style="font-size: 3.5em;"></span><img src="images/ICONS.png" alt="" /></li>
				
							</ul>
                            
                            
						</div>
						
						
						<!-- LATEST NEWS -->
						<div class="col-lg-4 col-md-3 col-sm-6 padbot20">
							
						</div>
                    
                        <!-- //LATEST NEWS -->
                        <?php 
								$query3='Select * from info';
								$result3=mysql_query($query3);
								$record3=mysql_fetch_assoc($result3);
								
								$mobile=$record3['mobile'];
								$email=$record3['email'];
								$address=$record3['address'];
						
						?>
						
						<div class="col-lg-4 col-md-3 col-sm-6 padbot20">
							<h2><span class="glyphicon glyphicon-envelope"></span>Contact Us</h2>
							<ul class="foot_links">
								<li><span class="glyphicon glyphicon-phone"></span><a href="javascript:void(0);"><?php echo $mobile?></a></li>
								<li><span class="glyphicon glyphicon-envelope"></span><a href="javascript:void(0);"><?php echo $email?></a></li>
								<li><span class="glyphicon glyphicon-home"></span><a href="javascript:void(0);"><?php echo $address?></a></li>
								
							</ul><!-- //FOOTER SOCIALS -->
						</div>
					</div><!-- //ROW -->					
					<!-- COPYRIGHT -->
					<div class="copyright">
						<a class="copyright_logo" href="javascript:void(0);">D For Deals</a> <span> &copy; Copyright 2015</span>
                                                <div class="" style="float:right">
						<span class="glyphicon glyphicon-flash"></span>
                                                <span> Powered by </span><a class="copyright_logo" href=""><a href="https://www.facebook.com/touchtrans">Touch-Trans</a></a> </div>
					
                                         </div>
                                         
<!-- //COPYRIGHT -->
				</footer><!-- //FOOTER -->
			</div><!-- WRAPPER -->
		</div><!-- //CONTAINER -->
	</div><!-- //PAGE -->
        
        
        <script type="text/javascript">
(function() {
 
  // store the slider in a local variable
  var $window = $(window),
      flexslider;
 
  // tiny helper function to add breakpoints
  function getGridSize() {
    return (window.innerWidth < 600) ? 2 :
           (window.innerWidth < 900) ? 3 : 4;
  }
 
  $(function() {
    SyntaxHighlighter.all();
  });
 
  $window.load(function() {
    $('.flexslider').flexslider({
        slideshowSpeed: 7000,
      animation: "slide",
      animationLoop: false,
      itemWidth: 210,
      itemMargin: 5,
      minItems: getGridSize(), // use function to pull in initial value
      maxItems: getGridSize() // use function to pull in initial value
    });
  });
 
  // check grid size on resize event
  $window.resize(function() {
    var gridSize = getGridSize();
 
    flexslider.vars.minItems = gridSize;
    flexslider.vars.maxItems = gridSize;
  });
}());
        </script>
</body>
</html>	