<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'package_name',        
        'regular_price',        
        'offer_price',        
        'bandwith',        
        'feature_1',        
        'feature_2',        
        'order',        
        'status',        
    ];
}
