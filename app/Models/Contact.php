<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

  protected $table = "contacts";
    
    protected $fillable = [
        'title',
        'address', 
        'address_one',
        'open_time',
        'facebook_url',
        'twitter_url',
        'inatagram_url',
        'youtube_url',
        'admin_mail_address',
        'image',
    ];
}