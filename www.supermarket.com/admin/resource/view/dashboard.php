<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/DashboardController.php");

# Including the Model Class that has ready-made functions to handle MySQL without writing SQL codes
include("app/Models/Eloquent.php");

$dashboard = new DashboardController;
$totalCustomer = $dashboard->getDashboardCount("CUSTOMER");
$totalOrder = $dashboard->getDashboardCount("ORDER");
$totalCategory = $dashboard->getDashboardCount("CATEGORY");
$totalProduct = $dashboard->getDashboardCount("PRODUCT");

?>
        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Dashboard
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li class="active"> My Dashboard </li>
            </ul>
            <div class="state-info">
			<!--
                <section class="panel">
                    <div class="panel-body">
                        <div class="summary">
                            <span>yearly expense</span>
                            <h3 class="red-txt">$ 45,600</h3>
                        </div>
                        <div id="income" class="chart-bar"></div>
                    </div>
                </section>
                <section class="panel">
                    <div class="panel-body">
                        <div class="summary">
                            <span>yearly  income</span>
                            <h3 class="green-txt">$ 45,600</h3>
                        </div>
                        <div id="expense" class="chart-bar"></div>
                    </div>
                </section>
			-->
            </div>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <!--statistics start-->
                    <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel purple">
                                <div class="symbol">
                                    <i class="fa fa-gavel"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value"><?php echo $totalCustomer[0]['TOTAL_CUSTOMER']; ?></div>
                                    <div class="title">Total Customers</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel red">
                                <div class="symbol">
                                    <i class="fa fa-tags"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value"><?php echo $totalOrder[0]['TOTAL_ORDER']; ?></div>
                                    <div class="title">Total Orders</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel blue">
                                <div class="symbol">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value"><?php echo $totalCategory[0]['TOTAL_CATEGORY']; ?></div>
                                    <div class="title"> Total Category</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel green">
                                <div class="symbol">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value"><?php echo $totalProduct[0]['TOTAL_PRODUCT']; ?></div>
                                    <div class="title"> Total Product</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--statistics end-->
                </div>
				
            </div>
        </div>
        <!--body wrapper end-->
