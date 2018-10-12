<form method="post">
	<table>
		<tr>
			<td>Nim </td>
			<td>:</td>
			<td><input type="number" name="nim"></td>
		</tr>
		<tr>
			<td>Password </td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td><a href="pendaftaran.php">Daftar Disini!</a></td>
			<td><input type="submit" name="kirim" value="Masuk"></td>
		</tr>
	</table>
</form>

<?php

if (isset($_POST['kirim'])) {
	session_start();
	include '';
	# code...
}

?>