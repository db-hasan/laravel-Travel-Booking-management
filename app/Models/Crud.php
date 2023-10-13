<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Crud;

class Crud extends Model
{
    use HasFactory;
    protected $primaryKey='crud_id';
}
