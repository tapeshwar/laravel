@include('common.common_header')

<?php
$class_name =  class_basename(Route::current()->controller);
$class = substr(strtolower($class_name), 0, -10);

list(, $action) = explode('@', Route::getCurrentRoute()->getActionName());
$method = $action;


/* $this->load->view('common/common_header.php');

$class = $this->router->fetch_class();
$method = $this->router->fetch_method(); */

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $heading ?>
            <!-- <small>Version 2.0</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">


        <!-- Default box -->
        <div class="box">
            <!-- <div class="box-header with-border">
                                <h3 class="box-title">Title</h3>
                        </div> -->
            <div class="box-body">


                <?php //if (!empty($this->session->flashdata('success'))) { ?>
                    <!-- <div role="alert" class="alert  alert-success alert-dismissible"><a aria-label="Close " data-dismiss="alert" class="closed pull-right fa fa-times"></a> -->
                        <p><?php //echo $this->session->flashdata('success') ?></p>
                    </div>
                <?php //} ?>

                <?php
                //$this->load->view($class . '/' . $method . '_view');
                $file_name = $class.'.'.$method.'_view'; 
                ?>

                @include($file_name)


            </div>
            <!-- /.box-body -->
            <div class="box-footer"></div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->



    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

//$this->load->view('common/common_footer.php');

?>
@include('common.common_footer')