<div class="box box-info">
    <div class="box-header with-border">
        <!-- Social Media Title -->
        <h3 class="box-title">
            <i class="fa fa-comments"></i> 
            <?= $lang['social media']; ?>
        </h3>
        <!-- /.Social Madia Title -->
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="<?= $lang['collapse']; ?>">
                <i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="col-md-2">
            <button type="button" class="btn btn-info btn-add-social ">
                <i class="fa fa-plus-circle"></i> 
                <?= $lang['add new']; ?>
            </button>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <tbody class="social-media-contianer">
                    <tr>
                        <th style="width: 100px"><?= $lang['icon']; ?></th>
                        <th><?= $lang['url']; ?></th>
                        <th style="width: 40px"><?= $lang['remove']; ?></th>
                    </tr>

                    <?php require get_admin_template_directory().'loop'.DS.'social-media-contianer.php'; ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>