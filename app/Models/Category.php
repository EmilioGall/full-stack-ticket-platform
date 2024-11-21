<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;

    protected $fillable = ['name'];

    // A category can have multiple tickets
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
