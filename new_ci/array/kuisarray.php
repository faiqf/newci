<?php

$arr=[
	"nama"=>["thoni","andik","wawan"],
	"nun"=>["30","28.5","27"],
	"kelas"=>["A","B","C"],
	"keterangan"=> "semua siswa dinyatakan lulus"
];
// foreach ($arr["nama"] as $ => $value) {
// 	# code...
// }
// $echo "Sma negri xxx malang memiliki siswa sebagai berikut"."\n".foreach ($arr[nama] as $key => $value);
// $no=1;
// $no2=1;

// echo "Sma negri xxx malang memiliki siswa sebagai berikut:\n";
// 	foreach ($arr["nama"] as $index => $value) {
// 		echo $no++.".".$value."\n";
// 	}
// $urutan="nama\n"."kelas\n"."nilai\n";
// // echo "Hasil ujian nasional sma negri xxx malang adalah sebagai berikut;\n";
// foreach ($arr["nama"] as $key => $value){
// echo$value;
// }
// <<<<----ini yang bener menggunakan foreach
echo "Hasil ujian nasional sma negri xxx malang adalah sebagai berikut;\n";

$no=1;
foreach ($arr["nama"] as $key => $value) {
	echo $no.".Nama   :".$value."\n";
	echo "  kelas  :".$arr["kelas"][$key]."\n"; 
	echo "  Nilai  :".$arr["nun"][$key]."\n";

$no++;

}
?>