<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

    protected $fillable = [
        'name', 'image', 'titleone', 'titletwo', 'titlethree', 'descriptions', 'link1', 'link2', 'link3', 'link4', 'link5',
    ];
}
