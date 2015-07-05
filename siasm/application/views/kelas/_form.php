<?php
if($is_edit){
	foreach ($kelas AS $value){
		$id			= $value['id'];
		$guru_id	= $value['guru_id'];
		$kelas		= $value['kelas'];
		$ruangan	= $value['ruangan'];
	}
	echo form_open('kelas/edit/'.$id.'/submit');
}else{
	echo form_open('kelas/tambah/submit');
	$id			= '';
	$guru_id	= '';
	$kelas		= '';
	$ruangan	= '';
}
echo form_hidden('_id', $id);
?>
<table>
	<tr>
		<th>
			<?php echo form_label('Kelas', 'kelas');?>
		</th>
		<td>
			<?php echo form_input('_kelas', $kelas, 'id="kelas"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Ruangan', 'ruangan');?>
		</th>
		<td>
			<?php echo form_input('_ruangan', $ruangan, 'id="ruangan"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Wali Kelas', 'wali');?>
		</th>
		<td>
			<?php
				$val = array();
				$val[''] = 'Pilih Wali Kelas';
				foreach($wali AS $row){
					$val[$row['id']] = ucwords($row['nama_lengkap']);
				}
				echo form_dropdown('_guru_id', $val, $guru_id, 'id="wali"');
			?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_submit('submit', 'Submit');?></td>
		<td><?php echo form_reset('reset', 'Reset Form');?></td>
	</tr>
</table>