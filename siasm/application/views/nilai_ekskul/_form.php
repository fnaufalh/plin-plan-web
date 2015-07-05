<?php
if($is_edit){
	foreach ($nilai AS $value){
		$id				= $value['id'];
		$ekskul_id		= $value['id_siswa'];
		$siswa_id		= $value['nama_prestasi'];
		$nilai			= $value['tingkat'];
	}
	echo form_open('nilai_ekskul/edit/'.$id.'/submit');
}else{
	echo form_open('nilai_ekskul/tambah/submit');
	$id				= '';
	$ekskul_id		= '';
	$siswa_id		= '';
	$nilai			= '';
}
echo form_hidden('_id', $id);
?>
<table>
	<tr>
		<th>Nama Siswa</th>
		<td>
			<?php
				$nama_siswa = $this->siswa->list_siswa();
				$val = array();
				$val[''] = 'Pilih Nama Siswa';
				foreach ($nama_siswa AS $nama){
					$val[$nama['id']] = ucwords($nama['nama_lengkap']);
				}
				echo form_dropdown('_siswa_id', $val, $siswa_id);
			?>
		</td>
	</tr>
	<tr>
		<th>Nama Ekskul</th>
		<td>
			<?php
				$nama_ekskul = $this->ekskul->list_ekskul();
				$val = array();
				$val[''] = 'Pilih Ekskul';
				foreach ($nama_ekskul AS $nama){
					$val[$nama['id']] = ucwords($nama['nama_ekskul']);
				}
				echo form_dropdown('_ekskul_id', $val, $siswa_id);
			?>
		</td>
	</tr>
	<tr>
		<th>Nilai</th>
		<td><?php echo form_input('_nilai', $nilai);?></td>
	</tr>
	<tr>
		<td><?php echo form_submit('submit', 'Simpan');?></td>
		<td><?php echo form_reset('reset', 'Reset');?></td>
	</tr>
</table>