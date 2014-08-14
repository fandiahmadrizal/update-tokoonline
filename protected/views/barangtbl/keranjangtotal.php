<?php

if (ISSET($_SESSION['userlogin']))
{
	$user = $_SESSION['userlogin'];
	$query = "select sum(subtotal) as total from transaksirincitbl inner join barangtbl on barangtbl.id = transaksirincitbl.id inner join transaksitbl on transaksitbl.notransaksi = transaksirincitbl.notransaksi WHERE transaksirincitbl.username='".$user."' AND transaksitbl.status ='0'";
	$hasil = Yii::app()->db->createCommand($query)->query();
	foreach($hasil as $data);
	if ($hasil > 0) 
	{
		echo "".number_format($data['total'], 0, ',','.').",-";
	}
}

?>