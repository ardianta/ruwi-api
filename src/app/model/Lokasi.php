<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Lokasi extends Eloquent {

	/**
	 * Tabel di database yang digunakan oleh model
	 * @var string
	 */
	protected $table = 'lokasi';

	/**
	 * Untuk menonaktifkan timestamp Eloquent
	 * @var boolean
	 */
	public $timestaps = false;

}
