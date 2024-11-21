<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    use HasFactory;

    protected $fillable = [

        'title',
        'description',
        'status',
        'category_id',
        'operator_id',

    ];

    // A ticket belongs to one operator
    public function operator()
    {

        return $this->belongsTo(Operator::class);
    }

    // A ticket belongs to one category
    public function category()
    {

        return $this->belongsTo(Category::class);
    }
}
