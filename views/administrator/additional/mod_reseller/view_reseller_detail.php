      <div class='col-md-12'>
        <div class='box box-info'>
          <div class='box-header with-border'>
            <h3 class='box-title'>Detail Data Reseller</h3>
          </div>
          <div class='box-body'>

            <div class='panel-body'>
              <ul id='myTabs' class='nav nav-tabs' role='tablist'>
                <li role='presentation' class='active'><a href='#profile' id='profile-tab' role='tab' data-toggle='tab' aria-controls='profile' aria-expanded='true'>Data Konsumen </a></li>
                <li role='presentation' class=''><a href='#penjualan' role='tab' id='penjualan-tab' data-toggle='tab' aria-controls='penjualan' aria-expanded='false'>History Penjualan</a></li>
              </ul><br>

              <div id='myTabContent' class='tab-content'>
                <div role='tabpanel' class='tab-pane fade active in' id='profile' aria-labelledby='profile-tab'>
                  <div class='col-md-12'>
                    <table class='table table-condensed table-bordered'>
                      <tbody>
                        <?php
                        if (trim($rows['foto']) == '') {
                          $foto_user = 'blank.png';
                        } else {
                          $foto_user = $rows['foto'];
                        }
                        $ko = $this->db->query("SELECT * FROM rb_kota where kota_id='$rows[kota_id]'")->row_array();
                        ?>
                        <tr bgcolor='#e3e3e3'>
                          <th rowspan='13' width='110px'>
                            <center><?php echo "<img style='border:1px solid #cecece; height:85px; width:85px' src='" . base_url() . "asset/foto_user/$foto_user' class='img-circle img-thumbnail'>"; ?></center>
                          </th>
                        </tr>
                        <tr>
                          <th width='130px' scope='row'>Username</th>
                          <td><?php echo $rows['username'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Password</th>
                          <td>xxxxxxxxxxxxxxx</td>
                        </tr>
                        <tr>
                          <th scope='row'>Nama Reseller</th>
                          <td><?php echo $rows['nama_reseller'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Jenis Kelamin</th>
                          <td><?php echo $rows['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Kota</th>
                          <td><?php echo $ko['nama_kota'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Alamat Lengkap</th>
                          <td><?php echo $rows['alamat_lengkap'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>No Hp</th>
                          <td><?php echo $rows['no_telpon'] ?></td>
                        </tr>

                        <tr>
                          <th scope='row'>Alamat Email</th>
                          <td><?php echo $rows['email'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Kode Pos</th>
                          <td><?php echo $rows['kode_pos'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Keterangan</th>
                          <td><?php echo $rows['keterangan'] ?></td>
                        </tr>

                        <tr>
                          <th scope='row'>Tanggal Daftar</th>
                          <td><?php echo tgl_indo($rows['tanggal_daftar']); ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div style='clear:both'></div>
                </div>

                <div role='tabpanel' class='tab-pane fade' id='penjualan' aria-labelledby='penjualan-tab'>
                  <div class='col-md-12'>
                    <table id="example11" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th style='width:40px'>No</th>
                          <th>Kode Transaksi</th>
                          <th>Nama Konsumen</th>
                          <th>Waktu Transaksi</th>
                          <th>Status</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($penjualan->result_array() as $row) {
                          if ($row['proses'] == '0') {
                            $proses = '<i class="text-danger">Pending</i>';
                            $status = 'Proses';
                            $icon = 'star-empty';
                            $ubah = 1;
                          } elseif ($row['proses'] == '1') {
                            $proses = '<i class="text-success">Proses</i>';
                            $status = 'Pending';
                            $icon = 'star text-yellow';
                            $ubah = 0;
                          } else {
                            $proses = '<i class="text-info">Konfirmasi</i>';
                            $status = 'Proses';
                            $icon = 'star';
                            $ubah = 1;
                          }
                          $total = $this->db->query("SELECT sum((a.harga_jual*a.jumlah)-a.diskon) as total FROM `rb_penjualan_detail` a where a.id_penjualan='$row[id_penjualan]'")->row_array();
                          echo "<tr><td>$no</td>
                                        <td>$row[kode_transaksi]</td>
                                        <td><a href='" . base_url() . "administrator/detail_konsumen/$row[id_konsumen]'>$row[nama_lengkap]</a></td>
                                        <td>$row[waktu_transaksi]</td>
                                        <td>$proses</td>
                                        <td style='color:red;'>Rp " . rupiah($total['total']) . "</td>
                                    </tr>";
                          $no++;
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>