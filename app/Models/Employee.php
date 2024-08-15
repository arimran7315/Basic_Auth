<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = ['firstname', 'lastname', 'email', 'phone', 'cid'];

    public function getcompany() 
{
    return $this->belongsTo(Company::class, 'cid', 'id');
}
}
