<?php 

class Mahasiswa {

	public string $nim;
	public string $nama;
	public static string $agama = "Islam";
	public static string $jeniskelamin = "Laki-laki";

	public function setNim(string $nim) {
		return$nim;
	}

	public function setNama(string $b) {
		return $this->nama = $b;
	}

	public function getNama() {
		return $this->nama;
	}

	public static function getAgama() {
		return self::$agama;
	}


	public static function getjeniskelamin() {
		return self::$jeniskelamin;
	}
}

$mhsw = new Mahasiswa();
echo $mhsw->setNim('16021000');
$mhsw->setNama('Faiza');
echo $mhsw->getNama();
echo $mhsw->getAgama();
echo $mhsw->getjeniskelamin();