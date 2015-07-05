<?php
if($is_edit){
	foreach ($ekskul AS $value){
		$id				= $value['id'];
		$nama_ekskul	= $value['nama_ekskul'];
	}
	echo form_open('ekskul/edit/'.$id.'/submit');
}else{
	echo form_open('ekskul/tambah/submit');
	$id				= '';
	$nama_ekskul	= '';
}
echo form_hidden('_id', $id);
?>
<table>
	<tr>
		<th>
			<?php echo form_label('Nama Ekskul', 'nama');?>
		</th>
		<td>
			<?php echo form_input('_nama', $nama_ekskul, 'id="nama"');?>
		</td>
	</tr>
	<tr>
	<tr>
		<td><?php echo form_submit('submit', 'Submit');?></td>
		<td><?php echo form_reset('reset', 'Reset Form');?></td>
	</tr>
</table>