<?php
echo "<div class='paragraph-row'>
	<div class='column6'>
		<a target='_BLANK' href='$ik1[url]'><img src='" . base_url() . "asset/foto_iklanatas/$ik1[gambar]' style='width:100%'></a>
	</div>
	<div class='column4' style='margin-left: 1%'>
		<div class='paragraph-row'>
			<div class='column12'>
				<a target='_BLANK' href='$ik2[url]'><img src='" . base_url() . "asset/foto_iklanatas/$ik2[gambar]' style='width:100%; height: 190px;'></a>
			</div>
		</div>
		<div class='paragraph-row'>
			<div class='column6' style='margin-top:10px'>
				<a target='_BLANK' href='$ik3[url]'><img src='" . base_url() . "asset/foto_iklanatas/$ik3[gambar]' style='width:100%; height: 180px;'></a>
			</div>
			<div class='column6' style='margin-top:10px'>
				<a target='_BLANK' href='$ik4[url]'><img src='" . base_url() . "asset/foto_iklanatas/$ik4[gambar]' style='width:100%; height: 180px;'></a>
			</div>
		</div>
	</div>
	<div class='column2' style='margin-left: 1%'>
		<a target='_BLANK' href='$ik5[url]'><img src='" . base_url() . "asset/foto_iklanatas/$ik5[gambar]' style='width:100%; min-height: 380px;'></a>
	</div>
</div>
<br>
<hr>";


foreach ($kategori->result_array() as $row) {
	$ex = explode(';', $row['gambar']);
	if (trim($ex[0]) == '') {
		$foto_produk = 'no.png';
	} else {
		$foto_produk = $ex[0];
	}
	if (strlen($row['nama_produk']) > 38) {
		$judul = substr($row['nama_produk'], 0, 38) . ',..';
	} else {
		$judul = $row['nama_produk'];
	}
	$jual = $this->model_reseller->jual_reseller($row['id_reseller'], $row['id_produk'])->row_array();
	$beli = $this->model_reseller->beli_reseller($row['id_reseller'], $row['id_produk'])->row_array();
	if ($beli['beli'] - $jual['jual'] <= 0) {
		$stok = '<b style="color:#000">Stok Habis</b>';
	} else {
		$stok = "<span style='color:red'>Stok " . ($beli['beli'] - $jual['jual']) . " $row[satuan]</span>";
	}

	$disk = $this->model_app->view_where("rb_produk_diskon", array('id_produk' => $row['id_produk']))->row_array();
	$diskon = rupiah(($disk['diskon'] / $row['harga']) * 100, 0) . "%";
	if ($diskon > 0) {
		$diskon_persen = "<div class='top-right'>$diskon</div>";
	} else {
		$diskon_persen = '';
	}
	if ($diskon >= 1) {
		$harga =  "<del style='color:#8a8a8a'><small>Rp " . rupiah($row['harga']) . "</small></del> Rp " . rupiah($row['harga'] - $disk['diskon']);
	} else {
		$harga =  "Rp " . rupiah($row['harga']);
	}
	echo "<div class='produk col-md-2 col-xs-6'>
	              <center>
	                
	                <div style='height:140px; overflow:hidden'>
	                  <a title='$row[nama_produk]' href='" . base_url() . "produk/detail/$row[produk_seo]'><img style=' min-height:140px; width:100%' src='" . base_url() . "asset/foto_produk/$foto_produk'></a>
	                  		$diskon_persen
	                </div>
	                <h4 class='produk-title'><a title='$row[nama_produk]' href='" . base_url() . "produk/detail/$row[produk_seo]'>$judul</a></h4>
	                <span class='harga'>$harga</span><br>
	                <i>$stok</i>
	                <br><small>$row[nama_kota]</small>";

	echo "</center>
	          </div>";
}
echo "</div>";

echo "<div style='clear:both'><br></div>";
