<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable = [
        'nome', 'numDocumento', 'status','dataUltDocumento','dataStatus'
    ];
}
