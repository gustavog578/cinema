<?php

namespace cinema;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{

    protected $table = 'idioma';

    protected $fillable = ['name', 'id_country'];

    protected $dates = ['deleted_at'];

}
