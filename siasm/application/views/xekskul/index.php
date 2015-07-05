<?php echo anchor('ekskul/tambah', 'Tambah ekskul');?>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nama Ekskul</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 1;
		if($ekskul == NULL) echo '<tr><td>0</td><td>Tidak ada data ditampilkan</td></tr>';
		else{
			foreach($ekskul AS $value){?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo ucwords($value['nama_ekskul']);?></td>
			<td><?php echo anchor('ekskul/edit/'.$value['id'], 'Edit');?></td>
			<td><?php echo anchor('ekskul/hapus/'.$value['id'], 'Hapus');?></td>
		</tr>
		<?php
				$i++;
			}
		}
		?>
	</tbody>
</table>