<?php
if($is_edit){	
	foreach ($level_user AS $value){
		$id			= $value['id'];
		$level		= $value['level'];
		$value		= $value['value'];
	}
	echo form_open('level_user/edit/'.$id.'/submit');
}else{
	echo form_open('level_user/tambah/submit');
	$id			= '';
	$level		= '';
	$value		= '';
}
echo form_hidden('_id', $id);
?>
<table>
	<tr>
		<th>
			<?php echo form_label('Level', 'level');?>
		</th>
		<td>
			<?php echo form_input('_level', $level, 'id="level"');?>
		</td>
	</tr>
	<tr>
		<th>
			<?php echo form_label('Value', 'value')?>
		</th>
		<td>
			<?php echo form_input('_value', $value, 'id="value"')?>
		</td>
	</tr>
	
	<tr>
		<td><?php echo form_submit('submit', 'Submit');?></td>
		<td><?php echo form_reset('reset', 'Reset Form');?></td>
	</tr>
</table>