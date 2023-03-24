<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['email','full_name','phone','role','account_id'];

    public function account()
    {
        return $this->belongsTo(\App\Models\Account::class);
    }
}
