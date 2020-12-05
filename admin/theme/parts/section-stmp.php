<!-- box -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa fa-envelope"></i>
            <?= $lang['E-mail configuration']; ?>
        </h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="<?= $lang['collapse']; ?>">
            <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <!-- box-body -->
    <div class="box-body">
        <table class="table table-bordered" >
            <tr>
                <th><i class="fa fa-envelope"></i> <?= $lang['email']; ?></th>
                <td>
                    <div class="form-group col-md-12">
                        <input name="email" type="text" class="form-control" placeholder="Example@gmail.com" value="<?= $email; ?>">
                        <i><?= $lang['E-mail that is used to receive messages from visitors']; ?></i>
                    </div>
                </td>
            </tr>
            <tr>
                <th style="width:150px;"><i class="fa fa-ioxhost"></i> <?= $lang['SMTP Host']; ?></th>
                <td>
                    <div class="form-group col-md-12">
                        <input name="smtp_host" type="text" class="form-control" placeholder="<?= $lang['type the SMTP host here']; ?>" value="<?= $smtp_host; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th style="width:150px;"><i class="fa fa-gg"></i> <?= $lang['SMTP Username']; ?></th>
                <td>
                    <div class="form-group col-md-12">
                        <input name="smtp_username" type="text" class="form-control" placeholder="<?= $lang['type the SMTP username here']; ?>" value="<?= $smtp_username; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th><i class="fa fa-expeditedssl"></i> <?= $lang['SMTP Password']; ?></th>
                <td>
                    <div class="form-group col-md-12">
                        <input name="smtp_password" type="text" class="form-control" placeholder="<?= $lang['type the SMTP password here']; ?>" value="<?= $smtp_password; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th><i class="fa fa-puzzle-piece"></i> <?= $lang['SMTP Secure']; ?></th>
                <td>
                    <div class="form-group col-md-12">
                        <input name="smtp_secure" type="text" class="form-control" placeholder="<?= $lang['type the SMTP Secure here']; ?>" value="<?= $smtp_secure; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th><i class="fa  fa-plug"></i> <?= $lang['SMTP Port']; ?></th>
                <td>
                    <div class="form-group col-md-12">
                        <input name="smtp_port" type="text" class="form-control" placeholder="<?= $lang['type the SMTP port here']; ?>" value="<?= $smtp_port; ?>">
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->