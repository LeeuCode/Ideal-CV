<!-- box -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-cubes"></i>
            <?= $lang['services']; ?>
        </h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="<?= $lang['collapse']; ?>">
            <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <!-- box-body -->
    <div class="box-body services-container">
        <!-- title about -->
        <div class="col-md-12">
            <div class="form-group">
                <h4><?= $lang['title']; ?></h4>
                <input name="section_service_title" style="width:50%" type="text" class="form-control" placeholder="<?= $lang['type the title here']; ?>" value="<?= $section_service_title; ?>">
            </div>
            <!-- /.title about -->
        </div>
        <div class="col-md-2" style="margin-bottom:20px;">
            <button type="button" class="btn  btn-info add-service-block" data-service-id="0">
                <i class="fa fa-plus-circle"></i> 
                <?= $lang['add new']; ?>
            </button>
        </div>
        <div class="clearfix"></div>

        <?php require get_admin_template_directory().'loop'.DS.'service-container.php'; ?>

    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->