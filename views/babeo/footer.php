<div id="footer">
	<div class="wrapper">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<h4 class="mb-3">User Interface</h4>
				<ul class="list-unstyled">
					<li><a href="<?php echo base_url('auth/login') ?>">Login</a></li>
					<li><a href="<?php echo base_url('auth/register') ?>">Daftar</a></li>
				</ul>
			</div>
			<!-- /.col-lg-3-->

		</div>
		<!-- /.row-->
		<!-- <?php
				echo "<ul class='center'>";
				$topmenu2 = $this->model_utama->view_where('menu', array('position' => 'Top', 'aktif' => 'Ya'), 'urutan', 'ASC', 0, 5);
				foreach ($topmenu2->result_array() as $row) {
					echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
				}
				?> -->
	</div>
	<!-- /.wrapper-->
</div>
<hr>
<div id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p class="text-center">Copyright 2020. All Rights reserved. Built with love by <a href="<?php echo base_url(); ?>" </a>BABEO </p> </div> </div> </div> </div>