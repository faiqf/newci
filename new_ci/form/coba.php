<?php
$nilai1=10;
$nilai2=7;

function kurang($nilai1,$nilai2)
{
	$hkurang=$nilai1+$nilai2;
	return $hkurang;
}

function tampil($hkurang)
{
	echo $hkurang;
}
$hkurang=kurang(nilai1,nilai2);
tampil($hkurang);

?>