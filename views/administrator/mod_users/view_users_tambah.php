<?php
echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Data User</h3>
                </div>
              <div class='box-body'>";
$attributes = array('class' => 'form-horizontal', 'role' => 'form');
echo form_open_multipart($this->uri->segment(1) . '/tambah_manajemenuser', $attributes);
echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <tr><th width='120px' scope='row'>Username</th>   <td><input type='text' class='form-control' name='a' onkeyup=\"nospaces(this)\" required></td></tr>
                    <tr><th scope='row'>Password</th>                 <td><input type='password' class='form-control' name='b' onkeyup=\"nospaces(this)\" required></td></tr>
                    <tr><th scope='row'>Nama Lengkap</th>             <td><input type='text' class='form-control' name='c' required></td></tr>
                    <tr><th scope='row'>Alamat Email</th>             <td><input type='email' class='form-control' name='d' required></td></tr>
                    <tr><th scope='row'>Jenis Kelamin</th>            <td><input type='radio' name='e' value='Laki - laki' checked> Laki - laki &nbsp; <input type='radio' name='e' value='Perempuan'> Perempuan
                    <tr><th scope='row'>Upload Foto</th>              <td><input type='file' class='form-control' name='f'></td></tr>
                    <tr><th scope='row'>Tanggal Daftar</th>           <td><input type='date' class='form-control' name='g'></td></tr>";

echo "</div></td></tr>
                  </tbody>
                  </table></div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='" . base_url() . $this->uri->segment(1) . "/manajemenuser'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
echo form_close();
