<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    const DRAFT = 0;
    const PUBLISH = 1;

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
