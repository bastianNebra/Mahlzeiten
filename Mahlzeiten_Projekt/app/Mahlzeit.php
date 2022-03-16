<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Mahlzeit extends Model
{
    //
    use Notifiable;

    protected $fillable = [
        'date_tage', 'name',
    ];
}
