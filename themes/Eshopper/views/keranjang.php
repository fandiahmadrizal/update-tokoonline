<?php
$user = $_SESSION['userlogin'];
$query = "select * from transaksirincitbl inner join barangtbl on barangtbl.id = transaksirincitbl.id inner join transaksitbl on transaksitbl.notransaksi = transaksirincitbl.notransaksi where transaksirincitbl.username='".$user."' AND transaksitbl.status ='0'";
$hasil = Yii::app()->db->createCommand($query)->query();
if ($hasil > 0) {
$i = 1;
foreach ($hasil as $data)
{
echo "<tr>
<td align=\"center\"><img src=\"<?php echo Yii::app()->theme->baseUrl;?>/images/Produk/$data[gambar]\" width=\"25\" height=\"25\" border=\"0\"/></td>

<td align=\"left\" width=\"150\" class=\"cart_description\">".$data['nama']."</td>

<td align=\"right\" class=\"cart_price\">".number_format($data['harga'], 0, ',', '.').",-</td>

<td align=\"center\"><a href=\"hapus_transaksi.php?id=$data[id]\"><img width=\"15\" src=\"Gambar/Hapus.png\" height=\"15\" border=\"0\" alt=\"Ubah jumlah beli\"></a></td>

<td align=\"center\"><a href=\"ubah_transaksi.php?id=$data[id]\"><input name=\"ubah_transaksi\" type=\"image\" src=\"Gambar/Ubah.png\" width=\"15\" border=\"0\"\>

<td align =\"right\" \><input type='hidden' name='id".$i."' value='".$data['id']."' /><input type='text' name='jumlah".$i."' value='".$data['jumlah']."' size=\"1\" width=\"10\" maxlength=\"3\" onkeypress=\"return isNumberKey(event)\" /></td>

<td align=\"right\" class=\"cart_price\">".number_format($data['subtotal'], 0, ',', '.').",-</td></tr>";
$i++;
}
$no = $i-1;
}
?>

<?php
  $back = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
?>

</table>
<hr/>

<table width ="100%" border='0' cellspacing='1' cellpadding='1' align ="center">
<tr>
<td align="left" bgcolor="#CCCCCC" width="10%"><a href="<?=$back?>"><img src=Gambar\TBack.jpg /></a></td>
<td align="left" bgcolor="#CCCCCC" width="10%"><a href=checkout.php><img src="Gambar/TCheckout.jpg"\ title="Check Out" border="0" width=\"50\" height=\"30\"></a></td>
<td align="right" bgcolor="#666666" width="50%" class="teks">Grand Total (Rp) : </td>
<td align="right" bgcolor="#E8EED7" width="30%" class="teks"><?php include("keranjangtotal.php");?></td>
</table>

<input type="hidden" name="n" value="<?php echo $no ?>" />

</form>