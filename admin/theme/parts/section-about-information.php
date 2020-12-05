<!-- box -->
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-black-tie"></i>
            <?= $lang['section about information']; ?>
        </h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="<?= $lang['collapse']; ?>">
            <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <!-- box-body -->
    <div class="box-body">

        <!-- div personal picture -->
        <div class="col-md-5" >
            <!-- personal picture heding -->
            <h4><?= $lang['personal picture'] ?></h4>
            <!-- personal picture image -->
            <img src="<?= get_option($about->image,'https://i.stack.imgur.com/l60Hf.png'); ?>" class="img-rounded wh-100 lt-img" alt="Cinque Terre" >
            <br><br>
            <!-- personal picture upload button -->
            <div class="input-group input-group-sm wh-100">
                <input name="image" id="personal-image" type="hidden" class="form-control lt-upload" value="<?= get_option($about->image,'https://i.stack.imgur.com/l60Hf.png'); ?>">
                <!-- <span class="input-group-btn"> -->
                    <button type="button" class="btn btn-info wh-100" data-toggle="modal" data-target="#modal-upload-image">
                    <i class="fa fa-image"></i> 
                    <?= $lang['choose personal picture'] ?>
                    </button>
                <!-- </span> -->
            </div>
        </div>

        <div class="modal fade" id="modal-upload-image" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"><?= $lang['upload image']; ?></h4>
                </div>
                <div class="modal-body">
                    <iframe  width="100%" height="500" frameborder="0"src="<?= Enqueue("/filemanager/dialog.php?type=2&field_id=personal-image'&fldr=") ?>">
                    </iframe>
                </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.div personal picture -->

        <div class="col-md-7">
            <!-- personal name -->
            <div class="form-group">
                <h4><?= $lang['name']; ?></h4>
                <input name="user_name" type="text" class="form-control" placeholder="<?= $lang['type the name here']; ?>" value="<?= get_option($about->user_name); ?>">
            </div>
            <!-- /.personal name -->

            <!-- title about -->
            <div class="form-group">
                <h4><?= $lang['section title']; ?></h4>
                <input name="section_title" type="text" class="form-control" placeholder="<?= $lang['type the title here']; ?>" value="<?= get_option($about->section_title); ?>" >
            </div>
            <!-- /.title about -->

            <!-- content about -->
            <div class="form-group">
                <h4><?= $lang['content']; ?></h4>
                <textarea name="section_content" class="form-control" style="height:150px;" placeholder="<?= $lang['type the content here']; ?>"><?= get_option($about->section_content); ?></textarea>
            </div>
            <!-- /.content about -->
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->