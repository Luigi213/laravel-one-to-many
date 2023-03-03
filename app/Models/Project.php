<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['titolo', 'descrizione'];

    public function type(){
        return belongsTo(Type::class);
    }
}
