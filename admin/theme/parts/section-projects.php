<!-- box -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-folder-open"></i>
            <?= $lang['projects'] ?>
        </h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="<?= $lang['collapse']; ?>">
            <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <!-- box-body -->
    <div class="box-body">

        <div class="col-md-12">
            <div class="form-group ">
                <label for="project_section_title"><?= $lang['section title']; ?></label>
                <input name="project_section_title" type="text" class="form-control" id="project_section_title" placeholder="<?= $lang['type section title here']; ?>" value="<?= $project_section_title; ?>">
            </div>
        </div>
        
        <div class="col-md-2" style="margin-bottom:20px;">
            <button type="button" class="btn  btn-info add-project-block" data-project-id="0">
                <i class="fa fa-plus-circle"></i> 
                <?= $lang['add new']; ?>
            </button>
        </div>
        <div class="clearfix"></div>

        <div class="projects-container">
            <?php require get_admin_template_directory().'loop'.DS.'projects-container.php'; ?>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
