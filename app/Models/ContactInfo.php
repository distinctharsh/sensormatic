<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phone',
        'email',
        'map_embed',
        'whatsapp',
        'facebook',
        'twitter',
        'linkedin',
    ];
}
