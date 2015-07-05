<?php
if($is_edit){
	foreach ($prestasi AS $value){
		$id				= $value['id'];
		$id_siswa		= $value['id_siswa'];
		$nama_prestasi	= $value['nama_prestasi'];
		$tingkat		= $value['tingkat'];
		$tahun			= $value['tahun'];
		$peringkat		= $value['peringkat'];
	}
	echo form_open('prestasi/edit/'.$id.'/submit');
}else{
	echo form_open('prestasi/tambah/submit');
	$id				= '';
	$id_siswa		= '';
	$nama_prestasi	= '';
	$tingkat		= '';
	$tahun			= '';
	$peringkat		= '';
}
echo form_hidden('_id', $id);
?>
<table>
	<tr>
		<th>
			<?php echo form_label('Nama Siswa', 'siswa');?>
		</th>
		<td>
			<?php echo form_input('_id_siswa', $id_siswa, 'id="siswa"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Prestasi', 'prestasi');?>
		</th>
		<td>
			<?php echo form_input('_nama_prestasi', $nama_prestasi, 'id="prestasi"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Tingkat', 'tingkat');?>
		</th>
		<td><?php echo form_input('_tingkat', $tingkat, 'id="tingkat"');?></td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Tahun', 'tahun');?>
		</th>
		<td><?php echo form_input('_tahun', $tahun, 'id="tahun"');?></td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Peringkat', 'peringkat');?>
		</th>
		<td><?php echo form_input('_peringkat', $peringkat, 'id="peringkat"');?></td>
	</tr>
	<tr>
		<td><?php echo form_submit('submit', 'Submit');?></td>
		<td><?php echo form_reset('reset', 'Reset Form');?></td>
	</tr>
</table>