<?php
	$id=$_GET['id'];
	$nama=$_GET['nama'];
	$sandi=$_GET['sandi'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata</title>
</head>
<body>
	<b>PERUBAHAN BIODATA MAHASISWA</b>
	<form action="aksi_update.php" method="POST">
	<table border="1">
		<tr>
		</tr>
			<td>
				NIK
			</td>
			<td>
				<INPUT NAME="tria_ade_pertiwi" TYPE="TEXT" PLACEHOLDER="nik" value="<?=$nik;?>" READONLY>
			</td>
		</tr>
		<tr>
			<td>
				NAMA
			</td>
			<td>
				<INPUT NAME="nama" TYPE="TEXT" PLACEHOLDER="nama" value="<?=$nama;?>">
			</td>
		</tr>
		<tr>
			<td>
				PASSWORD
			</td>
			<td>
				<INPUT NAME="katasandi" TYPE="text" PLACEHOLDER="katasandi" value="<?=$sandi;?>">
			</td>
		</tr>
		<tr>
			
			<td>
				<INPUT  TYPE="submit" value="Rubah Data">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>