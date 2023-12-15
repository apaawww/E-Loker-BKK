<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaan';
    protected $primaryKey = 'id_perusahaan';
    protected $guarded = [];
    protected $fillable = [
        'nisn',
        'id_admin',
        'n_perusahaan',
        'kontak',
        'alamat',
        'deskripsi',
        'status',
        'foto',
    ];
    protected $casts = [
        'status' => 'string',
    ];

    public function alumni() {
        return $this->belongsTo(Alumni::class, 'nisn', 'nisn');
    }
    public function admin(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
}
