<?php echo anchor('kelas/tambah', 'Tambah Kelas');?>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Kelas</th>
			<th>Ruangan</th>
			<th>Wali Kelas</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 1;
		if($kelas == NULL) echo '<tr><td>0</td><td>Tidak ada data ditampilkan</td></tr>';
		else{
			foreach($kelas AS $value){?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $value['kelas'];?></td>
			<td><?php echo $value['ruangan'];?></td>
			<td><?php echo $value['guru_id'];?></td>
			<td><?php echo anchor('kelas/edit/'.$value['id'], 'Edit');?></td>
			<td><?php echo anchor('kelas/hapus/'.$value['id'], 'Hapus');?></td>
		</tr>
		<?php
				$i++;
			}
		}
		?>
	</tbody>
</table>