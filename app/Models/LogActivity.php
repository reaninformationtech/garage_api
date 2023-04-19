<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class LogActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject', 'url', 'method', 'ip', 'agent', 'user_id'
    ];

    public function write_log($sql= [])
    {
        $log = new LogActivity();
        foreach ($sql as $key => $value){
            if($key=='subject'){
                $log->subject=$value;
            }else
            if($key=='url'){
                $log->url=$value;
            }else 
            if($key=='method'){
                $log->method=$value;
            }
            if($key=='ip'){
                $log->ip=$value;
            }else
            if($key=='agent'){
                $log->agent=$value;
            }
        }
        $log->save();
    }




}
