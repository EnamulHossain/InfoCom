<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reconnection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',        
        'email',        
        'reason',        
        'customer_id',        
        'current_address',        
        'previous_address',        
        'status',        
    ];
}
