<?php if($project_image != "" && is_array($project_image)) : ?>

    <?php foreach($project_image as $ky=>$image) : ?>
        <div class="col-md-6">
            <div class="project-block"> <img src="<?= ($image != "") ? $image : 'http://www.health.com/img/icons/missing-image-16x9.svg'; ?>" class="img-rounded wh-100 lt-img hg-125" alt="Cinque Terre">
                <br>
                <br>
                <div class="input-group input-group-sm wh-100">
                    <input id="project-image<?= $ky; ?>" name="project_image[]" type="hidden" class="form-control lt-upload-project" value="<?= $image; ?>">
                    <button type="button" class="btn btn-info wh-100" data-toggle="modal" data-target="#modal-upload-project-<?= $ky; ?>"> <i class="fa fa-image"></i> <?= $lang['upload project image']; ?></button>
                </div>
                <div class="modal fade" id="modal-upload-project-<?= $ky; ?>">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title"><?= $lang['upload image']; ?></h4>
                            </div>
                            <div class="modal-body">
                                <iframe width="100%" height="500" frameborder="0" src="<?= home_url(); ?>/public/filemanager/dialog.php?type=2&amp;field_id=project-image<?= $ky; ?>&amp;fldr=>"> </iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group project-title ">
                    <label for="project_title<?= $ky; ?>"><?= $lang['project title']; ?></label>
                    <input name="project_title[]" type="text" class="form-control" id="project_title<?= $ky; ?>" placeholder="<?= $lang['type the project title here']; ?>" value="<?= $project_title[$ky]; ?>">
                </div>
                <center>
                    <i class="fa fa-trash block-remove"></i>
                </center>
            </div>
        </div>
    <?php endforeach ?>
<?php endif; ?> 