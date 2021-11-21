<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function getWorkers(){
        return $this->hasMany(Worker::class, 'company', 'id');
    }

    use HasFactory;
}
