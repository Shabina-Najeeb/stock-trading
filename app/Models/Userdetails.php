<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetails extends Model
{
    use HasFactory;
    protected $table="userdetails";
    protected $fillable=[
        'useraccounnt',
        'name',
        'login_pword',
        'transaction_pword',
       
    ];
}
