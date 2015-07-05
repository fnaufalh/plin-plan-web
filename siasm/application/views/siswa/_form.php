<?php
if($is_edit){
	foreach ($siswa AS $value){
		$id				= $value['id'];
		$nis			= $value['nis'];
		$nama_lengkap	= $value['nama_lengkap'];
		$alamat			= $value['alamat'];
		$kota_sekarang	= $value['kota_sekarang'];
		$kota_lahir		= $value['kota_lahir'];
		$tanggal_lahir	= $value['tanggal_lahir'];
		$tahun_masuk	= $value['tahun_masuk'];
		$kelas_id		= $value['kelas_id'];
	}
	echo form_open('siswa/edit/'.$id.'/submit');
}else{
	echo form_open('siswa/tambah/submit');
	$id				= '';
	$nis			= '';
	$nama_lengkap	= '';
	$alamat			= '';
	$kota_sekarang	= '';
	$kota_lahir		= '';
	$tanggal_lahir	= '';
	$tahun_masuk	= '';
	$kelas_id		= '';
}
echo form_hidden('_id', $id);
?>
<table>
	<tr>
		<th>
			<?php echo form_label('NIS', 'nis');?>
		</th>
		<td>
			<?php echo form_input('_nis', $nis, 'id="nis"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Nama Lengkap', 'nama');?>
		</th>
		<td>
			<?php echo form_input('_nama_lengkap', $nama_lengkap, 'id="nama"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Alamat', 'almt');?>
		</th>
		<td>
			<?php echo form_input('_alamat', $alamat, 'id="almt"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Kota Sekarang', 'skrt');?>
		</th>
		<td>
			<?php echo form_input('_kota_sekarang', $kota_sekarang, 'id="skrg"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Kota Lahir', 'lhr');?>
		</th>
		<td>
			<?php echo form_input('_kota_lahir', $kota_lahir, 'id="lhr"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Tanggal Lahir', 'tgl');?>
		</th>
		<td>
			<?php echo form_input('_tanggal_lahir', $tanggal_lahir, 'id="tgl"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Tahun Masuk', 'th');?>
		</th>
		<td>
			<?php echo form_input('_tahun_masuk', $tahun_masuk, 'id="th"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Kelas', 'kelas');?>
		</th>
		<td>
			<?php
				$val = array();
				$val[''] = 'Pilih Kelas';
				foreach($kelas AS $row){
					$val[$row['id']] = ucwords($row['kelas']);
				}
				echo form_dropdown('_kelas_id', $val, $kelas_id, 'id="wali"');
			?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_submit('submit', 'Submit');?></td>
		<td><?php echo form_reset('reset', 'Reset Form');?></td>
	</tr>
</table>