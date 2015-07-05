<?php 
	if($is_edit == TRUE){
		foreach ($ekskul as $data) {
			$id = $data['id'];
			$nama_ekskul = $data['nama_ekskul'];
		}
		echo form_open('ekskul/update/'.$id.'/submit');
	}
	else{
	echo form_open('ekskul/tambahdata');
	$id = '';
	$nama_ekskul = '';
}
echo form_hidden('id', $id);
?>
<table>
	<tr>
		<td>Nama Ekskul</td>
		<td>:</td>
		<td><?php echo form_input('nama_ekskul',$nama_ekskul) ?></td>
	</tr>
	<tr>
		<td><?php echo form_submit('submit','Simpan','id="submit"') ?></td>
	</tr>
</table>
<?php echo form_close(); ?>
<br>
<br>
<br>
<?php
	if(empty($hasil)){
		echo "Tidak ada data";
	}
	else{
		?>
		<table border='1'>
			<tr>
				<td>No</td>
				<td>Nama Ekskul</td>
				<td>Action</td>
				<td>Action</td>
			</tr>
			<?php
			$no = 1;
			foreach($hasil as $data){
			?>
			<tr>
				<td><?php echo $no++ ;?></td>
				<td><?php echo $data->nama_ekskul; ?></td>
				<td><?php echo anchor('ekskul/deletedata/'.$data->id,'hapus') ?></td>
				<td><?php echo anchor('ekskul/update/'.$data->id,'edit') ?></td>
			</tr>
			<?php
			}
			?>
		</table>
		<?php
	}
	?>