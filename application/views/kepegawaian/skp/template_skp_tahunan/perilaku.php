<?php
	$penilai = $this->skp_model->get_by_id_penilai(array( 'K_PENILAI' => $K_PENILAI ));
	$array_perilaku = $this->skp_model->get_array_perilaku_pegawai(array( 'K_PEGAWAI' => $K_PEGAWAI, 'TAHUN' => $TAHUN ));
	$rate_kegiatan = $this->skp_model->get_rate_kegiatan(array( 'K_PEGAWAI' => $K_PEGAWAI, 'TAHUN' => $TAHUN ));
	$rate_perilaku = $this->skp_model->get_rate_perilaku_pegawai(array( 'K_PEGAWAI' => $K_PEGAWAI, 'TAHUN' => $TAHUN ));
	$score_presasi = $this->skp_model->get_score_prestasi(array( 'K_PEGAWAI' => $K_PEGAWAI, 'TAHUN' => $TAHUN ));
	
	// detail pegawai
	$pegawai_detail = $this->lpegawai->GetPegawaiById($penilai['K_PEGAWAI']);
	$penilai_detail = $this->lpegawai->GetPegawaiById($penilai['K_PENILAI_PEGAWAI']);
	$atasan_penilai_detail = $this->lpegawai->GetPegawaiById($penilai['K_PEJABAT']);
?>

<style>
table.border {background-color:#000;}
table.border td,th,caption{background-color:#fff}
table.border td{vertical-align: top;}
</style>

<div style="padding: 20px 0 0 40px; text-align: center; font-weight: bold; font-size: 14px;">
	<div>PENILAIAN PRESTASI KERJA BAGI PNS</div>
</div>


<div style="padding: 20px 0 0 20px;">
<table class="border" style="width: 1000px;">
	<tr>
		<td style="width: 25px; text-align: center;">NO</td>
		<td style="width: 850px; text-align: center;" colspan="3">UNSUR YANG DINILAI</td>
		<td style="width: 125px; text-align: center;">JUMLAH</td>
	</tr>
	<tr>
		<td style="text-align: center;">1</td>
		<td style="width: 650px;">Sasaran Kerja Pegawai (SKP) / Nilai Akademik</td>
		<td style="width: 150px; text-align: center;" colspan="2"><?php echo $rate_kegiatan['score']; ?> x 60 %</td>
		<td style="text-align: center;"><?php echo $rate_kegiatan['score_percent']; ?></td>
	</tr>
	<tr>
		<td style="text-align: center;" rowspan="2">2</td>
		<td style="">
			Perilaku Kerja<br />
			<?php if (count($array_perilaku) > 0) { ?>
			<?php foreach ($array_perilaku as $row) { ?>
				<div style="padding: 0 0 0 5px;">- <?php echo $row['PERILAKU']; ?></div>
			<?php } ?>
			<div>Jumlah</div>
			<div>Nilai rata-rata</div>
			<?php } ?>
		</td>
		<td style="width: 75px; text-align: center;">
			&nbsp;<br />
			<?php if (count($array_perilaku) > 0) { ?>
			<?php foreach ($array_perilaku as $row) { ?>
				<div style="padding: 0 0 0 5px;"><?php echo $row['NILAI']; ?></div>
			<?php } ?>
			<div><?php echo $rate_perilaku['total']; ?></div>
			<div><?php echo $rate_perilaku['rate']; ?></div>
			<?php } ?>
		</td>
		<td style="width: 125px; text-align: center;">
			&nbsp;<br />
			<?php if (count($array_perilaku) > 0) { ?>
			<?php foreach ($array_perilaku as $row) { ?>
				<div style="padding: 0 0 0 5px;"><?php echo $row['NILAI_TEXT']; ?></div>
			<?php } ?>
			<div><?php echo $rate_perilaku['label']; ?></div>
			<div><?php echo $rate_perilaku['label']; ?></div>
			<?php } ?>
		</td>
		<td style="text-align: center;">&nbsp;</td>
	</tr>
	<tr>
		<td>Nilai Perilaku kerja</td>
		<td colspan="2" style="text-align: center;"><?php echo $rate_perilaku['rate']; ?> x 40 %</td>
		<td style="text-align: center;"><?php echo $rate_perilaku['rate_percent']; ?></td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;</td>
		<td colspan="3">NILAI PRESTASI KERJA</td>
		<td style="text-align: center;"><?php echo $score_presasi['score']; ?><br />(<?php echo $score_presasi['label']; ?>)</td>
	</tr>
	<tr>
		<td style="text-align: center;">3</td>
		<td colspan="4">
			KEBERATAN DARI PNS YANG DINILAI (APABILA ADA)<br />
			<div style="padding: 0 0 0 10px;"><?php echo $penilai['KEBERATAN']; ?></div>
		</td>
	</tr>
	<tr>
		<td style="text-align: center;">4</td>
		<td colspan="4">
			TANGGAPAN PEJABAT PENILAI ATAS KEBERATAN<br />
			<div style="padding: 0 0 0 10px;"><?php echo $penilai['KEPUTUSAN']; ?></div>
		</td>
	</tr>
	<tr>
		<td style="text-align: center;">5</td>
		<td colspan="4">
			KEPUTUSAN ATASAN PEJABAT PENILAI ATAS KEBERATAN<br />
			<div style="padding: 0 0 0 10px;"><?php echo $penilai['TANGGAPAN']; ?></div>
		</td>
	</tr>
</table>
</div>

<div style="text-align: center; font-size: 12px; padding: 30px 0 0 0;">
	<div style="float: left; width: 50%;">
		<div>&nbsp;</div>
	</div>
	<div style="float: left; width: 50%;">
		<div>DIBUAT TANGGAL 31 DESEMBER <?php echo $penilai['TAHUN']; ?></div>
		<div>PEJABAT PENILAI,</div>
		<div style="padding: 25px 0;">&nbsp;</div>
		<div><?php echo $penilai_detail['K_PEGAWAI']; ?></div>
		<div><?php echo $penilai_detail['NAMA_GELAR']; ?></div>
	</div>
	<div style="clear: both;"></div>
	<div style="float: left; width: 50%;">
		<div>DITERIMA TANGGAL 5 JANUARI 2015</div>
		<div>PEJABAT NEGERI SIPIL YANG DINILAI,</div>
		<div style="padding: 25px 0;">&nbsp;</div>
		<div><?php echo $pegawai_detail['K_PEGAWAI']; ?></div>
		<div><?php echo $pegawai_detail['NAMA_GELAR']; ?></div>
	</div>
	<div style="float: left; width: 50%;">
		<div>&nbsp;</div>
	</div>
	<div style="clear: both;"></div>
	<div style="float: left; width: 50%;">
		<div>&nbsp;</div>
	</div>
	<div style="float: left; width: 50%;">
		<div>DITERIMA TANGGAL 7 JANUARI 2015</div>
		<div>ATASAN PEJABAT PENILAI,</div>
		<div style="padding: 25px 0;">&nbsp;</div>
		<div><?php echo $atasan_penilai_detail['K_PEGAWAI']; ?></div>
		<div><?php echo $atasan_penilai_detail['NAMA_GELAR']; ?></div>
	</div>
	<div style="clear: both;"></div>
</div>