<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nama'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
} 