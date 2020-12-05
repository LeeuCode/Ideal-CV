<div class="nav-tabs-custom">
    <input class="bg-input-type" name="background_type" type="hidden" value="<?= ($background_type != "" ) ? $background_type : 'img' ; ?>">
    <ul class="nav nav-tabs pull-right">
        <li <?= ($background_type == "img" || $background_type == "") ? 'class="active"' : '' ; ?> >
            <a id="img" class="bg-type" href="#tab_1-1" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-image"></i> Image
            </a>
        </li>
        <li <?= ($background_type == "color") ? 'class="active"' : '' ; ?> >
            <a id="color" class="bg-type" href="#tab_2-2" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-adjust"></i> <?= $lang['color']; ?>
            </a>
        </li>

        <li class="pull-left header" style="font-size:18px;"><i class="fa  fa-list-alt"></i><?= $lang['background properties']; ?></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane <?= ($background_type == "img" || $background_type == "") ? 'active' : '' ; ?>" id="tab_1-1">
            <img src="<?= ($bakground_value != "") ? $bakground_value : 'http://www.health.com/img/icons/missing-image-16x9.svg'; ?>" class="img-rounded wh-100 lt-img" alt="Cinque Terre" >
            <br><br>
            <!-- personal picture upload button -->
            <div class="input-group input-group-sm wh-100">
                <input name="bakground_value" id="background-image" type="hidden" class="form-control lt-upload-background" placeholder="" value="<?= ($bakground_value != "") ? $bakground_value : 'http://www.health.com/img/icons/missing-image-16x9.svg'; ?>">
                <!-- <span class="input-group-btn"> -->
                <button type="button" class="btn btn-info wh-100" data-toggle="modal" data-target="#modal-upload-background">
                    <i class="fa fa-image"></i> 
                    <?= $lang['upload background image'] ?>
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
        <!-- /.tab-pane -->
        <div class="tab-pane <?= ($background_type == "color") ? 'active' : '' ; ?>" id="tab_2-2">
            <div class="form-group">
                <label><?= $lang['choose color']; ?></label>
                <div class="input-group my-colorpicker2 colorpicker-element">
                    <input name="background_color" type="text" class="form-control" value="<?= $background_color; ?>" >
                    <div class="input-group-addon">
                    <i></i>
                    </div>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <!-- /.tab-pane -->
    </div>
<!-- /.tab-content -->
</div>