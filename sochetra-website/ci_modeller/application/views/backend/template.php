<!DOCTYPE html>
<html>

    <title><?php echo $title; ?></title>
    <script src="<?php echo base_url(); ?>assets/jquery-1.9.1.js" ></script>
    <script src="<?php echo base_url(); ?>assets/list.js" ></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo base_url(); ?>assets/style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>

    <div class="container">
            <legend class="header">
                <h3 class="pull"><?php echo $header ?></h3>
            </legend>
       
        <?php
        $this->load->view($contend); // load contain of page
        ?>    
    </div> <!-- /container -->

</body>