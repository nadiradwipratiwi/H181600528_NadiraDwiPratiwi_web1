<?php

namespace App\Http\Controllers;

use illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
	protected $table='artikel';

	protected $fillable=[
		'judul','isi','user_id','kategori_artikel_id'
	];

	protected $casts=[

	];

}