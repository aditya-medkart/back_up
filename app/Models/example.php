<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class example extends Model
{
    protected $table="examples";
    protected $fillable = ['name',"salt_composition","packsize","price","slug","image"];
    use HasFactory;
}
