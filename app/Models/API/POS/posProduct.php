<?php

namespace App\Models\API\POS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'pro_code',
        'branchcode',
        'pro_name',
        'barcode',
        'cost',
        'unitprice',
        'discount',
        'disamount',
        'lin_code',
        'remark',
        'active',
        'qrcode',
        'inputter',
    ];
    
}
