<!-- box -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa  fa-send"></i>
            <?= $lang['contact me']; ?>
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
                <th style="width:150px;"><i class="fa fa-text-height"></i> <?= $lang['section title']; ?></th>
                <td>
                    <div class="form-group col-md-12">
                        <input name="section_title" type="text" class="form-control" placeholder="<?= $lang['type the title here']; ?>" value="<?= $section_title; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th style="width:150px;"><i class="fa fa-phone"></i> <?= $lang['phone']; ?></th>
                <td>
                    <div class="form-group col-md-12">
                        <input name="phone" type="text" class="form-control" placeholder="+9876543210" value="<?= $phone; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th><i class="fa fa-map-marker"></i> Google Map Embed</th>
                <td>
                    <div class="form-group col-md-12">
                        <input name="google_map" type="text" class="form-control" placeholder="Type Google Iframe Map  Here" value="<?= htmlspecialchars($google_map); ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th><i class="fa  fa-flag-checkered"></i> <?= $lang['country']; ?></th>
                <td>
                    <div class="form-group col-md-12">
                        <input name="country" type="text" class="form-control" placeholder="Example:- Canada" value="<?= $country; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th><i class="fa fa-university"></i> <?= $lang['city']; ?></th>
                <td>
                    <div class="form-group col-md-12">
                        <input name="city" type="text" class="form-control" placeholder="example:- North Sydney" value="<?= $city; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <th><i class="fa fa-street-view"></i> <?= $lang['street']; ?></th>
                <td>
                    <div class="form-group col-md-12">
                        <input name="street" type="text" class="form-control" placeholder="Example :- 756 global Place" value="<?= $street; ?>">
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->