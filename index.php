<fieldset>
<legend>Menghitung Luas Lingkaran</legend>

<form action="" method="post">
<table>
	<tr>   
 		<td>Masukkan Jari-jari</td>
		<td>:</td>
        <td><input type="text" name="jari" /></td>
	</tr>

	<tr>
   		 <td><input type="submit" value="hitung" name="hitung"/></td>
	</tr>
</table>
</form>

<?php
if (isset($_POST['hitung'])){
	$jari = $_POST['jari'];
	
	function luas ($jari) 
		{
	$luas = $jari * $jari * 22 / 7  ;
	echo ("Jadi Luas Lingkaran adalah : ".$luas);
			}
	luas($jari);
	}
?>
</fieldset>
