<?php 

$title ="Install | step one ";
require get_install_directory().'header.php'; 


?>
<body>

    <section>
        <nav>
            <ol class="cd-multi-steps text-center ">
                <li class="current"><em><i class="fa fa-info-circle"></i> <?= $lang['system requirement']; ?></em></li>
                <li ><em><i class="fa fa-database"></i> <?= $lang['database installation']; ?></em></li>
                <li ><em><i class="fa fa-cogs" ></i> <?= $lang['site configuration']; ?></em></li>
                <li ><em><i class="fa fa-handshake-o" ></i> <?= $lang['finish']; ?></em></li>
            </ol>
        </nav>
    </section>
   
    <div class="container">
        <h2><i class="fa fa-info-circle"></i> <?= $lang['system requirement']; ?> </h2>

        <p><i class="fa <?= $php_version; ?>"></i> <?= $lang['PHP version must be greater than 5.3.2 +']; ?> </p>
        <p><i class="fa <?= $exists_pdo; ?>"></i> <?= $lang['required extension PDO library']; ?> </p>
        <p><i class="fa <?= $exists_gd; ?>"></i> <?= $lang['required extension GD library']; ?> </p>
        <p><i class="fa <?= $source_folder ?>"></i> <?= $lang['config.php is writable']; ?> </p>
        <p><i class="fa <?= $source_folder ?>"></i> <?= $lang['/public/source/ is writable']; ?> </p>
        <p><i class="fa <?= $thumbs_folder; ?>"></i> <?= $lang['/public/thumbs/ is writable']; ?> </p>
        <p><i class="fa <?= $is_session; ?>"></i> <?= $lang['session_start() is available']; ?> </p>
        <p><i class="fa fa-check-circle"></i> <?= $lang['json_decode() is available']; ?> </p>
        <p><i class="fa fa-check-circle"></i> <?= $lang['json_encode() is available']; ?> </p>
        <?php if($_error == false) : ?>
        <a href="<?= home_url() ?>/install/?url=step-two" class="nextstep" ><i class="fa fa-arrow-circle-right"></i> <?= $lang['next step']; ?></a>
        <?php endif; ?>
    </div>

    <script src="<?= Enqueue('/admin/js/modernizr.js'); ?>"></script> <!-- Modernizr -->
    
</body>
</html>