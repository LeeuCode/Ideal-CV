
<?php 

$additional_id = (is_array($additional_id)) ? end($additional_id) : 0 ; 

?>

<!-- box -->
<div class="box box-box-default">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-exclamation-circle"></i>
            <?= $lang['additional information']; ?>
        </h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="<?= $lang['collapse']; ?>">
            <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <!-- box-body -->
    <div class="box-body">
        <div class="col-md-2">
            <button type="button" class="btn  btn-info add-additional-block " data-additional-id="<?= ($additional_id+1); ?>" >
                <i class="fa fa-plus-circle"></i> 
                <?= $lang['add new']; ?>
            </button>
        </div>
        <div class="clearfix"></div>
        <div class="additional-block-container">

            <?php require get_admin_template_directory().'loop'.DS.'additional-container.php'; ?>
            
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->


