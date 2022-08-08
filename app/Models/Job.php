<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    const DRAFT = 0;
    const PUBLISH = 1;

     //Relacion uno a muchos inversa
    /* public function user() {
        return $this->belongsTo(User::class);
    } */

    public function category() {
        return $this->belongsTo(Category::class);
    }

    //Relación muchos a muchos
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    //URL AMIGABLE
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
