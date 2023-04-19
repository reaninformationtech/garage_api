<?php

namespace App\Models\API\POS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posStock extends Model
{
    use HasFactory;
    protected $fillable = [
        'stc_code',
        'branchcode',
        'stc_name',
        'comments',
        'active',
        'inputter',
    ];
}
