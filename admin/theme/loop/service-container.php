<?php if(isset($service_icon) && is_array($service_icon)) : ?>
    <?php foreach($service_icon as $ky=>$icon) : ?>
        <div class="col-md-3">
            <div class="service-container">
                <center>
                    <button type="button" class="btn btn-app choose-icon" data-toggle="modal" data-target="#modal-fonts<?= $ky; ?>"> <span class="fa <?= $icon; ?>"></span> <?=$lang['choose icon']; ?> </button>
                    <input name="service_icon[]" type="hidden" class="icon-service" value="<?= $icon; ?>">
                    <div class="modal fade" id="modal-fonts<?= $ky; ?>" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title pull-left"> <i class="fa fa-"></i> <?=$lang['choose icon']; ?> </h4> </div>
                                <div class="modal-body modal-fonts">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top:10px">
                        <label><?= $lang['title']; ?></label>
                        <input name="service_title[]" type="text" class="form-control" placeholder="<?= $lang['type the title here']; ?>" value="<?= $service_title[$ky]; ?>">
                    </div>
                    <div class="form-group" style="margin-top:10px">
                        <label><?= $lang['content']; ?></label>
                        <textarea name="service_content[]" class="form-control" style="height:100px;" placeholder="<?= $lang['type the content here']; ?>"><?= $service_content[$ky]; ?></textarea>
                    </div>
                    <!-- Remove Service Block -->
                    <i class="fa fa-trash block-remove"></i>
                </center>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
