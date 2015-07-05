<?php
if($is_edit){
	foreach ($users AS $value){
		$id				= $value['id'];
		$username		= $value['username'];
		$level_select	= $value['level_user_id'];
	}
	echo form_open('users/edit/'.$id.'/submit', 'class="col s12 black-text"');
}else{
	echo form_open('users/tambah/submit', 'class="col s12 black-text"');
	$id				= '';
	$username		= '';
	$level_select	= '';
}
echo form_hidden('_id', $id);
?>
<div class="row">
	<div class="input-field col s12">
		<?php echo form_input('_un', $username, 'id="username"');?>
		<?php echo form_label('Username', 'username');?>
	</div>
</div>
<div class="row">
	<div class="input-field col s12">
		<?php echo form_password('_pswrd', '', 'id="password"')?>
		<?php echo form_label('Password', 'password')?>
	</div>
</div>
<div class="row">
	<div class="input-field col s12">
		<?php //echo form_label('Level User');?>
		<?php
				$val = array();
				foreach($level AS $row){
					$val[$row->id] = ucwords($row->level);
				}
				echo form_dropdown('_lvl', $val, $level_select, 'id="level" class="browser-default"');
			?>
	</div>
</div>
<div class="row">
	<center>
		<?php echo form_submit('submit', 'Submit', 'class="btn waves-effect waves-light light-blue lighten-3"');?>
		<?php echo form_reset('reset', 'Reset Form', 'class="btn waves-effect waves-light light-blue lighten-3"');?>
	</center>
</div>