<?php 
	if($is_edit == TRUE){
		foreach ($master_pembayaran as $data) {
			$id = $data['id'];
			$nama_pembayaran = $data['nama_pembayaran'];
			$harga = $data['harga'];
		}
		echo form_open('master_pembayaran/update/'.$id);
	}
	else{
	echo form_open('master_pembayaran/tambahdata');
	$id = '';
	$nama_pembayaran = '';
	$harga = '';
}
	echo form_hidden('id',$id);
?>
<table>
	<tr>
		<td>Nama Pembayaran</td>
		<td>:</td>
		<td><?php echo form_input('nama_pembayaran',$nama_pembayaran) ?></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td>:</td>
		<td><?php echo form_input('harga',$harga) ?></td>
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
				<td>Nama Pembayaran</td>
				<td>Harga</td>
				<td>Action</td>
				<td>Action</td>
			</tr>
			<?php
			$no = 1;
			foreach($hasil as $data){
			?>
			<tr>
				<td><?php echo $no++ ;?></td>
				<td><?php echo $data->nama_pembayaran; ?></td>
				<td><?php echo $data->harga; ?></td>
				<td><?php echo anchor('master_pembayaran/deletedata/'.$data->id,'hapus') ?></td>
				<td><?php echo anchor('master_pembayaran/update/'.$data->id,'edit') ?></td>
			</tr>
			<?php
			}
			?>
		</table>
		<?php
	}
	?>