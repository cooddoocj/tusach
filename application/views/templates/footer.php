<!-- footer -->
<div class="text-muted">
	<div class="py-5">
        <?php $this->load->view('templates/navbar_pages', $this->data); ?>
		<p>Được thiết kế và xây dựng với tất cả tình yêu của nhóm <b>Mọt Sách 714</b></p>
		<p>Framework Codeigniter và Bootstrap</p>
	</div>
</div>

</div><!-- /.container -->
<script src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('public/js/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('public/js/lazyload.min.js'); ?>"></script>
<script src="<?php echo base_url('public/js/site.min.js'); ?>"></script>
<script>
    lazyload();
</script>
</body>
</html>