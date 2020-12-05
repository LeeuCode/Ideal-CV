<h3 class="agileits-title"><?= $project_section_title; ?></h3>
<!-- Projects -->
<div class="Projects">
    
    <?php if($project_image != "" && is_array($project_image)) : ?>

    <?php foreach($project_image as $ky=>$image) : ?>
    
    <div class="col-md-6 col-sm-6 col-xs-6 agileits-img">
        <a href="<?= $image; ?>" class="swipebox" title="<?= $project_title[$ky]; ?>">
            <img class="img-responsive " src="<?= $image; ?>" alt="<?= $project_title[$ky]; ?>"  />
            <div class="wthree-pcatn">
                <h4><?= $project_title[$ky]; ?></h4>
            </div>
        </a>
    </div>

    <?php endforeach ?>
    <?php endif; $db->reset(); ?>

</div>
<!-- //Projects -->