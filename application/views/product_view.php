<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <link rel="icon" href="<?php echo base_url('app_vue/custom/img/microscope.svg'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('app_vue/node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('app_vue/custom/css/style.css'); ?>">
    </head>
    <body>
        <div class="container mt-5">
            <div class="text-center">
                <h1 class=><?php echo $title; ?></h1>
            </div>
            <div class="text-center mt-5">
                
            </div>
        </div>

        <script src="<?php echo base_url('app_vue/node_modules/jquery/dist/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('app_vue/node_modules/popper.js/dist/umd/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('app_vue/node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('app_vue/custom/js/script.js'); ?>"></script>
    </body>
</html>
