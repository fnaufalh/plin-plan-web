<?php
if($is_edit){
	foreach ($guru AS $value){
		$id				= $value['id'];
		$nip			= $value['nip'];
		$nama_lengkap	= $value['nama_lengkap'];
		$alamat			= $value['alamat'];
		$kota_sekarang	= $value['kota_sekarang'];
		$kota_lahir		= $value['kota_lahir'];
		$tanggal_lahir	= $value['tanggal_lahir'];
	}
	echo form_open('guru/edit/'.$id.'/submit');
}else{
	echo form_open('guru/tambah/submit');
	$id				= '';
	$nip			= '';
	$nama_lengkap	= '';
	$alamat			= '';
	$kota_sekarang	= '';
	$kota_lahir		= '';
	$tanggal_lahir	= '';
}
echo form_hidden('_id', $id);
?>
<table>
	<tr>
		<th>
			<?php echo form_label('NIP', 'nip');?>
		</th>
		<td>
			<?php echo form_input('_nip', $nip, 'id="nip"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Nama Lengkap', 'nama');?>
		</th>
		<td>
			<?php echo form_input('_nama', $nama_lengkap, 'id="nama"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Alamat', 'alamat');?>
		</th>
		<td>
			<?php echo form_input('_alamat', $alamat, 'id="alamat"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Kota Sekarang', 'ks');?>
		</th>
		<td>
			<?php echo form_input('_kota_sekarang', $kota_sekarang, 'id="ks"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Kota Lahir', 'kl');?>
		</th>
		<td>
			<?php echo form_input('_kota_lahir', $kota_lahir, 'id="kl"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Tanggal Lahir', 'tl');?>
		</th>
		<td>
			<?php echo form_input('_tanggal_lahir', $tanggal_lahir, 'id="tl"');?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_submit('submit', 'Submit');?></td>
		<td><?php echo form_reset('reset', 'Reset Form');?></td>
	</tr>
</table>