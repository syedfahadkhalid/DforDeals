<?php
include('connection.php');


	include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Banner Image Upload</title>
	<link rel="icon" href="../images/Screenshot (53).png" type="image" />
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
                        <a href="Orders.php"><i class="fa fa-fw fa-list-ol"></i> Orders</a>
                    </li>
                    <li >
                        <a href="products.php"><i class="fa fa-fw fa-list-ol"></i> Products</a>
                    </li>
                    <li class="active">
                    		<a href="main-banner.php"><i class="fa fa-fw fa-image"></i> Banner Images</a>

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
                            Banner Images
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-image"></i> Banner Images
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
               <a href="add_banner_images.php"> <button type="button" class="btn btn-primary" style="float:right" >Add New Images</button></a>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                        
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>First Image</th>
                                        <th>Second Image</th>
                                        <th>Third Image</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
									$query='Select * from main_banner';
									$result=mysql_query($query);
									$record=mysql_fetch_assoc($result);
									
									$img=$record['Img1'];
									$img2=$record['Img2'];
									$img3=$record['Img3'];
									$target='../';
									$num_row=mysql_num_rows($result); 
								?>
						
                                    <tr align="center">
                                        <td>
										<?php
                                        if($num_row>0)
										{?>	
										<img src="<?php echo $target.$img?> " width="300" height="150">
										<?php }
										else
										{	echo 'No Image';}
										?>
                                        </td>
                                        <td>
										<?php
                                        if($num_row>0)
										{?>	
										<img src="<?php echo $target.$img2 ?>" width="300" height="150">
										<?php }
										else
										{	echo 'No Image';}
										?>
                                        </td>
                                        <td>
										<?php
                                        if($num_row>0)
										{?>	
										<img src="<?php echo $target.$img3 ?>" width="300" height="150">
										<?php }
										else
										{	echo 'No Image';}
										?>
                                        </td>
                                       
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>
                            <a href="deletebannerimages.php"> <button type="button" class="btn btn-primary">Delete All</button></a>
                        </div>
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
