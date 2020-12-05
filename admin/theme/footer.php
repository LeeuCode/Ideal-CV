

    </div>
    <!-- /.container -->
  </div>

<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="container">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017-<?= date('Y'); ?> <a href="https://adminlte.io">LeeuCode</a>.</strong> All rights
    reserved.
  </div>
  <!-- /.container -->
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= Enqueue('/admin/js/jquery.min.js'); ?>"></script>

<!-- Bootstrap 3.3.7 -->
<script src="<?= Enqueue('/admin/js/bootstrap.min.js'); ?>"></script>
<!-- -->
<script src="<?= Enqueue('/admin/js/bootstrap-colorpicker.min.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?= Enqueue('/admin/js/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?= Enqueue('/admin/js/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= Enqueue('/admin/js/adminlte.min.js'); ?>"></script>
<!-- Script Core -->
<script src="<?= Enqueue('/admin/js/script.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->

<script type="text/javascript">
 var home_url = "<?= home_url(); ?>";
 var lang = <?= json_encode($lang); ?>;
</script>


</body>
</html>
