<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Alumni extends Authenticatable
{
    use Notifiable, HasFactory;
    protected $table = 'alumni';
    protected $primaryKey = 'nisn';
    protected $guarded = [];
    protected $fillable = [
        'nisn', 'nama', 'ttl', 'jk', 'thn_angkatan', 'ktp', 'ijazah', 'transkip_n', 'skck', 'kartu_kuning', 'sks', 'alamat', 'kontak', 'foto', 'password',
    ];
    
    public function perusahaan() {
        return $this->hasMany(Perusahaan::class, 'nisn', 'nisn');
    }

}
