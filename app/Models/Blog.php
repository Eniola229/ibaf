<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'cover_image',
        'status',
        'created_by',
    ];

    // Relationship with User (Author)
    public function author()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
