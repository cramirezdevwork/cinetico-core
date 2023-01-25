<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    use HasFactory;

    protected $table = 'classifications';
    protected $primaryKey = 'classification_id';
    public $timestamps = false;
}
