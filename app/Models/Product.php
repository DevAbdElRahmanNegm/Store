<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =['name' , 'color' , 'price' , 'desc' , 'image'];

    public function processes()
    {
        return $this->hasMany(Process::class);
    }
}
