<table>
	<thead>
		<tr>
			<th>#</th>
			<th>ID</th>
			<th>Nama</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$i = 1;
		foreach ($mata_pelajaran AS $value){
	?>
		<tr>
			<td><?php echo $i?></td>
			<td><?php echo $value['id'];?></td>
			<td><?php echo $value['mata_pelajaran'];?></td>
			<td><?php echo anchor('mata_pelajaran/edit/'.$value['id'], 'Edit');?></td>
			<td><?php echo anchor('mata_pelajaran/delete/'.$value['id'], 'Hapus');?></td>
		</tr>
	<?php
			$i++;
		}
	?>
	</tbody>
</table>