<?php echo anchor('prestasi/tambah', 'Tambah Prestasi');?>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nama Siswa</th>
			<th>Prestasi</th>
			<th>Tingkat</th>
			<th>Tahun</th>
			<th>Peringkat</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 1;
		if($prestasi == NULL) echo '<tr><td>0</td><td>Tidak ada data ditampilkan</td></tr>';
		else{
			foreach($prestasi AS $value){?>
		<tr>
			<td><?php echo $i;?></td>
			<td>
			<?php
				$data = $this->m_siswa->get_nama($value['id_siswa']);
				echo $data[0]['nama_lengkap'];
			?></td>
			<td><?php echo $value['nama_prestasi'];?></td>
			<td><?php echo $value['tingkat'];?></td>
			<td><?php echo $value['tahun'];?></td>
			<td><?php echo $value['peringkat'];?></td>
			<td><?php echo anchor('prestasi/edit/'.$value['id'], 'Edit');?></td>
			<td><?php echo anchor('prestasi/hapus/'.$value['id'], 'Hapus');?></td>
		</tr>
		<?php
				$i++;
			}
		}
		?>
	</tbody>
</table>