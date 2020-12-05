<?php
 
if($_error == true){
    redirect('/install/');
}

$title ="Install | step three ";
require get_install_directory().'header.php';

?>
<body>

    <section>
        <nav>
            <ol class="cd-multi-steps text-center ">
                <li class="visited" ><a href="#"><i class="fa fa-info-circle" ></i> <?= $lang['system requirement']; ?></a></li>
                <li class="visited" ><em><i class="fa fa-database" ></i> <?= $lang['database installation']; ?></em></li>
                <li class="current" ><em><i class="fa fa-cogs" ></i> <?= $lang['site configuration']; ?></em></li>
                <li ><em><i class="fa fa-handshake-o" ></i> <?= $lang['finish']; ?></em></li>
            </ol>
        </nav>
    </section>
   
    <div class="container">
        <h2><i class="fa fa-cogs"></i> <?= $lang['site configuration']; ?> </h2>

        <form action="<?= home_url() ?>/install/?url=save&data=step-three"  method="post" >
            <table>
                <tr>
                    <th><?= $lang['site name']; ?></th>
                    <td>
                        <input name="site_name" class="installer-site" type="text" placeholder="<?= $lang['type the site name here']; ?>">
                    </td>
                </tr>
                <tr>
                    <th><?= $lang['user name']; ?></th>
                    <td>
                        <input name="admin_name" class="installer-site" type="text" placeholder="<?= $lang['type the user name here']; ?>">
                    </td>
                </tr>
                <tr>
                    <th><?= $lang['password']; ?></th>
                    <td>
                        <input name="admin_password" type="password" class="installer-site" type="text" placeholder="**********" >
                    </td>
                </tr>
                <tr>
                    <th><?= $lang['confirm password']; ?></th>
                    <td>
                        <input name="confirm_password" type="password" class="installer-site" type="text" placeholder="**********" >
                    </td>
                </tr>
                <tr style="display:none">
                    <th><?= $lang['language']; ?></th>
                    <td>
                        <select name="language" class="installer-site select-language">
                        <?php foreach(languages() as $lang_code => $lang_name) : ?>
                            <option value="<?= $lang_code; ?>" <?= ($language == $lang_code) ? 'selected' : ''; ?> ><?= $lang_name; ?></option>
                        <?php endforeach; ?>
                        </select>
                    </td>
                </tr>                
                <tr>
                    <th><?= $lang['site tags']; ?></th>
                    <td>
                        <input name="site_tags" class="installer-site" type="text" placeholder="<?= $lang['type the site tags here']; ?>" >
                    </td>
                </tr>
                <tr>
                    <th><?= $lang['site description']; ?></th>
                    <td>
                        <textarea name="site_description" class="textarea" type="text" placeholder="<?= $lang['type the site description here']; ?>" ></textarea>
                    </td>
                </tr>
            </table>
            <button name="submit" type="submit" class="nextstep" ><i class="fa fa-arrow-circle-right"></i> <?= $lang['next step']; ?></button>
        </form>
    </div>

    <script src="<?= Enqueue('/admin/js/modernizr.js'); ?>"></script> <!-- Modernizr -->
</body>
</html>