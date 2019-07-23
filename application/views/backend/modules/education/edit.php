
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Education
            <!-- <small>Preview</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url("backend/home/index");?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url("backend/".$route."/index");?>">All Education</a></li>
            <li class="active">Create New Education</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url("backend/".$route."/store");?>">
            
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <!-- <div class="box-header with-border">
              <h3 class="box-title">New Post </h3>
            </div> -->
                        <!-- /.box-header -->
                        <!-- form start -->

                        <?php foreach ($education as $row) {
                                        ?>
                        <input id="id" name="id" required="required" type="hidden" value="<?php echo $row->id; ?>"> 
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date</label>
                                <input type="text" class="form-control" id="date" name="date" value="<?php echo $row->date; ?>" placeholder="contoh: 2019, 2017-2018">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">School</label>
                                <input type="text" class="form-control" id="school" name="school" value="<?php echo $row->school; ?>" >
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description </label>
                                <textarea class="form-control" id="content" name="content" rows="3"><?php echo $row->content; ?></textarea>
                            </div>
                           
                            
                        </div> <?php } ?>

                        <div class="box-footer">
                            <a href="<?php echo base_url("backend/".$route."/index")?>" type="button" class="btn btn-default ">Back</a>
                            <button type="submit" class="btn btn-info pull-right">Submit</button>
                        </div>
                        <!-- /.box-body -->



                    </div>
                    <!-- /.box -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->
               
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </form>
    </section>

    <!-- /.content -->
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/backend/dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script>
  
</script>