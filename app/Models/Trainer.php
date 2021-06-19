<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function stristr;

class Trainer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getPathAttribute(){
        return 'storage/trainers/'.$this->foto;
    }
}
