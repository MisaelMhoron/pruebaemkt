<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //
    protected $fillable = ['idusuario', 'nombre','apellido' ,'edad','email'];
    ////////////////////////////////////////////////////
 
   protected $table = 'usuario';
    protected $primaryKey = 'idusuario';
    public $timestamps = false;
}
