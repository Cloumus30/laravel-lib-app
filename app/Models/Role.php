<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    public $timestamps = false;

    protected $guarded = ['nama_role'];

    public function user(){
        return $this->hasMany(User::class,'role_id');
    }
}
