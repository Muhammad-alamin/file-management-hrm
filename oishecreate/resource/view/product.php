<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/ProductController.php");

$product = new ProductController;
$eloquent = new Eloquent;

$columnName = "*";
$tableName = "Products";

$productrList = $eloquent->selectData($columnName, $tableName);


?>

<!-- YOUR PAGE DESIGN WILL GO BELOW -->

        <div class="breadcrumb-area breadcrumb-bg-1 bg-gray mt-175">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <div class="breadcrumb-title">
                        <h2>Our Products</h2>
                    </div>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> shop</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-area pt-100 pb-100">
            <div class="container">
                <div class="shop-wrapper">
                    <div class="row">
                        <?php 
                        foreach ($productrList as  $eachProduct) {
                            echo '<div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-wrap mb-50">
                                <div class="product-img mb-25" style="width:300px; height:380px;" >
                                    <a href="productdetails.php?id='.$eachProduct['id'].'">
                                        <img class="default-img" src="files/products/'.$eachProduct['product_default_image'].'" alt="">
                                        <span class="badge-green badge-right">Feature</span>
                                    </a>
                                    
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="productdetails.php?id='.$eachProduct['id'].'">'.$eachProduct['product_name'].'</a></h3>
                                    <div class="product-price">
                                        <span>'.$eachProduct['regular_price'].'</span>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        }
                        
                        ?>
                        
                    </div>
                    <div class="pro-pagination-style text-center">
                        <ul>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a class="next" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
        