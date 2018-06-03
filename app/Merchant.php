<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $casts = [
        'id' => 'string',
    ];
    protected $primaryKey = "id";

    protected $fillable = [
        "name", "sub_domain"
    ];
}
