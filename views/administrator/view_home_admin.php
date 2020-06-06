<a style='color:#000' href='<?php echo base_url() . $this->uri->segment(1); ?>/manajemenuser'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Users</span>
        <?php $jmld = $this->model_app->view('rb_konsumen')->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmld; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
</a>

<a style='color:#000' href='<?php echo base_url() . $this->uri->segment(1); ?>/reseller'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Reseller</span>
        <?php $jmld = $this->model_app->view('rb_reseller')->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmld; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
</a>

<section class="col-lg-7 connectedSortable">
  <?php
  $jmlpesan = $this->model_app->view_where('hubungi', array('dibaca' => 'N'))->num_rows();
  ?>
  <div class='box'>
    <div class='box-header'>
      <h3 class='box-title'>Application Buttons</h3>
    </div>
    <div class='box-body'>
      <p>Silahkan klik menu pilihan yang berada di bawah untuk mengelola konten website anda
        atau pilih ikon-ikon pada Control Panel di bawah ini : </p>
      <a href="<?php echo base_url() . $this->uri->segment(1); ?>/identitaswebsite" class='btn btn-app'><i class='fa fa-th'></i> Identitas</a>
      <a href="<?php echo base_url() . $this->uri->segment(1); ?>/menuwebsite" class='btn btn-app'><i class='fa fa-th-large'></i> Menu</a>
      <a href="<?php echo base_url() . $this->uri->segment(1); ?>/iklanatas" class='btn btn-app'><i class='fa fa-file-image-o'></i> Ads Atas</a>
      <a href="<?php echo base_url() . $this->uri->segment(1); ?>/logowebsite" class='btn btn-app'><i class='fa fa-circle-thin'></i> Logo</a>
      <a href="<?php echo base_url() . $this->uri->segment(1); ?>/templatewebsite" class='btn btn-app'><i class='fa fa-file'></i> Template</a>
      <a href="<?php echo base_url() . $this->uri->segment(1); ?>/background" class='btn btn-app'><i class='fa fa-circle'></i> Background</a>
      <a href="<?php echo base_url() . $this->uri->segment(1); ?>/alamat" class='btn btn-app'><i class='fa fa-bed'></i> Alamat</a>
      <a href="<?php echo base_url() . $this->uri->segment(1); ?>/pesanmasuk" class='btn btn-app'><span class='badge bg-yellow'><?php echo $jmlpesan; ?></span><i class='fa fa-envelope'></i> Pesan</a>
      <a href="<?php echo base_url() . $this->uri->segment(1); ?>/manajemenuser" class='btn btn-app'><i class='fa fa-users'></i> Users</a>
    </div>
  </div>
</section><!-- /.Left col -->