<table class="bordered striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Username</th>
			<th>Level</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$i = 1;
		foreach ($users AS $value){
	?>
		<tr>
			<td><?php echo $i?></td>
			<td><?php echo $value['username'];?></td>
			<td><?php echo $value['level_user_id'];?></td>
			<td><?php echo anchor('users/edit/'.$value['id'], 'Edit');?></td>
			<td><?php echo anchor('users/delete/'.$value['id'], 'Hapus');?></td>
		</tr>
	<?php
			$i++;
		}
	?>
	</tbody>
</table>