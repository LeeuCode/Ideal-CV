<?php if($skill_title != "" && is_array($skill_title) ) : ?>
    <?php foreach($skill_title as $ky=> $title) : ?>
        <div class="col-md-4">
            <div class="skill-container">
                <div class="progress active" data-toggle="modal" data-target="#skill-modal-<?= $ky ?>">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:<?= $skill_level[$ky]; ?>%;background-color:<?= $skill_color[$ky]; ?>;"><?= $skill_level[$ky]; ?>%</div>
                </div>
                <h5 class="skill-title"><?= $skill_title[$ky]; ?></h5>
                <i class="fa fa-trash skill-remove"></i>
                <div class="modal fade" id="skill-modal-<?= $ky ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true">×</i></button>
                                <h4 class="modal-title"> <i class="fa fa-th-list"></i> <?= $lang['skills']; ?></h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label><?= $lang['skill title']; ?></label>
                                    <input name="skill_title[]" type="text" class="form-control skill-input-title" placeholder="<?= $lang['type skill title here']; ?>" value="<?= $skill_title[$ky]; ?>">
                                </div>
                                <div class="form-group">
                                    <label><?= $lang['choose color']; ?></label>
                                    <div class="input-group my-colorpicker2 colorpicker-element">
                                        <input name="skill_color[]" type="text" class="form-control skill-color-input" placeholder="<?= $lang['type color code here']; ?>" value="<?= $skill_color[$ky]; ?>">
                                        <div class="input-group-addon"> <i></i></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><?= $lang['level percentage']; ?></label>
                                    <input name="skill_level[]" type="number" class="form-control skill-percentage" min="10" max="100" placeholder="<?= $lang['type level percentage here']; ?>" value="<?= $skill_level[$ky]; ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><?= $lang['close'] ?></button>
                                <button type="button" class="btn btn-primary save-skill"><?= $lang['save changes']; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>