<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesaj extends Model
{
    //
    protected $table = 'mesaje';

    protected $fillable = ['nume', 'email', 'firma', 'telefon', 'mesaj'];
    
}
