<?php

	class berat{
		public $berat1 = "30 kg";
		public $berat2 = "40 kg";
		public $berat3 = "50 kg";

		
	}

	class kemampuan{
		public $kmp1 = "terbang";
		public $kmp2 = "lari";
		public $kmp3 = "berenang";

	}

	class senjata {
		public $snj1 = "machine gun";
		public $snj2 = "water gun";
		public $snj3 = "flame thrower";
	}

$rob1 = new berat;
$rob2 = new kemampuan;
$rob3 = new senjata;

echo "Robot banteng = ".$rob1->berat3."<br>"."berkemampuan ".$rob2->kmp2."<br>"."bersenjata".$rob3->snj1;
echo "robot burung = ".$rob1->berat1."<br>"."berkemampuan ".$rob2->kmp1."<br>"."bersenjata".$rob3->snj3;
echo "robot hiu = ".$rob1->berat2."<br>"."berkemampuan ".$rob2->kmp1."<br>"."bersenjata ".$rob3->snj3;
