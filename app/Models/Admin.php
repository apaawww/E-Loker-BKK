<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $guarded = [];

    protected $fillable = [
        'nama', 'email', 'password', 'kontak', 'foto',
    ];

    public function perusahaan() {
        return $this->hasMany(Perusahaan::class, 'id_admin', 'id_admin');
    }
}
