<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table='Artikel';

    protected $fillable=[
    	'judul', 'isi', 'artikel_id', 'users_id'

    ];

    protected $casts=[
    ];

}
