<!-- box -->
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-th-list"></i>
            <?= $lang['skills']; ?>
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
            <!-- title about -->
            <div class="form-group">
                <h4><?= $lang['title']; ?></h4>
                <input name="section_skill_title" type="text" class="form-control" placeholder="<?= $lang['type the title here']; ?>" value="<?= $section_skill_title; ?>">
            </div>
            <!-- /.title about -->
            <!-- content about -->
            <div class="form-group">
                <h4><?= $lang['content']; ?></h4>
                <textarea name="section_skill_content" class="form-control" style="height:150px;" placeholder="<?= $lang['type the content here']; ?>"><?= $section_skill_content ?></textarea>
            </div>
            <!-- /.content about -->
        </div>
        <div class="col-md-12 skills-div">
            <div class="col-md-2">
                <button type="button" class="btn  btn-info add-skill" data-skill-num="<?= ($skill_title != "" && is_array($skill_title) ) ? end($skill_title) : '1' ?>" >
                    <i class="fa fa-plus-circle"></i> 
                    <?= $lang['add new']; ?>
                </button>
            </div>
            <div class="clearfix"></div>
            <?php require get_admin_template_directory().'loop'.DS.'skill-container.php'; ?>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->