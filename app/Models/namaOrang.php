<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class namaOrang extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ["nama"];

}
