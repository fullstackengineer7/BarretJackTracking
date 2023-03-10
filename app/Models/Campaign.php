<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'phone_number',
        'forward_to',
        'category',
        'record',
        'record_msg',
        'create_leads',
        'email_noti',
        'whisper_msg',
        'ad_cost',
        'created_at'
    ];



 
}
