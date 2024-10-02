<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    use HasFactory;

        protected $table = 'demos';

        protected $fillable = [
        'name',
        'email',
    ];
}
