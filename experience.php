<h3 class="agileits-title"><?= $experience_section_title; ?></h3>
<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="<?= ($ky != 0) ? 'false' : 'true' ; ?>">
    
    <?php if($experience_title != "" && is_array($experience_title) ) : ?>
    <?php foreach($experience_title as $ky=>$title) : ?>
    
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading<?= $ky; ?>">
            <h4 class="panel-title asd">
                <a class="pa_italic <?= ($ky != 0) ? 'collapsed' : '' ; ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $ky; ?>" aria-expanded="true" aria-controls="collapse<?= $ky; ?>">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i> <?= $title; ?>
                </a>
            </h4>
        </div>
        <div id="collapse<?= $ky; ?>" class="panel-collapse collapse <?= ($ky == 0) ? 'in' : '' ; ?>" role="tabpanel" aria-labelledby="heading<?= $ky; ?>">
            <div class="panel-body panel_text">
                <h5><?= $experience_name[$ky] ?></h5>
                <?= $experience_description[$ky] ?>
            </div>
        </div>
    </div>

    <?php endforeach; ?>
    <?php endif; ?>
</div>