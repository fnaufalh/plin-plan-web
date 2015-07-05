<?php echo anchor ('level_user/tambah', 'Tambah Level');?>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Level</th>
			<th>Value</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$i = 1;
		if($level == NULL) echo '<tr><td>0</td></td>Tidak ada data di tampilkan</td></tr>';
		else{
			foreach ($level as $key) {
	?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $key['level'];?></td>
			<td><?php echo $key['value'];?></td>
			<td><?php echo anchor('level_user/edit/'.$key['id'], 'Edit');?></td>
			<td><?php echo anchor('level_user/delete/'.$key['id'], 'Hapus');?></td>
		</tr>
	<?php
				$i++;
			}
		}
	?>
	</tbody>
</table>