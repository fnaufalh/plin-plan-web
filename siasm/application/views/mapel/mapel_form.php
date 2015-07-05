<?php
if($is_edit){
	foreach ($mata_pelajaran AS $value){
		$id				= $value['id'];
		$mata_pelajaran	= $value['mata_pelajaran'];
	}
	echo form_open('mata_pelajaran/edit/'.$id.'/submit');
}else{
	echo form_open('mata_pelajaran/tambah/submit');
	$id				= '';
	$mata_pelajaran	= '';
}
echo form_hidden('_id', $id);
?>
<table>
	<tr>
		<th>
			<?php echo form_label('Id', 'id');?>
		</th>
		<td>
			<?php echo form_input('_id', $id, 'id="id"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Mata Pelajaran', 'mata_pelajaran')?>
		</th>
		<td>
			<?php echo form_input('_mata_pelajaran', $mata_pelajaran, 'id="mata_pelajaran"')?>
		</td>
	</tr>
	
		
	<tr>
		<td><?php echo form_submit('submit', 'Submit');?></td>
		<td><?php echo form_reset('reset', 'Reset Form');?></td>
	</tr>
</table>