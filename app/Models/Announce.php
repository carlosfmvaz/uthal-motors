<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{

    public function category(){
        return $this->hasOne(Category::class);
    }

    protected $table = 'announces';
    use HasFactory;
}
