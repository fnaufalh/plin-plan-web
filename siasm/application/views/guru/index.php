<?php echo anchor('guru/tambah', 'Tambah Guru');?>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>NIP</th>
			<th>Nama Guru</th>
			<th>Alamat</th>
			<th>Wali Kelas</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 1;
		if($guru == NULL) echo '<tr><td>0</td><td>Tidak ada data ditampilkan</td></tr>';
		else{
			foreach($guru AS $value){?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $value['nip'];?></td>
			<td><?php echo $value['nama_lengkap'];?></td>
			<td><?php echo $value['alamat'];?></td>
			<td><?php //echo $value['wali_kelas'];?></td>
			<td><?php echo anchor('guru/edit/'.$value['id'], 'Edit');?></td>
			<td><?php echo anchor('guru/hapus/'.$value['id'], 'Hapus');?></td>
		</tr>
		<?php
				$i++;
			}
		}
		?>
	</tbody>
</table>