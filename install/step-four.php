<?php 

if($_error == true){
    redirect('/install/');
}

$title ="Install | step four ";

require get_install_directory().'header.php'; 

?>
<body>

    <section>
        <nav>
            <ol class="cd-multi-steps text-center ">
                <li class="visited" ><a href="#"><i class="fa fa-info-circle" ></i> <?= $lang['system requirement']; ?></a></li>
                <li class="visited" ><a href="#"><i class="fa fa-database" ></i> <?= $lang['database installation']; ?></a></li>
                <li class="visited" ><a href="#"><i class="fa fa-cogs" ></i> <?= $lang['site configuration']; ?></a></li>
                <li class="current" ><em><i class="fa fa-handshake-o" ></i> <?= $lang['finish']; ?></em></li>
            </ol>
        </nav>
    </section>
   
    <div class="container">
        <h2><i class="fa fa-handshake-o"></i> <?= $lang['finish']; ?> </h2>
        <p><?= $lang['Congratulations you have completed the steps, click the button below to direct you to the login page']; ?></p>
        <a href="<?= home_url().'/admin/?url=login'; ?>" class="nextstep" ><i class="fa fa-sign-in"></i> <?= $lang['sign in']; ?></a>
        
    </div>

    <script src="<?= Enqueue('/admin/js/modernizr.js'); ?>"></script> <!-- Modernizr -->
</body>
</html>