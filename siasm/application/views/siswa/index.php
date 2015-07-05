<?php echo anchor('siswa/tambah', 'Tambah Siswa');?>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>NIS</th>
			<th>Nama Lengkap</th>
			<th>Tahun Masuk</th>
			<th>Kelas</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 1;
		if($siswa == NULL) echo '<tr><td>0</td><td>Tidak ada data ditampilkan</td></tr>';
		else{
			foreach($siswa AS $value){?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $value['nis'];?></td>
			<td><?php echo $value['nama_lengkap'];?></td>
			<td><?php echo $value['tahun_masuk'];?></td>
			<td><?php echo ($this->kelas->get_nama_kelas($value['kelas_id'])[0]['kelas']);?></td>
			<td><?php echo anchor('siswa/edit/'.$value['id'], 'Edit');?></td>
			<td><?php echo anchor('siswa/delete/'.$value['id'], 'Hapus');?></td>
		</tr>
		<?php
				$i++;
			}
		}
		?>
	</tbody>
</table>