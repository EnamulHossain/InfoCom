<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewConnection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',        
        'email',        
        // 'user_id',        
        'phone',        
        // 'customer_id',        
        'current_address',        
        'status',        
    ];
}
