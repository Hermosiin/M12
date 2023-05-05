<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['name', 'filepath', 'duration', 'artist_id'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}