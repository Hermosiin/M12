<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use CrudTrait;
    protected $fillable = [
        'name', 'description', 'filepath', 'stripe', 'start_date', 'end_date', 'artist_id', 'location', 'price', 'capacity'
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

}