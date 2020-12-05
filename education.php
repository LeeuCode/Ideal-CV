<h3 class="agileits-title agileits-title2"><?= $education_section_title; ?></h3>
<div class="panel-group w3l_panel_group_faq" role="tablist" id="accordion1">
    
    <?php if($education_title != "" && is_array($education_title) ) : ?>
    <?php foreach($education_title as $ky=>$title) : ?>
    
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-<?= $ky; ?>">
            <h4 class="panel-title asd">
                <a class="pa_italic <?= ($ky != 0) ? 'collapsed' : '' ; ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?= $ky; ?>" aria-expanded="true" aria-controls="collapse-<?= $ky; ?>">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i> <?= $title; ?>
                </a>
            </h4>
        </div>
        <div id="collapse-<?= $ky; ?>" class="panel-collapse collapse <?= ($ky == 0) ? 'in' : '' ; ?>" role="tabpanel" aria-labelledby="heading-<?= $ky; ?>">
            <div class="panel-body panel_text">
                <h5><?= $education_name[$ky] ?></h5>
                <?= $education_description[$ky] ?>
            </div>
        </div>
    </div>

    <?php endforeach; ?>
    <?php endif; ?>

</div>