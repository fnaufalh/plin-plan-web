<table>
	<tr>
		<th>No</th>
		<th>Username</th>
		<th>Nama</th>
		<th>Level</th>
	</tr>
<?php
$i = 1;
foreach ($data as $row){
	echo '<tr>';
		echo '<td>'.$i.'</td>';
		echo '<td>'.$row['username'].'</td>';
		echo '<td>'.$row['nama'].'</td>';
		echo '<td>'.$row['level_user'].'</td>';
	echo '</tr>';
	$i++;
}
?>
</table>