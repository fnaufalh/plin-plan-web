<?php echo form_open('dewa/add');?>
<table>
	<tr>
		<th><?php echo form_label('Username', 'username');?></th>
		<td><?php echo form_input('username', '', 'id="username"');?></td>
	</tr>
	<tr>
		<th><?php echo form_label('Password', 'password');?></th>
		<td><?php echo form_password('password', '', 'id="password"');?></td>
	</tr>
	<tr>
		<th><?php echo form_label('Nama', 'nama');?></th>
		<td><?php echo form_input('nama', '', 'id="nama"');?></td>
	</tr>
	<tr>
		<th><?php echo form_label('Level User', 'level');?></th>
		<td><?php echo form_input('level_user', '', 'id="level"');?></td>
	</tr>
	<tr>
		<th><?php echo form_submit('submit', 'Simpan');?></th>
		<td><?php echo form_reset('reset', 'Reset Form');?></td>
	</tr>
</table>
<?php echo form_close();?>