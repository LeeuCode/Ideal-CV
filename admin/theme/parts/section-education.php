

<!-- /*
 `education_section_title`, `education_title`, `education_name`,
 `education_description`, `experince_section_title`, `experince_title`,
 `experince_name`, `experince_description`, `project_section_title`,
 `project_image`, `project_title`, `background_type`, `bakground_value`, `background_color`
*/ -->

<!-- box -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa  fa-graduation-cap"></i>
            <?= $lang['education'] ?>
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
                <input name="education_section_title" type="text" class="form-control" placeholder="<?= $lang['type section title here']; ?>" value="<?= $education_section_title; ?>">
            </div>
        </div>
        
        <div class="col-md-2" style="margin-bottom:20px;">
            <button type="button" class="btn  btn-info add-education-block" data-education-id="0">
                <i class="fa fa-plus-circle"></i> 
                <?= $lang['add new']; ?>
            </button>
        </div>
        <div class="clearfix"></div>

        <div class="educations-container">

         <?php require get_admin_template_directory().'loop'.DS.'educations-container.php'; ?>

        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->