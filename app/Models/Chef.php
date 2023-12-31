<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chef extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'task',
        'facebook',
        'twitter',
        'instagram',
    ];

    public function getImageUrlAttribute()
    {
        if ($this->image && Storage::disk('public')->exists($this->image)) {
            return Storage::url($this->image);
        } else {
            return 'https://tailwindcss.com/favicons/apple-touch-icon.png';
        }
    }
}