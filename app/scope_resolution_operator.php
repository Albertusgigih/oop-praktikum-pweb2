<?php 

class scope_resolution_operator {
	public static function setNama(string $nama) {
		return $nama;
	}
}

echo Mahasiswa::setNama('Faiza');