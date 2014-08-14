<?php 
$username = Yii::app()->user->name;
if (ISSET($username))
{
include "faktur_selesai.php";
$user = Yii::app()->user->name;
$query = "select sum(subtotal) as total from transaksirincitbl inner join barangtbl on barangtbl.id = transaksirincitbl.id inner join transaksitbl on transaksitbl.notransaksi = transaksirincitbl.notransaksi WHERE transaksirincitbl.username='".$user."' AND transaksitbl.status ='1' and transaksirincitbl.notransaksi ='".$faktur."' order by transaksitbl.notransaksi desc";
	$hasil = Yii::app()->db->createCommand($query)->query();
	foreach($hasil as $data);
	if ($hasil > 0) 
	{
		echo "".number_format($data['total'], 0, ',','.').",-";
	}
}else{
header("location:index.php");
}
?>