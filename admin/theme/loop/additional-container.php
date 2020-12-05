<?php 

$additional_id = get_option($about->additional_id);
$additional_title_block = get_option($about->additional_title_block);
$additional_icon = get_option($about->additional_icon);
$additional_title = get_option($about->additional_title);
$additional_description = get_option($about->additional_description);
?>

<?php if($additional_id != "" && is_array($additional_id)) : ?>

<?php foreach($additional_id as $id) : ?>

<div class="col-md-4">
    <div class="additional-container">
        <center>
            <button type="button" class="btn btn-app fi-icon" data-toggle="modal" data-target="#additional-modal-<?= $id; ?>">
                <i class="fa <?= $additional_icon[$id]; ?>"></i> <?= $lang['icon']; ?> 
            </button> 
            <p class="additional-title"><?= $additional_title_block[$id]; ?></p>
            <i class="fa fa-trash block-remove"></i> 
        </center>
    </div>
    <div class="modal fade" id="additional-modal-<?= $id; ?>" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true">×</i></button> 
                    <h4 class="modal-title"> <i class="fa fa-chain"></i> <?= $lang['edit additional information']; ?> </h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="additional_id[]" value="<?= $id; ?>"> 
                    <h4><?= $lang['choose icon']; ?></h4>
                    <button type="button" class="btn btn-app choose-icon" data-toggle="modal" data-target="#modal-fonts-<?= $id; ?>"> 
                        <span class="fa <?= $additional_icon[$id]; ?> ico"></span>
                        <?= $lang['icon'] ?>
                     </button>
                    <h4><?= $lang['title']; ?></h4>
                    <input name="additional_title_block[<?= $id; ?>]" type="text" class="form-control title-input" placeholder="Type Title Here" value="<?= $additional_title_block[$id]; ?>"> 
                        <button data-info-num="<?= $id; ?>" data-tb-id="table<?= $id; ?>" type="button" class="btn btn-info add-new-info ">
                            <i class="fa fa-plus-circle"></i> <?= $lang['add information']; ?>
                        </button> 
                    <table class="table table-striped">
                        <tbody id="table<?= $id; ?>" class="table-content">
                            <tr>
                                <th><?= $lang['title']; ?></th>
                                <th><?= $lang['description']; ?></th>
                                <th style="width: 40px"><?= $lang['remove']; ?></th>
                            </tr>
                        <?php if(is_array($additional_title) && $additional_title != "") :  ?>
                            <?php foreach($additional_title[$id] as $_id => $additional_titl) : ?>
                                <tr>
                                    <td>
                                        <input name="additional_title[<?= $id ?>][]" type="text" class="form-control" placeholder="Type Title Here" value="<?= $additional_titl; ?>">     
                                    </td>
                                    <td>
                                        <input name="additional_description[<?= $id ?>][]" type="text" class="form-control" placeholder="Type Description Here" value="<?= $additional_description[$id][$_id] ?>" > 
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-danger additional-rm">
                                            <i class="fa fa-trash-o"></i> 
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><?= $lang['close']; ?></button>
                    <button type="button" class="btn btn-primary save"><?= $lang['save changes']; ?></button>
                </div>
            </div>
        </div>
    </div>
    <input name="additional_icon[<?= $id; ?>]" type="hidden" class="icon-service" value="<?= $additional_icon[$id]; ?>">
    <div class="modal fade" id="modal-fonts-<?= $id; ?>" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true">×</i></button> 
                    <h4 class="modal-title"> <i class="fa fa-fonticons"></i> <?= $lang['choose icon']; ?> </h4>
                </div>
                <div class="modal-body modal-fonts"> 
                
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php endif; ?>