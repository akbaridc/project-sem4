<?php
echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Data</h3>
                </div>
              <div class='box-body'>";
$attributes = array('class' => 'form-horizontal', 'role' => 'form');
echo form_open_multipart($this->uri->segment(1) . '/edit_manajemenuser', $attributes);
if ($rows['foto'] == '') {
  $foto = 'users.gif';
} else {
  $foto = $rows['foto'];
}
echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[username]'>
                    <tr><th width='120px' scope='row'>Username</th>   <td><input type='text' class='form-control' name='a' value='$rows[username]' readonly='on'></td></tr>
                    <tr><th scope='row'>Password</th>                 <td><input type='password' class='form-control' name='b' onkeyup=\"nospaces(this)\">kosongkan jika tidak ubah password</td></tr>
                    <tr><th scope='row'>Nama Lengkap</th>             <td><input type='text' class='form-control' name='c' value='$rows[nama_lengkap]'></td></tr>
                    <tr><th scope='row'>Alamat Email</th>                    <td><input type='email' class='form-control' name='d' value='$rows[email]'></td></tr>
                    <tr><th scope='row'>Tanggal Daftar</th>                    <td><input type='date' class='form-control' name='g' value='$rows[tanggal_daftar]'></td></tr>
                    <tr><th scope='row'>Ganti Foto</th>                     <td><input type='file' class='form-control' name='f'><hr style='margin:5px'>";
if ($rows['foto'] != '') {
  echo "<i style='color:red'>Foto Saat ini : </i><a target='_BLANK' href='" . base_url() . "asset/foto_user/$rows[foto]'>$rows[foto]</a>";
}
echo "</td></tr></td></tr>";

echo "<tr><th scope='row'>Jenis Kelamin</th>                   <td>";
if ($rows['jenis_kelamin'] == 'Laki-laki') {
  echo "<input type='radio' name='e' value='Laki - laki' checked> Laki - laki &nbsp; <input type='radio' name='e' value='Perempuan'> Perempuan";
} else {
  echo "<input type='radio' name='e' value='Laki - laki'> Laki - laki &nbsp; <input type='radio' name='e' value='Perempuan'  checked> Perempuan";
}
echo "</div></td></tr>";


echo "</tbody>
                  </table></div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='" . base_url() . $this->uri->segment(1) . "/manajemenuser'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
echo form_close();
