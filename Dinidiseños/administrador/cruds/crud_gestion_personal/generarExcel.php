<?php
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=File.xls");
header("Pragma: no-cache");
header("Expires: 0");

?>

<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Nombre</strong></td>
			<td><strong>Apellido</strong></td>
			<td><strong>Tipo de documento</strong></td>
			<td><strong>Numero de documento</strong></td>
			<td><strong>Correo Electronico</strong></td>
			<td><strong>Telefono</strong></td>
		</tr>
		<?php
		require_once("../../dbConnection.php");
        $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['nombre']."</td>";
			echo "<td>".$res['apellido']."</td>";
			echo "<td>".$res['tipodocumento']."</td>";
			echo "<td>".$res['numerodocumento']."</td>";
			echo "<td>".$res['correo']."</td>";	
			echo "<td>".$res['telefono']."</td>";
		}
		?>
	</table>