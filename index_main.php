<?php 
include('connection.php');
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
    <link href="css/mystyle.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
    
    
<!-- FONTS -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    
<!-- SCRIPTS -->
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/jquery.twitter.js" type="text/javascript"></script>
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
<?php
include 'counter.php';
hit_count();
?>
    
            <div class="strip">
        <div class="container">
        	 <?php 
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
					<div class="menu_block clearfix">
						
						<!-- RESPONSIVE BUTTON MENU -->
						<section class="full_width breadcrumbs_block  clearfix ">
					<div class="breadcrumbs_content ">
						<h2 style="text-align:center">WELCOME TO OUR DAILY DEALS</h2>
					</div>
					<div class="overlay"></div>
					<div class="overlay_black"></div>
				</section>
					</div><!-- //MENU -->	
				</header>
				<!-- SLIDER -->
				<div class="slider_block full_width">
					<div class="flexslider top_slider">
                    <?php
						$query2='Select * from main_banner';
						$result2=mysql_query($query2);
						$record2=mysql_fetch_assoc($result2);
						
						$img_banner1=$record2['Img1'];
						$img_banner2=$record2['Img2'];
						$img_banner3=$record2['Img3']; 
					?>
						<ul class="slides">
							<li class="slide1">
								<img src="<?php echo $img_banner1?>" />
								<div class="flex_caption1">
									<p class="FromTop captionDelay2"></p>
									<span class="FromTop captionDelay1"></span>
								</div>
								<div class="flex_caption2 FromBottom captionDelay2"></div>
							</li>
							<li class="slide2">
								<img src="<?php echo $img_banner2?>" />
								<div class="flex_caption1 FromBottom"></div>
							</li>
							<li class="slide3">
								<img src="<?php echo $img_banner3?>" />
								<div class="vertical_middle">
									<div class="flex_caption1 FromTop">Say Something <span class="color_text">Wonderful</span> Here</div>
									<div class="flex_caption2 FromBottom"></div>
								</div>
							</li>
						</ul>
					</div>
				</div><!-- //SLIDER -->
				
          	<div class="row">
            <?php 
				$query='select * from deals where Status="Active"';
				$result=mysql_query($query);
				while($record=mysql_fetch_assoc($result))
				{
					$deal_id=$record['Deal_Id'];
					$deal_name=$record['Name'];
					$img=$record['Img_main'];
					$price=$record['Price'];
			?>
      
             <div class="col-lg-4 col-md-4 col-sm-4  thumb pad center">
                 
                <a class="thumbnail" href="product-page.php?dealid=<?php echo $deal_id ?>">
                    <h3 class="o" >D For DEALS <?php echo $deal_name ?></h3>
                    <img class="img-responsive" src="<?php echo $img ?>" alt="">
                </a>
                         <h3 class="" style="color:#000"><b>Price: <?php echo $price.' '.'RS' ;?> </b></h3>
                         <a href="product-page.php?dealid=<?php echo $deal_id ?>"><button type="button" class="btn btn-md btn-default ">Buy Me</button>
                         <button type="button" class="btn btn-md btn-default ">View</button>
                         </a>
            </div>
                 <?php } ?>       
                </div>

				

				<!-- FOOTER -->
                <br><br>
<footer class="full_width footer_block">
					
					<!-- ROW -->
					<div class="row" data-animated="fadeInUp">
						
						<!-- RECENT TWEETS -->
						<div class="col-lg-4 col-md-3 col-sm-6 padbot20"><br>
							<h2>Useful Links</h2>
                                                           <ul class="foot_links">
								<li><span><a href="facebook.com"><img  src="images/facebook.png"></a></span><a href="javascript:void(0);">0324-43253643</a></li>
								<li><span><a href="facebook.com"><img  src="images/t.png"></a></span><a href="javascript:void(0);">john@outlook.com</a></li>
				
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
						<a class="copyright_logo" href="">D For Deals</a> <span> &copy; Copyright 2020</span>
                                                <div class="" style="float:right">
						<span class="glyphicon glyphicon-flash"></span>
                                                <span> Powered by </span><a class="copyright_logo" href=""><a href="https://www.facebook.com/touchtrans">Touch-Trans</a></a> 
					</div>
					
                                         </div>
                                         
<!-- //COPYRIGHT -->
				</footer><!-- //FOOTER -->
			</div><!-- //WRAPPER -->
		</div><!-- //CONTAINER -->

	</div><!-- //PAGE -->

</body>
</html>					