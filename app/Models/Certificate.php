<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Certificate extends Model
{
    use HasFactory;
    protected $fillable = ['certificate_number', 'owner_name', 'access_code'];
}