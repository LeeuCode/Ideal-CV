<?php if($education_title != "" && is_array($education_title) ) : ?>
    <?php foreach($education_title as $ky=>$title) : ?>
        <div class="col-md-12">
            <div class="panel box box-success">
                <div class="box-header with-border">
                    <h4 class="box-title"> <a data-toggle="collapse" data-parent="#accordion" href="#education-block<?= $ky; ?>" class="collapse-title-e" aria-expanded="true"><?= $title; ?></a> </h4>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool section-block-remove"> <i class="fa fa-trash"></i> </button>
                    </div>
                </div>
                <div id="education-block<?= $ky; ?>" class="panel-collapse collapse " aria-expanded="true" style="">
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?= $lang['education title']; ?></label>
                                <input name="education_title[]" type="text" class="form-control change-title" placeholder="<?= $lang['type the education title here']; ?>" value="<?= $title; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?= $lang['education name']; ?></label>
                                <input name="education_name[]" type="text" class="form-control" placeholder="<?= $lang['type the education name here']; ?>" value="<?= $education_name[$ky] ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label><?= $lang['description education']; ?></label>
                                <textarea name="education_description[]" class="form-control" rows="3" placeholder="<?= $lang['type the description education here']; ?>"><?= $education_description[$ky] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>