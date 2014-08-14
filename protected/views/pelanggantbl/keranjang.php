<?php
$username = Yii::app()->user->name;
$user = $username;
$query = "select * from transaksirincitbl inner join barangtbl on barangtbl.id = transaksirincitbl.id inner join transaksitbl on transaksitbl.notransaksi = transaksirincitbl.notransaksi where transaksirincitbl.username='".$user."' AND transaksitbl.status ='0'";
$hasil = Yii::app()->db->createCommand($query)->query();

?>
<table border=0px cellpadding='10' cellspacing="0" bgcolor="" bordercolor="" align="left">
<tr>
<?php 
if ($hasil > 0) {
$i = 1;
foreach ($hasil as $data)
{
	
	
?>
<form  method="post" >
<td align="center"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/Produk/<?php echo $data['gambar'] ?>" width="80" height="80" border="0" ></td>

<td align="left" width="180" class="cart_description"><?php echo $data['nama']; ?></td>
<?php $hargarp = $data['harga'] ?>
<td align="right" width="150" class="cart_price"><?php echo "Rp " .number_format($hargarp, 0, ',', '.').",-" ?></td>

<td align="center" width="40"><a href="http://localhost/tokoonline/index.php?r=pelanggantbl/hapusdata&id=<?php echo $data['id']; ?>"><img width="15" src="<?php echo Yii::app()->theme->baseUrl;?>/images/home/Hapus.png" height="15" border="0" alt="Ubah jumlah beli"></a></td>

<td align="center" width="40"><a href="http://localhost/tokoonline/index.php?r=pelanggantbl/ubahdata&id=<?php echo $data['id']; ?>"><input name="ubah_transaksi" type="image" src="<?php echo Yii::app()->theme->baseUrl;?>/images/home/Ubah.png" width="15" border="0">

<td align ="right" ><input type='hidden' name='id."$i"' value=<?php echo $data['id']; ?> ><input type='text' name='jumlah".$i"' value="<?php echo $data['jumlah']; ?>" size="1" width="10" maxlength="3" onkeypress="return isNumberKey(event)" /></td>

<td align="right" width="320" class=\"cart_price\"><?php echo "Rp ".number_format($data['subtotal'], 0, ',', '.').",-" ?></td></tr>


<?php
	$i++;
	}
	$no = $i-1;
	}
	?>


</tr>

<tr>
<td align="left" bgcolor="#CCCCCC" ><a href="http://localhost/tokoonline/index.php?r=pelanggantbl/check"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/home/TCheckout.jpg"\ title="Check Out" border="0" width="60" height="30"></a></td>
<td align="right" bgcolor="#666666" class="teks">Grand Total (Rp) : </td>
<td align="right" bgcolor="" class="teks"> </td>
<td align="right" bgcolor="" class="teks"> </td>
<td align="right" bgcolor="" class="teks"> </td>
<td align="right" bgcolor="" class="teks"> </td>
<td align="right" bgcolor="#E8EED7" class="teks"><?php include("keranjangtotal.php");?></td>
</table>

<input type="text" name="n" value="<?php echo $no ?>" />
</form>