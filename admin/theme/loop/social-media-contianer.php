<?php if($social_media != "" && is_array($social_media )) : ?>
    <?php foreach($social_media as $ky => $icon) : ?>
        <tr>
            <td>
                <select name="social_media[]" class="form-control social-select">
                        <?php foreach(icon() as $fa_ico => $ico) : ?>
                            <option value="<?= $fa_ico; ?>" <?= ($icon == $fa_ico) ? 'selected' : '' ; ?> ><?= $ico; ?></option>
                        <?php endforeach; ?>
                </select>
            </td>
            <td><input name="socail_url[]" type="text" class="form-control" placeholder="Type the URL here" value="<?= $socail_url[$ky] ?>"></td>
            <td><button type="button" class="btn btn-block btn-danger social-remove"><i class="fa fa-trash-o"></i></button></td>
        </tr>
    <?php endforeach; ?>
<?php endif; ?>