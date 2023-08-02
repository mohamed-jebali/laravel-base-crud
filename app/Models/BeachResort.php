<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BeachResort extends Model
{

    protected $table = 'beach_resorts';

    protected $fillable = [
        'name','location','num_umbrellas','num_sunbeds','umbrella_price','opening_date','closing_date','has_beach_volley','has_soccer_field'
    ];
    use HasFactory;
    use SoftDeletes;
}
