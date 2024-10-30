<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\hasFactory;

class namaOrang extends Model
{
    use hasFactory, hasUuids;

    protected $fillable = ["nama"];

}
