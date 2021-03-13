<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/DashboardController.php");

# Including the Model Class that has ready-made functions to handle MySQL without writing SQL codes
include("app/Models/Eloquent.php");

$dashboard = new DashboardController;
?>

<!-- YOUR PAGE DESIGN WILL GO BELOW -->