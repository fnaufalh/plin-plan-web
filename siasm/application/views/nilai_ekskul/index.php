<?php echo anchor('nilai_ekskul/tambah', 'Tambah Nilai Ekskul');?>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nama Siswa</th>
			<th>Nama Ekskul</th>
			<th>Nilai</th>
<!-- 			<th colspan="2">Aksi</th> -->
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 1;
		if($nilai == NULL) echo '<tr><td>0</td><td>Tidak ada data ditampilkan</td></tr>';
		else{
			foreach($nilai AS $value){?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $value['siswa'];?></td>
			<td><?php echo $value['ekskul'];?></td>
			<td><?php echo $value['nilai'];?></td>
			<td><?php //echo anchor('prestasi/edit/'.$value['id'], 'Edit');?></td>
			<td><?php //echo anchor('prestasi/hapus/'.$value['id'], 'Hapus');?></td>
		</tr>
		<?php
				$i++;
			}
		}
		?>
	</tbody>
</table>
<?php echo $this->db->last_query();?>