<?php 
$username = Yii::app()->user->name;
if (ISSET($username))
{
$member = $username;
$cari="select * from transaksitbl where username ='".$member."' and status ='1' order by notransaksi desc";
$query=Yii::app()->db->createCommand($cari)->query();
foreach($query as $hasil){}
if($hasil > 0){
$faktur = $hasil['notransaksi'];
}
}else{

	header("location:index.php");
}
?>