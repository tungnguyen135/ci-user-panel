<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Task Management
            <small>Add / Edit Task</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter task information</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addNewTask" action="<?php echo base_url() ?>addNewTasks" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="permalink">Product link</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('permalink'); ?>" id="permalink" name="permalink">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="code">Code</label>
                                        <input type="text" class="form-control" value="<?php echo set_value('code'); ?>" id="code" name="code">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="store">Store</label>
                                        <input type="text" class="form-control" value="<?php echo set_value('store'); ?>" id="store" name="store">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="emailTo">Email to</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('emailTo'); ?>" id="emailTo" name="emailTo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Size</label>
                                        <select class="form-control required" id="size" name="size">
                                            <option value="0">Select size</option>
                                            <?php
                                            if(!empty($tasks_size))
                                            {
                                                foreach ($tasks_size as $rl)
                                                {
                                                    ?>
                                                <option value="<?php echo $rl->ID ?>" <?php if($rl->ID == set_value('Id')) {echo "selected=selected";} ?>>
                                                    <?php echo $rl->Code ?>
                                                </option>
                                                <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary" value="Submit" />
                                <input type="reset" class="btn btn-default" value="Reset" />
                            </div>
                    </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                        <?php } ?>
                        <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php } ?>

                        <div class="row">
                            <div class="col-md-12">
                                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                            </div>
                        </div>
                </div>
            </div>
    </section>

    </div>