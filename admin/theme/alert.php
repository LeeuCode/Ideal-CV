<?php if(isset($_SESSION['Success'])) : ?>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i><?= $_SESSION['Success']; unset($_SESSION['Success']); ?></h4>
</div>
<?php elseif(isset($_SESSION['Error'])) : ?>

<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i><?= $_SESSION['Error']; unset($_SESSION['Error']); ?></h4>
</div>

<?php endif; ?>