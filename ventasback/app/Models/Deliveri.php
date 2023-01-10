<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliveri extends Model
{
    use HasFactory;
    protected $fillable=[
    'nombre'
];
protected $hidden = ["created_at", "updated_at"];
}