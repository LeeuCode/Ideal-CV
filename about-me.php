<?php 

$about = $db->table('about')->get();
$additional_id = get_option($about->additional_id);
$social_media = get_option($about->social_media);
$socail_url = get_option($about->socail_url);
$additional_id = get_option($about->additional_id);
$additional_title_block = get_option($about->additional_title_block);
$additional_icon = get_option($about->additional_icon);
$additional_title = get_option($about->additional_title);
$additional_description = get_option($about->additional_description);
$background_type = get_option($about->background_type);
$bakground_value = get_option($about->bakground_value);
$background_color = get_option($about->background_color);

?>

<li class="agileits" style="<?= ($background_type == "img") ? 'background-image:url('.$bakground_value .');' : 'background-color:'.$background_color.';' ; ?>">
    <!-- banner -->
    <div class="banner">
        <div class="banner-w3lsinfo">
            <h2><?= $site_name; ?></h2>
            <div class="container">
                <div class="col-md-4 header-w3left">
                    <img src="<?= get_option($about->image); ?>" alt=""/>
                    <div class="header-imgtext-w3ls">
                        <h1><?= get_option($about->user_name); ?></h1>
                        <div class="social-wthree-icons">
                            <ul>

                            <?php if($social_media != "" && is_array($social_media )) : ?>
                                <?php foreach($social_media as $ky => $icon) : ?>
                                <li><a href="<?= $socail_url[$ky]; ?>" class="fa fa-<?= $icon; ?> icon icon-border <?= $icon; ?>"></a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 header-w3right">
                    <h3 class="agileits-title"><?= get_option($about->section_title); ?></h3>
                    <div class="profile-agileinfo">
                        <p><?= get_option($about->section_content); ?></p>

                    <?php if($additional_id != "" && is_array($additional_id)) : ?>
                        <?php foreach($additional_id as $id) : ?>

                        <div class="col-md-4 col-xs-4 profile-grids">
                            <i class="fa <?= $additional_icon[$id]; ?>"></i>
                            <h5><?= $additional_title_block[$id]; ?></h5>
                            <ul class="address">
                            <?php if(is_array($additional_title) && $additional_title != "") :  ?>
                                <?php foreach($additional_title[$id] as $_id => $additional_titl) : ?>
                                <li>
                                    <b><?= $additional_titl; ?></b> : <?= $additional_description[$id][$_id] ?>
                                </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </ul>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; $db->reset();?>

                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
</li>