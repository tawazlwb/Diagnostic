<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Diagnostic</title>
        <link rel="icon" href="<?php echo base_url('app_vue/custom/img/microscope.svg'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('app_vue/node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('app_vue/custom/css/style.css'); ?>">
    </head>
    <body>
        <div class="container mt-5">
            <div class="text-center">
                <h1 class=>Diagnostic</h1>
                <h5><?php echo $message->sender(); ?></h5>
                <h1><?php echo $message->content(); ?></h1>
            </div>
            <div class="text-center mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">X</th>
                            <th scope="col">Y</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <pre><?php print_r($points); ?></pre> -->
                        <?php
                            foreach($points as $key => $value){
                        ?>
                            <tr>
                                <th scope="row"><?php echo $value->id; ?></th>
                                <td><?php echo $value->x; ?></td>
                                <td><?php echo $value->y; ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="<?php echo base_url('app_vue/node_modules/jquery/dist/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('app_vue/node_modules/popper.js/dist/umd/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('app_vue/node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('app_vue/custom/js/script.js'); ?>"></script>
    </body>
</html>
