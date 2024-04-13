<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'name',
        'thumbnail',
        'desc',
        'link_web',
        'github',
    ];
}
