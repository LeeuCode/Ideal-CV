<!-- box -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa  fa-gears"></i>
            <?= $lang['setting']; ?>
        </h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="<?= $lang['collapse']; ?>">
            <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <!-- box-body -->
    <div class="box-body">
        <table class="table table-bordered" >
            <tr>
                <th>Favicon</th>
                <td>
                    <div class="col-md-2">
                        <img src="<?= ($favicon != "") ? $favicon : 'http://www.health.com/img/icons/missing-image-16x9.svg'; ?>" class="img-rounded wh-100 lt-img" alt="Cinque Terre" style="width:100%;" >
                        <!-- <br><br> -->
                        <!-- personal picture upload button -->
                        <div class="input-group input-group-sm wh-100">
                            <input name="favicon" id="background-image" type="hidden" class="form-control lt-upload-background" value="<?= $favicon; ?>" >
                            <!-- <span class="input-group-btn"> -->
                                <button type="button" class="btn btn-info wh-100" data-toggle="modal" data-target="#modal-upload-background">
                                <i class="fa fa-image"></i> 
                                </button>
                            <!-- </span> -->
                        </div>

                        <div class="modal fade" id="modal-upload-background">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title"><?= $lang['upload image']; ?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <iframe  width="100%" height="500" frameborder="0"src="<?= Enqueue("/filemanager/dialog.php?type=2&field_id=background-image'&fldr=") ?>">
                                        </iframe>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th><?= $lang['user name']; ?></th>
                <td>
                    <div class="form-group col-md-5">
                        <input name="admin_name" type="text" class="form-control" placeholder="<?= $lang['type the user name here']; ?>" value="<?= $admin_name; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th><?= $lang['password']; ?></th>
                <td>
                    <div class="form-group col-md-5">
                        <input name="admin_password" type="password" class="form-control" placeholder="<?= $lang['type the password here']; ?>" value="<?= $admin_password; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th><?= $lang['confirm password'] ?></th>
                <td>
                    <div class="form-group col-md-5">
                        <input name="confirm_password" type="password" class="form-control" placeholder="<?= $lang['type the password here']; ?>" value="<?= $admin_password; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th><?= $lang['site name']; ?></th>
                <td>
                    <div class="form-group col-md-5">
                        <input name="site_name" type="text" class="form-control" placeholder="<?= $lang['type the site name here']; ?>" value="<?= $site_name; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th><?= $lang['site description']; ?></th>
                <td>
                    <div class="form-group col-md-5">
                    <textarea name="site_description" class="form-control" rows="3" placeholder="<?= $lang['type the site description here']; ?>"><?= $site_description; ?></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <th><?= $lang['site tags']; ?></th>
                <td>
                    <div class="form-group col-md-5">
                        <input name="site_tags" type="text" class="form-control" placeholder="<?= $lang['type the site tags here']; ?>" value="<?= $site_tags; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th><?= $lang['primary color']; ?></th>
                <td>
                    <div class="form-group col-md-5">
                        <div class="input-group my-colorpicker2 colorpicker-element">
                            <input name="primary_color" type="text" class="form-control" value="<?= $primary_color; ?>">
                            <div class="input-group-addon">
                            <i></i>
                            </div>
                        </div>
                        <!-- /.input group -->
                    </div>
                </td>
            </tr>
            <tr>
                <th><?= $lang['paragraph color']; ?></th>
                <td>
                    <div class="form-group col-md-5">
                        <div class="input-group my-colorpicker2 colorpicker-element">
                            <input name="secondary_color" type="text" class="form-control" value="<?= $secondary_color; ?>">
                            <div class="input-group-addon">
                            <i></i>
                            </div>
                        </div>
                        <!-- /.input group -->
                    </div>
                </td>
            </tr>
            <tr>
                <th><?= $lang['headings color']; ?></th>
                <td>
                    <div class="form-group col-md-5">
                        <div class="input-group my-colorpicker2 colorpicker-element">
                            <input name="headings_color" type="text" class="form-control" value="<?= $headings_color; ?>">
                            <div class="input-group-addon">
                            <i></i>
                            </div>
                        </div>
                        <!-- /.input group -->
                    </div>
                </td>
            </tr>
            <tr style="display:none;">
                <th><?= $lang['language']; ?></th>
                <td>
                    <div class="form-group col-md-2">
                        <select name="language" class="form-control">
                        <?php foreach(languages() as $lang_code => $lang_name) : ?>
                            <option value="<?= $lang_code; ?>" <?= ($language == $lang_code) ? 'selected' : ''; ?> ><?= $lang_name; ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->