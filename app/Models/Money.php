<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    use HasFactory;
    protected $fillable=['user_id' , 'process_id' , 'price'];

    public function processes()
    {
        return $this->belongsTo(Process::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
