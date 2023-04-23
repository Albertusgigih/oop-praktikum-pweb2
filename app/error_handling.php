<?php 

class error_handling {

	public int $umur = 22;
	public function getUmur() {
		try{
			if($this->umur < 25) {
				throw new Exception('Anda masih muda');
			}
		} catch (Exception $e) {
			die ("Maaf error, " . $e->getMessage());
		}
	}
}

$mhsw = new Mahasiswa();
$mhsw->getUmur();