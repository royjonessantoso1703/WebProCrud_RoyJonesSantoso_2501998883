<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnggota extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = ['nama', 'jeniskelamin', 'noanggota', 'created_at'];
}
