<?php  
class persegipanjang{
	public $nil1 , $nil2;
	public $kel1 , $kel2;

	function set_nilaipersegipanjang($panjang , $lebar){
		$this->nil1 = $panjang;
		$this->nil2 = $lebar;
	}

	function get_nilaipersegipanjang(){
		return $this->nil1 * $this->nil2;
	}
	function set_nilaikelpersegipanjang($panjang , $lebar){
		$this->kel1 = $panjang;
		$this->kel2 = $lebar;
	}

	function get_nilaikelpersegipanjang(){
		return $this->kel1 + $this->kel2 * 2; 
	}

}
class persegi{
	public $bil1 , $bil2;
	public $kel1;

	function set_nilaipersegi($sisi1 , $sisi2){
		$this->bil1 = $sisi1;
		$this->bil2 = $sisi2;
	}

	function get_nilaipersegi(){
		return $this->bil1 * $this->bil2 * $this->bil1 * $this->bil2; 
	}
	function set_nilaikelpersegi($sisi){
		$this->kel = $sisi;
	}

	function get_nilaikelpersegi(){
		return $this->kel * 4; 
	}
}
class segitiga{
	public $bil1 , $bil2;
	public $al;

	function set_nilaisegitiga($alas , $tinggi){
		$this->nilal = $alas;
		$this->nilting = $tinggi;
	}

	function get_nilaisegitiga(){
		return $this->nilal * $this->nilting / 2; 
	}
	function set_nilaikelsegitiga($alas){
		$this->al = $alas;
	}

	function get_nilaikelsegitiga(){
		return $this->al * 3; 
	}
}


$persegi = new persegi;
$persegi->set_nilaipersegi(2,2);
$persegi->set_nilaikelpersegi(2,2);
echo "Luas Persegi dari panjang sisi 2 cm  : " .$persegi->get_nilaipersegi().' cm'.'<br>';
echo "keliling Persegi dari panjang sisi 2 cm  : " .$persegi->get_nilaikelpersegi().' cm'.'<br>'.'<br>';
echo "---------------------------------------------------------------------".'<br>';

$persegipanjang = new persegipanjang;
$persegipanjang->set_nilaipersegipanjang(4,5);
$persegipanjang->set_nilaikelpersegipanjang(4,5);
echo "Luas Persegi Panjang dari panjang 4cm dan lebar 5cm  : ".$persegipanjang->get_nilaipersegipanjang().' cm'.'<br>';
echo "Keliling Persegi Panjang dari panjang 4cm dan lebar 5cm  : ".$persegipanjang->get_nilaikelpersegipanjang().' cm'.'<br>'.'<br>';
echo "---------------------------------------------------------------------".'<br>';

$segitiga = new segitiga;
$segitiga->set_nilaisegitiga(10,10);
$segitiga->set_nilaikelsegitiga(10,10);
echo "Luas segitiga dari alas 10cm dan tinggi 10cm  : " .$segitiga->get_nilaisegitiga().' cm'.'<br>';
echo "keliling segitiga dari alas 10cm dan tinggi 10cm  : " .$segitiga->get_nilaikelsegitiga().' cm'.'<br>';


?>