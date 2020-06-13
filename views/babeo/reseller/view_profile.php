<?php
echo "<p class='sidebar-title text-danger produk-title'> Data Profile Anda 
        <a class='btn btn-success btn-xs pull-right' href='" . base_url() . "members/edit_profile'><span class='glyphicon glyphicon-edit'></span> Edit Profile</a></p>";
echo $this->session->flashdata('message');
$this->session->unset_userdata('message');
echo "<p>Berikut Informasi Data Profile anda.<br> 
           Pastikan data-data dibawah ini sudah benar, agar tidak terjadi kesalahan saat transaksi.</p>";
echo "<table class='table table-hover table-condensed'>
                        <thead>
                          <tr><td width='170px'><b>Username</b></td> <td><b style='color:red'>$row[username]</b></td></tr>
                          <tr><td><b>Nama Lengkap</b></td>           <td>$row[nama_lengkap]</td></tr>
                          <tr><td><b>Email</b></td>                  <td>$row[email]</td></tr>
                          <tr><td><b>Jenis Kelamin</b></td>          <td>$row[jenis_kelamin]</td></tr>
                          <tr><td><b>Tanggal Lahir</b></td>          <td>" . tgl_indo($row['tanggal_lahir']) . "</td></tr>
                          <tr><td><b>Tempat Lahir</b></td>           <td>$row[tempat_lahir]</td></tr>
                          <tr><td><b>Alamat</b></td>                 <td>$row[alamat_lengkap]</td></tr>
                          
                          <tr><td><b>Propinsi</b></td>               <td>" . $row['propinsi'] . "</td></tr>
                          <tr><td><b>Kota</b></td>                   <td>" . $row['kota'] . "</td></tr>
                          <tr><td><b>Kecamatan</b></td>              <td>$row[kecamatan]</td></tr>
                          <tr><td><b>No Hp</b></td>                  <td>$row[no_hp]</td></tr>
                        </thead>
                    </table>";
