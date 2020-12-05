<!-- box -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa  fa-briefcase"></i>
            <?= $lang['experience'] ?>
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
                <label for="exampleInputEmail1"><?= $lang['section title']; ?></label>
                <input name="experience_section_title" type="text" class="form-control" placeholder="<?= $lang['type section title here']; ?>" value="<?= $experience_section_title ?>" >
            </div>
        </div>

        <div class="col-md-2" style="margin-bottom:20px;">
            <button type="button" class="btn  btn-info add-experience-block" data-experience-id="0">
                <i class="fa fa-plus-circle"></i> 
                <?= $lang['add new']; ?>
            </button>
        </div>
        <div class="clearfix"></div>

        <div class="experiences-container">

            <?php require get_admin_template_directory().'loop'.DS.'experiences-container.php'; ?>
            
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->