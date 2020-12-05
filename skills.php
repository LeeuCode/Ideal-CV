<?php

$skills_services = $db->table('skills_services')->get();
$section_skill_title  = get_option($skills_services->section_skill_title);
$section_skill_content  = get_option($skills_services->section_skill_content);
$skill_title = get_option($skills_services->skill_title);
$skill_color  = get_option($skills_services->skill_color);
$skill_level  = get_option($skills_services->skill_level);
$section_service_title = get_option($skills_services->section_service_title);
$service_icon  = get_option($skills_services->service_icon);
$service_title  = get_option($skills_services->service_title);
$service_content = get_option($skills_services->service_content);
$background_type  = get_option($skills_services->background_type);
$bakground_value  = get_option($skills_services->bakground_value);
$background_color = get_option($skills_services->background_color);

?>

<li class="agileits" style="<?= ($background_type == "img") ? 'background-image:url('.$bakground_value .');' : 'background-color:'.$background_color.';' ; ?>">
    <!-- skills -->
    <div class="skills">
        <div class="container">
            <div class="col-md-8 skills-w3lsleft">
                <h3 class="agileits-title"><?= $section_skill_title; ?></h3>
                <p><?= $section_skill_content; ?></p>
                <div class="skill-agileinfo">

                <?php if($skill_title != "" && is_array($skill_title) ) : ?>
                    <?php 
                    
                    foreach($skill_title as $ky=> $title) :
                        if(preg_match('/rgba/',$skill_color[$ky])) :
                            $color_replace = str_replace(['rgba(',')'],'',$skill_color[$ky]);
                            $basic_color = $skill_color[$ky];
                            $color_make_aray = explode(',',$color_replace);
                            array_pop($color_make_aray);
                            $color_make_aray[] = 0.75; 
                            $opacity_color = implode(',',$color_make_aray);
                        else : 
                            $basic_color = $skill_color[$ky];
                            $opacity_color = implode(',',hexToRgb($skill_color[$ky],0.75));
                        endif;
                    ?>

                    <div class="skillbar" data-percent="<?= $skill_level[$ky]; ?>">
                        <span class="skillbar-title" style="background: <?= $basic_color; ?>;"><?= $title; ?></span>
                        <p class="skillbar-bar" style="background: rgba(<?= $opacity_color; ?>);"></p>
                        <span class="skill-bar-percent"></span>
                    </div>
                    <!-- End Skill Bar -->

                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
            </div>

            
            <div class="col-md-4 services">
                <h3 class="agileits-title"><?= $section_service_title; ?></h3>
            <?php if(isset($service_icon) && is_array($service_icon)) : ?>
                <?php foreach($service_icon as $ky=>$icon) : ?>
                <div class="serv-wthree-row w3layouts">
                    <div class="col-xs-3 services-w3lsleft">
                        <span class="fa <?= $icon ?>" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-9 services-w3lsright">
                        <h4><?= $service_title[$ky]; ?></h4>
                        <p><?= $service_content[$ky]; ?></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <?php endforeach; ?>
            <?php endif; $db->reset(); ?>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //skills -->
</li>