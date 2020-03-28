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

    <title>D for Deals - Admin Panel</title>
    <link rel="icon" href="../images/Screenshot (53).png" type="image" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

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
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="Orders.php"><i class="fa fa-fw fa-list-ol"></i> Orders</a>
                    </li>
                    <li>
                        <a href="products.php"><i class="fa fa-fw fa-list-ol"></i> Products</a>
                    </li>
                     <li>
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
                        <h1 class="page-header">Dashboard</h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                  <div class="col-lg-6 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <?php
									
									$filename="../count.txt";
									$handle=fopen($filename,'r');
									$current=fread($handle,filesize($filename));
									fclose($handle); 
									?>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $current?></div>
                                        <div>Total Visitors</div>
                                    </div>
                                </div>
                            </div>
                      </div>
                    </div>
                
                <div class="row">
                    <div class="col-lg-6 col-md-6" >
                        <a href="Orders.php">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php 
										$query='Select * from orders where Status="Pending"';
										$result=mysql_query($query);
										$num_rows = mysql_num_rows($result);
									?>
                                        <div class="huge"><?php echo $num_rows?></div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
               
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-check-circle fa-fw"></i> Confirmed Orders</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                                <th>Amount (PKR)</th>
                                                <th>View Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
											$query2='Select * from orders where Status="Confirmed"';
											$result2=mysql_query($query2);
											while($record2=mysql_fetch_assoc($result2))
											{
												$cn_order_id=$record2['Order_Id'];
												$cn_order_date=$record2['Order_date'];
												$cn_deal_id=$record2['Deal_Id'];
												
												$query3='Select * from deals where Deal_id="'.$cn_deal_id.'"';
												$result3=mysql_query($query3);
												$record3=mysql_fetch_assoc($result3);
												
												$cn_deal_price=$record3['Price'];
										?>
                                            <tr>
                                                <td><?php echo $cn_order_id?></td>
                                                <td><?php echo $cn_order_date?></td>
                                                <td><?php echo $cn_deal_price?></td>
                                                <td><a href="view_details_order.php?orderid=<?php echo $cn_order_id ?>">View Details </a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
