        <?php
    include('connection.php');
	error_reporting(0);
	include('session.php');
	
	$deal_id=$_GET['dealid'];
	
	$query1='Select * from deals where Deal_Id="'.$deal_id.'"';
	$result1=mysql_query($query1);
	$record1=mysql_fetch_assoc($result1);
	
	$deal_name=$record1['Name'];
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
	<link rel="icon" href="../images/Screenshot (53).png" type="image" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>D For Deals</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

         <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">D For Deals Admin</a>
                </div>

                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrator <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                                <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="Orders.php"><i class="fa fa-fw fa-table"></i> Orders</a>
                        </li>
                        <li class="active">
                            <a href="products.php"><i class="fa fa-fw fa-edit"></i> Products</a>
                        </li>
                         <li>
                            <a href="main-banner.php"><i class="fa fa-fw fa-table"></i> Banner Images</a>
                        </li>
			<li>
                        <a href="web-info.php"><i class="fa fa-fw fa-info"></i> Web-Site Information</a>
                        </li>
                    </ul> 
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Change Color Availablity<small><?php echo 'ID: '.$deal_id.' |' ?></small><small><?php echo ' Name: '.$deal_name ?></small>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"><a href="index.php">Dashboard</a></i>   
                                </li>
                                <li>
                                    <i class="fa fa-products"><a href="products.php">Products</a> </i>  
                                </li>
                                <li >
                            		<i class="fa fa-edit"><a href="view_details_produect.php?dealid=<?php echo $deal_id ?>">Details</a></i>
                            	</li>
                                <li class="active">
                                	<i class="fa fa-edit">Edit Status</i>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->


    <!-- Form Name -->
             <form class="form-horizontal" action="editproductcoloravailablity.php?dealid=<?php echo $deal_id?>" method="post" enctype="multipart/form-data">
    <!-- Text input-->

                         <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="radios">Color Availablity</label>
      <div class="col-md-4">
      <div class="radio">
        <label for="radios-0">
          <input type="radio" name="color" id="radios-0" value="Yes">
          Yes
        </label>
        </div>
      <div class="radio">
        <label for="radios-1">
          <input type="radio" name="color" id="radios-1" value="No">
          No
        </label>
        </div>
      </div>
    </div>
     <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button1id"></label>
      <div class="col-md-8">
        <button id="button1id" name="button1id" class="btn btn-success" type="submit">Save</button>
      </div>
    </div>

   

   
    </form>          
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

    </html>