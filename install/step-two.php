<?php 

if($_error == true){
    redirect('/install/');
}

$title ="Install | step two ";
require get_install_directory().'header.php'; 

?>
<body>
    <section>
        <nav>
            <ol class="cd-multi-steps text-center ">
                <li class="visited"><a href="#"><i class="fa fa-info-circle"></i> <?= $lang['system requirement']; ?></a></li>
                <li class="current"><em><i class="fa fa-database"></i> <?= $lang['database installation']; ?></em></li>
                <li ><em><i class="fa fa-cogs" ></i> <?= $lang['site configuration']; ?></em></li>
                <li ><em><i class="fa fa-handshake-o" ></i> <?= $lang['finish']; ?></em></li>
            </ol>
        </nav>
    </section>
   
    <div class="container">
        <h2><i class="fa fa-database"></i> <?= $lang['database installation']; ?> </h2>
        <!-- ?url=save&data=step-two -->
        <form action="<?= home_url() ?>/install/?url=save&data=step-two"  method="POST" >
            <table>
                <tr>
                    <th><?= $lang['database name']; ?></th>
                    <td>
                        <input name="db_name" class="installer-db" type="text">
                        <span class="desc"><?= $lang['The name fo the database']; ?> </span>
                    </td>
                </tr>
                <tr>
                    <th><?= $lang['user name']; ?></th>
                    <td>
                        <input name="db_user" class="installer-db" type="text">
                        <span class="desc"><?= $lang['Your MySQL username']; ?></span>
                    </td>
                </tr>
                <tr>
                    <th><?= $lang['password']; ?></th>
                    <td>
                        <input name="db_pass" class="installer-db" type="text">
                        <span class="desc"><?= $lang['Your MySQL password']; ?></span>
                    </td>
                </tr>
                <tr>
                    <th><?= $lang['database host']; ?></th>
                    <td>
                        <input name="db_host" class="installer-db" type="text" value="localhost" >
                        <span class="desc"><?= $lang['You should be able to get this info from your web host , if Localhost dos not work .']; ?></span>
                    </td>
                </tr>
            </table>
            <button type="submit" name="submit" class="nextstep" ><i class="fa fa-arrow-circle-right"></i> <?= $lang['next step']; ?></button>
        </form>
    </div>

    <script src="<?= Enqueue('/admin/js/modernizr.js'); ?>"></script> <!-- Modernizr -->
</body>
</html>